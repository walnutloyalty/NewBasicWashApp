<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ParticuliereCheckout extends Component
{
    public $walnutPass = 'WalnutPass dd3b37d7aa69b7e4c5dfc5dc37f0372672a04e241a17dbc3882e3bb08fa84a9955d9b2424864b96fe3609de8ae01637849aa2ed60de8197aeedc4d67fc35efd5';
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
        $subscriptions = $this->getStoreProducts();

        $validateOrCreateUser = $this->validateOrCreateUser();

        $addLicense = $this->addLicense();

        return view('livewire.checkout.particuliere-checkout', ['subscriptions' => $subscriptions, 'validateOrCreateUser' => $validateOrCreateUser, 'addLicense' => $addLicense]);
    }

    public function addLicense()
    {
        $data = Http::post('https://walnutbackend.com/api/v1/store/dd62a60360b111eb883922000a5419dd/pass/',
            ['userLicensePlate' => $this->userLicensePlate]);

        return redirect()->back();
    }

    public function validateOrCreateUser()
    {
        $response = Http::post('https://walnutbackend.com/api/v1/store/dd62a60360b111eb883922000a5419dd/pass/', [
            'userName' => $this->userName,
            'userEmail' => $this->userEmail,
            'userMobileNumber' => $this->userMobileNumber,
            'userLicensePlate' => $this->userLicensePlate,
        ]);

        return $response->json();
    }

    public function getStoreProducts()
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => $this->walnutPass
        ])->get('https://walnutbackend.com/api/v1/store/dd62a60360b111eb883922000a5419dd/products', [
            'type' => 'subscription'
        ]);

        $collection = collect($response->json()['products']);

        return $collection->where('active', 'true');
    }

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
