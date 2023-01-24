<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ParticuliereCheckoutStep1 extends Component
{
    public $walnutPass = 'WalnutPass dd3b37d7aa69b7e4c5dfc5dc37f0372672a04e241a17dbc3882e3bb08fa84a9955d9b2424864b96fe3609de8ae01637849aa2ed60de8197aeedc4d67fc35efd5';

    public function render()
    {
        $subscriptions = $this->getStoreProducts();

        return view('livewire.checkout.particuliere-checkout-step1', ['subscriptions' => $subscriptions]);
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


}
