<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ParticuliereCheckoutStep2 extends Component
{
    public function render()
    {
        $kenteken = DB::table('kenteken')->get();

        return view('webshop.checkout.particuliere-checkout-step2', ['kenteken' => $kenteken]);
    }

    public function submitStep1()
    {
        $data = request()->except(['_token', 'kenteken']);

        if (isset(request()->kenteken)) {
            $kenteken = request()->kenteken;
            DB::table('kenteken')->insert(['kenteken' => $kenteken]);
            return redirect()->back()->withInput();
        } else {
            $kenteken = null;
            DB::table('particuliere_checkout')->insert($data);
        }
        return redirect()->route('particuliere-checkout-step3')->withInput();

    }

    public function validateUser()
    {
        
    }

    public function addKenteken()
    {

        $data = request()->except(['_token']);

        $data = DB::table('kenteken')->insert($data);
        return redirect()->back();
    }

    public function deleteKenteken(Request $request)
    {
        DB::table('kenteken')->where('id', '=', $request->id)->delete();
        return redirect()->back();
    }

}
