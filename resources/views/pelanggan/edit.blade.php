@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Form Edit Data Pelanggan</div>

                <div class="card-body">
                        <form method="post" action="/pelanggan/{{$pelanggan->id}}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Id Pelanggan</label>
                            <input type="text" value="{{$pelanggan->idPelanggan}}" name="idPelanggan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Pelanggan</label>
                            <input type="text" value="{{$pelanggan->namaPelanggan}}" name="namaPelanggan" class="form-control" id="exampleInputPassword1">
                        </div>
                         <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Alamat Pelanggan</label>
                            <input type="text" value="{{$pelanggan->alamatPelanggan}}" name="alamatPelanggan" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="email" value="{{$pelanggan->email}}" name="email" class="form-control" id="exampleInputPassword1">
                        </div>

                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection