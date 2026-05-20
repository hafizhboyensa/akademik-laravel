@extends('layouts.main')
@section('title', 'Mahasiswa')
@section('content')

    <h1>Daftar Mahasiswa Jurusan TI</h1>
    <a href="/mahasiswa/create" type="button" class="btn btn-primary mb-3">Tambah Data Mahasiswa</a>
    @if (session('pesan'))
        <div class="alert alert-primary">{{ session('pesan') }}</div>
    @endif
    <div class="card shadow-sm">

    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="5%" scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Email</th>
                    <th scope="col">Prodi</th>
                    <th width="20%" scope="col">Alamat</th>
                    <th width="18%" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_mahasiswa as $item)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->nama_lengkap }}</td>
                        <td>{{ $item->tempat_lahir }}</td>
                        <td>{{ $item->tgl_lahir }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->prodi }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>
                            <a href="/mahasiswa/{{ $item->id }}/edit" type="button" class="btn btn-warning">Edit</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#hapus{{ $item->id }}">
                                Hapus
                            </button>
                            <a href="/mahasiswa/{{ $item->id }}" type="button" class="btn btn-info">Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $data_mahasiswa->links() }}

    <!-- Modal -->
    @foreach ($data_mahasiswa as $item)
        <div class="modal fade" id="hapus{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <form action="/mahasiswa/{{ $item->id }}" method="POST" class="modal-content">
                    @csrf
                    @method('DELETE')
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi!!</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah anda yakin ingin menghapus mahasiswa {{ $item->nama_lengkap }}?
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
