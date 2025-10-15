@extends('layouts.app')

@section('title', 'Kelola Pengguna')

@section('content')
<div class="container-fluid p-4 bg-light">
    <div class="card shadow-sm p-4 border-0 rounded-4">
        <h4 class="fw-bold mb-4" style="color: #0a0a0a;">Kelola Pengguna</h4>

        {{-- Filter Section --}}
        <div class="row g-3 align-items-end mb-4">
            <div class="col-md-3">
                <label class="fw-semibold mb-1">Role</label>
                <select class="form-select">
                    <option>Semua</option>
                    <option>User</option>
                    <option>Admin Bidang</option>
                    <option>Teknisi</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="fw-semibold mb-1">Status</label>
                <select class="form-select">
                    <option>Semua</option>
                    <option>Aktif</option>
                    <option>Nonaktif</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="fw-semibold mb-1 d-block invisible">Generate</label>
                <button class="btn text-white w-100 py-2 fw-semibold" style="background-color: #800000; border-radius: 10px;">Generate</button>
            </div>
        </div>

        {{-- Search and Add --}}
        <div class="row align-items-center mb-3">
            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control" placeholder="Cari nama/username/email">
                </div>
            </div>
            <div class="col-md-6 text-end">
                <button class="btn text-white px-4 fw-semibold" style="background-color: #800000; border-radius: 12px;">Tambah Pengguna</button>
            </div>
        </div>

        {{-- Table --}}
        <div class="table-responsive bg-white rounded-4 shadow-sm p-3">
            <table class="table align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Username/email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Bidang</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Andi Saputra</td>
                        <td>andi01@gmail.com</td>
                        <td>User</td>
                        <td><span class="badge bg-success">Aktif</span></td>
                        <td>Banglola</td>
                        <td class="text-center">
                            <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-slash-circle"></i></button>
                            <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Budi Pratama</td>
                        <td>budipra@gmail.com</td>
                        <td>Admin Bidang</td>
                        <td><span class="badge bg-secondary">Nonaktif</span></td>
                        <td>Banglola</td>
                        <td class="text-center">
                            <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-slash-circle"></i></button>
                            <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Bela Adelia</td>
                        <td>adelilabel@gmail.com</td>
                        <td>Teknisi</td>
                        <td><span class="badge bg-success">Aktif</span></td>
                        <td>Infratik</td>
                        <td class="text-center">
                            <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-slash-circle"></i></button>
                            <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
