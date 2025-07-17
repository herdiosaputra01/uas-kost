@extends('layouts.template')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow rounded-4">
                <div class="card-header bg-warning text-white fw-bold fs-5">
                   <h5 class="mb-0"><i class="fa fa-edit me-2"></i>Tambah Data Pembayaran</h5> 
                </div>

                <div class="card-body">
                    <form method="post" action="/pembayaran" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="idPembayaran" class="form-label">ID Pembayaran</label>
                            <input type="text" name="idPembayaran" class="form-control" id="idPembayaran" placeholder="Contoh: PAY001" required>
                        </div>

                        <div class="mb-3">
                            <label for="tglPembayaran" class="form-label">Tanggal Pembayaran</label>
                            <input type="date" name="tglPembayaran" class="form-control" id="tglPembayaran" required>
                        </div>

                        <div class="mb-3">
                            <label for="pemesanans_id" class="form-label">Pilih Pemesanan</label>
                            <select name="pemesanans_id" class="form-select" id="pemesanans_id" required>
                                <option value="">-- Pilih Pemesanan --</option>
                                @foreach($pemesanan as $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->noPemesanan }} | 
                                        {{ $item->pelanggan->namaPelanggan ?? 'Tanpa Nama' }} | 
                                        {{ $item->kamar->noKamar ?? 'Kamar?' }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success rounded-pill px-4">Simpan Pembayaran</button>
                        <a href="/pembayaran" class="btn btn-secondary rounded-pill px-4">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
