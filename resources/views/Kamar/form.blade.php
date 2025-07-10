@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Tambah Data</div>

                <div class="card-body">
                    <form method="post" action="/kamar" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Id Kamar</label>
                            <input type="text" name="idKamar" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No Kamar</label>
                            <input type="text" name="noKamar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tipe Kamar</label>
                            <input type="text" name="tipeKamar" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Harga</label>
                            <input type="text" name="harga" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Waktu Sewa</label>
                            <select name="waktu" id="waktu" class="form-control">
                                <option value="">-Pilih Waktu-</option>
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