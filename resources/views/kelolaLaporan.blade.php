@extends('layouts.app')

@section('title', 'Kelola Laporan')

@section('content')
<div class="container-fluid px-4 py-4" style="background-color: #f4f5f7; min-height: 100vh;">

  <div class="card border-0 shadow-sm rounded-4 p-4 mb-4" style="background-color: #fff;">
    <h4 class="fw-bold mb-4">Kelola Laporan</h4>

    {{-- Filter Bagian Atas --}}
    <div class="d-flex flex-wrap align-items-end gap-3 mb-4">
      <div>
        <label class="form-label fw-semibold mb-1">Rentang Tanggal</label>
        <div class="d-flex align-items-center gap-2">
          <input type="date" class="form-control" style="width: 160px;">
          <span class="fw-semibold">s.d</span>
          <input type="date" class="form-control" style="width: 160px;">
        </div>
      </div>

      <div>
        <label class="form-label fw-semibold mb-1">Aset</label>
        <select class="form-select" style="width: 180px;">
          <option selected>Semua</option>
          <option>Server-01</option>
          <option>Server-02</option>
          <option>SIKOMPAS</option>
        </select>
      </div>

      <div class="mt-auto">
        <button class="btn text-dark fw-semibold px-4" 
          style="background-color: #fff; border: 1px solid #ddd;">Generate</button>
      </div>
    </div>

    {{-- Bagian Hasil Laporan --}}
    <div class="card border-0 rounded-4 shadow-sm p-3" style="background-color: #fff;">
      <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
        <h6 class="fw-bold m-0">Hasil Laporan</h6>

        <div class="d-flex align-items-center gap-2">
          <div class="input-group" style="width: 250px;">
            <span class="input-group-text bg-white border-end-0">
              <i class="bi bi-search"></i>
            </span>
            <input type="text" class="form-control border-start-0" placeholder="Cari nama/URL/PIC">
          </div>

          <button class="btn text-white fw-semibold px-3" style="background-color: #7A1313;">
            <i class="bi bi-file-earmark-pdf"></i> PDF
          </button>
          <button class="btn text-white fw-semibold px-3" style="background-color: #7A1313;">
            <i class="bi bi-file-earmark-excel"></i> Excel
          </button>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table align-middle">
          <thead>
            <tr style="border-bottom: 2px solid #ddd;">
              <th>No</th>
              <th>Tanggal & Waktu</th>
              <th>Kategori</th>
              <th>Aset</th>
              <th>Severity</th>
              <th>PIC</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>21-09-2025 14:00</td>
              <td>Maintenance</td>
              <td>Server-01</td>
              <td><span class="badge rounded-pill" style="background-color:#c8e6c9; color:#2e7d32;">Rendah</span></td>
              <td>Infratik</td>
              <td>Patch keamanan berhasil dipasang</td>
            </tr>
            <tr>
              <td>2</td>
              <td>21-09-2025 16:20</td>
              <td>Downtime</td>
              <td>SIKOMPAS</td>
              <td><span class="badge rounded-pill" style="background-color:#ffcdd2; color:#c62828;">Tinggi</span></td>
              <td>Banglola</td>
              <td>Website tidak bisa diakses selama 2 jam</td>
            </tr>
            <tr>
              <td>3</td>
              <td>22-09-2025 09:00</td>
              <td>Aktivitas</td>
              <td>SIKOMPAS</td>
              <td><span class="badge rounded-pill" style="background-color:#c8e6c9; color:#2e7d32;">Rendah</span></td>
              <td>Banglola</td>
              <td>Tambah data web</td>
            </tr>
            <tr>
              <td>4</td>
              <td>21-09-2025 14:00</td>
              <td>Maintenance</td>
              <td>Server-02</td>
              <td><span class="badge rounded-pill" style="background-color:#ffcdd2; color:#c62828;">Tinggi</span></td>
              <td>Infratik</td>
              <td>Kinerja server lambat sudah 3 hari</td>
            </tr>
            <tr>
              <td>5</td>
              <td>22-09-2025 14:00</td>
              <td>Maintenance</td>
              <td>Server-02</td>
              <td><span class="badge rounded-pill" style="background-color:#ffcdd2; color:#c62828;">Tinggi</span></td>
              <td>Infratik</td>
              <td>Kinerja server lambat sudah 3 hari</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p class="text-muted small mt-2">Showing 5 of 5 data</p>
    </div>
  </div>
</div>

{{-- Custom Styles --}}
<style>
  .table thead th {
    font-weight: 600;
    background-color: #fff;
  }

  .table tbody tr:hover {
    background-color: #f8f9fa;
  }

  .form-control,
  .form-select {
    border-radius: 10px;
  }

  .input-group-text {
    border-radius: 10px 0 0 10px !important;
  }
</style>
@endsection
