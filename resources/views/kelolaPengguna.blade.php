@extends('layouts.app')

@section('title', 'Kelola Pengguna')

@section('content')
<div class="container-fluid p-4" style="background-color: #f5f5f5;">
    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body p-4">
            <h4 class="fw-bold mb-4" style="color: #0a0a0a;">Kelola Pengguna</h4>

            {{-- Filter Section --}}
            <div class="row g-3 mb-4">
                <div class="col-md-3">
                    <label class="form-label fw-semibold mb-2" style="color: #333;">Role</label>
                    <select class="form-select" id="filterRole" style="border-radius: 8px; border: 1px solid #ddd;">
                        <option value="">Semua</option>
                        <option value="Admin Bidang">Admin Bidang</option>
                        <option value="Pimpinan">Pimpinan</option>
                        <option value="Teknisi">Teknisi</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold mb-2" style="color: #333;">Status</label>
                    <select class="form-select" id="filterStatus" style="border-radius: 8px; border: 1px solid #ddd;">
                        <option value="">Semua</option>
                        <option value="Aktif">Aktif</option>
                        <option value="NonAktif">Nonaktif</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label mb-2" style="visibility: hidden;">Generate</label>
                    <button id="btnGenerate" class="btn text-white w-100 fw-semibold" style="background-color: #800000; border-radius: 10px; padding: 10px;">
                        Generate
                    </button>
                </div>
            </div>

            {{-- Search and Add Button --}}
            <div class="row align-items-center mb-4">
                <div class="col-md-6 mb-3 mb-md-0">
                    <div class="input-group" style="border-radius: 10px;">
                        <span class="input-group-text bg-white border-end-0" style="border-radius: 10px 0 0 10px; border: 1px solid #ddd;">
                            <i class="bi bi-search text-muted"></i>
                        </span>
                        <input type="text" id="searchInput" class="form-control border-start-0" placeholder="Cari nama/username/email" 
                               style="border-radius: 0 10px 10px 0; border: 1px solid #ddd; border-left: none;">
                    </div>
                </div>
                <div class="col-md-6 text-end">
                    <button class="btn text-white px-4 py-2 fw-semibold" style="background-color: #800000; border-radius: 12px;" 
                            data-bs-toggle="modal" data-bs-target="#modalTambahPengguna">
                        Tambah Pengguna
                    </button>
                </div>
            </div>

            {{-- Table --}}
            <div class="table-responsive bg-white rounded-4 shadow-sm">
                <table class="table table-hover align-middle mb-0" id="tableUser">
                    <thead style="background-color: #f8f9fa;">
                        <tr>
                            <th class="fw-semibold py-3 px-3" style="color: #666;">No</th>
                            <th class="fw-semibold py-3" style="color: #666;">Nama Lengkap</th>
                            <th class="fw-semibold py-3" style="color: #666;">Username/email</th>
                            <th class="fw-semibold py-3" style="color: #666;">Role</th>
                            <th class="fw-semibold py-3" style="color: #666;">Status</th>
                            <th class="fw-semibold py-3" style="color: #666;">Bidang</th>
                            <th class="fw-semibold py-3 text-center" style="color: #666;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <tr>
                            <td class="px-3">1</td>
                            <td>Andi Saputra</td>
                            <td>andi01@gmail.com</td>
                            <td>Admin Bidang</td>
                            <td><span class="badge rounded-pill px-3 py-2" style="background-color: #d4edda; color: #155724; font-weight: 500;">Aktif</span></td>
                            <td>Banglola</td>
                            <td class="text-center">
                                <button class="btn btn-sm me-1 btn-edit" 
                                        style="background-color: transparent; border: none;" 
                                        title="Edit"
                                        data-id="1"
                                        data-nama="Andi Saputra"
                                        data-email="andi01@gmail.com"
                                        data-role="Admin Bidang"
                                        data-bidang="Banglola"
                                        data-telepon="08123456789">
                                    <i class="bi bi-pencil-fill" style="color: #666;"></i>
                                </button>
                                <button class="btn btn-sm me-1" style="background-color: transparent; border: none;" title="Toggle Status">
                                    <i class="bi bi-slash-circle-fill" style="color: #666;"></i>
                                </button>
                                <button class="btn btn-sm" style="background-color: transparent; border: none;" title="Delete">
                                    <i class="bi bi-trash-fill" style="color: #666;"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3">2</td>
                            <td>Budi Pratama</td>
                            <td>budipra@gmail.com</td>
                            <td>Pimpinan</td>
                            <td><span class="badge rounded-pill px-3 py-2" style="background-color: #e2e3e5; color: #383d41; font-weight: 500;">NonAktif</span></td>
                            <td>Banglola</td>
                            <td class="text-center">
                                <button class="btn btn-sm me-1 btn-edit" 
                                        style="background-color: transparent; border: none;" 
                                        title="Edit"
                                        data-id="2"
                                        data-nama="Budi Pratama"
                                        data-email="budipra@gmail.com"
                                        data-role="Pimpinan"
                                        data-bidang="Banglola"
                                        data-telepon="08234567890">
                                    <i class="bi bi-pencil-fill" style="color: #666;"></i>
                                </button>
                                <button class="btn btn-sm me-1" style="background-color: transparent; border: none;" title="Toggle Status">
                                    <i class="bi bi-slash-circle-fill" style="color: #666;"></i>
                                </button>
                                <button class="btn btn-sm" style="background-color: transparent; border: none;" title="Delete">
                                    <i class="bi bi-trash-fill" style="color: #666;"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3">3</td>
                            <td>Abduh Revan</td>
                            <td>vann4@gmail.com</td>
                            <td>Admin Bidang</td>
                            <td><span class="badge rounded-pill px-3 py-2" style="background-color: #d4edda; color: #155724; font-weight: 500;">Aktif</span></td>
                            <td>Pamsis</td>
                            <td class="text-center">
                                <button class="btn btn-sm me-1 btn-edit" 
                                        style="background-color: transparent; border: none;" 
                                        title="Edit"
                                        data-id="3"
                                        data-nama="Abduh Revan"
                                        data-email="vann4@gmail.com"
                                        data-role="Admin Bidang"
                                        data-bidang="Pamsis"
                                        data-telepon="08345678901">
                                    <i class="bi bi-pencil-fill" style="color: #666;"></i>
                                </button>
                                <button class="btn btn-sm me-1" style="background-color: transparent; border: none;" title="Toggle Status">
                                    <i class="bi bi-slash-circle-fill" style="color: #666;"></i>
                                </button>
                                <button class="btn btn-sm" style="background-color: transparent; border: none;" title="Delete">
                                    <i class="bi bi-trash-fill" style="color: #666;"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3">4</td>
                            <td>Nayla Zharif</td>
                            <td>naynay@gmail.com</td>
                            <td>Admin Bidang</td>
                            <td><span class="badge rounded-pill px-3 py-2" style="background-color: #e2e3e5; color: #383d41; font-weight: 500;">NonAktif</span></td>
                            <td>Pamsis</td>
                            <td class="text-center">
                                <button class="btn btn-sm me-1 btn-edit" 
                                        style="background-color: transparent; border: none;" 
                                        title="Edit"
                                        data-id="4"
                                        data-nama="Nayla Zharif"
                                        data-email="naynay@gmail.com"
                                        data-role="Admin Bidang"
                                        data-bidang="Pamsis"
                                        data-telepon="08456789012">
                                    <i class="bi bi-pencil-fill" style="color: #666;"></i>
                                </button>
                                <button class="btn btn-sm me-1" style="background-color: transparent; border: none;" title="Toggle Status">
                                    <i class="bi bi-slash-circle-fill" style="color: #666;"></i>
                                </button>
                                <button class="btn btn-sm" style="background-color: transparent; border: none;" title="Delete">
                                    <i class="bi bi-trash-fill" style="color: #666;"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-3">5</td>
                            <td>Bela Adelia</td>
                            <td>adeliabel@gmail.com</td>
                            <td>Pimpinan</td>
                            <td><span class="badge rounded-pill px-3 py-2" style="background-color: #d4edda; color: #155724; font-weight: 500;">Aktif</span></td>
                            <td>Infratik</td>
                            <td class="text-center">
                                <button class="btn btn-sm me-1 btn-edit" 
                                        style="background-color: transparent; border: none;" 
                                        title="Edit"
                                        data-id="5"
                                        data-nama="Bela Adelia"
                                        data-email="adeliabel@gmail.com"
                                        data-role="Pimpinan"
                                        data-bidang="Infratik"
                                        data-telepon="08567890123">
                                    <i class="bi bi-pencil-fill" style="color: #666;"></i>
                                </button>
                                <button class="btn btn-sm me-1" style="background-color: transparent; border: none;" title="Toggle Status">
                                    <i class="bi bi-slash-circle-fill" style="color: #666;"></i>
                                </button>
                                <button class="btn btn-sm" style="background-color: transparent; border: none;" title="Delete">
                                    <i class="bi bi-trash-fill" style="color: #666;"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- Modal Tambah Pengguna --}}
