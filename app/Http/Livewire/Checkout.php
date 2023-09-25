<?php

namespace App\Http\Livewire;

use App\Http\Facades\LicenseplateFacade;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Http;
use Exception;

class Checkout extends Component
{
    public $subscriptions = [];
    public $location = '';
    public $type = '';
    public $selected;
    public $step = 0;
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
    public $company_name = '';
    public $company_btw_number = '';
    public $company_kvk_number = '';
    public $paymentUrl = '';
    public $btwPercentage = 0;
    public $basePrice = 0;
    public $baseBtwPrice = 0;
    public $baseExBtwPrice = 0;
    public $discountedPrice = 0;
    public $discountedBtwPrice = 0;
    public $discountedExBtwPrice = 0;

    public $listeners = [
        'checkout' => 'checkout',
        'step' => 'step'
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
                $subscriptions = Cache::remember('particulier_products', 3600, static function () {
                    return Product::orderBy('price', 'desc')->whereInShop(true)->whereZakelijk(false)->get();
                });
                break;
            case 'z':
                $this->type = 'zakelijk';
                $subscriptions = Cache::remember('zakelijk_products', 3600, static function () {
                    return Product::orderBy('price', 'desc')->whereInShop(true)->whereZakelijk(true)->get();
                });
        }

        // get the selected product
        $this->selected = $subscriptions->where('_id', $data[1])->first()->toArray();
        $this->resetAppliedVoucher();
        // $this->calculatePrices(); // <- Called in $this->resetAppliedVoucher();

        $this->step = 0;
        $this->step(1);
        $this->dispatchBrowserEvent('checkout');
    }

    public function calculatePrices()
    {
        if (empty($this->selected)) {
            return;
        }
        $this->btwPercentage = $this->selected['btw'];
        $licenPlateCount = count($this->licenseplates);
        if ($licenPlateCount <= 0) {
            $licenPlateCount = 1;
        }
        $basePrice = $this->selected['price'] * $licenPlateCount;
        $baseExBtwPrice = $basePrice / (1 + $this->btwPercentage / 100);
        $baseBtwPrice = $basePrice - $baseExBtwPrice;

        $discountedPrice = $basePrice - ($this->voucherApplied ? $this->voucherAmount : 0);
        $discountedExBtwPrice = $discountedPrice / (1 + $this->btwPercentage / 100);
        $discountedBtwPrice = $discountedPrice - $discountedExBtwPrice;

        $this->basePrice = number_format($basePrice, 2, ',', '');
        $this->baseBtwPrice = number_format($baseBtwPrice, 2, ',', '');
        $this->baseExBtwPrice = number_format($baseExBtwPrice, 2, ',', '');
        $this->discountedPrice = number_format($discountedPrice, 2, ',', '');
        $this->discountedBtwPrice = number_format($discountedBtwPrice, 2, ',', '');
        $this->discountedExBtwPrice = number_format($discountedExBtwPrice, 2, ',', '');
    }

    public function next()
    {
        $this->validate($this->validationRules());
        $this->calculatePrices();

        if ($this->step !== 2) {
            $this->step++;
            $this->dispatchBrowserEvent('setnavstep', ['step' => $this->step]);
        } else {
            $this->initCheckout();
        }
    }

    public function removePlate($key)
    {
        $this->licenseplates->forget($key);
        $this->calculatePrices();
    }

    public function addLicensePlate()
    {
        $this->validate(['licenseplate' => 'required']);
        $licenseplate = strtoupper(str_replace([' ', '-'], '', $this->licenseplate));

        if ((! str_contains($this->selected['name'], 'Taxi')) && LicenseplateFacade::isLicenseplateTaxi($licenseplate)) {
            $this->addError('licenseplate', 'Dit is een taxi kenteken, deze kan niet gebruikt worden.');
            return;
        }
        if ($this->selected && (! $this->selected['zakelijk']) && LicenseplateFacade::isCompanyCar($licenseplate)) {
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
        $this->calculatePrices();
    }

    public function initCheckout()
    {
        $this->dispatchBrowserEvent('setnavstep', ['step' => 3]);
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

        $http = Http::withToken(env('WLNT_APP'))->post(env('WLNT_FRONTEND_ENDPOINT') . '/api/v1/subscription/payment/create', [
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
            'tnsCompany' => $this->company_name ?? '',
            'customerBTWnr' => $this->company_btw_number ?? '',
            'customerKVK' => $this->company_kvk_number ?? '',
        ]);

        if ($http->failed()) {
            $this->loading_message = 'Er is iets misgegaan, probeer het later nog eens.';
            return;
        }
        $this->loading_message = 'We openen een nieuw venster om de betaling te voltooien.';
        $this->paymentUrl = $http->json()['paymentUrl'];
        $this->dispatchBrowserEvent('paymenturl', ['url' => $http->json()['paymentUrl']]);
    }

    public function step($step)
    {
        if ($step >= $this->step) {
            $this->validate($this->validationRules());
        }
        $this->step = $step;
        $this->dispatchBrowserEvent('setnavstep', ['step' => $this->step]);
    }

    public function render()
    {
        return view('livewire.checkout');
    }

    public function resetAppliedVoucher()
    {
        $this->applyVoucherFailed = false;
        $this->voucherAmount = 0;
        $this->voucherApplied = false;
        // $this->voucher = '';
        $this->calculatePrices();
    }

    public function applyVoucher()
    {
        $this->resetAppliedVoucher();
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
            $this->calculatePrices();
        } catch (Exception $e) {
            $this->applyVoucherFailed = true;
        }
    }

    private function validationRules()
    {
        if ($this->step == 0) {
            return [
                'step' => 'required',
            ];
        }
        if ($this->type === 'particulier') {
            switch ($this->step) {
                case 1:
                    // validate the phone_number on syntax +{11 digits}
                    return [
                        'name' => 'required',
                        'email' => 'required|email:filter',
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
                        'email' => 'required|email:filter',
                        'phone_number' => 'required|regex:/^\+?[0-9]{10}[0-9]?$/',
                        'postcode' => 'required',
                        'house_number' => 'required',
                        'company_name' => 'required',
                        'company_btw_number' => 'required|regex:/^NL[0-9]{9}B[0-9]{2}$/',
                        'company_kvk_number' => 'required|regex:/^[0-9]{8}$/',
                    ];
                case 2:
                    return [
                        'licenseplates' => 'required|array|min:1',
                    ];
            }
        }
    }
}
