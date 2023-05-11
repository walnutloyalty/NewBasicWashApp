<?php

use App\Http\Livewire\ParticuliereCheckoutStep2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Ticket;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('preview', function () {
    $job = new \App\Jobs\FetchProducts();
    $job->handle();
    return new App\Mail\TicketConfirmation($ticket);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


