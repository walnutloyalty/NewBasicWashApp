<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Pricing extends Component
{

    public $private = true;

    public function render()
    {
        return view('livewire.pricing');
    }
}
