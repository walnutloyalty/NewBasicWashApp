<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Cache;

class Zakelijk extends Component
{
    public $subscriptions = [];

    public function mount()
    {
        $this->subscriptions = Cache::remember('zakelijk_products', 3600, function () {
            return Product::orderBy('price', 'desc')->whereZakelijk(true)->get();
        });
    }

    public function render()
    {
        return view('livewire.zakelijk');
    }
}
