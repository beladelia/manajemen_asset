<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PimpinanController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Hanya view-only: tidak ada tombol edit/delete
        return view('pimpinan.dashboard', compact('user'));
    }
}
