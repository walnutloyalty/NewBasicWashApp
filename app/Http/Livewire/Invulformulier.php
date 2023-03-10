<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ticket;
use Illuminate\Support\Facades\Mail;
use App\Mail\TicketConfirmation;

class Invulformulier extends Component
{

    public $email; 

    public $name;

    public $description;
    
    public $subject;

    public $licenseplate;

    public $phone_number;

    public $rules = [
        'email' => 'required|email',
        'name' => 'required',
        'description' => 'required',
        'subject' => 'required',
        'licenseplate' => 'required',
        'phone_number' => 'required|regex:/^\+[0-9]{11}$/',
    ];

    public function send()
    {
        $data = $this->validate();
        $ticket = Ticket::create($data);
        try {
            Mail::to($data['email'])->send(new TicketConfirmation($ticket));
            Mail::to(env('MAIL_ADDRESS'))->send(new TicketConfirmation($ticket));
        } catch (\Exception $e) {
        }
        $this->dispatchBrowserEvent('ticketcreated');
    }

    public function render()
    {
        return view('livewire.invulformulier');
    }
}
