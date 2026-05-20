@extends('layouts.main')
@section('title','Detail')
@section('content')

    <div class="card">
        <div class="card-header">
            <h3>Detail Dosen {{ $dosen->nama }}</h3>
        </div>
        <div class="card-body">
            <p>NIK              : {{ $dosen->nik }}</p>
            <p>Nama Lengkap     : {{ $dosen->nama }}</p>
            <p>Email            : {{ $dosen->email }}</p>
            <p>Nomor Telepon    : {{ $dosen->no_telp }}</p>
            <p>Program Studi    : {{ $dosen->prodi }}</p>
            <p>Alamat           : {{ $dosen->alamat }}</p>
            <a href="/dosen" class="btn btn-primary">Kembali ke halaman dosen</a>
        </div>
    </div>

@endsection