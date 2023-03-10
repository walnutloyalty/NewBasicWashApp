<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Index extends Component
{

    public $listeners = [
        'typeChanged' => 'typeChanged'
    ];

    public $type = 'products';

    public function typeChanged($type)
    {
        $this->type = $type;
    }
    
    public function render()
    {
        return view('livewire.dashboard.index');
    }
}
