@extends('layouts.app')

@section('title', 'Kelola Server')

@section('content')
<div class="container-fluid">
    <!-- Ringkasan -->
    <div class="row mb-4 text-center">
        <div class="col-md-3 mb-2">
            <div class="card-summary">
                <h5>Total</h5>
                <h2>50</h2>
            </div>
        </div>
        <div class="col-md-3 mb-2">
            <div class="card-summary">
                <h5>Aktif</h5>
                <h2>30</h2>
            </div>
        </div>
        <div class="col-md-3 mb-2">
            <div class="card-summary">
                <h5>Maintenance</h5>
                <h2>5</h2>
            </div>
        </div>
        <div class="col-md-3 mb-2">
            <div class="card-summary">
                <h5>Tidak Aktif</h5>
                <h2>15</h2>
            </div>
        </div>
    </div>

    <!-- Daftar Server -->
    <div class="table-card">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="d-flex">
                <input type="text" class="form-control me-2" placeholder="Cari nama/aplikasi/IP" style="width: 280px;">
                <select class="form-select" style="width: 130px;">
                    @for ($i = 1; $i <= 17; $i++)
                        <option>Rack {{ $i }}</option>
                    @endfor
                </select>
            </div>
            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#tambahModal">
                <i class="fa fa-plus"></i> Tambah Perangkat
            </button>
        </div>

        <table class="table table-hover align-middle">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Perangkat</th>
                    <th>IP</th>
                    <th>Aplikasi</th>
                    <th>Bidang</th>
                    <th>Unit</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{-- Contoh data dummy --}}
                @php
                    $servers = [
                        ['id' => 1, 'nama' => 'ROUTER', 'ip' => '-', 'aplikasi' => '-', 'bidang' => 'PUSDATIN', 'unit' => 'U-01 s.d U-02', 'status' => 'Aktif'],
                        ['id' => 2, 'nama' => 'SERVER', 'ip' => '-', 'aplikasi' => 'SIEHAN', 'bidang' => 'BANGLOLA', 'unit' => 'U-05 s.d U-06', 'status' => 'Aktif'],
                        ['id' => 3, 'nama' => 'STORAGE', 'ip' => '-', 'aplikasi' => 'SIEHAN', 'bidang' => 'INFRA TIK', 'unit' => 'U-07 s.d U-08', 'status' => 'Aktif'],
                        ['id' => 4, 'nama' => 'SERVER', 'ip' => '192.168.1.6', 'aplikasi' => 'CLOUD STORAGE - PUSDATIN CLOUD', 'bidang' => 'INFRA TIK', 'unit' => 'U-10 s.d U-12', 'status' => 'Maintenance'],
                        ['id' => 5, 'nama' => 'SERVER', 'ip' => '192.168.1.7', 'aplikasi' => 'CMS - PUSDATIN CLOUD', 'bidang' => 'PAMSIS', 'unit' => 'U-12 s.d U-13', 'status' => 'Aktif'],
                        ['id' => 6, 'nama' => 'SERVER', 'ip' => '192.168.1.8', 'aplikasi' => 'DOCKER MANAGEMENT - PUSDATIN CLOUD', 'bidang' => 'BANGLOLA', 'unit' => 'U-15 s.d U-16', 'status' => 'Tidak Aktif'],
                    ];
                @endphp

                @foreach ($servers as $index => $server)
                    <tr>
                        <td>{{ $index + 1 }}.</td>
                        <td>{{ $server['nama'] }}</td>
                        <td>{{ $server['ip'] }}</td>
                        <td>{{ $server['aplikasi'] }}</td>
                        <td>{{ $server['bidang'] }}</td>
                        <td>{{ $server['unit'] }}</td>
                        <td>
                            @if ($server['status'] === 'Aktif')
                                <span class="badge bg-success">Aktif</span>
                            @elseif ($server['status'] === 'Maintenance')
                                <span class="badge bg-warning text-dark">Maintenance</span>
                            @else
                                <span class="badge bg-danger">Tidak Aktif</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('kelolaServer.detail', $server['id']) }}" class="btn btn-light btn-sm">
                                <i class="fa fa-eye"></i> Detail
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Tambah Perangkat -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content p-3">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="tambahModalLabel">Tambah Perangkat Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Nama Perangkat</label>
                        <input type="text" class="form-control" placeholder="Contoh: SERVER 1">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">IP Address</label>
                        <input type="text" class="form-control" placeholder="Contoh: 192.168.1.10">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Aplikasi yang Terhubung</label>
                        <input type="text" class="form-control" placeholder="Contoh: CMS - PUSDATIN CLOUD">
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Bidang</label>
                            <input type="text" class="form-control" placeholder="Contoh: PUSDATIN">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Unit</label>
                            <input type="text" class="form-control" placeholder="Contoh: U-12 s.d U-13">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer border-0">
                <button class="btn btn-primary">Simpan</button>
                <button class="btn btn-light" data-bs-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
@endsection
