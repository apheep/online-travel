<?php

use App\Http\Controllers\LoginController;
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
});
