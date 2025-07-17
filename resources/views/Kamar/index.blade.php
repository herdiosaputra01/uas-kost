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
            <thead class="bg-success text-white">
                <tr>
                    <th>NO</th>
                    <th>ID Kamar</th>
                    <th>No Kamar</th>
                    <th>Tipe Kamar</th>
                    <th>Harga</th>
                    <th>Waktu</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($kamar as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->idKamar }}</td>
                        <td>{{ $data->noKamar }}</td>
                        <td>{{ $data->tipeKamar }}</td>
                        <td>{{ $data->harga }}</td>
                        <td>{{ $data->waktu }}</td>
                        <td>
                            <!-- Detail Button (placeholder) -->
                            <a href="#" class="btn btn-warning btn-sm" title="Lihat Detail">
                                <i class="fa fa-eye"></i>
                            </a>

                            <!-- Edit Button -->
                            <a href="{{ url('/kamar/edit/' . $data->id) }}" class="btn btn-info btn-sm" title="Edit Data">
                                <i class="ti-pencil-alt"></i>
                            </a>

                            <!-- Delete Button with Modal -->
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $data->id }}">
                                <i class="fa fa-trash"></i>
                            </button>

                            <!-- Delete Confirmation Modal -->
                            <div class="modal fade" id="deleteModal{{ $data->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $data->id }}" aria-hidden="true">
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
@endsection
