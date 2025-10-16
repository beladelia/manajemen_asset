@extends('layouts.app')

@section('title', 'Kelola Website')

@section('content')
<div class="container-fluid px-4 py-4">

  <h3 class="fw-bold mb-4">Kelola Website</h3>

  {{-- Statistik --}}
  <div class="row mb-4">
    <div class="col-md-3">
      <div class="card text-center shadow-sm border-0 bg-white py-3">
        <h5 class="fw-bold mb-1">Total</h5>
        <h4>3</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-center shadow-sm border-0 bg-white py-3">
        <h5 class="fw-bold mb-1">Aktif</h5>
        <h4>2</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-center shadow-sm border-0 bg-white py-3">
        <h5 class="fw-bold mb-1">Maintenance</h5>
        <h4>0</h4>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-center shadow-sm border-0 bg-white py-3">
        <h5 class="fw-bold mb-1">Tidak Aktif</h5>
        <h4>1</h4>
      </div>
    </div>
  </div>

  {{-- Pencarian dan Tambah --}}
  <div class="d-flex justify-content-between align-items-center mb-3">
    <div class="col-md-4">
      <div class="input-group">
        <span class="input-group-text bg-white border-end-0">
          <i class="bi bi-search"></i>
        </span>
        <input type="text" class="form-control rounded-end-pill border-start-0"
          placeholder="Cari App/Server/Admin...">
      </div>
    </div>
    <button class="btn btn-maroon text-white px-4 rounded-pill" data-bs-toggle="modal"
      data-bs-target="#tambahModal">
      + Tambah Aplikasi
    </button>
  </div>

  {{-- Daftar Website --}}
  <div class="row g-4 mt-2">

    {{-- Card 1 --}}
    <div class="col-md-4">
      <div class="card shadow-sm border-0 p-3" style="border-radius: 15px; background-color: #fff;">
        <div class="d-flex justify-content-between align-items-start mb-2">
          <h5 class="fw-bold mb-0">Portal Kemhan RI</h5>
          <span class="badge bg-success px-3 py-2" style="border-radius: 8px;">Aktif</span>
        </div>

        <p class="mb-1">
          <a href="https://Portal.Kemhan.RI.go.id" target="_blank" class="text-decoration-none fw-medium">
            <i class="bi bi-box-arrow-up-right"></i> https://Portal.Kemhan.RI.go.id
          </a>
        </p>

        <p class="mb-1 server"><i class="bi bi-hdd"></i> Server A</p>
        <p class="mb-2 bidang"><i class="bi bi-person-fill"></i> Bidang Banglola</p>

        <div class="d-flex justify-content-end gap-2 mt-3">
          <button class="btn btn-light btn-sm border d-flex align-items-center gap-1">
            <i class="bi bi-eye"></i> Detail
          </button>
          <button class="btn btn-light btn-sm border d-flex align-items-center gap-1 btn-edit">
            <i class="bi bi-pencil-square"></i> Edit
          </button>
          <button class="btn btn-danger btn-sm d-flex align-items-center gap-1 btn-hapus">
            <i class="bi bi-trash"></i> Delete
          </button>
        </div>
      </div>
    </div>

    {{-- Card 2 --}}
    <div class="col-md-4">
      <div class="card shadow-sm border-0 p-3" style="border-radius: 15px; background-color: #fff;">
        <div class="d-flex justify-content-between align-items-start mb-2">
          <h5 class="fw-bold mb-0">PPID KEMHAN</h5>
          <span class="badge bg-danger px-3 py-2" style="border-radius: 8px;">Tidak Aktif</span>
        </div>

        <p class="mb-1">
          <a href="https://PPID.Kemhan.go.id" target="_blank" class="text-decoration-none fw-medium">
            <i class="bi bi-box-arrow-up-right"></i> https://PPID.Kemhan.go.id
          </a>
        </p>

        <p class="mb-1 server"><i class="bi bi-hdd"></i> Server B</p>
        <p class="mb-2 bidang"><i class="bi bi-person-fill"></i> Bidang Banglola</p>

        <div class="d-flex justify-content-end gap-2 mt-3">
          <button class="btn btn-light btn-sm border d-flex align-items-center gap-1">
            <i class="bi bi-eye"></i> Detail
          </button>
          <button class="btn btn-light btn-sm border d-flex align-items-center gap-1 btn-edit">
            <i class="bi bi-pencil-square"></i> Edit
          </button>
          <button class="btn btn-danger btn-sm d-flex align-items-center gap-1 btn-hapus">
            <i class="bi bi-trash"></i> Delete
          </button>
        </div>
      </div>
    </div>

    {{-- Card 3 --}}
    <div class="col-md-4">
      <div class="card shadow-sm border-0 p-3" style="border-radius: 15px; background-color: #fff;">
        <div class="d-flex justify-content-between align-items-start mb-2">
          <h5 class="fw-bold mb-0">Intranet Pusdatin</h5>
          <span class="badge bg-success px-3 py-2" style="border-radius: 8px;">Aktif</span>
        </div>

        <p class="mb-1">
          <a href="https://Intranet.Pusdatin.go.id" target="_blank" class="text-decoration-none fw-medium">
            <i class="bi bi-box-arrow-up-right"></i> https://Intranet.Pusdatin.go.id
          </a>
        </p>

        <p class="mb-1 server"><i class="bi bi-hdd"></i> Server C</p>
        <p class="mb-2 bidang"><i class="bi bi-person-fill"></i> Bidang Infratik</p>

        <div class="d-flex justify-content-end gap-2 mt-3">
          <button class="btn btn-light btn-sm border d-flex align-items-center gap-1">
            <i class="bi bi-eye"></i> Detail
          </button>
          <button class="btn btn-light btn-sm border d-flex align-items-center gap-1 btn-edit">
            <i class="bi bi-pencil-square"></i> Edit
          </button>
          <button class="btn btn-danger btn-sm d-flex align-items-center gap-1 btn-hapus">
            <i class="bi bi-trash"></i> Delete
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Modal Tambah Aplikasi --}}
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 rounded-4 shadow">
      <div class="modal-header bg-white border-0">
        <h5 class="modal-title fw-bold">Tambah Aplikasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label class="form-label fw-semibold">Nama Aplikasi</label>
            <input type="text" class="form-control" placeholder="Masukkan nama aplikasi">
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label fw-semibold">URL</label>
              <input type="text" class="form-control" placeholder="https://example.com">
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label fw-semibold">Server</label>
              <input type="text" class="form-control" placeholder="Contoh: Server A">
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label fw-semibold">Bidang</label>
              <select class="form-select">
                <option selected>Pilih Bidang</option>
                <option value="Banglola">Banglola</option>
                <option value="Infratik">Infratik</option>
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label fw-semibold">Status</label>
              <select class="form-select">
                <option selected>Pilih Status</option>
                <option value="Aktif">Aktif</option>
                <option value="Maintenance">Maintenance</option>
                <option value="Tidak Aktif">Tidak Aktif</option>
              </select>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label fw-semibold">Tahun Pengadaan</label>
            <input type="number" class="form-control" placeholder="Masukkan tahun pengadaan">
          </div>

          <div class="mb-3">
            <label class="form-label fw-semibold">Keterangan</label>
            <textarea class="form-control" rows="2" placeholder="Tambahkan keterangan (opsional)"></textarea>
          </div>

          <div class="d-flex justify-content-end gap-2 mt-4">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-maroon text-white">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

