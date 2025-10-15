@extends('layouts.app')

@section('title', 'Kelola Pengguna')

@section('content')
<div class="container-fluid px-4 py-4">

  <h3 class="fw-bold mb-4">Kelola Pengguna</h3>

  {{-- Filter dan Generate --}}
  <div class="d-flex align-items-end justify-content-start gap-3 mb-4 flex-wrap">
    <div>
      <label for="role" class="form-label fw-semibold">Role</label>
      <select id="role" class="form-select shadow-sm rounded-3">
        <option>Semua</option>
        <option>User</option>
        <option>Admin</option>
      </select>
    </div>

    <div>
      <label for="status" class="form-label fw-semibold">Status</label>
      <select id="status" class="form-select shadow-sm rounded-3">
        <option>Semua</option>
        <option>Aktif</option>
        <option>Nonaktif</option>
      </select>
    </div>

    <div>
      <label for="bidang" class="form-label fw-semibold">Bidang</label>
      <select id="bidang" class="form-select shadow-sm rounded-3">
        <option>Semua</option>
        <option>Banglola</option>
        <option>Infratik</option>
      </select>
    </div>

    <div class="ms-auto">
      <button class="btn btn-maroon text-white px-4 py-2 fw-semibold rounded-pill">Generate</button>
    </div>
  </div>

  {{-- Tabel Pengguna --}}
  <div class="card shadow-sm border-0">
    <div class="card-body">
      <table class="table align-middle text-center">
        <thead class="table-light">
          <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Username / Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Bidang</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Andi Saputra</td>
            <td>andi01@gmail.com</td>
            <td>User</td>
            <td><span class="badge bg-success px-3 py-2">Aktif</span></td>
            <td>Banglola</td>
            <td>
              <button class="btn btn-light btn-sm border rounded-pill"><i class="bi bi-pencil"></i></button>
              <button class="btn btn-light btn-sm border rounded-pill"><i class="bi bi-trash"></i></button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Sinta Rahma</td>
            <td>sinta@email.com</td>
            <td>Admin</td>
            <td><span class="badge bg-danger px-3 py-2">Nonaktif</span></td>
            <td>Infratik</td>
            <td>
              <button class="btn btn-light btn-sm border rounded-pill"><i class="bi bi-pencil"></i></button>
              <button class="btn btn-light btn-sm border rounded-pill"><i class="bi bi-trash"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

{{-- Style Tambahan --}}
<style>
  body {
    background-color: #f5f5f9;
  }

  .form-select {
    min-width: 180px;
    padding: 10px;
  }

  .btn-maroon {
    background-color: #7A1313;
    border: none;
  }

  .btn-maroon:hover {
    background-color: #5e0e0e;
  }

  .card {
    border-radius: 15px;
  }

  .table th {
    font-weight: 600;
    background-color: #fafafa;
  }

  .badge {
    border-radius: 8px;
  }
</style>
@endsection
