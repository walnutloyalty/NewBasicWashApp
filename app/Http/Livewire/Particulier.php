<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cache;
use App\Models\Product;

class Particulier extends Component
{
    public $subscriptions = [];

    public $home = false;
    public $iframe = false;

    public function mount()
    {
        if (! $this->home) {
            $this->subscriptions = Cache::remember('particulier_products', 3600, static function () {
                return Product::orderBy('price', 'desc')->whereInShop(true)->whereZakelijk(false)->get();
            });
        } else {
            $this->subscriptions = Cache::remember('particulier_products_home', 3600, static function () {
                return Product::orderBy('price', 'desc')->whereInShop(true)->whereZakelijk(false)->take(3)->get();
            });
        }
    }

    public function render()
    {
        return view('livewire.particulier');
    }
}
