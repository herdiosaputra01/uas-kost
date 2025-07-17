@extends('layouts.template')

@section('title')
    Data Pelanggan
@endsection

@section('content')
        <div class="col-lg-12 m-b-3">
            <h4 class="text-black">Data Pelanggan</h4>
            <div class="float-end mb-3">
                    <a href="{{ url('/pelanggan/tambah') }}" class="btn btn-primary btn-sm me-2">
                        <i class="fa fa-user-plus"></i> Tambah Data
                    </a>
                </div>
            <div class="table-responsive">
              <table class="table">
                <thead class="bg-primary text-white">
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">ID Pelanggan</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                   @forelse ($pelanggan as $data)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $data->idPelanggan }}</td>
                                    <td>{{ $data->namaPelanggan }}</td>
                                    <td>{{ $data->alamatPelanggan }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>
                                        <!-- Detail button (non-functional placeholder) -->
                                        <button class="btn btn-warning btn-sm" disabled>
                                            <i class="fa fa-eye"></i>
                                        </button>

                                        <!-- Edit -->
                                        <a href="{{ url('/pelanggan/edit/' . $data->id) }}" class="btn btn-info btn-sm">
                                            <i class="ti-pencil-alt"></i>
                                        </a>

                                        <!-- Delete Modal Trigger -->
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $data->id }}">
                                            <i class="fa fa-trash"></i>
                                        </button>

                                        <!-- Delete Modal -->
                                        <div class="modal fade" id="deleteModal{{ $data->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $data->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalLabel{{ $data->id }}">Konfirmasi Hapus</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah kamu yakin ingin menghapus pelanggan <strong>{{ $data->namaPelanggan }}</strong>?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                        <form action="{{ route('pelanggan.destroy', $data->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>
                                                    </div>
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
                    <a href="{{ url('/pelanggan/tambah') }}" class="btn btn-primary btn-sm me-2">
                        <i class="fa fa-user-plus"></i> Tambah Data
                    </a>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">ID Pelanggan</th>
                                <th scope="col">Nama Pelanggan</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pelanggan as $data)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $data->idPelanggan }}</td>
                                    <td>{{ $data->namaPelanggan }}</td>
                                    <td>{{ $data->alamatPelanggan }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>
                                        <!-- Detail button (non-functional placeholder) -->
                                        <button class="btn btn-warning btn-sm" disabled>
                                            <i class="fa fa-eye"></i>
                                        </button>

                                        <!-- Edit -->
                                        <a href="{{ url('/pelanggan/edit/' . $data->id) }}" class="btn btn-info btn-sm">
                                            <i class="ti-pencil-alt"></i>
                                        </a>

                                        <!-- Delete Modal Trigger -->
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $data->id }}">
                                            <i class="fa fa-trash"></i>
                                        </button>

                                        <!-- Delete Modal -->
                                        <div class="modal fade" id="deleteModal{{ $data->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $data->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalLabel{{ $data->id }}">Konfirmasi Hapus</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah kamu yakin ingin menghapus pelanggan <strong>{{ $data->namaPelanggan }}</strong>?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                        <form action="{{ route('pelanggan.destroy', $data->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>
                                                    </div>
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
