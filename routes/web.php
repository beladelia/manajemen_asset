<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Redirect root ke login
Route::get('/', fn() => redirect()->route('login'));

// =====================
// 🧭 Guest Routes
// =====================
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
});

// =====================
// 🔒 Authenticated Routes
// =====================
Route::middleware('auth')->group(function () {
    // Pisahkan berdasarkan role
    require __DIR__ . '/superadmin.php';
    require __DIR__ . '/admin.php';
    require __DIR__ . '/pimpinan.php';

    // ===================== 🚪 Logout =====================
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
