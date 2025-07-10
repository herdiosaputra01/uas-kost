@extends('layouts.template')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container mt-5">
    <div class="row">
        <!-- Profile Admin -->
        <div class="col-md-4 mb-4">
            <div class="card text-center shadow">
                <div class="card-body">
                    {{-- <img src="{{ asset('images/01.jpg') }}" alt="Admin Photo" class="img-fluid rounded-circle mb-3" width="200"> --}}
                    <h5 class="card-title">Admin Kost</h5>
                    <p class="card-text">Selamat datang di halaman admin. Kelola data dengan mudah dan cepat.</p>
                </div>
            </div>
        </div>

        <!-- Dashboard Cards -->
        <div class="col-md-8">
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
@endsection
