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
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0 rounded-4 shadow">
      <!-- Header -->
      <div class="modal-header bg-maroon text-white border-0 rounded-top-4">
        <h5 class="modal-title fw-bold">Tambah Aplikasi</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
  <!-- Body -->
  <div class="modal-body px-4 pb-4">
    <form id="formTambahAplikasi">
      
      <!-- Step Indicator -->
      <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="step text-center flex-fill">
          <div id="circle1" class="circle active">1</div>
          <small class="fw-semibold">Informasi</small>
        </div>
        <div class="line flex-fill"></div>
        <div class="step text-center flex-fill">
          <div id="circle2" class="circle">2</div>
          <small class="fw-semibold">Server</small>
        </div>
        <div class="line flex-fill"></div>
        <div class="step text-center flex-fill">
          <div id="circle3" class="circle">3</div>
          <small class="fw-semibold">Konfirmasi</small>
        </div>
      </div>

      <!-- Step 1 -->
      <div class="step-content active" id="step1">
        <h6 class="fw-bold mb-3">Informasi Aplikasi</h6>
        <div class="mb-3">
          <label class="form-label fw-semibold">Nama Aplikasi<span class="text-danger">*</span></label>
          <input type="text" id="namaAplikasi" class="form-control" placeholder="Contoh: Portal Kemhan RI">
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold">URL<span class="text-danger">*</span></label>
          <input type="url" id="urlAplikasi" class="form-control" placeholder="https://example.com">
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold">Bidang<span class="text-danger">*</span></label>
          <select id="bidangAplikasi" class="form-select">
            <option value="">Pilih Bidang</option>
            <option value="Banglola">Banglola</option>
            <option value="Infratik">Infratik</option>
          </select>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label class="form-label fw-semibold">Status<span class="text-danger">*</span></label>
            <select id="statusAplikasi" class="form-select">
              <option value="">Pilih Status</option>
              <option value="Aktif">Aktif</option>
              <option value="Maintenance">Maintenance</option>
              <option value="Tidak Aktif">Tidak Aktif</option>
            </select>
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label fw-semibold">Tahun Pengadaan<span class="text-danger">*</span></label>
            <input type="number" id="tahunAplikasi" class="form-control" placeholder="Contoh: 2023">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold">Keterangan</label>
          <textarea id="ketAplikasi" class="form-control" rows="2" placeholder="Deskripsi singkat aplikasi..."></textarea>
        </div>

        <div class="text-end mt-3">
          <button type="button" class="btn btn-maroon text-white" id="next1">Selanjutnya</button>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="step-content" id="step2">
        <h6 class="fw-bold mb-3">Informasi Server</h6>
        <div class="mb-3">
          <label class="form-label fw-semibold">Nama Server<span class="text-danger">*</span></label>
          <input type="text" id="namaServer" class="form-control" placeholder="Contoh: Server A">
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold">IP Address<span class="text-danger">*</span></label>
          <input type="text" id="ipServer" class="form-control" placeholder="Contoh: 192.168.1.10">
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label class="form-label fw-semibold">Lokasi Rak<span class="text-danger">*</span></label>
            <select id="rakServer" class="form-select">
              <option value="">Pilih Rak</option>
              <option value="Rack 1">Rack 1</option>
              <option value="Rack 2">Rack 2</option>
            </select>
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label fw-semibold">Unit/U<span class="text-danger">*</span></label>
            <input type="text" id="unitServer" class="form-control" placeholder="Contoh: U-12 sampai U-13">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold">Status Jaringan<span class="text-danger">*</span></label>
          <select id="statusJaringan" class="form-select">
            <option value="">Pilih Status</option>
            <option value="Online">Online</option>
            <option value="Offline">Offline</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold">Catatan Teknis</label>
          <textarea id="catatanTeknis" class="form-control" rows="2" placeholder="Catatan teknis atau konfigurasi..."></textarea>
        </div>

        <div class="d-flex justify-content-end gap-2 mt-3">
          <button type="button" class="btn btn-secondary" id="back1">Sebelumnya</button>
          <button type="button" class="btn btn-maroon text-white" id="next2">Selanjutnya</button>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="step-content" id="step3">
        <h6 class="fw-bold mb-3">Konfirmasi Data</h6>
        <div class="bg-light rounded-3 p-3 mb-3">
          <h6 class="fw-semibold mb-2">Informasi Aplikasi</h6>
          <ul class="list-unstyled small mb-0" id="confirmAplikasi"></ul>
        </div>
        <div class="bg-light rounded-3 p-3 mb-3">
          <h6 class="fw-semibold mb-2">Informasi Server</h6>
          <ul class="list-unstyled small mb-0" id="confirmServer"></ul>
        </div>

        <div class="d-flex justify-content-end gap-2 mt-3">
          <button type="button" class="btn btn-secondary" id="back2">Sebelumnya</button>
          <button type="submit" class="btn btn-primary text-white">Simpan</button>
        </div>

      </div>

    </form>
  </div>
</div>

  </div>
</div>

<!-- Style -->

