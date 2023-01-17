<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ZakelijkeCheckoutStep1 extends Component
{

    public function render()
    {
        $kenteken = DB::table('kenteken')->get();
        return view('livewire.checkout.zakelijke-checkout-step1', ['kenteken' => $kenteken]);
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
