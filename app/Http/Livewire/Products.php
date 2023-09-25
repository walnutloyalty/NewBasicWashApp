<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Cache;
use Livewire\Component;
use App\Models\Product;

class Products extends Component
{
    public $privateSubscriptions = [];
    public $businessSubscriptions = [];

    public $home = false;
    public $iframe = false;

    public function mount()
    {
        $this->reloadProducts();
    }

    public function reloadProducts()
    {
        if (! $this->home) {
            $this->businessSubscriptions = Cache::remember('zakelijk_products', 3600, static function () {
                return Product::orderBy('price', 'desc')->whereInShop(true)->whereZakelijk(true)->get();
            });
            $this->privateSubscriptions = Cache::remember('particulier_products', 3600, static function () {
                return Product::orderBy('price', 'desc')->whereInShop(true)->whereZakelijk(false)->get();
            });
        } else {
            $this->businessSubscriptions = Cache::remember('zakelijk_products_home', 3600, static function () {
                return Product::orderBy('price', 'desc')->whereInShop(true)->whereZakelijk(true)->take(3)->get();
            });
            $this->privateSubscriptions = Cache::remember('particulier_products_home', 3600, static function () {
                return Product::orderBy('price', 'desc')->whereInShop(true)->whereZakelijk(false)->take(3)->get();
            });
        }
    }

    public function render()
    {
        return view('livewire.products');
    }
}
