<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Pricing extends Component
{
    public $private = true;
    public $refreshid = 0;

    public $pricing = true;

    public $iframe = false;

    public function switchPrivate($status)
    {
        $this->private = $status;
        $this->refreshid = rand();
    }

    public function render()
    {
        return view('livewire.pricing');
    }
}
