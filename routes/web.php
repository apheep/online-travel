<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pesanan/pesawat', function () {
    return view('pesanan.pesawat');
});

Route::get('/pesanan/hotel', function () {
    return view('pesanan.hotel');
});


