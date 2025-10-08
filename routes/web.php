<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Redirect root ke login
Route::get('/', function () {
    return redirect()->route('login');
});

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

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Kelola Server
    Route::get('/kelolaServer', function () {
        return view('kelolaServer');
    })->name('kelolaServer');

    // Detail Kelola Server
    Route::get('/kelola-server/{id}', [ServerController::class, 'show'])->name('kelolaServer.detail');


    // Kelola Website
    Route::get('/kelolaWebsite', function () {
        return view('kelolaWebsite');
    })->name('kelolaWebsite');

    // Kelola Laporan
    Route::get('/kelolaLaporan', function () {
        return view('kelolaLaporan');
    })->name('kelolaLaporan');

    // Kelola Pengguna
    Route::get('/kelolaPengguna', function () {
        return view('kelolaPengguna');
    })->name('kelolaPengguna');

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