<style>
  .bg-maroon { background-color: #7A1313 !important; }
  .circle {
    width: 32px; height: 32px; border-radius: 50%;
    background-color: #d1d1d1; color: #fff;
    display: flex; align-items: center; justify-content: center;
    font-weight: 600; margin: auto;
  }
  .circle.active { background-color: #7A1313; }
  .line { height: 3px; background-color: #ccc; }
  .step-content { display: none; }
  .step-content.active { display: block; }
</style>

<!-- Script -->

<script>
  const circles = [document.getElementById("circle1"), document.getElementById("circle2"), document.getElementById("circle3")];
  const steps = [document.getElementById("step1"), document.getElementById("step2"), document.getElementById("step3")];
  let current = 0;

  function showStep(index) {
    steps.forEach((s, i) => s.classList.toggle("active", i === index));
    circles.forEach((c, i) => c.classList.toggle("active", i <= index));
  }

  document.getElementById("next1").onclick = () => { current = 1; showStep(current); };
  document.getElementById("back1").onclick = () => { current = 0; showStep(current); };
  document.getElementById("next2").onclick = () => {
    current = 2;
    showStep(current);
    // tampilkan konfirmasi
    document.getElementById("confirmAplikasi").innerHTML = `
      <li><strong>Nama Aplikasi:</strong> ${document.getElementById("namaAplikasi").value}</li>
      <li><strong>URL:</strong> ${document.getElementById("urlAplikasi").value}</li>
      <li><strong>Bidang:</strong> ${document.getElementById("bidangAplikasi").value}</li>
      <li><strong>Status:</strong> ${document.getElementById("statusAplikasi").value}</li>
      <li><strong>Tahun:</strong> ${document.getElementById("tahunAplikasi").value}</li>
      <li><strong>Keterangan:</strong> ${document.getElementById("ketAplikasi").value || '-'}</li>
    `;
    document.getElementById("confirmServer").innerHTML = `
      <li><strong>Nama Server:</strong> ${document.getElementById("namaServer").value}</li>
      <li><strong>IP Address:</strong> ${document.getElementById("ipServer").value}</li>
      <li><strong>Lokasi Rak:</strong> ${document.getElementById("rakServer").value}</li>
      <li><strong>Unit/U:</strong> ${document.getElementById("unitServer").value}</li>
      <li><strong>Status Jaringan:</strong> ${document.getElementById("statusJaringan").value}</li>
      <li><strong>Catatan Teknis:</strong> ${document.getElementById("catatanTeknis").value || '-'}</li>
    `;
  };
  document.getElementById("back2").onclick = () => { current = 1; showStep(current); };

  showStep(current);
</script>


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

{{-- Modal Detail Aplikasi --}}
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0 rounded-4 shadow">
      <div class="modal-header bg-maroon text-white border-0">
        <h5 class="modal-title fw-bold" id="detailModalLabel">Detail Aplikasi</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        {{-- Tab Navigasi --}}
        <ul class="nav nav-tabs mb-3" id="detailTabs">
          <li class="nav-item">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tabInformasi">Informasi</button>
          </li>
          <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tabServer">Server</button>
          </li>
          <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tabRiwayat">Riwayat</button>
          </li>
        </ul>

        <div class="tab-content">
          {{-- Tab Informasi --}}
          <div class="tab-pane fade show active" id="tabInformasi">
            <div class="row g-3">
              <div class="col-md-6">
                <p class="fw-semibold mb-1">Nama Aplikasi</p>
                <p id="detailNama">-</p>
              </div>
              <div class="col-md-6">
                <p class="fw-semibold mb-1">URL</p>
                <p id="detailUrl">-</p>
              </div>
              <div class="col-md-6">
                <p class="fw-semibold mb-1">Server</p>
                <p id="detailServer">-</p>
              </div>
              <div class="col-md-6">
                <p class="fw-semibold mb-1">Bidang</p>
                <p id="detailBidang">-</p>
              </div>
              <div class="col-md-6">
                <p class="fw-semibold mb-1">Status</p>
                <p id="detailStatus">-</p>
              </div>
              <div class="col-md-6">
                <p class="fw-semibold mb-1">Tahun Pengadaan</p>
                <p id="detailTahun">-</p>
              </div>
              <div class="col-12">
                <p class="fw-semibold mb-1">Keterangan</p>
                <p id="detailKet">-</p>
              </div>
            </div>
          </div>

          {{-- Tab Server --}}
          <div class="tab-pane fade" id="tabServer">
            <p class="text-muted">Belum ada detail server untuk aplikasi ini.</p>
          </div>

          {{-- Tab Riwayat --}}
          <div class="tab-pane fade" id="tabRiwayat">
            <p class="text-muted">Belum ada riwayat perubahan data.</p>
          </div>
        </div>
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

  .bg-maroon {
  background-color: #7A1313 !important;
}

.nav-tabs .nav-link.active {
  color: #7A1313;
  font-weight: 600;
  border-bottom: 2px solid #7A1313;
}

.nav-tabs .nav-link {
  color: #555;
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
  
  // Detail
document.querySelectorAll('.btn-light.btn-sm.border.d-flex.align-items-center.gap-1').forEach(btn => {
  if (btn.innerText.includes("Detail")) {
    btn.addEventListener('click', function () {
      const card = this.closest('.card');
      const nama = card.querySelector('h5').innerText;
      const url = card.querySelector('a').href;
      const server = card.querySelector('.server')?.innerText?.replace('Server ', '') || '-';
      const bidang = card.querySelector('.bidang')?.innerText?.replace('Bidang ', '') || '-';
      const status = card.querySelector('.badge').innerText;
      const tahun = '2017'; // contoh, nanti bisa ambil dari DB
      const ket = `Portal utama Kemhan untuk akses informasi publik`; // contoh juga

      // Isi data ke modal
      document.getElementById('detailNama').innerText = nama;
      document.getElementById('detailUrl').innerText = url;
      document.getElementById('detailServer').innerText = server;
      document.getElementById('detailBidang').innerText = bidang;
      document.getElementById('detailStatus').innerText = status;
      document.getElementById('detailTahun').innerText = tahun;
      document.getElementById('detailKet').innerText = ket;

      const detailModal = new bootstrap.Modal(document.getElementById('detailModal'));
      detailModal.show();
    });
  }
});

</script>

@endsection
