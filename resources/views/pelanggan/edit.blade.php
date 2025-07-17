@extends('layouts.template')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-header bg-primary text-white rounded-top-4">
                    <h5 class="mb-0"><i class="fa fa-edit me-2"></i>Edit Data Pelanggan</h5>
                </div>

                <div class="card-body">
                     <form method="post" action="/pelanggan" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="idPelanggan" class="form-label">ID Pelanggan</label>
                            <input type="text" name="idPelanggan" value="{{ $pelanggan->idPelanggan }}" class="form-control" id="idPelanggan">
                        </div>

                        <div class="mb-3">
                            <label for="namaPelanggan" class="form-label">Nama Pelanggan</label>
                            <input type="text" name="namaPelanggan" value="{{ $pelanggan->namaPelanggan }}" class="form-control" id="namaPelanggan">
                        </div>

                        <div class="mb-3">
                            <label for="alamatPelanggan" class="form-label">Alamat Pelanggan</label>
                            <input type="text" name="alamatPelanggan" value="{{ $pelanggan->alamatPelanggan }}" class="form-control" id="alamatPelanggan">
                        </div>

                        <div class="mb-3">
                            <label for="noHp" class="form-label">No Handphone</label>
                            <input type="text" name="noHp" value="{{ $pelanggan->noHp }}" class="form-control" id="noHp">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" value="{{ $pelanggan->email }}" class="form-control" id="email">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
