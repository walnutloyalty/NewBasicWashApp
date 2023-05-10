<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Cache;

class Zakelijk extends Component
{
    public $subscriptions = [];

    public $home = false, $iframe = false;
    public function mount()
    {

        if (! $this->home) {
            $this->subscriptions = Cache::remember('zakelijk_products', 3600, function () {
                return Product::orderBy('price', 'desc')->whereInShop(true)->whereZakelijk(true)->get();
            });
        } else {
            $this->subscriptions = Cache::remember('zakelijk_products_home', 3600, function () {
                return Product::orderBy('price', 'desc')->whereInShop(true)->whereZakelijk(true)->take(3)->get();
            });
        }
    }

    public function render()
    {
        return view('livewire.zakelijk');
    }
}
