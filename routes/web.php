<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Public registration
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showCustomerRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'registerCustomer']);

// Seller registration
Route::get('/register/seller', [App\Http\Controllers\Auth\RegisterController::class, 'showSellerRegistrationForm'])->name('register.seller');
Route::post('/register/seller', [App\Http\Controllers\Auth\RegisterController::class, 'registerSeller']);

// Login
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/seller/dashboard', function () {
    return view('seller.dashboard');
});

Route::get('/seller/products', function () {
    return view('seller.products');
});

Route::get('/seller/orders', function () {
    return view('seller.orders');
});

Route::get('/seller/profile', function () {
    return view('seller.profile');
});
