<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServerController extends Controller
{
    public function show($id)
    {
        // Data dummy dulu
        $server = [
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
        ];

        return view('layouts.detailServer', compact('server'));
    }
}
