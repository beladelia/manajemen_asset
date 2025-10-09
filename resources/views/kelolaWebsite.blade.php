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
                <h4>{{ $total }}</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center shadow-sm border-0 bg-white py-3">
                <h5 class="fw-bold mb-1">Aktif</h5>
                <h4>{{ $aktif }}</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center shadow-sm border-0 bg-white py-3">
                <h5 class="fw-bold mb-1">Maintenance</h5>
                <h4>{{ $maintenance }}</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center shadow-sm border-0 bg-white py-3">
                <h5 class="fw-bold mb-1">Tidak Aktif</h5>
                <h4>{{ $tidakAktif }}</h4>
            </div>
        </div>
    </div>

    {{-- Pencarian dan Tambah --}}
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="col-md-4">
            <input type="text" class="form-control rounded-pill" placeholder="Cari App/Server/Admin...">
        </div>
        <a href="{{ route('website.create') }}" class="btn btn-maroon text-white px-4 rounded-pill">
            + Tambah Aplikasi
        </a>
    </div>

    {{-- Daftar Website --}}
    <div class="row g-3">
        @foreach($websites as $web)
        <div class="col-md-4">
            <div class="card shadow-sm border-0 p-3" 
                 style="border-radius: 15px; background-color: #fff;">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <h5 class="fw-bold">{{ $web->nama }}</h5>
                    <span class="badge 
                        @if($web->status == 'Aktif') bg-success 
                        @elseif($web->status == 'Maintenance') bg-warning 
                        @else bg-danger @endif">
                        {{ $web->status }}
                    </span>
                </div>

                <p class="mb-1">
                    <a href="{{ $web->url }}" target="_blank">{{ $web->url }}</a>
                </p>
                <p class="mb-1">
                    <i class="bi bi-hdd"></i> {{ $web->server }}
                </p>
                <p class="mb-2">
                    <i class="bi bi-person-fill"></i> {{ $web->bidang }}
                </p>

                <div class="d-flex justify-content-between mt-2">
                    <a href="{{ route('website.show', $web->id) }}" class="btn btn-light border">Detail</a>
                    <a href="{{ route('website.edit', $web->id) }}" class="btn btn-outline-secondary">Edit</a>
                    <form action="{{ route('website.destroy', $web->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus website ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

{{-- Style tambahan --}}
<style>
    .btn-maroon {
        background-color: #7A1313;
    }
    .btn-maroon:hover {
        background-color: #5e0e0e;
    }
</style>
@endsection
