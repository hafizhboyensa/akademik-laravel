<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa=Mahasiswa::latest()->paginate(10);
        
        return view('mahasiswa.mahasiswa',[
            'data_mahasiswa'=>$mahasiswa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Mahasiswa::get();
        return view('mahasiswa.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim'=>'required|numeric',
            'nama_lengkap'=>'required|string',
            'email'=>'required|email',
            'tempat_lahir'=>'required|string',
            'tanggal_lahir'=>'required|date',
            'program_studi'=>'required',
            'alamat'=>'required',
        ],[
            'nim.required'=>'nim wajib diisi',
            'nim.numeric'=>'nim harus berupa angka',
            'nama_lengkap.required'=>'nama lengkap wajib diisi',
            'nama_lengkap.string'=>'nama harus berupa teks',
            'email.required'=>'email wajib diisi',
            'email.email'=>'email harus menggunakan @gmail.com',
            'tempat_lahir.required'=>'tempat lahir wajib diisi',
            'tempat_lahir.string'=>'tempat lahir harus berupa teks',
            'tanggal_lahir.required'=>'tanggal lahir wajib diisi',
            'program_studi.required'=>'program studi wajib diisi',
            'alamat.required'=>'alamat wajib diisi',
        ]);

        Mahasiswa::create([
            'nim'=>$request->nim,
            'nama_lengkap'=>$request->nama_lengkap,
            'email'=>$request->email,
            'tempat_lahir'=>$request->tempat_lahir,
            'tgl_lahir'=>$request->tanggal_lahir,
            'prodi'=>$request->program_studi,
            'alamat'=>$request->alamat,
        ]);

        return redirect('/mahasiswa')->with('pesan','Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        
        return view('mahasiswa.detail',[
            'mahasiswa'=>$mahasiswa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit',[
            'data'=>$data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nim'=>'required|numeric',
            'nama_lengkap'=>'required|string',
            'email'=>'required|email',
            'tempat_lahir'=>'required|string',
            'tanggal_lahir'=>'required|date',
            'program_studi'=>'required',
            'alamat'=>'required',
        ],[
            'nim.required'=>'nim wajib diisi',
            'nim.numeric'=>'nim harus berupa angka',
            'nama_lengkap.required'=>'nama lengkap wajib diisi',
            'nama_lengkap.string'=>'nama harus berupa teks',
            'email.required'=>'email wajib diisi',
            'email.email'=>'email harus menggunakan @gmail.com',
            'tempat_lahir.required'=>'tempat lahir wajib diisi',
            'tempat_lahir.string'=>'tempat lahir harus berupa teks',
            'tanggal_lahir.required'=>'tanggal lahir wajib diisi',
            'program_studi.required'=>'program studi wajib diisi',
            'alamat.required'=>'alamat wajib diisi',
        ]);

        Mahasiswa::where('id',$id)->update([
            'nim'=>$request->nim,
            'nama_lengkap'=>$request->nama_lengkap,
            'email'=>$request->email,
            'tempat_lahir'=>$request->tempat_lahir,
            'tgl_lahir'=>$request->tanggal_lahir,
            'prodi'=>$request->program_studi,
            'alamat'=>$request->alamat,
        ]);

        return redirect('mahasiswa')->with('pesan','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Mahasiswa::findOrFail($id)->delete();
        return redirect('/mahasiswa')->with('pesan','Data berhasil dihapus');
    }
}
