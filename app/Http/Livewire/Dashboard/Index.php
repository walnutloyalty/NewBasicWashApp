<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Index extends Component
{
    public $type = 'products';

    public function render()
    {
        return view('livewire.dashboard.index');
    }
}
