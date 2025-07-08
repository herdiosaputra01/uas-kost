@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Form Edit Data Pemesanan</div>

                <div class="card-body">
                     <form method="post" action="/pemesanan/{{$pemesanan->id}}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No Pemesanan</label>
                            <input type="text" value="{{$pemesanan->noPemesanan}}" name="noPemesanan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Id Kamar</label>
                            <input type="text" value="{{$pemesanan->kamars_id}}" name="kamars_id" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal Masuk</label>
                            <input type="date" value="{{$pemesanan->tglMasuk}}" name="tglMasuk" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal Keluar</label>
                            <input type="date" value="{{$pemesanan->tglKeluar}}" name="tglKeluar" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Id Pelanggan</label>
                            <input type="text" value="{{$pemesanan->pelanggans_id}}" name="pelanggans_id" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection