@extends('layouts.template')

@section('title')
    Data Kamar
@endsection

@section('content')
<div class="col-lg-12 mb-3">
    <h4 class="text-black">Data Kamar</h4>

    <div class="float-end mb-3">
        <a href="/kamar/tambah" class="btn btn-primary btn-sm me-2">
            <i class="fa fa-user-plus"></i> Tambah Data
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="bg-success text-white text-center">
                <tr>
                    <th>No</th>
                    <th>ID Kamar</th>
                    <th>No Kamar</th>
                    <th>Tipe Kamar</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($kamar as $data)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $data->idKamar }}</td>
                        <td>{{ $data->noKamar }}</td>
                        <td>{{ $data->tipeKamar }}</td>
                        <td class="text-center">

                            {{-- Detail --}}
                            <button class="btn btn-warning btn-sm rounded-pill px-3" data-bs-toggle="modal"
                                    data-bs-target="#detailModal{{ $data->id }}">
                                <i class="fa fa-eye"></i>
                            </button>

                            {{-- Edit --}}
                            <a href="/kamar/edit/{{ $data->id }}" class="btn btn-info btn-sm text-white rounded-pill px-3">
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
                                        <div class="modal-header bg-success text-white rounded-top-4">
                                            <h5 class="modal-title fw-semibold" id="detailModalLabel{{ $data->id }}">
                                                <i class="fa fa-info-circle me-1"></i> Detail Kamar
                                            </h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                        </div>

                                        <div class="modal-body">
                                            <table class="table table-borderless mb-0">
                                                <tr>
                                                    <th class="text-muted">ID Kamar</th>
                                                    <td>: {{ $data->idKamar }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">No Kamar</th>
                                                    <td>: {{ $data->noKamar }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">Tipe Kamar</th>
                                                    <td>: {{ $data->tipeKamar }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">Harga</th>
                                                    <td>: {{ number_format($data->harga, 0, ',', '.') }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">Waktu</th>
                                                    <td>: {{ $data->waktu }}</td>
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
                                            <p>Yakin ingin menghapus kamar <strong>{{ $data->noKamar }}</strong>?</p>
                                        </div>

                                        <div class="modal-footer bg-light rounded-bottom-4">
                                            <button class="btn btn-secondary btn-sm" data-bs-dismiss="modal">
                                                <i class="fa fa-times me-1"></i> Batal
                                            </button>
                                            <form action="{{ route('kamar.destroy', $data->id) }}" method="POST" class="d-inline">
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
                        <td colspan="5" class="text-center py-3">Belum ada data kamar.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection


{{-- @extends('layouts.template')

@section('title')
    Data Kamar
@endsection

@section('content')
<div class="col-lg-12 mb-3">
    <h4 class="text-black">Data Kamar</h4>

    <div class="float-end mb-3">
        <a href="/kamar/tambah" class="btn btn-primary btn-sm me-2">
            <i class="fa fa-user-plus"></i> Tambah Data
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="bg-success text-white">
                <tr>
                    <th>NO</th>
                    <th>ID Kamar</th>
                    <th>No Kamar</th>
                    <th>Tipe Kamar</th> --}}
                    {{-- <th>Harga</th> --}}
                    {{-- <th>Waktu</th> --}}
                    {{-- <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($kamar as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->idKamar }}</td>
                        <td>{{ $data->noKamar }}</td>
                        <td>{{ $data->tipeKamar }}</td> --}}
                        {{-- <td>{{ $data->harga }}</td> --}}
                        {{-- <td>{{ $data->waktu }}</td> --}}
                        {{-- <td> --}}
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
                                                    <td>Harga</td>
                                                    <td>: {{ $data->harga }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Waktu</td>
                                                    <td>: {{ $data->waktu }}</td>
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
                            {{-- <a href="{{ url('/kamar/edit/' . $data->id) }}" class="btn btn-info btn-sm" title="Edit Data">
                                <i class="ti-pencil-alt"></i>
                            </a> --}}

                            <!-- Delete Button with Modal -->
                            {{-- <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $data->id }}">
                                <i class="fa fa-trash"></i>
                            </button> --}}

                            <!-- Delete Confirmation Modal -->
                            {{-- <div class="modal fade" id="deleteModal{{ $data->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $data->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel{{ $data->id }}">Peringatan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah kamu yakin ingin menghapus kamar <strong>{{ $data->noKamar }}</strong>?
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
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">Data Tidak Ada</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection --}}
