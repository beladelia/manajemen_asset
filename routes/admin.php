<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\WebsiteController;

Route::middleware('role:admin')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

    // ===================== 🖥️ Kelola Server =====================
    Route::get('/admin/server', [ServerController::class, 'index'])->name('admin.server');

    // ===================== 🌐 Kelola Website =====================
    Route::get('/admin/website', [WebsiteController::class, 'index'])->name('admin.website');
});
