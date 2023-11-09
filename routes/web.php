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
Route::get('/estimation', [DevisController::class, 'estimation'])->name('estimation');

//Logiciels/Application
Route::get('/prixLogicielApplication', function() {

    return view('prixLogicielApplication');

});

Route::post('/devis-question', [DevisController::class, 'question0'])->name('devis_question');
Route::post('/choice', [DevisController::class, 'choice'])->name('choice');


//Site vitrine

Route::get('/site_vitrine', [DevisController::class, 'site_vitrine'])->name('site_vitrine');

//Site e-commerce
Route::get('/site_e-commerce', [DevisController::class, 'site_e_commerce'] )->name('site_e_commerce');

//Logiciel

Route::get('/logiciel', [DevisController::class, 'logiciel'])->name('logiciel');



Auth::routes();

/*
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
