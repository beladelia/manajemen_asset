public function index()
{
    // Ambil data dari model Website
    $total = Website::count(); // jumlah total website
    $aktif = Website::where('status', 'Aktif')->count();
    $maintenance = Website::where('status', 'Maintenance')->count();
    $tidakAktif = Website::where('status', 'Tidak Aktif')->count();

    // Kirim data ke view
    return view('kelolaWebsite', compact('total', 'aktif', 'maintenance', 'tidakAktif'));
}
