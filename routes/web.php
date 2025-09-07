<?php

use App\Http\Controllers\LoginController;

use App\Http\Controllers\PesawatController;

use App\Http\Controllers\MultiUserController;
use Illuminate\Support\Facades\Route;


// Routes for guests only (not logged in users)
Route::middleware(['guest'])->group(function () {
    // Login page as homepage
    Route::get('/', [LoginController::class, 'index'])->name('home');
    
    // Login routes
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.attempt');
});


Route::get('/pesanan/pesawat', function () {
    return view('pesanan.pesawat');
});


// Route Checkout

Route::get('/pesanan/hotel', function () {
    return view('pesanan.hotel');
});

// Hotel detail page - for viewing the new hotel layout
Route::get('checkout/informasi-hotel', function () {
    return view('checkout.informasi-hotel');
});


Route::get('/checkout/checkout-pesawat', [PesawatController::class, 'checkout']);
Route::post('/checkout/process', [PesawatController::class, 'processCheckout']);
Route::get('/checkout/available-seats', [PesawatController::class, 'getAvailableSeats']);


// Checkout hotel route
Route::get('/checkout/checkout-hotel', function () {
    return view('checkout.checkout-hotel');
});

Route::get('/checkout/checkout-kereta', function () {
    return view('checkout.checkout-kereta');
});

// Protected routes for logged in users
Route::middleware(['auth'])->group(function () {
    // Dashboard routes based on user role
    Route::get('/welcome', function () {
        return view('welcome');
    })->name('welcome');
    
    Route::get('/checking', [MultiUserController::class, 'checking'])->name('checking');
    Route::get('/ticketing', [MultiUserController::class, 'ticketing'])->name('ticketing');
    
    // Logout route
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    
    // Pesanan routes
    Route::get('/pesanan/pesawat', function () {
        return view('pesanan.pesawat');
    })->name('pesanan.pesawat');


    Route::get('/pesanan/kereta', function () {
        return view('pesanan.kereta');
    })->name('pesanan.kereta');

    
    // History route
    Route::get('/history', function () {
        return view('history');
    })->name('history');

    // Check detail page
    Route::get('/check/detail', function () {
        return view('check.detail-pesanan');
    })->name('check.detail');

});


