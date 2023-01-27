<?php

use App\Http\Livewire\ParticuliereCheckout;
use App\Http\Livewire\ParticuliereCheckoutStep2;
use App\Http\Livewire\ParticuliereCheckoutStep3;
use App\Http\Livewire\ZakelijkeCheckoutStep2;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});




// particuliere checkout
Route::get('/particulier', function () {
    return view('webshop/particulier');
})->name('particulier');

Route::get('/checkout/particulier/', [ParticuliereCheckout::class, 'render'])->name('particuliere-checkout');

// zakelijke checkout
Route::get('/zakelijk', function () {
    return view('webshop/zakelijk');
})->name('zakelijk');

Route::get('/checkout/zakelijk/step1', function () {
    return view('livewire/checkout/zakelijke-checkout-step1');
})->name('zakelijke-checkout-step1');

Route::get('/checkout/zakelijk/step2', [ZakelijkeCheckoutStep2::class, 'render'])->name('zakelijke-checkout-step2');

Route::get('/test', [ParticuliereCheckout::class, 'render'])->name('test');

Route::post('/checkout/zakelijk/step2/filled', [ZakelijkeCheckoutStep2::class, 'submitStep1'])->name('zakelijke-checkout-step2-filled');

Route::post('/checkout/zakelijk/step2/kenteken-toevoegen', [ZakelijkeCheckoutStep2::class, 'addKenteken'])->name('zakelijke-add-kenteken');

Route::post('/checkout/zakelijk/step2/kenteken-delete', [ZakelijkeCheckoutStep2::class, 'deleteKenteken'])->name('zakelijke-delete-kenteken');

Route::get('/checkout/zakelijk/step3', function () {
    return view('webshop/checkout/zakelijke-checkout-step3');
})->name('zakelijke-checkout-step3');

// alle locaties
Route::get('/locaties', function () {
    return view('locaties/index');
})->name('locaties');

Route::get('/breda', function () {
    return view('locaties/breda');
})->name('breda');

Route::get('/hellevoetsluis', function () {
    return view('locaties/hellevoetsluis');
})->name('hellevoetsluis');

Route::get('/sint-willebrord', function () {
    return view('locaties/sint-willebrord');
})->name('sint-willebrord');

Route::get('/terheijden', function () {
    return view('locaties/terheijden');
})->name('terheijden');

Route::get('/ulvenhout', function () {
    return view('locaties/ulvenhout');
})->name('ulvenhout');


Route::get('/klantenportaal', function () {
    return view('klantenservice/klantenportaal');
})->name('klantenportaal');

Route::get('/kentekencheck', function () {
    return view('klantenservice/kentekencheck');
})->name('kentekencheck');

Route::get('/FAQ', function () {
    return view('klantenservice/FAQ');
})->name('FAQ');

Route::get('/invulformulier', function () {
    return view('invul-form/index');
})->name('invulformulier');

Route::get('/over-ons', function () {
    return view('klantenservice/over-ons');
})->name('over-ons');

Route::get('/contact', function () {
    return view('klantenservice/contact');
})->name('contact');

Route::get('/algemene-voorwaarden', function () {
    return view('voorwaarden/algemene');
})->name('algemene-voorwaarden');

Route::get('/abonnements-voorwaarden', function () {
    return view('voorwaarden/abonnements');
})->name('abonnements-voorwaarden');





















//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});
//
//require __DIR__.'/auth.php';
