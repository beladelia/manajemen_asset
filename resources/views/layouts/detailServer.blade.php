@extends('layouts.app')

@section('title', 'Detail Server')

@section('content')
<div class="container-fluid">
    <div class="card p-4">
        <h4 class="mb-4">Kelola Server</h4>
        <h5 class="mb-4">{{ $server['nama'] }} - {{ $server['lokasi'] }}</h5>

        <div class="row mb-4">
            <div class="col-md-3">
                <h6>Status</h6>
                <p><span class="badge bg-warning text-dark">{{ $server['status'] }}</span></p>
            </div>
            <div class="col-md-3">
                <h6>Lokasi Rak</h6>
                <p>{{ $server['lokasi'] }}</p>
            </div>
            <div class="col-md-3">
                <h6>Brand</h6>
                <p><strong>{{ $server['brand'] }}</strong></p>
            </div>
            <div class="col-md-3">
                <h6>Tanggal Ditambahkan</h6>
                <p>{{ $server['tanggal'] }}</p>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-6">
                <div class="p-3 border rounded bg-light">
                    <h6>Network</h6>
                    <p>
                        Jaringan PUSDATIN<br>
                        IP Address: {{ $server['ip'] }}<br>
                        Subnet: {{ $server['subnet'] }}<br>
                        Gateway: {{ $server['gateway'] }}
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 border rounded bg-light">
                    <h6>Aplikasi Terhubung</h6>
                    <p>
                        {{ $server['aplikasi'] }}<br>
                        URL: <a href="{{ $server['url'] }}" target="_blank">{{ $server['url'] }}</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="row align-items-center mb-4">
            <div class="col-md-8">
                <div class="p-3 border rounded bg-light">
                    <h6>Riwayat Maintenance</h6>
                    <ul class="mb-0">
                        @foreach ($server['riwayat'] as $r)
                            <li>{{ $r }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/server-rack.png') }}" alt="Server Rack" class="img-fluid mb-2" style="max-height: 300px;">
                <p><strong>{{ $server['brand'] }}</strong></p>
            </div>
        </div>

        <div class="text-end">
            <a href="{{ url('/kelola-server') }}" class="btn btn-secondary">Kembali</a>
            <button class="btn btn-outline-primary"><i class="fa fa-edit"></i> Edit</button>
            <button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
        </div>
    </div>
</div>
@endsection
