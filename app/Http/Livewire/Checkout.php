<?php

namespace App\Http\Livewire;

use App\Http\Facades\LicenseplateFacade;
use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Http;
use Cache;
use Exception;

class Checkout extends Component
{
    public $subscriptions = [];
    public $location = '';
    public $type = '';
    public $selected;
    public $step = 1;
    public $name;
    public $email;
    public $phone_number;
    public $home = false;
    public $postcode;
    public $house_number;
    public $loading_message = '';
    public $licenseplates;
    public $voucher;
    public bool $voucherApplied = false;
    public float $voucherAmount = 0;
    public bool $applyVoucherFailed = false;
    public $licenseplate;
    public $tos = false;

    public $listeners = [
        'checkout' => 'checkout'
    ];

    public $rules = [
        'selected' => 'required'
    ];

    public function toggleTop()
    {
        $this->tos = ! $this->tos;
    }

    public function mount()
    {
        $this->licenseplates = collect();
    }

    public function checkout($data)
    {
        switch ($data[0]) {
            case 'p':
                $this->type = 'particulier';
                $this->subscriptions = Cache::remember('particulier_products', 3600, function () {
                    return Product::orderBy('price', 'desc')->whereInShop(true)->whereZakelijk(false)->get();
                });
                break;
            case 'z':
                $this->type = 'zakelijk';
                $this->subscriptions = Cache::remember('zakelijk_products', 3600, function () {
                    return Product::orderBy('price', 'desc')->whereInShop(true)->whereZakelijk(true)->get();
                });
        }

        // get the selected product
        $this->selected = $this->subscriptions->where('_id', $data[1])->first();

        $this->dispatchBrowserEvent('checkout');
    }

    public function selected($id)
    {
        $this->selected = $this->subscriptions->where('_id', $id)->first();
    }

    public function next()
    {
        $this->validate($this->validationRules());

        if ($this->step !== 2) {
            $this->step++;
            $this->dispatchBrowserEvent('setstep', ['step' => $this->step]);
        } else {
            $this->initCheckout();
        }
    }

    public function removePlate($key)
    {
        $this->licenseplates->forget($key);
    }

    public function addLicensePlate()
    {
        $this->validate(['licenseplate' => 'required']);
        $licenseplate = strtoupper(str_replace([' ', '-'], '', $this->licenseplate));
        if (LicenseplateFacade::isLicenseplateTaxi($licenseplate)) {
            $this->addError('licenseplate', 'Dit is een taxi kenteken, deze kan niet gebruikt worden.');
            return;
        }
        if ($this->selected && (! $this->selected->zakelijk) && LicenseplateFacade::isCompanyCar($licenseplate)) {
            $this->addError('licenseplate', 'Dit is een bedrijfsauto kenteken, deze kan niet gebruikt worden voor particulieren abonnementen.');
            return;
        }
        if (LicenseplateFacade::isDealerLicensePlate($licenseplate)) {
            $this->addError('licenseplate', 'Dit is een dealer kenteken. Neem contact op met Basic Wash voor de mogelijkheden.');
            return;
        }
        // check if the licenseplate is already in the collection
        $this->licenseplates[] = $licenseplate;
        $this->reset('licenseplate');
    }

    public function initCheckout()
    {
        $this->dispatchBrowserEvent('setstep', ['step' => 3]);
        // check the customers email address
        $licenseplate = $this->licenseplates[0];

        $licenseplates = json_decode(json_encode($this->licenseplates));

        unset($licenseplates[0]);

        // reset the licenseplates keys to start at 0
        $licenseplates = array_values($licenseplates);

        try {
            // Pre register the user to save user data, also when payment is not completed
            $http = Http::withHeaders([
                'Accept' => 'application/json',
                'Authorization' => env('WLNT_TOKEN')
            ])->post(env('WLNT_BACKEND_ENDPOINT') . '/api/v1/store/' . env('STORE_ID') . '/pass', [
                'userEmail' => strtolower($this->email),
                'userName' => $this->name,
                'userMobileNumber' => $this->phone_number,
                'userLicensePlate' => $licenseplate,
                'sendUserPass' => false,
            ]);
        } catch (Exception $e) {
        }

        $http = Http::withToken(env('WLNT_APP'))->post('https://www.walnutapp.com/api/v1/subscription/payment/create', [
            'storeId' => env('STORE_ID'),
            'productId' => $this->selected['_id'],
            'email' => strtolower($this->email),
            'name' => $this->name,
            'phone' => $this->phone_number,
            'licensePlate' => $licenseplate,
            'massLicensePlates' => $licenseplates,
            'birthdate' => '',
            'postalCode' => $this->postcode,
            'housenr' => $this->house_number,
            'voucherCode' => $this->voucher ?? null,
        ]);

        if ($http->failed()) {
            $this->loading_message = 'Er is iets misgegaan, probeer het later nog eens.';
            return;
        }
        $this->loading_message = 'We openen een nieuw venster om de betaling te voltooien.';
        $this->dispatchBrowserEvent('paymenturl', ['url' => $http->json()['paymentUrl']]);
    }

    public function step($step)
    {
        $this->validate($this->validationRules());
        $this->step = $step;
        $this->dispatchBrowserEvent('setstep', ['step' => $this->step]);
    }

    public function render()
    {
        return view('livewire.checkout');
    }

    public function applyVoucher()
    {
        $this->applyVoucherFailed = false;
        $this->voucherAmount = 0;
        $this->voucherApplied = false;
        try {
            $product_id = $this->selected['_id'];
            // Check if the voucher is valid and the worth of the voucher
            $http = Http::withHeaders([
                'Accept' => 'application/json',
                'Authorization' => env('WLNT_TOKEN')
            ])->post(env('WLNT_BACKEND_ENDPOINT') . '/api/v1/store/' . env('STORE_ID') . "/product/$product_id/generate_discount_code", [
                'discountCode' => $this->voucher,
            ]);
            if (! $http->ok()) {
                $this->applyVoucherFailed = true;
                return false;
            }
            $response = $http->json();
            if ($response['success'] !== true || $response['codeValid'] !== true || $response['discountCode'] !== $this->voucher) {
                $this->applyVoucherFailed = true;
                return false;
            }
            // Voucher code is valid
            $this->voucherAmount = $response['amount'];
            $this->voucherApplied = true;
        } catch (Exception $e) {
            $this->applyVoucherFailed = true;
        }
    }

    private function validationRules()
    {
        if ($this->type === 'particulier') {
            switch ($this->step) {
                case 1:
                    // validate the phone_number on syntax +{11 digits}
                    return [
                        'name' => 'required',
                        'email' => 'required|email',
                        'phone_number' => 'required|regex:/^\+?[0-9]{10}[0-9]?$/',
                        'postcode' => 'required',
                        'house_number' => 'required',
                    ];
                case 2:
                    return [
                        'licenseplates' => 'required|array|min:1',
                    ];
            }
        } else {
            switch ($this->step) {
                case 1:
                    // validate the phone_number on syntax +{11 digits}
                    return [
                        'name' => 'required',
                        'email' => 'required|email'
                    ];
                case 2:
                    return [
                        'licenseplates' => 'required|array|min:1',
                    ];
            }
        }
    }
}
