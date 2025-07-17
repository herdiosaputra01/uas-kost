@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Form Edit Data Pembayaran</div>

                <div class="card-body">
                        <form method="post" action="/pembayaran/{{$pembayaran->id}}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Id Pembayaran</label>
                            <input type="text" value="{{$pembayaran->idPembayaran}}" name="idPembayaran" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal Pembayaran</label>
                            <input type="date" value="{{$pembayaran->tglPembayaran}}" name="tglPembayaran" class="form-control" id="exampleInputPassword1">
                        </div>
                         <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Id Pemesanan</label>
                            <input type="text" value="{{$pembayaran->pemesanans_id}}" name="pemesanans_id" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

