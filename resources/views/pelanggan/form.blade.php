@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Form Tambah Data Pelanggan</div>

                <div class="card-body">
                    <form method="POST" action="/pelanggan" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="idPelanggan" class="form-label">ID Pelanggan</label>
                            <input type="text" name="idPelanggan" class="form-control" id="idPelanggan">
                        </div>

                        <div class="mb-3">
                            <label for="namaPelanggan" class="form-label">Nama Pelanggan</label>
                            <input type="text" name="namaPelanggan" class="form-control" id="namaPelanggan">
                        </div>

                        <div class="mb-3">
                            <label for="alamatPelanggan" class="form-label">Alamat Pelanggan</label>
                            <input type="text" name="alamatPelanggan" class="form-control" id="alamatPelanggan">
                        </div>

                        <div class="mb-3">
                            <label for="noHp" class="form-label">No Handphone</label>
                            <input type="text" name="noHp" class="form-control" id="noHp">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection