<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - SIMASTER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
        }
        .sidebar {
            background-color: #660708;
            color: #fff;
            min-height: 100vh;
            padding: 20px 10px;
            position: fixed;
            top: 0; left: 0;
            width: 230px;
        }
        .sidebar .nav-link {
            color: #fff;
            margin: 8px 0;
            border-radius: 8px;
            transition: 0.2s;
        }
        .sidebar .nav-link.active, .sidebar .nav-link:hover {
            background: #fff;
            color: #000;
            font-weight: bold;
        }
        .main {
            margin-left: 230px;
            width: calc(100% - 230px);
        }
        .navbar-custom {
            background: #fff;
            border-bottom: 1px solid #ddd;
            padding: 12px 20px;
        }
        .card-summary {
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
            background: #fff;
        }
        .card-summary h5 {
            font-size: 16px;
            font-weight: 600;
        }
        .table-card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
            background: #fff;
            padding: 20px;
        }
        .badge {
            font-size: 0.8rem;
            padding: 6px 10px;
            border-radius: 12px;
        }
    </style>
</head>
<body>
<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="text-center mb-4">
            <img src="{{ asset('images/logo_kemhan.png') }}" alt="Logo" width="80">
            <h5 class="mt-2">SIMASTER</h5>
            <p class="small">Sistem Informasi Manajemen Aset Terpadu</p>
        </div>
        <h6>Super Admin</h6>
        <nav class="nav flex-column">
            <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" 
               href="{{ route('dashboard') }}">
               <i class="fa fa-home"></i> Dashboard
            </a>
            <a class="nav-link {{ request()->routeIs('kelolaServer') ? 'active' : '' }}" 
               href="{{ route('kelolaServer') }}">
               <i class="fa fa-server"></i> Kelola Server
            </a>
            <a class="nav-link {{ request()->routeIs('kelolaWebsite') ? 'active' : '' }}" 
               href="{{ route('kelolaWebsite') }}">
               <i class="fa fa-globe"></i> Kelola Website
            </a>
            <a class="nav-link {{ request()->routeIs('kelolaLaporan') ? 'active' : '' }}" 
               href="{{ route('kelolaLaporan') }}">
               <i class="fa fa-file-alt"></i> Kelola Laporan
            </a>
            <a class="nav-link {{ request()->routeIs('kelolaPengguna') ? 'active' : '' }}" 
               href="{{ route('kelolaPengguna') }}">
               <i class="fa fa-users"></i> Kelola Pengguna
            </a>
        </nav>

        <form action="{{ route('logout') }}" method="POST" class="mt-4 text-center">
            @csrf
            <button type="submit" class="btn btn-danger w-75">Logout</button>
        </form>
    </div>

    <!-- Main Content -->
    <div class="main">
        <!-- Navbar -->
        <div class="navbar-custom d-flex justify-content-between align-items-center">
            <h5 class="m-0">@yield('title','Dashboard')</h5>
            <div>
                <i class="fa fa-bell me-3"></i>
                <span><i class="fa fa-user-circle"></i> Kementerian Pertahanan RI</span>
            </div>
        </div>

        <div class="p-4">
            @yield('content')
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
