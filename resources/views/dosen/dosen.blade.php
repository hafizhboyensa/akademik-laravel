@extends('layouts.main')
@section('title', 'dosen')
@section('content')

    <h1>Daftar Dosen Jurusan TI</h1>
    <a href="/dosen/create" type="button" class="btn btn-primary mb-3">Tambah Data dosen</a>
    @if (session('pesan'))
        <div class="alert alert-primary">{{ session('pesan') }}</div>
    @endif
    <div class="card shadow-sm">

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="5%" scope="col">No</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nomor Telepon</th>
                        <th scope="col">Prodi</th>
                        <th width="20%" scope="col">Alamat</th>
                        <th width="25%" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_dosen as $item)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $item->nik }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->no_telp }}</td>
                        <td>{{ $item->prodi }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>
                            <a href="/dosen/{{ $item->id }}/edit" type="button" class="btn btn-warning">Edit</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#hapus{{ $item->id }}">
                                Hapus
                            </button>
                            <a href="/dosen/{{ $item->id }}" type="button" class="btn btn-info">Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $data_dosen->links() }}
    
    <!-- Modal -->
    @foreach ($data_dosen as $item)
    <div class="modal fade" id="hapus{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <form action="/dosen/{{ $item->id }}" method="POST" class="modal-content">
                    @csrf
                    @method('DELETE')
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi!!</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah anda yakin ingin menghapus dosen {{ $item->nama }}?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
@endsection
