@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Form Tambah Data Pemesanan</div>

                <div class="card-body">
                    <form method="POST" action="/pemesanan" enctype="multipart/form-data">
                        @csrf

                        {{-- No Pemesanan --}}
                        <div class="mb-3">
                            <label for="noPemesanan" class="form-label">No Pemesanan</label>
                            <input type="text" name="noPemesanan" class="form-control" id="noPemesanan">
                        </div>

                        {{-- Pilih Kamar --}}
                        <div class="mb-3">
                            <label for="kamars_id" class="form-label">Kamar</label>
                            <select name="kamars_id" id="kamars_id" class="form-control">
                                <option value="">-- Pilih Kamar --</option>
                                @foreach ($kamar as $item)
                                    <option value="{{ $item->id }}">{{ $item->noKamar }} - {{ $item->tipeKamar }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Tanggal Masuk --}}
                        <div class="mb-3">
                            <label for="tglMasuk" class="form-label">Tanggal Masuk</label>
                            <input type="date" name="tglMasuk" class="form-control" id="tglMasuk">
                        </div>

                        {{-- Tanggal Keluar --}}
                        <div class="mb-3">
                            <label for="tglKeluar" class="form-label">Tanggal Keluar</label>
                            <input type="date" name="tglKeluar" class="form-control" id="tglKeluar">
                        </div>

                        {{-- Pilih Pelanggan --}}
                        <div class="mb-3">
                            <label for="pelanggans_id" class="form-label">Pelanggan</label>
                            <select name="pelanggans_id" id="pelanggans_id" class="form-control">
                                <option value="">-- Pilih Pelanggan --</option>
                                @foreach ($pelanggan as $item)
                                    <option value="{{ $item->idPelanggan }}">{{ $item->namaPelanggan }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Tombol Submit --}}
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
