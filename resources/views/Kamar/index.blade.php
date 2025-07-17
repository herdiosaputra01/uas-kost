@extends('layouts.template')

@section('title')
Data Kamar
@endsection

@section('content')
        <div class="col-lg-12 m-b-3">
            <h4 class="text-black">Data Kamar</h4>
            <div class="float-end mb-3">
                    <a href="/kamar/tambah" class="btn btn-primary btn-sm me-2">
                        <i class="fa fa-user-plus"></i> Tambah Data
                    </a>
                </div>
            <div class="table-responsive">
              <table class="table">
                <thead class="bg-success text-white">
                  <tr>
                                <th scope="col">NO</th>
                                <th scope="col">Id Kamar</th>
                                <th scope="col">No Kamar</th>
                                <th scope="col">Tipe Kamar</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Wartu</th>
                                <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                 @forelse ($kamar as $data)
                                    <tr>
                                        <th scope="row">{{$nomor++}}</th>
                                        <td>{{$data->idKamar}}</td>
                                        <td>{{$data->noKamar}}</td>
                                        <td>{{$data->tipeKamar}}</td>
                                        <td>{{$data->harga}}</td>
                                        <td>{{$data->waktu}}</td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{ url('/kamar/edit/' . $data->id) }}" class="btn btn-info btn-sm">
                                            <i class="ti-pencil-alt"></i>
                                        </a>
                                       

                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$data->id}}">
                                                <i class="fa fa-trash"></i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        Yakin Data Kamar {{$data->noKamar}} ingin dihapus?
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                            <form action="{{ route('kamar.destroy', $data->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                            </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr> 

                                    @empty
                                    <tr>
                                        <th colspan="5" scope="row">Data Tidak Ada</th>
                                    </tr>  
                                    @endforelse
                </tbody>
              </table>
            </div>
          </div>




{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="float-end mb-3">
                    <a href="/kamar/tambah" class="btn btn-primary btn-sm me-2">
                        <i class="fa fa-user-plus"></i> Tambah Data
                    </a>
                </div>

                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">Id Kamar</th>
                                <th scope="col">No Kamar</th>
                                <th scope="col">Tipe Kamar</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Wartu</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                            <tbody>
                                @forelse ($kamar as $data)
                                    <tr>
                                        <th scope="row">{{$nomor++}}</th>
                                        <td>{{$data->idKamar}}</td>
                                        <td>{{$data->noKamar}}</td>
                                        <td>{{$data->tipeKamar}}</td>
                                        <td>{{$data->harga}}</td>
                                        <td>{{$data->waktu}}</td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{ url('/kamar/edit/' . $data->id) }}" class="btn btn-info btn-sm">
                                            <i class="ti-pencil-alt"></i>
                                        </a>
                                       

                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$data->id}}">
                                                <i class="fa fa-trash"></i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        Yakin Data Kamar {{$data->noKamar}} ingin dihapus?
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                            <form action="{{ route('kamar.destroy', $data->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                            </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr> 

                                    @empty
                                    <tr>
                                        <th colspan="5" scope="row">Data Tidak Ada</th>
                                    </tr>  
                                    @endforelse
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection