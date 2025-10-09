<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServerController;

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

    // =====================
    // 💾 Kelola Server
    // =====================
    Route::get('/kelola-server', function () {
        return view('kelolaServer');
    })->name('kelolaServer');

    // 🔍 Detail Server
    Route::get('/kelola-server/{id}', [ServerController::class, 'show'])->name('kelolaServer.detail');

    // ✏️ Edit Server
    Route::get('/kelola-server/{id}/edit', [ServerController::class, 'edit'])->name('server.edit');

    // 🗑️ Delete Server (🔧 nama route diganti supaya sesuai dengan Blade)
    Route::delete('/kelola-server/{id}', [ServerController::class, 'destroy'])->name('server.destroy');

    // =====================
    // 🌐 Kelola Website
    // =====================
    Route::get('/kelola-website', function () {
        return view('kelolaWebsite');
    })->name('kelolaWebsite');

    // =====================
    // 📊 Kelola Laporan
    // =====================
    Route::get('/kelola-laporan', function () {
        return view('kelolaLaporan');
    })->name('kelolaLaporan');

    // =====================
    // 👤 Kelola Pengguna
    // =====================
    Route::get('/kelola-pengguna', function () {
        return view('kelolaPengguna');
    })->name('kelolaPengguna');

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
