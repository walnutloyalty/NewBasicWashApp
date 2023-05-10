<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Http;
use Cache;

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
    
    public $licenseplate;
     
    public $listeners = [
        'checkout' => 'checkout'
    ];

    public $rules = [
        'selected' => 'required'
    ];

    public function mount()
    {
        $this->licenseplates = collect();
    }

    public function checkout($data)
    {
        switch($data[0]) {
            case 'p':
                $this->type = 'particulier';
                $this->subscriptions = Cache::remember('particulier_products', 3600, function () {
                    return Product::orderBy('price', 'desc')->whereInShop(true)->whereZakelijk(false)->get();
                });
                break;
            case 'z':
                $this->type= 'zakelijk';
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
        // check if the licenseplate is already in the collection
        $this->licenseplates[] = $licenseplate;
        $this->reset('licenseplate');
    }

    public function initCheckout()
    {  
        $this->dispatchBrowserEvent('setstep', ['step' => 3]);
        // check the customers email address
    
        $licenseplate = $this->licenseplates[0];

        $licenseplates = $this->licenseplates;
        unset($licenseplates[0]);
        $http = Http::withToken(env('WLNT_APP'))->post('https://www.walnutapp.com/api/v1/subscription/payment/create', [
                "storeId" => env('STORE_ID'),
                "productId" => $this->selected['_id'],
                "email" => strtolower($this->email),
                "name" => $this->name,
                "phone" => $this->phone_number,
                "licensePlate" => $licenseplate,
                "massLicensePlates" => $licenseplates,
                "birthdate" => "",
                "postalCode" => $this->postcode,
                "housenr" => $this->house_number,
                "voucherCode" => $this->voucher ?? null,
        ]);

        if ($http->failed()) {
            $this->$loading_message = 'Er is iets misgegaan, probeer het later nog eens.';
            return;
        }

        return redirect($http->json()['paymentUrl']);
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

    private function validationRules()
    {
        if($this->type === 'particulier') {
            switch($this->step) {
                case 1:
                    // validate the phone_number on syntax +{11 digits}
                    return [
                        'name' => 'required',
                        'email' => 'required|email',
                        'phone_number' => 'required|regex:/^\+[0-9]{11}$/',
                        'postcode' => 'required',
                        'house_number' => 'required',
                    ];
                case 2:
                    return [
                       'licenseplates' => 'required|array|min:1',
                    ];
            }  
        } else {
            switch($this->step) {
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
