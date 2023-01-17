<?php

namespace App\Http\Controllers\webshop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KentekenController extends Controller
{
    public function get()
    {
        $kenteken = DB::table('kenteken')->get();
        return view('livewire.checkout.zakelijke-checkout-step1', ['kenteken' => $kenteken]);
    }
}
