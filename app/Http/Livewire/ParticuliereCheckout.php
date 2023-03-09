<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Illuminate\Support\Facades\Cache;

class ParticuliereCheckout extends Component
{
    public $walnutPass = '';
    public $userName;
    public $userEmail;
    public $userMobileNumber;
    public $userLicensePlate;

    protected $messages = [
        'userName.required' => 'Vul je naam in',
        'userEmail.required' => 'Vul je email in',
        'userEmail.email' => 'Vul een geldig email in',
        'userMobileNumber.required' => 'Vul je telefoonnummer in',
        'userLicensePlate.required' => 'Vul je kenteken in',
    ];

    protected $rules = [
        'userName' => 'required',
        'userEmail' => 'required|email',
        'userMobileNumber' => 'required',
        'userLicensePlate' => 'required',
    ];

    public function render()
    {
        return view('livewire.checkout.particuliere-checkout');
    }

    // public function addLicense()
    // {
    //     $data = Http::post('https://walnutbackend.com/api/v1/store/dd62a60360b111eb883922000a5419dd/pass/',
    //         ['userLicensePlate' => $this->userLicensePlate]);

    //     return redirect()->back();
    // }

    public function validateOrCreateUser()
    {
        $response = Http::post('https://walnutbackend.com/api/v1/store/dd62a60360b111eb883922000a5419dd/pass/', [
            'userName' => $this->userName,
            'userEmail' => $this->userEmail,
            'userMobileNumber' => $this->userMobileNumber,
            'userLicensePlate' => $this->userLicensePlate,
        ]);

    //     return $response->json();
    // }

    // public function getStoreProducts()
    // {
    //     return Cache::remember('products-walnut', 3600, function () { 
    //         $response = Http::withHeaders([
    //             'Content-Type' => 'application/json',
    //             'Authorization' => $this->walnutPass
    //         ])->get('https://walnutbackend.com/api/v1/store/dd62a60360b111eb883922000a5419dd/products', [
    //             'type' => 'subscription'
    //         ]);
    
    //         $collection = collect($response->json()['products']);
    
    //         return $collection->where('active', 'true');
    //     });
    // }

    // public function submit()
    // {
    //     $this->validate();

    //     $response = Http::post('https://walnutbackend.com/api/v1/store/dd62a60360b111eb883922000a5419dd/pass/', [
    //         'userName' => $this->userName,
    //         'userEmail' => $this->userEmail,
    //         'userMobileNumber' => $this->userMobileNumber,
    //         'userLicensePlate' => $this->userLicensePlate,
    //         'userBirthday' => $this->userBirthday,
    //     ]);

    public function submit()
    {
        $this->validate();

        $response = Http::post('https://walnutbackend.com/api/v1/store/dd62a60360b111eb883922000a5419dd/pass/', [
            'userName' => $this->userName,
            'userEmail' => $this->userEmail,
            'userMobileNumber' => $this->userMobileNumber,
            'userLicensePlate' => $this->userLicensePlate,
        ]);

    }
}
