<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\Http;

class Kentekencheck extends Component
{
    public $kenteken;
    
    public $locations = [
        'breda' => [
            290,
            258
        ],
        'hellevoetsluis' => [
            260,
            238
        ],
        'terheijden' => [
            260,
            238
        ],
        'ulvenhout' => [
            260,
            238
        ],
        'sintwillebrord' => [
            240,
            238
        ],
    ];

    public $RDW_URL = 'https://opendata.rdw.nl/resource/m9d7-ebf2.json?kenteken=';
    public $height = 0;
    public $width = 0;
    public $length = 0;

    public function check()
    {
        $kenteken = str_replace([' ', '-'], '', strtoupper($this->kenteken));
        $http = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ])->get($this->RDW_URL . $kenteken);
        $this->reset('height', 'width', 'length', 'kenteken');

        if ($http->failed() || !isset($http->json()[0])) {
            $this->dispatchBrowserEvent('openerror');
            return;
        }

        $data = $http->json()[0];
        $this->height = $data['hoogte_voertuig'];
        $this->width = $data['breedte'];
        $this->length = $data['lengte'];
        $this->locations();

        $this->dispatchBrowserEvent('openresults');
    }

    public function render()
    {
        return view('livewire.kentekencheck');
    }

    private function locations()
    {
        foreach ($this->locations as $key => $location) {
            // if the height and width are smaller than the location
            if ($this->height < $location[0] && $this->width < $location[1]) {
                $this->dispatchBrowserEvent($key);
            } 
        }
    }
}
