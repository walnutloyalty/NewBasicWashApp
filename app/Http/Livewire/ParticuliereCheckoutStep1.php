<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ParticuliereCheckoutStep1 extends Component
{
    public function render()
    {
        $kenteken = DB::table('particulier_checkout')->get();

        return view('livewire.checkout.particuliere-checkout-step1', ['kenteken' => $kenteken]);
    }

    public function submitStep1()
    {
        $data = request()->except(['_token', 'licensePlate']);

        if (isset(request()->kenteken)) {
            $kenteken = request()->kenteken;
            DB::table('particulier_checkout')->insert(['licensePlate' => $kenteken]);
            return redirect()->back()->withInput();
        } else {
            $kenteken = null;
            DB::table('particulier_checkout')->insert($data);
        }

        return redirect()->route('particuliere-checkout-step2')->withInput();

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
