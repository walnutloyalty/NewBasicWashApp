<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use Cache;

class Products extends Component
{  
    use WithPagination;

    public $product_id;

    public function render()
    {
        return view('livewire.dashboard.products', [
            'products' => Product::paginate(10)
        ]);
    }

    public function toggle($id)
    {
        //get the product from the database
        $product = Product::find($id);

        // toggle the in_shop value
        $product->in_shop = !$product->in_shop;
        $product->save();
        Cache::flush();
    }
}
