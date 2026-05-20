@extends('layouts.main')
@section('title','Form')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Edit Data Dosen</h3>
        </div>
        <div class="card-body">
            <form action="/dosen/{{ $data->id }}" method="POST">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">NIK</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="nik" value="{{ $data->nik }}">
                        @error('nik')
                            <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" value="{{ $data->nama }}">
                        @error('nama')
                        <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" value="{{ $data->email }}" placeholder="example@gmail.com">
                        @error('email')
                        <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nomor Telepon</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="no_telp" value="{{ $data->no_telp }}">
                        @error('no_telp')
                            <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Program Studi</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="prodi" value="{{ $data->prodi }}">
                        @error('prodi')
                            <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat">{{ $data->alamat }}</textarea>
                        @error('alamat')
                            <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection