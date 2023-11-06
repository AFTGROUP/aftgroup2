<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/devis', function () {
    return view('devis');
});

Route::get('/apropos', function () {
    return view('apropos');
});

Route::get('/devis', 'DevisController@create')->name('devis.create');
Route::post('/devis', 'DevisController@store')->name('devis.store');


Auth::routes();

/*
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
