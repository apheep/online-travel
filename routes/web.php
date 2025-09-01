<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesawatController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pesanan/pesawat', function () {
    return view('pesanan.pesawat');
});

Route::get('/checkout/checkout-pesawat', [PesawatController::class, 'checkout']);
Route::post('/checkout/process', [PesawatController::class, 'processCheckout']);
Route::get('/checkout/available-seats', [PesawatController::class, 'getAvailableSeats']);
