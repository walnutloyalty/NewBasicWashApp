<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Pricing extends Component
{
    public $iframe = false;

    public function render()
    {
        return view('livewire.pricing');
    }
}
