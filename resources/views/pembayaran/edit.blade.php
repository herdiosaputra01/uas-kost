@extends('layouts.template')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-header bg-warning text-white rounded-top-4">
                    <h5 class="mb-0"><i class="fa fa-edit me-2"></i>Edit Data Pembayaran</h5>
                </div>

                <div class="card-body">
                    <form method="POST" action="/pembayaran/{{ $pembayaran->id }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="idPembayaran" class="form-label">ID Pembayaran</label>
                            <input type="text" name="idPembayaran" id="idPembayaran"
                                class="form-control" value="{{ $pembayaran->idPembayaran }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="tglPembayaran" class="form-label">Tanggal Pembayaran</label>
                            <input type="date" name="tglPembayaran" id="tglPembayaran"
                                class="form-control" value="{{ $pembayaran->tglPembayaran }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="pemesanans_id" class="form-label">ID Pemesanan</label>
                            <select name="pemesanans_id" id="pemesanans_id" class="form-select" required>
                                <option value="">-- Pilih ID Pemesanan --</option>
                                @foreach($pemesanans as $pemesanan)
                                    <option value="{{ $pemesanan->id }}" {{ $pemesanan->id == $pembayaran->pemesanans_id ? 'selected' : '' }}>
                                        {{ $pemesanan->id }} - {{ $pemesanan->nama ?? 'Pemesanan #' . $pemesanan->id }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="/pembayaran" class="btn btn-secondary">
                                <i class="fa fa-arrow-left me-1"></i> Kembali
                            </a>
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-save me-1"></i> Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
