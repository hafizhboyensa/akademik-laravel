@extends('layouts.main')
@section('title','Form')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Form Data Mahasiswa</h3>
        </div>
        <div class="card-body">
            <form action="/mahasiswa" method="POST">
                @csrf
                <div class="row">
                    
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">NIM</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="nim" value="{{ old('nim') }}">
                        @error('nim')
                            <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_lengkap" value="{{ old('nama_lengkap') }}">
                        @error('nama_lengkap')
                            <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" value="{{ old('email') }}" placeholder="example@gmail.com">
                        @error('email')
                            <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
                        @error('tempat_lahir')
                            <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="exampleFormControlInput1" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                        @error('tanggal_lahir')
                            <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Program Studi</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="program_studi" value="{{ old('program_studi') }}">
                        @error('program_studi')
                            <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
                        @error('alamat')
                            <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection