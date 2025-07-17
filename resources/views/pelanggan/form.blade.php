@extends('layouts.template')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow rounded-4">
                <div class="card-header bg-primary text-white fw-bold fs-5">
                    <h5 class="mb-0"><i class="fa fa-user-plus me-2"></i>Tambah Data Pelanggan</h5>
                </div>

                <div class="card-body">
                    <form method="POST" action="/pelanggan" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="idPelanggan" class="form-label">ID Pelanggan</label>
                            <input type="text" name="idPelanggan" class="form-control" id="idPelanggan"
                                   placeholder="Contoh: PLG001" required>
                        </div>

                        <div class="mb-3">
                            <label for="namaPelanggan" class="form-label">Nama Pelanggan</label>
                            <input type="text" name="namaPelanggan" class="form-control" id="namaPelanggan"
                                   placeholder="Nama lengkap" required>
                        </div>

                        <div class="mb-3">
                            <label for="alamatPelanggan" class="form-label">Alamat Pelanggan</label>
                            <input type="text" name="alamatPelanggan" class="form-control" id="alamatPelanggan"
                                   placeholder="Alamat domisili" required>
                        </div>

                        <div class="mb-3">
                            <label for="noHp" class="form-label">No Handphone</label>
                            <input type="text" name="noHp" class="form-control" id="noHp"
                                   placeholder="08xxxxxxxxxx" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email"
                                   placeholder="contoh@email.com" required>
                        </div>

                        <button type="submit" class="btn btn-success rounded-pill px-4">
                            <i class="fa fa-save me-1"></i> Simpan Pelanggan
                        </button>
                        <a href="/pelanggan" class="btn btn-secondary rounded-pill px-4">
                            <i class="fa fa-arrow-left me-1"></i> Batal
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
