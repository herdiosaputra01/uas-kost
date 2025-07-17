@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Form Tambah Data Kamar</div>

                <div class="card-body">
                    <form method="POST" action="/kamar" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="idKamar" class="form-label">ID Kamar</label>
                            <input type="text" name="idKamar" class="form-control" id="idKamar">
                        </div>

                        <div class="mb-3">
                            <label for="noKamar" class="form-label">No Kamar</label>
                            <input type="text" name="noKamar" class="form-control" id="noKamar">
                        </div>

                        <div class="mb-3">
                            <label for="tipeKamar" class="form-label">Tipe Kamar</label>
                            <input type="text" name="tipeKamar" class="form-control" id="tipeKamar">
                        </div>

                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" name="harga" class="form-control" id="harga">
                        </div>

                        <div class="mb-3">
                            <label for="waktu" class="form-label">Waktu Sewa</label>
                            <select name="waktu" id="waktu" class="form-control">
                                <option value="">- Pilih Waktu -</option>
                                <option value="1 Hari">1 Hari</option>
                                <option value="1 Minggu">1 Minggu</option>
                                <option value="1 Bulan">1 Bulan</option>
                                <option value="1 Tahun">1 Tahun</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@error('idKamar')
    <div class="text-danger">{{ $message }}</div>
@enderror