<div class="modal fade" id="modalTambahPengguna" tabindex="-1" aria-labelledby="modalTambahPenggunaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 15px; border: none;">
            {{-- Modal Header --}}
            <div class="modal-header text-white" style="background-color: #800000; border-radius: 15px 15px 0 0; padding: 20px 30px;">
                <h5 class="modal-title fw-bold" id="modalTambahPenggunaLabel">Tambah Pengguna</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            {{-- Modal Body --}}
            <div class="modal-body" style="padding: 30px;">
                <form id="formTambahPengguna">
                    {{-- Nama Lengkap --}}
                    <div class="mb-3">
                        <label for="namaLengkap" class="form-label fw-semibold">
                            Nama Lengkap<span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="namaLengkap" placeholder="Contoh: Andi Saputra" 
                               style="border-radius: 8px; padding: 10px 15px; border: 1px solid #ddd;" required>
                    </div>

                    {{-- Username/Email --}}
                    <div class="mb-3">
                        <label for="usernameEmail" class="form-label fw-semibold">
                            Username/Email<span class="text-danger">*</span>
                        </label>
                        <input type="email" class="form-control" id="usernameEmail" placeholder="Contoh: andisaputra@gmail.com" 
                               style="border-radius: 8px; padding: 10px 15px; border: 1px solid #ddd;" required>
                    </div>

                    {{-- Password --}}
                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold">
                            Password<span class="text-danger">*</span>
                        </label>
                        <input type="password" class="form-control" id="password" 
                               style="border-radius: 8px; padding: 10px 15px; border: 1px solid #ddd;" required>
                    </div>

                    {{-- Konfirmasi Password --}}
                    <div class="mb-3">
                        <label for="konfirmasiPassword" class="form-label fw-semibold">
                            Konfirmasi Password<span class="text-danger">*</span>
                        </label>
                        <input type="password" class="form-control" id="konfirmasiPassword" 
                               style="border-radius: 8px; padding: 10px 15px; border: 1px solid #ddd;" required>
                    </div>

                    {{-- Role dan Bidang --}}
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="role" class="form-label fw-semibold">
                                Role<span class="text-danger">*</span>
                            </label>
                            <select class="form-select" id="role" style="border-radius: 8px; padding: 10px 15px; border: 1px solid #ddd;" required>
                                <option value="" selected disabled>Pilih Role</option>
                                <option value="Admin Bidang">Admin Bidang</option>
                                <option value="Pimpinan">Pimpinan</option>
                                <option value="Teknisi">Teknisi</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="bidang" class="form-label fw-semibold">
                                Bidang<span class="text-danger">*</span>
                            </label>
                            <select class="form-select" id="bidang" style="border-radius: 8px; padding: 10px 15px; border: 1px solid #ddd;" required>
                                <option value="" selected disabled>Pilih Bidang</option>
                                <option value="Banglola">Banglola</option>
                                <option value="Pamsis">Pamsis</option>
                                <option value="Infratik">Infratik</option>
                            </select>
                        </div>
                    </div>

                    {{-- Nomor Telepon --}}
                    <div class="mb-4">
                        <label for="nomorTelepon" class="form-label fw-semibold">Nomor Telepon</label>
                        <input type="tel" class="form-control" id="nomorTelepon" placeholder="Contoh: 08123456789" 
                               style="border-radius: 8px; padding: 10px 15px; border: 1px solid #ddd;">
                    </div>

                    {{-- Buttons --}}
                    <div class="d-flex justify-content-end gap-2 mt-4">
                        <button type="button" class="btn btn-outline-secondary px-4 py-2" data-bs-dismiss="modal" 
                                style="border-radius: 8px; font-weight: 600;">
                            Batal
                        </button>
                        <button type="submit" class="btn text-white px-4 py-2" 
                                style="background-color: #800000; border-radius: 8px; font-weight: 600;">
                            Tambah
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Modal Edit Pengguna --}}
<div class="modal fade" id="modalEditPengguna" tabindex="-1" aria-labelledby="modalEditPenggunaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 15px; border: none;">
            {{-- Modal Header --}}
            <div class="modal-header text-white" style="background-color: #800000; border-radius: 15px 15px 0 0; padding: 20px 30px;">
                <h5 class="modal-title fw-bold" id="modalEditPenggunaLabel">Edit Pengguna</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            {{-- Modal Body --}}
            <div class="modal-body" style="padding: 30px;">
                <form id="formEditPengguna">
                    <input type="hidden" id="editUserId">
                    
                    {{-- Nama Lengkap --}}
                    <div class="mb-3">
                        <label for="editNamaLengkap" class="form-label fw-semibold">
                            Nama Lengkap<span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="editNamaLengkap" placeholder="Contoh: Andi Saputra" 
                               style="border-radius: 8px; padding: 10px 15px; border: 1px solid #ddd;" required>
                    </div>

                    {{-- Username/Email --}}
                    <div class="mb-3">
                        <label for="editUsernameEmail" class="form-label fw-semibold">
                            Username/Email<span class="text-danger">*</span>
                        </label>
                        <input type="email" class="form-control" id="editUsernameEmail" placeholder="Contoh: andisaputra@gmail.com" 
                               style="border-radius: 8px; padding: 10px 15px; border: 1px solid #ddd;" required>
                    </div>

                    {{-- Password --}}
                    <div class="mb-3">
                        <label for="editPassword" class="form-label fw-semibold">
                            Password<span class="text-danger">*</span>
                        </label>
                        <input type="password" class="form-control" id="editPassword" 
                               style="border-radius: 8px; padding: 10px 15px; border: 1px solid #ddd;" required>
                    </div>

                    {{-- Konfirmasi Password --}}
                    <div class="mb-3">
                        <label for="editKonfirmasiPassword" class="form-label fw-semibold">
                            Konfirmasi Password<span class="text-danger">*</span>
                        </label>
                        <input type="password" class="form-control" id="editKonfirmasiPassword" 
                               style="border-radius: 8px; padding: 10px 15px; border: 1px solid #ddd;" required>
                    </div>

                    {{-- Role dan Bidang --}}
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="editRole" class="form-label fw-semibold">
                                Role<span class="text-danger">*</span>
                            </label>
                            <select class="form-select" id="editRole" style="border-radius: 8px; padding: 10px 15px; border: 1px solid #ddd;" required>
                                <option value="" disabled>Pilih Role</option>
                                <option value="Admin Bidang">Admin Bidang</option>
                                <option value="Pimpinan">Pimpinan</option>
                                <option value="Teknisi">Teknisi</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="editBidang" class="form-label fw-semibold">
                                Bidang<span class="text-danger">*</span>
                            </label>
                            <select class="form-select" id="editBidang" style="border-radius: 8px; padding: 10px 15px; border: 1px solid #ddd;" required>
                                <option value="" disabled>Pilih Bidang</option>
                                <option value="Banglola">Banglola</option>
                                <option value="Pamsis">Pamsis</option>
                                <option value="Infratik">Infratik</option>
                            </select>
                        </div>
                    </div>

                    {{-- Nomor Telepon --}}
                    <div class="mb-4">
                        <label for="editNomorTelepon" class="form-label fw-semibold">Nomor Telepon</label>
                        <input type="tel" class="form-control" id="editNomorTelepon" placeholder="Contoh: 08123456789" 
                               style="border-radius: 8px; padding: 10px 15px; border: 1px solid #ddd;">
                    </div>

                    {{-- Buttons --}}
                    <div class="d-flex justify-content-end gap-2 mt-4">
                        <button type="button" class="btn btn-outline-secondary px-4 py-2" data-bs-dismiss="modal" 
                                style="border-radius: 8px; font-weight: 600;">
                            Batal
                        </button>
                        <button type="submit" class="btn text-white px-4 py-2" 
                                style="background-color: #800000; border-radius: 8px; font-weight: 600;">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    // Data pengguna (simulasi data dari database)
    const allUsers = [
        { id: 1, nama: 'Andi Saputra', email: 'andi01@gmail.com', role: 'Admin Bidang', status: 'Aktif', bidang: 'Banglola', telepon: '08123456789' },
        { id: 2, nama: 'Budi Pratama', email: 'budipra@gmail.com', role: 'Pimpinan', status: 'NonAktif', bidang: 'Banglola', telepon: '08234567890' },
        { id: 3, nama: 'Abduh Revan', email: 'vann4@gmail.com', role: 'Admin Bidang', status: 'Aktif', bidang: 'Pamsis', telepon: '08345678901' },
        { id: 4, nama: 'Nayla Zharif', email: 'naynay@gmail.com', role: 'Admin Bidang', status: 'NonAktif', bidang: 'Pamsis', telepon: '08456789012' },
        { id: 5, nama: 'Bela Adelia', email: 'adeliabel@gmail.com', role: 'Pimpinan', status: 'Aktif', bidang: 'Infratik', telepon: '08567890123' }
    ];

    let filteredUsers = [...allUsers];

    // Fungsi untuk render tabel
    function renderTable(users) {
        const tableBody = document.getElementById('tableBody');
        tableBody.innerHTML = '';

        if (users.length === 0) {
            tableBody.innerHTML = `
                <tr>
                    <td colspan="7" class="text-center py-4" style="color: #999;">
                        <i class="bi bi-inbox" style="font-size: 2rem;"></i>
                        <p class="mt-2 mb-0">Tidak ada data ditemukan</p>
                    </td>
                </tr>
            `;
            return;
        }

        users.forEach((user, index) => {
            const statusClass = user.status === 'Aktif' 
                ? 'background-color: #d4edda; color: #155724;' 
                : 'background-color: #e2e3e5; color: #383d41;';
            
            const row = `
                <tr>
                    <td class="px-3">${index + 1}</td>
                    <td>${user.nama}</td>
                    <td>${user.email}</td>
                    <td>${user.role}</td>
                    <td><span class="badge rounded-pill px-3 py-2" style="${statusClass} font-weight: 500;">${user.status}</span></td>
                    <td>${user.bidang}</td>
                    <td class="text-center">
                        <button class="btn btn-sm me-1 btn-edit" 
                                style="background-color: transparent; border: none;" 
                                title="Edit"
                                data-id="${user.id}"
                                data-nama="${user.nama}"
                                data-email="${user.email}"
                                data-role="${user.role}"
                                data-bidang="${user.bidang}"
                                data-telepon="${user.telepon}">
                            <i class="bi bi-pencil-fill" style="color: #666;"></i>
                        </button>
                        <button class="btn btn-sm me-1" style="background-color: transparent; border: none;" title="Toggle Status">
                            <i class="bi bi-slash-circle-fill" style="color: #666;"></i>
                        </button>
                        <button class="btn btn-sm" style="background-color: transparent; border: none;" title="Delete">
                            <i class="bi bi-trash-fill" style="color: #666;"></i>
                        </button>
                    </td>
                </tr>
            `;
            tableBody.innerHTML += row;
        });

        // Re-attach event listeners untuk tombol edit
        attachEditEventListeners();
    }

    // Fungsi untuk filter data
    function filterData() {
        const roleFilter = document.getElementById('filterRole').value;
        const statusFilter = document.getElementById('filterStatus').value;
        const searchQuery = document.getElementById('searchInput').value.toLowerCase();

        filteredUsers = allUsers.filter(user => {
            const matchRole = !roleFilter || user.role === roleFilter;
            const matchStatus = !statusFilter || user.status === statusFilter;
            const matchSearch = !searchQuery || 
                user.nama.toLowerCase().includes(searchQuery) || 
                user.email.toLowerCase().includes(searchQuery);
            
            return matchRole && matchStatus && matchSearch;
        });

        renderTable(filteredUsers);
    }

    // Event listener untuk tombol Generate
    document.addEventListener('DOMContentLoaded', function() {
        // Render tabel awal
        renderTable(allUsers);

        // Tombol Generate (Filter)
        document.getElementById('btnGenerate').addEventListener('click', function() {
            filterData();
        });

        // Search input dengan debounce
        let searchTimeout;
        document.getElementById('searchInput').addEventListener('input', function() {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
                filterData();
            }, 300);
        });

        // Reset filter saat dropdown berubah (opsional - langsung filter tanpa klik Generate)
        // Hapus comment di bawah jika ingin auto-filter tanpa klik Generate
        // document.getElementById('filterRole').addEventListener('change', filterData);
        // document.getElementById('filterStatus').addEventListener('change', filterData);
    });

    // Fungsi untuk attach event listener ke tombol edit
    function attachEditEventListeners() {
        const btnEdits = document.querySelectorAll('.btn-edit');
        
        btnEdits.forEach(btn => {
            btn.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                const nama = this.getAttribute('data-nama');
                const email = this.getAttribute('data-email');
                const role = this.getAttribute('data-role');
                const bidang = this.getAttribute('data-bidang');
                const telepon = this.getAttribute('data-telepon');
                
                document.getElementById('editUserId').value = id;
                document.getElementById('editNamaLengkap').value = nama;
                document.getElementById('editUsernameEmail').value = email;
                document.getElementById('editRole').value = role;
                document.getElementById('editBidang').value = bidang;
                document.getElementById('editNomorTelepon').value = telepon;
                
                const modal = new bootstrap.Modal(document.getElementById('modalEditPengguna'));
                modal.show();
            });
        });
    }

    // Event listener untuk tombol edit (dijalankan setelah DOM ready)
    document.addEventListener('DOMContentLoaded', function() {
        attachEditEventListeners();
        
        // Handle form submit edit
        document.getElementById('formEditPengguna').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const password = document.getElementById('editPassword').value;
            const konfirmasiPassword = document.getElementById('editKonfirmasiPassword').value;
            
            if (password !== konfirmasiPassword) {
                alert('Password dan Konfirmasi Password tidak cocok!');
                return;
            }
            
            const formData = {
                id: document.getElementById('editUserId').value,
                nama: document.getElementById('editNamaLengkap').value,
                email: document.getElementById('editUsernameEmail').value,
                password: password,
                role: document.getElementById('editRole').value,
                bidang: document.getElementById('editBidang').value,
                telepon: document.getElementById('editNomorTelepon').value
            };
            
            console.log('Data yang akan diupdate:', formData);
            
            alert('Data berhasil diupdate!');
            bootstrap.Modal.getInstance(document.getElementById('modalEditPengguna')).hide();
        });
    });
</script>
@endpush