@extends('layouts.app')

@section('title', 'Kelola Server')

@section('content')
<div class="container-fluid px-4 mt-3">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold">Kelola Server</h4>
        <div>
            <a href="{{ route('server.edit', $server->id) }}" class="btn btn-outline-dark me-2">
                <i class="bi bi-pencil-square me-1"></i> Edit
            </a>
            <form action="{{ route('server.destroy', $server->id) }}" method="POST" class="d-inline" 
                  onsubmit="return confirm('Yakin mau hapus server ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    <i class="bi bi-trash3 me-1"></i> Delete
                </button>
            </form>
        </div>
    </div>

    <div class="card shadow-sm p-4 rounded-4">
        <h5 class="fw-semibold mb-4">{{ $server->nama }} - {{ $server->lokasi }}</h5>

        {{-- Informasi Utama --}}
        <div class="row text-center mb-4">
            <div class="col-md-3">
                <h6 class="text-secondary mb-1">Status</h6>
                <h5 class="fw-bold">{{ ucfirst($server->status) }}</h5>
            </div>
            <div class="col-md-3">
                <h6 class="text-secondary mb-1">Lokasi Rak</h6>
                <h5 class="fw-bold">{{ $server->lokasi }}</h5>
            </div>
            <div class="col-md-3">
                <h6 class="text-secondary mb-1">Brand</h6>
                <h5 class="fw-bold">{{ $server->brand }}</h5>
            </div>
            <div class="col-md-3">
                <h6 class="text-secondary mb-1">Tanggal Ditambahkan</h6>
                <h5 class="fw-bold">{{ $server->tanggal }}</h5>
            </div>
        </div>

        {{-- Network dan Aplikasi Terhubung --}}
        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <div class="p-3 rounded-4 bg-light shadow-sm h-100">
                    <h6 class="fw-bold mb-2">Network</h6>
                    <p class="mb-1">Jaringan: <strong>{{ $server->jaringan ?? 'PUSDATIN' }}</strong></p>
                    <p class="mb-1">IP Address: {{ $server->ip }}</p>
                    <p class="mb-1">Subnet: {{ $server->subnet }}</p>
                    <p class="mb-0">Gateway: {{ $server->gateway }}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 rounded-4 bg-light shadow-sm h-100">
                    <h6 class="fw-bold mb-2">Aplikasi Terhubung</h6>
                    <p class="mb-1">{{ $server->aplikasi }}</p>
                    <p class="mb-0">URL : <a href="{{ $server->url }}" target="_blank">{{ $server->url }}</a></p>
                </div>
            </div>
        </div>

        {{-- Riwayat Maintenance + Gambar --}}
        <div class="row g-3 mb-4 align-items-center">
            <div class="col-md-8">
                <div class="p-3 rounded-4 bg-light shadow-sm">
                    <h6 class="fw-bold mb-2">Riwayat Maintenance</h6>
                    <ul class="mb-0">
                        @foreach($server->riwayat as $riwayat)
                            <li>{{ $riwayat }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="p-3 rounded-4 bg-light shadow-sm">
                    <img src="{{ asset('images/rakServer.png') }}" alt="Server Rack" class="img-fluid mb-2" style="max-height: 250px;">
                    <p class="fw-bold mb-0">{{ $server->brand }}</p>
                </div>
            </div>
        </div>

        {{-- Urutan Server dan Spesifikasi --}}
        <div class="row g-3">
            <div class="col-md-6">
                <div class="p-3 rounded-4 bg-light shadow-sm">
                    <h6 class="fw-bold mb-2">Urutan Server (dari bawah ke atas)</h6>
                    <ol class="mb-0">
                        <li>Server Backup Storage</li>
                        <li>Server Database</li>
                        <li>Server Aplikasi</li>
                        <li>Server Proxy / Firewall</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 rounded-4 bg-light shadow-sm">
                    <h6 class="fw-bold mb-2">Spesifikasi Server</h6>
                    <ul class="mb-0">
                        <li>Processor: Intel Xeon Silver 4314</li>
                        <li>RAM: 64 GB DDR4 ECC</li>
                        <li>Storage: 4TB SSD RAID 10</li>
                        <li>OS: Ubuntu Server 22.04 LTS</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