{{-- Modal Konfirmasi Hapus --}}
<div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 rounded-4 shadow">
      <div class="modal-body text-center p-4">
        <div class="mb-3">
          <i class="bi bi-exclamation-triangle-fill text-danger" style="font-size: 2rem;"></i>
        </div>

        <h5 class="fw-bold mb-2">Hapus Data Aplikasi?</h5>
        <p class="text-muted mb-4" id="hapusNamaApp">
          Apakah Anda yakin ingin menghapus aplikasi ini dari daftar Aplikasi?
        </p>

        <div class="d-flex justify-content-center gap-2">
          <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-danger px-4" id="konfirmasiHapusBtn">Ya, hapus</button>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Modal Edit Aplikasi --}}
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 rounded-4 shadow">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold" id="editModalLabel">Edit Aplikasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formEditApp">
          <div class="mb-3">
            <label for="editNama" class="form-label">Nama Aplikasi</label>
            <input type="text" class="form-control" id="editNama">
          </div>
          <div class="mb-3">
            <label for="editUrl" class="form-label">URL</label>
            <input type="text" class="form-control" id="editUrl">
          </div>
          <div class="mb-3">
            <label for="editServer" class="form-label">Server</label>
            <input type="text" class="form-control" id="editServer">
          </div>
          <div class="mb-3">
            <label for="editBidang" class="form-label">Bidang</label>
            <input type="text" class="form-control" id="editBidang">
          </div>
          <div class="mb-3">
            <label for="editStatus" class="form-label">Status</label>
            <select class="form-select" id="editStatus">
              <option value="Aktif">Aktif</option>
              <option value="Tidak Aktif">Tidak Aktif</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="editTahun" class="form-label">Tahun Pengadaan</label>
            <input type="text" class="form-control" id="editTahun">
          </div>
          <div class="mb-3">
            <label for="editKet" class="form-label">Keterangan</label>
            <textarea class="form-control" id="editKet" rows="2"></textarea>
          </div>
          <button type="button" class="btn btn-primary w-100" id="simpanPerubahanBtn">Simpan Perubahan</button>
        </form>
      </div>
    </div>
  </div>
