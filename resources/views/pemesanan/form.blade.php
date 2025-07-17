@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Form Tambah Data Pemesanan</div>

                <div class="card-body">
                    <form method="post" action="/pemesanan" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No Pemesanan</label>
                            <input type="text" name="noPemesanan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Id Kamar</label>
                            <input type="text" name="kamars_id" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal Masuk</label>
                            <input type="date" name="tglMasuk" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal Keluar</label>
                            <input type="date" name="tglKeluar" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Id Pelanggan</label>
                            <select name="pelanggans_id" id="" class="form-control">
                                <option value="">-Pilih Id Pelanggan-</option>
                                @foreach ($pelanggan as $item)
                                    <option value="{{$item->idPelanggan}}">{{$item->namaPelanggan}}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Id Pelanggan</label>
                            <input type="text" name="pelanggans_id" class="form-control" id="exampleInputPassword1">
                        </div> --}}
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection