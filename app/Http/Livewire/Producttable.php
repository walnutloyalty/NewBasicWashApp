<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Producttable extends Component
{
    public $key = 0;
    public $subscription = [];
    public bool $isBusiness = false;
    public bool $home = false;

    public function render()
    {
        return view('livewire.producttable');
    }
}
