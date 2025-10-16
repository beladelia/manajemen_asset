<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServerController extends Controller
{
    public function index()
    {
        // Data dummy server sementara
        $servers = [
            (object)[
                'id' => 1,
                'nama' => 'Server 1',
                'status' => 'Aktif',
                'lokasi' => 'Rack 1',
                'brand' => 'Dell',
                'ip' => '192.168.1.10',
            ],
            (object)[
                'id' => 2,
                'nama' => 'Server 2',
                'status' => 'Maintenance',
                'lokasi' => 'Rack 2',
                'brand' => 'HP',
                'ip' => '192.168.1.11',
            ],
        ];

        return view('kelolaServer', compact('servers'));
    }

    public function show($id)
    {
        // Dummy data sementara
        $server = (object) [
            'id' => $id,
            'nama' => 'Server ' . $id,
            'status' => 'Maintenance',
            'lokasi' => 'Rack 1',
            'brand' => 'Dell EMC',
            'tanggal' => '12 Januari 2023',
            'ip' => '192.168.1.6',
            'subnet' => '255.255.255.0',
            'gateway' => '192.168.1.1',
            'aplikasi' => 'CLOUD STORAGE - PUSDATIN CLOUD',
            'url' => 'http://192.168.1.6',
            'riwayat' => [
                '15 Februari 2024 - Penggantian Harddisk',
                '10 Desember 2023 - Pembaruan Firmware',
                '5 November 2023 - Pembersihan Internal',
            ],
            'gambar' => asset('images/server-rack.png'),
        ];

        return view('layouts.detailServer', compact('server'));
    }

    public function edit($id)
    {
        return "Halaman edit server ID: " . $id;
    }

    public function destroy($id)
    {
        return redirect()->route('kelolaServer')->with('success', 'Server berhasil dihapus!');
    }
}
