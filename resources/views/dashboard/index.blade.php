@extends('layouts.template')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container py-5">
    <h2 class="text-center fw-bold mb-5 text-primary">Selamat Datang, Admin!</h2>

    <div class="row justify-content-center mb-5">
        <!-- Profile Card -->
        <div class="col-lg-4 mb-4">
            <div class="card shadow-lg border-0 rounded-4 text-center p-4 position-relative bg-light">
                <div class="position-absolute top-0 start-50 translate-middle-y bg-primary text-white rounded-circle p-3 shadow-lg" style="width: 80px; height: 80px;">
                    <i class="fa fa-user fa-2x"></i>
                </div>
                <div class="mt-5 pt-3">
                    <h5 class="fw-bold mb-1">Admin Kost</h5>
                    <p class="text-muted mb-2">Kontrol penuh atas data kos Anda.</p>
                    <span class="badge bg-success">Online</span>
                </div>
            </div>
        </div>

        <!-- Dashboard Card Menu -->
        <div class="col-lg-8">
            <div class="row g-4">
                @php
                    $cards = [
                        ['title' => 'Data Pelanggan', 'text' => 'Kelola pelanggan kost', 'link' => '/pelanggan', 'color' => 'primary', 'icon' => 'fa-users', 'gradient' => 'bg-gradient-primary'],
                        ['title' => 'Data Kamar', 'text' => 'Kelola semua kamar', 'link' => '/kamar', 'color' => 'success', 'icon' => 'fa-door-closed', 'gradient' => 'bg-gradient-success'],
                        ['title' => 'Pemesanan', 'text' => 'Lihat & kelola pemesanan', 'link' => '/pemesanan', 'color' => 'danger', 'icon' => 'fa-calendar-check', 'gradient' => 'bg-gradient-danger'],
                        ['title' => 'Pembayaran', 'text' => 'Cek & input transaksi', 'link' => '/pembayaran', 'color' => 'warning', 'icon' => 'fa-wallet', 'gradient' => 'bg-gradient-warning'],
                    ];
                @endphp

                @foreach ($cards as $card)
                <div class="col-md-6">
                    <div class="card shadow-lg border-0 rounded-4 h-100 hover-card">
                        <div class="card-body text-center p-4">
                            <div class="icon-circle {{ $card['gradient'] }} text-white shadow mb-3">
                                <i class="fas {{ $card['icon'] }} fa-2x"></i>
                            </div>
                            <h5 class="fw-bold">{{ $card['title'] }}</h5>
                            <p class="text-muted">{{ $card['text'] }}</p>
                            <a href="{{ $card['link'] }}" class="btn btn-outline-{{ $card['color'] }} mt-2 px-4">Lihat</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

{{-- Styles --}}
@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<style>
    .icon-circle {
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: auto;
        border-radius: 50%;
        font-size: 24px;
    }

    .hover-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }

    .bg-gradient-primary {
        background: linear-gradient(135deg, #007bff, #3399ff);
    }

    .bg-gradient-success {
        background: linear-gradient(135deg, #28a745, #5cd65c);
    }

    .bg-gradient-danger {
        background: linear-gradient(135deg, #dc3545, #ff6b6b);
    }

    .bg-gradient-warning {
        background: linear-gradient(135deg, #ffc107, #ffd966);
    }
</style>
@endpush
@endsection


{{-- @extends('layouts.template')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container mt-5">
    <div class="row">
        <!-- Profile Admin -->
        <div class="col-md-4 mb-4">
            <div class="card text-center shadow">
                <div class="card-body"> --}}
                    {{-- <img src="{{ asset('images/01.jpg') }}" alt="Admin Photo" class="img-fluid rounded-circle mb-3" width="200"> --}}
                    {{-- <h5 class="card-title">Admin Kost</h5>
                    <p class="card-text">Selamat datang di halaman admin. Kelola data dengan mudah dan cepat.</p>
                </div>
            </div>
        </div> --}}

        <!-- Dashboard Cards -->
        {{-- <div class="col-md-8">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card border-primary shadow">
                        <div class="card-body text-center">
                            <h5 class="card-title">Data Pelanggan</h5>
                            <p class="card-text">Kelola Pelanggan</p>
                            <a href="/pelanggan" class="btn btn-primary">Lihat</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card border-success shadow">
                        <div class="card-body text-center">
                            <h5 class="card-title">Data Kamar</h5>
                            <p class="card-text">Kelola data kamar kost</p>
                            <a href="/kamar" class="btn btn-success">Lihat</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card border-danger shadow">
                        <div class="card-body text-center">
                            <h5 class="card-title">Pemesanan</h5>
                            <p class="card-text">Lihat laporan lengkap</p>
                            <a href="/pemesanan" class="btn btn-danger">Lihat</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card border-warning shadow">
                        <div class="card-body text-center">
                            <h5 class="card-title">Pembayaran</h5>
                            <p class="card-text">Cek dan input pembayaran</p>
                            <a href="/pembayaran" class="btn btn-warning">Lihat</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

</div>
@endsection --}}
