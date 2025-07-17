@extends('layouts.template')

@section('title')
    Data Pelanggan
@endsection

@section('content')
<div class="col-lg-12 mb-3">
    <h4 class="text-black">Data Pelanggan</h4>

    <div class="float-end mb-3">
        <a href="{{ url('/pelanggan/tambah') }}" class="btn btn-primary btn-sm me-2">
            <i class="fa fa-user-plus"></i> Tambah Data
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="bg-primary text-white text-center">
                <tr>
                    <th>No</th>
                    <th>ID Pelanggan</th>
                    <th>Nama Pelanggan</th>
                    <th>No Handphone</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pelanggan as $data)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $data->idPelanggan }}</td>
                        <td>{{ $data->namaPelanggan }}</td>
                        <td>{{ $data->noHp }}</td>
                        <td class="text-center">

                            {{-- Detail --}}
                            <button class="btn btn-warning btn-sm rounded-pill px-3" data-bs-toggle="modal"
                                    data-bs-target="#detailModal{{ $data->id }}">
                                <i class="fa fa-eye"></i>
                            </button>

                            {{-- Edit --}}
                            <a href="{{ url('/pelanggan/edit/' . $data->id) }}" class="btn btn-info btn-sm text-white rounded-pill px-3">
                                <i class="fa fa-edit"></i>
                            </a>

                            {{-- Hapus --}}
                            <button class="btn btn-danger btn-sm rounded-pill px-3" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal{{ $data->id }}">
                                <i class="fa fa-trash"></i>
                            </button>

                            <!-- Modal Detail -->
                            <div class="modal fade" id="detailModal{{ $data->id }}" tabindex="-1"
                                 aria-labelledby="detailModalLabel{{ $data->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-md">
                                    <div class="modal-content shadow-lg rounded-4">
                                        <div class="modal-header bg-primary text-white rounded-top-4">
                                            <h5 class="modal-title fw-semibold" id="detailModalLabel{{ $data->id }}">
                                                <i class="fa fa-info-circle me-1"></i> Detail Pelanggan
                                            </h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                        </div>

                                        <div class="modal-body">
                                            <table class="table table-borderless mb-0">
                                                <tr>
                                                    <th class="text-muted">ID Pelanggan</th>
                                                    <td>: {{ $data->idPelanggan }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">Nama</th>
                                                    <td>: {{ $data->namaPelanggan }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">No Handphone</th>
                                                    <td>: {{ $data->noHp }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">Email</th>
                                                    <td>: {{ $data->email }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">Alamat</th>
                                                    <td>: {{ $data->alamatPelanggan }}</td>
                                                </tr>
                                            </table>
                                        </div>

                                        <div class="modal-footer bg-light rounded-bottom-4">
                                            <button class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">
                                                <i class="fa fa-times me-1"></i> Tutup
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Hapus -->
                            <div class="modal fade" id="deleteModal{{ $data->id }}" tabindex="-1"
                                 aria-labelledby="deleteModalLabel{{ $data->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content border-0 shadow-lg rounded-4">
                                        <div class="modal-header bg-danger text-white rounded-top-4">
                                            <h5 class="modal-title fw-semibold" id="deleteModalLabel{{ $data->id }}">
                                                <i class="fa fa-exclamation-triangle me-1"></i> Konfirmasi Hapus
                                            </h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                        </div>

                                        <div class="modal-body">
                                            <p>Yakin ingin menghapus data pelanggan <strong>{{ $data->namaPelanggan }}</strong>?</p>
                                        </div>

                                        <div class="modal-footer bg-light rounded-bottom-4">
                                            <button class="btn btn-secondary btn-sm" data-bs-dismiss="modal">
                                                <i class="fa fa-times me-1"></i> Batal
                                            </button>
                                            <form action="{{ route('pelanggan.destroy', $data->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash me-1"></i> Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-3">Belum ada data pelanggan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection


{{-- @extends('layouts.template')

@section('title')
    Data Pelanggan
@endsection

@section('content')
<div class="col-lg-12 mb-3">
    <h4 class="text-black">Data Pelanggan</h4>

    <div class="float-end mb-3">
        <a href="{{ url('/pelanggan/tambah') }}" class="btn btn-primary btn-sm me-2">
            <i class="fa fa-user-plus"></i> Tambah Data
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="bg-primary text-white">
                <tr>
                    <th>NO</th>
                    <th>ID Pelanggan</th>
                    <th>Nama Pelanggan</th>
                    <th>No Handphone</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pelanggan as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->idPelanggan }}</td>
                        <td>{{ $data->namaPelanggan }}</td>
                        <td>{{ $data->noHp }}</td>
                        <td> --}}
                            <!-- Detail Modal Trigger -->
                            {{-- <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal{{ $data->id }}">
                                <i class="fa fa-eye"></i>
                            </button> --}}

                            <!-- Detail Modal -->
                            {{-- <div class="modal fade" id="detailModal{{ $data->id }}" tabindex="-1" aria-labelledby="detailModalLabel{{ $data->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="detailModalLabel{{ $data->id }}">Detail Pelanggan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table">
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td>: {{ $data->alamatPelanggan }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td>: {{ $data->email }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <!-- Edit Button -->
                            {{-- <a href="{{ url('/pelanggan/edit/' . $data->id) }}" class="btn btn-info btn-sm">
                                <i class="ti-pencil-alt"></i>
                            </a> --}}

                            <!-- Delete Modal Trigger -->
                            {{-- <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $data->id }}">
                                <i class="fa fa-trash"></i>
                            </button> --}}

                            <!-- Delete Modal -->
                            {{-- <div class="modal fade" id="deleteModal{{ $data->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $data->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel{{ $data->id }}">Konfirmasi Hapus</h5>
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
                        <td colspan="5" class="text-center">Data Tidak Ada</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection --}}