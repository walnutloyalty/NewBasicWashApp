<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

use App\Models\Ticket;
use Livewire\WithPagination;

class Tickets extends Component
{
    public $ticket_id; 

    public $status;

    public function updateStatus()
    {
        $ticket = Ticket::find($this->ticket_id);
        if ($this->status === 'remove') {
            $ticket->delete();
            $this->dispatchBrowserEvent('closestatus');
            return;
        }
        $ticket->status = $this->status;
        $ticket->save();
        $this->dispatchBrowserEvent('closestatus');
    }

    public function toggle($id)
    {
        $this->ticket_id = $id;
        $this->dispatchBrowserEvent('openstatus');
    }

    public function render()
    {
        return view('livewire.dashboard.tickets',[
            'tickets' => Ticket::paginate(10)
        ]);
    }
}
