<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ZakelijkeCheckoutStep2 extends Component
{

    public function render()
    {
        $kenteken = DB::table('kenteken')->get();
        return view('webshop.checkout.zakelijke-checkout-step2', ['kenteken' => $kenteken]);
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
            DB::table('zakelijke_checkout')->insert($data);
        }
        return redirect()->route('zakelijke-checkout-step3')->withInput();
    }

    public function addKenteken()
    {

        $data = request()->except(['_token']);

        $data = DB::table('kenteken')->insert($data);

        return redirect()->back()->withInput();
    }

    public function deleteKenteken(Request $request)
    {
        DB::table('kenteken')->where('id', '=', $request->id)->delete();
        return redirect()->back();
    }

}