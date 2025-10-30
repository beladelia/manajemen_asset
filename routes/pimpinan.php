<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PimpinanController;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\WebsiteController;

Route::middleware('role:pimpinan')->group(function () {
    Route::get('/pimpinan', [PimpinanController::class, 'index'])->name('pimpinan.dashboard');

    // ===================== 📄 Laporan =====================
    Route::get('/pimpinan/laporan', fn() => view('pimpinan.laporan'))->name('pimpinan.laporan');

    // ===================== 🌐 Website =====================
    Route::get('/pimpinan/website', [WebsiteController::class, 'index'])->name('pimpinan.website');

    // ===================== 🖥️ Server =====================
    Route::get('/pimpinan/server', [ServerController::class, 'index'])->name('pimpinan.server');
});
