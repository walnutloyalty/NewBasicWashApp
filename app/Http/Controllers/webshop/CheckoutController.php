<?php

namespace App\Http\Controllers\webshop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class CheckoutController extends Controller
{
    public function index()
    {
        return view('webshop.checkout.particuliere-checkout-step1');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'telefoonnummer' => 'required|numeric|unique',
            'postcode' => 'required',
            'huisnummer' => 'required',
            'kenteken' => 'required|unique',
        ]);
    }
}
