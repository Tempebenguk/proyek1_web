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

Route::get('/', [LatihanController::class, 'home']);
Route::get('/pemesanan', [LatihanController::class, 'pemesanan']);
Route::get('/metode', [LatihanController::class, 'metode']);
Route::get('/pembayaran', [LatihanController::class, 'pembayaran']);

