<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\PimpinanController;

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

    // ========================== 👑 SUPERADMIN ==========================
    Route::middleware('role:superadmin')->group(function () {
        Route::get('/dashboard', [SuperAdminController::class, 'index'])->name('dashboard');

        // Kelola Server
        Route::get('/kelola-server', [ServerController::class, 'index'])->name('kelolaServer');
        Route::get('/kelola-server/{id}', [ServerController::class, 'show'])->name('kelolaServer.detail');
        Route::get('/kelola-server/{id}/edit', [ServerController::class, 'edit'])->name('server.edit');
        Route::delete('/kelola-server/{id}', [ServerController::class, 'destroy'])->name('server.destroy');

        // Kelola Website
        Route::get('/kelola-website', [WebsiteController::class, 'index'])->name('kelolaWebsite');

        // Kelola Laporan
        Route::get('/kelola-laporan', fn() => view('kelolaLaporan'))->name('kelolaLaporan');

        // Kelola Pengguna
        Route::get('/kelola-pengguna', fn() => view('kelolaPengguna'))->name('kelolaPengguna');
    });

    // ========================== 🧩 ADMIN ==========================
    Route::middleware('role:admin')->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

        // Admin bisa kelola server/website sesuai bidang_id-nya
        Route::get('/admin/server', [ServerController::class, 'index'])->name('admin.server');
        Route::get('/admin/website', [WebsiteController::class, 'index'])->name('admin.website');
    });

    // ========================== 🧠 PIMPINAN ==========================
    Route::middleware('role:pimpinan')->group(function () {
        Route::get('/pimpinan', [PimpinanController::class, 'index'])->name('pimpinan.dashboard');
        // View-only halaman laporan, website, server
        Route::get('/pimpinan/laporan', fn() => view('pimpinan.laporan'))->name('pimpinan.laporan');
        Route::get('/pimpinan/website', [WebsiteController::class, 'index'])->name('pimpinan.website');
        Route::get('/pimpinan/server', [ServerController::class, 'index'])->name('pimpinan.server');
    });

    // ===================== 🚪 Logout =====================
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
