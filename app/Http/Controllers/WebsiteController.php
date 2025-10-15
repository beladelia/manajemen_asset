<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        // ambil semua data website
        $total = Website::count();
        $aktif = Website::where('status', 'Aktif')->count();
        $maintenance = Website::where('status', 'Maintenance')->count();
        $tidakAktif = Website::where('status', 'Tidak Aktif')->count();
        $websites = Website::all();

        // kirim ke view
        return view('kelolaWebsite', compact('total', 'aktif', 'maintenance', 'tidakAktif', 'websites'));
    }
}
