<?php

use App\Http\Controllers\LoginController;

use App\Http\Controllers\PesawatController;

use App\Http\Controllers\MultiUserController;
use App\Http\Controllers\MailboxController;
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

// Receipt
Route::get('receipt/hotelreceipt', function () {
    return view('receipt.hotelreceipt');
});

Route::get('receipt/keretareceipt', function () {
    return view('receipt.keretareceipt');
});
Route::get('receipt/pesawatreceipt', function () {
    return view('receipt.pesawatreceipt');
});



Route::get('/checkout/checkout-pesawat', [PesawatController::class, 'checkout']);
Route::post('/checkout/process', [PesawatController::class, 'processCheckout']);
Route::get('/checkout/available-seats', [PesawatController::class, 'getAvailableSeats']);


Route::get('/check/report', function () {
    return view('check.report');
});

// Checkout hotel route
Route::get('/checkout/checkout-hotel', function () {
    return view('checkout.checkout-hotel');
});

Route::get('/checkout/checkout-kereta', function () {
    return view('checkout.checkout-kereta');
});

// API route for user search
Route::get('/api/search-users', function () {
    $query = request('q');
    if (!$query || strlen($query) < 2) {
        return response()->json([]);
    }
    
    // Search users by name (excluding current user)
    $users = \App\Models\User::where('name', 'LIKE', "%{$query}%")
        ->where('id', '!=', auth()->id())
        ->select('id', 'name', 'email', 'phone')
        ->limit(10)
        ->get();
    
    return response()->json($users);
})->middleware('auth');

// Protected routes for logged in users
Route::middleware(['auth'])->group(function () {
    // Dashboard routes based on user role
    Route::get('/welcome', function () {
        return view('welcome');
    })->name('welcome');
    
    Route::get('/checking', [MultiUserController::class, 'checking'])->name('checking');
    Route::get('/ticketing', [MultiUserController::class, 'ticketing'])->name('ticketing');

    // Mailbox routes
    Route::get('/notifications/mailbox', [MailboxController::class, 'index'])->name('notifications.mailbox');
    Route::get('/notifications/diterima/{id}', [MailboxController::class, 'showDiterima'])->name('notifications.diterima');
    Route::get('/notifications/ditolak/{id}', [MailboxController::class, 'showDitolak'])->name('notifications.ditolak');
    
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

    Route::get('/check/detail-kereta', function () {
        return view('check.detail-kereta');
    })->name('check.detail-kereta');

    Route::get('/check/detail-hotel', function () {
        return view('check.detail-hotel');
    })->name('check.detail-hotel');

});


