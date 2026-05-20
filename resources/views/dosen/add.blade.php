@extends('layouts.main')
@section('title','Form')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Form Data Dosen</h3>
        </div>
        <div class="card-body">
            <form action="/dosen" method="POST">
                @csrf
                <div class="row">
                    
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">NIK</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="nik" value="{{ old('nik') }}">
                        @error('nik')
                            <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" value="{{ old('nama') }}">
                        @error('nama')
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
                        <label for="exampleFormControlInput1" class="form-label">Nomor Telepon</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="no_telp" value="{{ old('no_telp') }}">
                        @error('no_telp')
                            <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Program Studi</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="prodi" value="{{ old('prodi') }}">
                        @error('prodi')
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