<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Pricing extends Component
{

    public $private = true;

    public $pricing = true;

    public $iframe = false;
    
    public function render()
    {
        return view('livewire.pricing');
    }
}
