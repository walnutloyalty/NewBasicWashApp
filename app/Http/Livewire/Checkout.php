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
                $cache_key = 'particulier_products';
                break;
        }

        $this->subscriptions = Cache::get($cache_key);

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
        if ($this->licenseplates->contains($licenseplate)) {
            return;
        }
        $this->licenseplates->push($licenseplate);
        $this->reset('licenseplate');
    }

    public function initCheckout()
    {  
        $this->dispatchBrowserEvent('setstep', ['step' => 3]);
        $this->loading_message = 'Even geduld, we controleren uw gegevens...';
        // check the customers email address
        $http = Http::withHeaders([
            'Authorization' => env('WLNT_TOKEN'),
            'Accept' => 'application/json', 
            'Content-Type' => 'application/json'
        ])->get('https://walnutbackend.com/api/v1/store/dd62a60360b111eb883922000a5419dd/search', [
            'query' => $this->email,
        ]);
      
        if($http->failed()) {
            $this->loading_message = 'Er is iets misgegaan, probeer het later nog eens.';
            return;
        } 
        $results = $http->json()['results'];
        if (count($results) === 0) {
            $this->loading_message = 'Uw gegevens worden verwerkt, even geduld...';
            $data = Http::withHeaders([
                'Authorization' => env('WLNT_TOKEN')
            ])->post('https://walnutbackend.com/api/v1/store/dd62a60360b111eb883922000a5419dd/pass/',
            [
                'userEmail' => $this->email,
                'userName' => $this->name,
                'userPhoneNumber' => $this->phone_number,
                'userLicensePlate' => $this->licenseplates[0],
            ]);

            $http = Http::withHeaders([
                'Authorization' => env('WLNT_TOKEN'),
                'Accept' => 'application/json', 
                'Content-Type' => 'application/json'
            ])->get('https://walnutbackend.com/api/v1/store/dd62a60360b111eb883922000a5419dd/search', [
                'query' => $this->email,
            ]);
        }

        // collect the results 
        $results = collect($http->json()['results']);
        // get the first item where passType == Storecard

        $result = $results->where('passType', 'Storecard')->first();    
        $user_id = $result['userIdentifier'];
        $pass_id = $result['passIdentifier'];

        $http = Http::connectTimeout(60)->timeout(60)->withToken(env('WLNT_APP'))->post('https://walnutapp.com/api/v1/subscription/payment/create', [
                "storeId" => "dd62a60360b111eb883922000a5419dd",
                "productId" => $this->selected['_id'],
                "email" => strtolower($this->email),
                "name" => $this->name,
                "phone" => $this->phone_number,
                "licensePlate" => $this->licenseplates[0],
                "birthdate" => "",
                "postalCode" => $this->postcode,
                "housenr" => $this->house_number,
                "passId" => $pass_id,
        ]);
        dd($http->json());

        if ($http->status() === 200 && ! is_null($http->json())) {
            $this->loading_message = 'U heeft dit abbonement al op dit email adres.';
            return;
        }
        
        $http = Http::withHeaders([
            'Authorization' => env('WLNT_TOKEN'),
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ])->post('https://walnutbackend.com/api/v1/store/dd62a60360b111eb883922000a5419dd/user/'.$user_identifier.'/subscription/'. $this->selected['_id']);
        
        dd($http->status());
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
        switch($this->step) {
            case 1:
                // validate the phone_number on syntax +{11 digits}
                return [
                    'name' => 'required',
                    'email' => 'required|email',
                    'phone_number' => 'required|regex:/^\+[0-9]{11}$/',
                    'postcode' => 'required',
                    'house_number' => 'required',
                    'location' => 'required'
                ];
            case 2:
                return [
                   'licenseplates' => 'required|array|min:1',
                ];
        }
    }
}