</div>

{{-- Style tambahan --}}
<style>
  body {
    background-color: #f5f5f9;
  }

  .card {
    transition: transform 0.2s ease-in-out;
  }

  .card:hover {
    transform: translateY(-5px);
  }

  .btn-maroon {
    background-color: #7A1313;
  }

  .btn-maroon:hover {
    background-color: #5e0e0e;
  }

  .btn-danger {
    background-color: #C0392B;
    border: none;
  }

  .btn-danger:hover {
    background-color: #a5281d;
  }

  .modal-content {
    border-radius: 15px;
  }
</style>

{{-- Script untuk modal hapus & edit --}}
<script>
  let appToDelete = null;
  let appToEdit = null;

  // Hapus
  document.querySelectorAll('.btn-hapus').forEach(btn => {
    btn.addEventListener('click', function () {
      const card = this.closest('.card');
      const appName = card.querySelector('h5').innerText;
      document.getElementById('hapusNamaApp').innerText =
        `Apakah Anda yakin ingin menghapus ${appName} dari daftar Aplikasi?`;
      appToDelete = appName;
      const hapusModal = new bootstrap.Modal(document.getElementById('hapusModal'));
      hapusModal.show();
    });
  });

  document.getElementById('konfirmasiHapusBtn').addEventListener('click', function () {
    alert(`Aplikasi "${appToDelete}" berhasil dihapus (simulasi).`);
    const modal = bootstrap.Modal.getInstance(document.getElementById('hapusModal'));
    modal.hide();
  });

  // Edit
  document.querySelectorAll('.btn-edit').forEach(btn => {
    btn.addEventListener('click', function () {
      const card = this.closest('.card');
      const nama = card.querySelector('h5').innerText;
      const url = card.querySelector('a').href;
      const server = card.querySelector('.server')?.innerText?.replace('Server ', '') || '';
      const bidang = card.querySelector('.bidang')?.innerText?.replace('Bidang ', '') || '';
      const status = card.querySelector('.badge').innerText;

      document.getElementById('editNama').value = nama;
      document.getElementById('editUrl').value = url;
      document.getElementById('editServer').value = server;
      document.getElementById('editBidang').value = bidang;
      document.getElementById('editStatus').value = status;
      document.getElementById('editTahun').value = '';
      document.getElementById('editKet').value = '';

      const editModal = new bootstrap.Modal(document.getElementById('editModal'));
      editModal.show();
    });
  });

  document.getElementById('simpanPerubahanBtn').addEventListener('click', function () {
    const nama = document.getElementById('editNama').value;
    const url = document.getElementById('editUrl').value;
    const server = document.getElementById('editServer').value;
    const bidang = document.getElementById('editBidang').value;
    const status = document.getElementById('editStatus').value;
    const tahun = document.getElementById('editTahun').value;
    const ket = document.getElementById('editKet').value;

    alert(`Perubahan disimpan untuk "${nama}" (simulasi).`);
    const modal = bootstrap.Modal.getInstance(document.getElementById('editModal'));
    modal.hide();
  });
</script>

@endsection
