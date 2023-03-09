<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cache;
use App\Models\Product;

class Particulier extends Component
{
    public $subscriptions = [];

    public function mount()
    {
        $this->subscriptions = Cache::remember('particulier_products', 3600, function () {
            return Product::orderBy('price', 'desc')->whereZakelijk(false)->get();
        });
    }

    public function render()
    {
        return view('livewire.particulier');
    }
}
