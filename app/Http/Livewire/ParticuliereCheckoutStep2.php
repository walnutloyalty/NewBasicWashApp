<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ParticuliereCheckoutStep2 extends Component
{
    public $walnutPass = 'WalnutPass dd3b37d7aa69b7e4c5dfc5dc37f0372672a04e241a17dbc3882e3bb08fa84a9955d9b2424864b96fe3609de8ae01637849aa2ed60de8197aeedc4d67fc35efd5';

    public function render()
    {
        $validateOrCreateUser = $this->validateOrCreateUser();

        $subscriptions = $this->getStoreProducts();

        return view('webshop.checkout.particuliere-checkout-step2', ['validateOrCreateUser' => $validateOrCreateUser, 'subscriptions' => $subscriptions]);
    }

    public function submitStep2()
    {
        $data = Http::post('https://walnutbackend.com/api/v1/store/dd62a60360b111eb883922000a5419dd/pass/');

        return redirect()->route('particuliere-checkout-step3')->withInput();
    }

    public function validateOrCreateUser()
    {
        $response = Http::post('https://walnutbackend.com/api/v1/store/dd62a60360b111eb883922000a5419dd/pass/');

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

    public function addKenteken()
    {

        $data = Http::post('https://walnutbackend.com/api/v1/store/dd62a60360b111eb883922000a5419dd/pass/',
            ['userLicensePlate' => request()->userLicensePlate,]);

        return redirect()->back();
    }

    public function deleteKenteken(Request $request)
    {
        DB::table('kenteken')->where('id', '=', $request->id)->delete();
        return redirect()->back();
    }

}
