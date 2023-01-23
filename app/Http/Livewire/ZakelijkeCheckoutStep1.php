<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ZakelijkeCheckoutStep1 extends Component
{

    public function render()
    {
        $kenteken = DB::table('zakelijke_checkout')->get();
        return view('livewire.checkout.zakelijke-checkout-step1', ['kenteken' => $kenteken]);
    }

    public function submitStep1()
    {
        $data = request()->except(['_token', 'licensePlate']);

        if (isset(request()->kenteken)) {
            $kenteken = request()->kenteken;
            DB::table('zakelijke_checkout')->insert(['licensePlate' => $kenteken]);
            return redirect()->back()->withInput();
        } else {
            $kenteken = null;
            DB::table('zakelijke_checkout')->insert($data);
        }

        return redirect()->route('zakelijke-checkout-step2')->withInput();
    }
    public function addKenteken()
    {

        $data = request()->except(['_token']);
        $kenteken = request()->kenteken;

        DB::table('zakelijke_checkout')->where('licensePlate', $kenteken)->insert($data);

        return redirect()->back()->withInput();
    }

    public function deleteKenteken(Request $request)
    {
        DB::table('zakelijke_checkout')->where('id', '=', $request->id)->where('licensePlate' , '=', $request->kenteken)->delete();
        return redirect()->back();
    }

}
