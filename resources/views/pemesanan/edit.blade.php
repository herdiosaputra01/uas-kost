@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Form Edit Data Pemesanan</div>

                <div class="card-body">
                    <form method="post" action="/pemesanan/{{ $pemesanan->id }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">No Pemesanan</label>
                            <input type="text" value="{{ $pemesanan->noPemesanan }}" name="noPemesanan" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kamar</label>
                            <select name="kamars_id" class="form-control">
                                <option value="">-- Pilih Kamar --</option>
                                @foreach ($kamar as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == $pemesanan->kamars_id ? 'selected' : '' }}>
                                        {{ $item->noKamar }} - {{ $item->tipeKamar }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tanggal Masuk</label>
                            <input type="date" value="{{ $pemesanan->tglMasuk }}" name="tglMasuk" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tanggal Keluar</label>
                            <input type="date" value="{{ $pemesanan->tglKeluar }}" name="tglKeluar" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Pelanggan</label>
                            <select name="pelanggans_id" class="form-control">
                                <option value="">-- Pilih Pelanggan --</option>
                                @foreach ($pelanggan as $item)
                                    <option value="{{ $item->idPelanggan }}" {{ $item->idPelanggan == $pemesanan->pelanggans_id ? 'selected' : '' }}>
                                        {{ $item->namaPelanggan }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
