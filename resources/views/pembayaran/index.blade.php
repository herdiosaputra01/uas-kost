@extends('layouts.template')

@section('title')
    Data Pembayaran
@endsection

@section('content')
<div class="col-lg-12 mb-3">
    <h4 class="text-black">Data Pembayaran</h4>

    <div class="float-end mb-3">
        <a href="/pembayaran/tambah" class="btn btn-primary btn-sm me-2">
            <i class="fa fa-user-plus"></i> Tambah Data
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="bg-warning text-white text-center">
                <tr>
                    <th>No</th>
                    <th>ID Pembayaran</th>
                    <th>ID Pemesanan</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($pembayaran as $data)
                    <tr>
                        <td class="text-center">{{ $nomor++ }}</td>
                        <td>{{ $data->idPembayaran }}</td>
                        <td>{{ $data->pemesanans_id }}</td>
                        <td class="text-center">

                            {{-- Detail --}}
                            <button class="btn btn-warning btn-sm rounded-pill px-3" data-bs-toggle="modal"
                                    data-bs-target="#detailModal{{ $data->id }}">
                                <i class="fa fa-eye"></i>
                            </button>

                            {{-- Edit --}}
                            <a href="/pembayaran/edit/{{ $data->id }}" class="btn btn-info btn-sm text-white rounded-pill px-3">
                                <i class="fa fa-edit"></i>
                            </a>

                            {{-- Hapus --}}
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
                                                <i class="fa fa-info-circle me-1"></i> Detail Pembayaran
                                            </h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                        </div>

                                        <div class="modal-body">
                                            <table class="table table-borderless mb-0">
                                                <tr>
                                                    <th class="text-muted">ID Pembayaran</th>
                                                    <td>: {{ $data->idPembayaran }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">Tanggal Pembayaran</th>
                                                    <td>: {{ \Carbon\Carbon::parse($data->tglPembayaran)->format('d M Y') }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">No Pemesanan</th>
                                                    <td>: {{ $data->pemesanan->noPemesanan ?? '-' }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">Nama Pelanggan</th>
                                                    <td>: {{ $data->pemesanan->pelanggan->namaPelanggan ?? '-' }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">No Kamar</th>
                                                    <td>: {{ $data->pemesanan->kamar->noKamar ?? '-' }}</td>
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
                                            <p>Yakin ingin menghapus data pembayaran <strong>{{ $data->idPembayaran }}</strong>?</p>
                                        </div>

                                        <div class="modal-footer bg-light rounded-bottom-4">
                                            <button class="btn btn-secondary btn-sm" data-bs-dismiss="modal">
                                                <i class="fa fa-times me-1"></i> Batal
                                            </button>
                                            <form action="{{ route('pembayaran.destroy', $data->id) }}" method="POST" class="d-inline">
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
                        <td colspan="4" class="text-center py-3">Belum ada data pembayaran.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
