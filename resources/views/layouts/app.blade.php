<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMASTER - Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Bisa juga tambahin Bootstrap atau Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="brand">
                <img src="{{ asset('images/logo kemhan.png') }}" alt="Logo">
                <h4>SIMASTER</h4>
            </div>
            <ul class="nav flex-column mt-4">
                <li><a href="#" class="active">Dashboard</a></li>
                <li><a href="#">Kelola Server</a></li>
                <li><a href="#">Kelola Website</a></li>
                <li><a href="#">Kelola Laporan</a></li>
                <li><a href="#">Kelola Pengguna</a></li>
            </ul>
        </div>

        <!-- Konten Utama -->
        <div class="content flex-grow-1 p-4">
            @yield('content')
        </div>
    </div>
</body>
</html>
