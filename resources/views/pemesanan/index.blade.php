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
                <thead class="bg-danger text-white">
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">No Pemesanan</th>
                        <th scope="col">Id Kamar</th>
                        {{-- <th scope="col">Tanggal Masuk</th>
                        <th scope="col">Tanggal Keluar</th> --}}
                        <th scope="col">Id Pelanggan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pemesanan as $data)
                        <tr>
                            <th scope="row">{{ $nomor++ }}</th>
                            <td>{{ $data->noPemesanan }}</td>
                            <td>{{ $data->kamars_id }}</td>
                            {{-- <td>{{ $data->tglMasuk }}</td>
                            <td>{{ $data->tglKeluar }}</td> --}}
                            <td>{{ $data->pelanggans_id }}</td>
                            <td>
                                <!-- Detail Modal Trigger -->
                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal{{ $data->id }}">
                                <i class="fa fa-eye"></i>
                            </button>

                            <!-- Detail Modal -->
                            <div class="modal fade" id="detailModal{{ $data->id }}" tabindex="-1" aria-labelledby="detailModalLabel{{ $data->id }}" aria-hidden="true">
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
                                </a>

                                <!-- Tombol Hapus -->
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $data->id }}">
                                    <i class="fa fa-trash"></i>
                                </button>

                                <!-- Modal Konfirmasi Hapus -->
                                <div class="modal fade" id="modalDelete{{ $data->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $data->id }}" aria-hidden="true">
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
                                </div>
                                <!-- End Modal -->
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
@endsection
