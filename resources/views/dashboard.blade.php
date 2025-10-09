@extends('layouts.app')

@section('title','Dashboard')

@section('content')
<div class="row mb-4">
    <div class="col-md-6 mb-3">
        <div class="card-summary">
            <h5>Ringkasan Website <span class="badge bg-light text-dark">Total: 33</span></h5>
            <div class="d-flex justify-content-around mt-3">
                <div>Aktif <br><b>20</b></div>
                <div>Maintenance <br><b>3</b></div>
                <div>Tidak Aktif <br><b>10</b></div>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="card-summary">
            <h5>Ringkasan Server <span class="badge bg-light text-dark">Total: 10</span></h5>
            <div class="d-flex justify-content-around mt-3">
                <div>Aktif <br><b>7</b></div>
                <div>Maintenance <br><b>2</b></div>
                <div>Tidak Aktif <br><b>1</b></div>
            </div>
        </div>
    </div>
</div>

<!-- Tabel Data -->
<div class="table-card">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5>Data Website & Server</h5>
        <div class="d-flex align-items-center gap-2">
            <select class="form-select form-select-sm w-auto">
                <option>Semua Status</option>
                <option>Aktif</option>
                <option>Maintenance</option>
                <option>Tidak Aktif</option>
            </select>
            <input type="text" class="form-control form-control-sm w-50" placeholder="Cari nama/URL/PIC">
        </div>
    </div>
    <table class="table table-striped align-middle">
        <thead>
            <tr>
                <th>Nama</th>
                <th>URL</th>
                <th>Status</th>
                <th>PIC</th>
                <th>Update Terakhir</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Portal Kemhan RI</td>
                <td><a href="#">https://Portal.Kemhan.RI.go.id</a></td>
                <td><span class="badge bg-success">Aktif</span></td>
                <td>Banglola</td>
                <td>2025-08-20</td>
            </tr>
            <tr>
                <td>PPID Kemhan</td>
                <td><a href="#">https://PPID.Kemhan.go.id</a></td>
                <td><span class="badge bg-danger">Tidak Aktif</span></td>
                <td>Banglola</td>
                <td>2023-08-01</td>
            </tr>
            <tr>
                <td>SVR-02-A</td>
                <td><a href="#">https://SVR.02.168.1.2</a></td>
                <td><span class="badge bg-warning text-dark">Maintenance</span></td>
                <td>Banglola</td>
                <td>2025-07-19</td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Grafik -->
<div class="row mt-5">
    <div class="col-md-6">
        <div class="card p-4">
            <h5 class="mb-3">Grafik Status Website</h5>
            <canvas id="websiteChart"></canvas>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card p-4">
            <h5 class="mb-3">Grafik Status Server</h5>
            <canvas id="serverChart"></canvas>
        </div>
    </div>
</div>

<!-- Tambahkan Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Data statis untuk sementara
    const websiteData = {
        labels: ['Aktif', 'Maintenance', 'Tidak Aktif'],
        datasets: [{
            label: 'Jumlah Website',
            data: [20, 3, 10],
            backgroundColor: ['#28a745', '#ffc107', '#dc3545']
        }]
    };

    const serverData = {
        labels: ['Aktif', 'Maintenance', 'Tidak Aktif'],
        datasets: [{
            label: 'Jumlah Server',
            data: [7, 2, 1],
            backgroundColor: ['#28a745', '#ffc107', '#dc3545']
        }]
    };

    // Pie Chart Website
    new Chart(document.getElementById('websiteChart'), {
        type: 'pie',
        data: websiteData,
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'bottom' },
                title: {
                    display: true,
                    text: 'Status Website'
                }
            }
        }
    });

    // Bar Chart Server
    new Chart(document.getElementById('serverChart'), {
        type: 'bar',
        data: serverData,
        options: {
            responsive: true,
            plugins: {
                legend: { display: false },
                title: {
                    display: true,
                    text: 'Status Server'
                }
            },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
</script>
@endsection
