<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\WebsiteController;

Route::middleware('role:superadmin')->group(function () {
    Route::get('/dashboard', [SuperAdminController::class, 'index'])->name('dashboard');

    // ===================== 🖥️ Kelola Server =====================
    Route::get('/kelola-server', [ServerController::class, 'index'])->name('kelolaServer');
    Route::get('/kelola-server/{id}', [ServerController::class, 'show'])->name('kelolaServer.detail');
    Route::get('/kelola-server/{id}/edit', [ServerController::class, 'edit'])->name('server.edit');
    Route::delete('/kelola-server/{id}', [ServerController::class, 'destroy'])->name('server.destroy');

    // ===================== 🌐 Kelola Website =====================
    Route::get('/kelola-website', [WebsiteController::class, 'index'])->name('kelolaWebsite');

    // ===================== 📄 Kelola Laporan =====================
    Route::get('/kelola-laporan', fn() => view('kelolaLaporan'))->name('kelolaLaporan');

    // ===================== 👤 Kelola Pengguna =====================
    Route::get('/kelola-pengguna', fn() => view('kelolaPengguna'))->name('kelolaPengguna');
});
