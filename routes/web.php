<?php

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
    return view('welcome');
});

Route::get('your-company', function () {
    return view('your-company');
});

Route::get('your-name', function () {
    return view('your-name');
});

Route::get('40-percent', function () {
    return view('40-percent');
});

Route::get('quote-2-yes-2', function () {
    return view('quote-2-yes-2');
});

Route::get('quote-2-no', function () {
    return view('quote-2-no');
});


Route::get('quote-2-yes', function () {
    return view('quote-2-yes');
});

Route::get('start-quote', function () {
    return view('start-quote');
});

Route::get('address', function () {
    return view('address');
});

Route::get('your-number', function () {
    return view('your-number');
});

Route::get('your-email', function () {
    return view('your-email');
});

Route::get('thank-you', function () {
    return view('thank-you');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
