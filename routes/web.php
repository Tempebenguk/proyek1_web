<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LatihanController;

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

Route::get('/home', [LatihanController::class, 'home']);
Route::get('/pemesanan', [LatihanController::class, 'pemesanan']);
Route::get('/metode', [LatihanController::class, 'metode']);
Route::get('/pembayaran', [LatihanController::class, 'pembayaran']);
Route::get('/menu', [LatihanController::class, 'menu']);
Route::post('/home', [LatihanController::class, 'sendValue'])->name('send.value');

Route::get('/metode', function () {
    return view('layout.metode');
})->name('metode');

Route::get('/pemesanan', function () {
    return view('layout.pemesanan');
})->name('pemesanan');

Route::get('/home', function () {
    return view('layout.home');
})->name('home');

Route::get('/pembayaran', function () {
    return view('layout.pembayaran');
})->name('pembayaran');

Route::get('/struk', function () {
    return view('layout.struk');
})->name('struk');
