<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TypeSelector extends Component
{
    public $show = true;
    protected $listeners = [
        'showTypeSelector' => 'showTypeSelector',
    ];

    public function showTypeSelector($status)
    {
        $this->show = $status;
    }

    public function render()
    {
        return view('livewire.type-selector');
    }
}
