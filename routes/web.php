<?php

use App\Http\Controllers\MapController;
use App\Http\Controllers\ProfileController;
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

Route::get('/zakelijk', function () {
    return view('webshop/zakelijk');
})->name('zakelijk');

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
})->name('faq');



















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
