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
                <input type="text" class="form-control me-2" placeholder="Cari nama/URL/aplikasi/IP" style="width: 280px;">
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
                    <th>URL/Domain</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>ROUTER</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td><span class="badge bg-success">Aktif</span></td>
                    <td><button class="btn btn-light btn-sm"><i class="fa fa-eye"></i> Detail</button></td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>SERVER</td>
                    <td>-</td>
                    <td>SIEHAN</td>
                    <td><a href="#">siehan.kemhan.go.id</a></td>
                    <td><span class="badge bg-success">Aktif</span></td>
                    <td><button class="btn btn-light btn-sm"><i class="fa fa-eye"></i> Detail</button></td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>STORAGE</td>
                    <td>-</td>
                    <td>SIEHAN</td>
                    <td><a href="#">siehan.kemhan.go.id</a></td>
                    <td><span class="badge bg-success">Aktif</span></td>
                    <td><button class="btn btn-light btn-sm"><i class="fa fa-eye"></i> Detail</button></td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>SERVER</td>
                    <td>192.168.1.6</td>
                    <td>CLOUD STORAGE - PUSDATIN CLOUD</td>
                    <td><a href="#">192.168.1.6</a></td>
                    <td><span class="badge bg-warning text-dark">Maintenance</span></td>
                    <td><button class="btn btn-light btn-sm"><i class="fa fa-eye"></i> Detail</button></td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>SERVER</td>
                    <td>192.168.1.7</td>
                    <td>CMS - PUSDATIN CLOUD</td>
                    <td><a href="#">http://192.168.1.6:88/</a></td>
                    <td><span class="badge bg-success">Aktif</span></td>
                    <td><button class="btn btn-light btn-sm"><i class="fa fa-eye"></i> Detail</button></td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>SERVER</td>
                    <td>192.168.1.8</td>
                    <td>DOCKER MANAGEMENT - PUSDATIN CLOUD</td>
                    <td><a href="#">http://192.168.1.6:9000/</a></td>
                    <td><span class="badge bg-danger">Tidak Aktif</span></td>
                    <td><button class="btn btn-light btn-sm"><i class="fa fa-eye"></i> Detail</button></td>
                </tr>
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
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">IP Address</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Aplikasi yang Terhubung</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-md-8 mb-3">
                            <label class="form-label">URL/Domain</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Lokasi Rak Server</label>
                            <select class="form-select">
                                @for ($i = 1; $i <= 17; $i++)
                                    <option>Rack {{ $i }}</option>
                                @endfor
                            </select>
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
