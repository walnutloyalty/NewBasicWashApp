<?php

use App\Http\Controllers\MapController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\webshop\CheckoutController;
use App\Http\Controllers\webshop\KentekenController;
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

Route::get('/particulier', function () {
    return view('webshop/particulier');
})->name('particulier');

Route::get('/checkout/particulier/step1', [CheckoutController::class, 'index'])->name('particuliere-checkout-step1');

Route::post('/checkout/particulier/step1', [CheckoutController::class, 'store'])->name('particuliere-checkout-step1');

Route::get('/checkout/particulier/step2', function () {
    return view('webshop/checkout/particuliere-checkout-step2');
})->name('particuliere-checkout-step2');

Route::get('/checkout/particulier/step3', function () {
    return view('webshop/checkout/particuliere-checkout-step3');
})->name('particuliere-checkout-step3');

Route::get('/zakelijk', function () {
    return view('webshop/zakelijk');
})->name('zakelijk');

Route::get('/checkout/zakelijk/step1', [KentekenController::class, 'get'])->name('zakelijke-checkout-step1');

Route::get('/checkout/zakelijk/step2', function () {
    return view('webshop/checkout/zakelijke-checkout-step2');
})->name('zakelijke-checkout-step2');

Route::get('/checkout/zakelijk/step3', function () {
    return view('webshop/checkout/zakelijke-checkout-step3');
})->name('zakelijke-checkout-step3');

Route::get('/locaties', [MapController::class, 'all_locations'])->name('locaties');

Route::get('/breda', [MapController::class, 'breda'])->name('breda');

Route::get('/hellevoetsluis', [MapController::class, 'hellevoetsluis'])->name('hellevoetsluis');

Route::get('/sint-willebrord', [MapController::class, 'sint_willebrord'])->name('sint-willebrord');

Route::get('/terheijden', [MapController::class, 'terheijden'])->name('terheijden');

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
