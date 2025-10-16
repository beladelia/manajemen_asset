<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index()
    {
        // Misal tampilkan dashboard utama untuk superadmin
        return view('dashboard');
    }
}
