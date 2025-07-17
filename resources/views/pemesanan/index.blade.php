@extends('layouts.template')

@section('title')
    Data Pemesanan
@endsection

@section('content')
<div class="col-lg-12 mb-3">
    <h4 class="text-black">Data Pemesanan</h4>

    <div class="float-end mb-3">
        <a href="/pemesanan/tambah" class="btn btn-primary btn-sm me-2">
            <i class="fa fa-user-plus"></i> Tambah Data
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="bg-danger text-white text-center">
                <tr>
                    <th>No</th>
                    <th>No Pemesanan</th>
                    <th>ID Kamar</th>
                    <th>ID Pelanggan</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($pemesanan as $data)
                    <tr>
                        <td class="text-center">{{ $nomor++ }}</td>
                        <td>{{ $data->noPemesanan }}</td>
                        <td>{{ $data->kamars_id }}</td>
                        <td>{{ $data->pelanggans_id }}</td>
                        <td class="text-center">

                            {{-- Detail --}}
                            <button class="btn btn-warning btn-sm rounded-pill px-3" data-bs-toggle="modal"
                                    data-bs-target="#detailModal{{ $data->id }}">
                                <i class="fa fa-eye"></i>
                            </button>

                            {{-- Edit --}}
                            <a href="/pemesanan/edit/{{ $data->id }}" class="btn btn-info btn-sm text-white rounded-pill px-3">
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
                                        <div class="modal-header bg-danger text-white rounded-top-4">
                                            <h5 class="modal-title fw-semibold" id="detailModalLabel{{ $data->id }}">
                                                <i class="fa fa-info-circle me-1"></i> Detail Pemesanan
                                            </h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                        </div>

                                        <div class="modal-body">
                                            <table class="table table-borderless mb-0">
                                                <tr>
                                                    <th class="text-muted">Tanggal Masuk</th>
                                                    <td>: {{ \Carbon\Carbon::parse($data->tglMasuk)->format('d M Y') }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">Tanggal Keluar</th>
                                                    <td>: {{ \Carbon\Carbon::parse($data->tglKeluar)->format('d M Y') }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">No Kamar</th>
                                                    <td>: {{ $data->kamar->noKamar ?? '-' }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">Nama Pelanggan</th>
                                                    <td>: {{ $data->pelanggan->namaPelanggan ?? '-' }}</td>
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
                                            <p>Yakin ingin menghapus data pemesanan <strong>{{ $data->noPemesanan }}</strong>?</p>
                                        </div>

                                        <div class="modal-footer bg-light rounded-bottom-4">
                                            <button class="btn btn-secondary btn-sm" data-bs-dismiss="modal">
                                                <i class="fa fa-times me-1"></i> Batal
                                            </button>
                                            <form action="{{ route('pemesanan.destroy', $data->id) }}" method="POST" class="d-inline">
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
                        <td colspan="5" class="text-center py-3">Belum ada data pemesanan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection


{{-- @extends('layouts.template')

@section('title')
    Data Pemesanan
@endsection

@section('content')
    <div class="col-lg-12 mb-3">
        <h4 class="text-black">Data Pemesanan</h4>

        <div class="float-end mb-3">
            <a href="/pemesanan/tambah" class="btn btn-primary btn-sm me-2">
                <i class="fa fa-user-plus"></i> Tambah Data
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="bg-danger text-white">
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">No Pemesanan</th>
                        <th scope="col">Id Kamar</th> --}}
                        {{-- <th scope="col">Tanggal Masuk</th>
                        <th scope="col">Tanggal Keluar</th> --}}
                        {{-- <th scope="col">Id Pelanggan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pemesanan as $data)
                        <tr>
                            <th scope="row">{{ $nomor++ }}</th>
                            <td>{{ $data->noPemesanan }}</td>
                            <td>{{ $data->kamars_id }}</td> --}}
                            {{-- <td>{{ $data->tglMasuk }}</td>
                            <td>{{ $data->tglKeluar }}</td> --}}
                            {{-- <td>{{ $data->pelanggans_id }}</td>
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
                                                    <td>Tanggal Masuk</td>
                                                    <td>: {{ $data->tglMasuk }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Keluar</td>
                                                    <td>: {{ $data->tglKeluar }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                <a href="/pemesanan/edit/{{ $data->id }}" class="btn btn-info btn-sm">
                                    <i class="ti-pencil-alt"></i>
                                </a> --}}

                                <!-- Tombol Hapus -->
                                {{-- <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $data->id }}">
                                    <i class="fa fa-trash"></i>
                                </button> --}}

                                <!-- Modal Konfirmasi Hapus -->
                                {{-- <div class="modal fade" id="modalDelete{{ $data->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $data->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalLabel{{ $data->id }}">Peringatan</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body">
                                                Yakin ingin menghapus pemesanan <strong>{{ $data->noPemesanan }}</strong>?
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                <form action="{{ route('pemesanan.destroy', $data->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- End Modal -->
                            {{-- </td>
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
