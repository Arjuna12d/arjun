<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// Route untuk login
Route::get('/login', function () {
    return view('login'); // Ganti dengan nama view login Anda
})->name('login');

// Route untuk login action
Route::post('/login', [AuthController::class, 'login'])->name('login.action');

// Route untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route untuk dashboard yang memerlukan autentikasi
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
