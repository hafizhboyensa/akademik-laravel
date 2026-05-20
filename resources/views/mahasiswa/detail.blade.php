@extends('layouts.main')
@section('title','Detail')
@section('content')

    <div class="card">
        <div class="card-header">
            <h3>Detail Mahasiswa {{ $mahasiswa->nama_lengkap }}</h3>
        </div>
        <div class="card-body">
            <p>NIM              : {{ $mahasiswa->nim }}</p>
            <p>Nama Lengkap     : {{ $mahasiswa->nama_lengkap }}</p>
            <p>Email            : {{ $mahasiswa->email }}</p>
            <p>Tempat Lahir     : {{ $mahasiswa->tempat_lahir }}</p>
            <p>Tanggal Lahir    : {{ $mahasiswa->tgl_lahir }}</p>
            <p>Program Studi    : {{ $mahasiswa->prodi }}</p>
            <p>Alamat           : {{ $mahasiswa->alamat }}</p>
            <a href="/mahasiswa" class="btn btn-primary">Kembali ke halaman mahasiswa</a>
        </div>
    </div>

@endsection