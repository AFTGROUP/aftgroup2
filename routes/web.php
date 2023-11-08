<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\EcommerceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/formations', function () {
    return view('formations');
});



Route::get('/apropos', function () {
    return view('apropos');
});

Route::get('/devis', [DevisController::class, 'index'])->name('devis');

//Logiciels/Application
Route::get('/prixLogicielApplication', function() {

    return view('prixLogicielApplication');

});

Route::get('/devis-question', [DevisController::class, 'question0'])->name('question0');

//Site e-commerce

Route::get('typeEcommerce', [EcommerceController::class, 'typeEcommerce'] );

Auth::routes();

/*
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
