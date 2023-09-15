<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Pricing extends Component
{
    public $private = true;
    public $refreshid = 0;
    public $hasSelectedType = false;

    public $pricing = true;

    public $iframe = false;

    protected $listeners = [
        'backToChooseType' => 'backToChooseType',
    ];

    public function backToChooseType()
    {
        $this->hasSelectedType = false;
    }

    public function switchPrivate($status)
    {
        $this->hasSelectedType = true;
        $this->private = $status;
        $this->refreshid = rand();
    }

    public function render()
    {
        return view('livewire.pricing');
    }
}
