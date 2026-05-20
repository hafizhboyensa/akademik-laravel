<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosen=Dosen::latest()->paginate(10);
        
        return view('dosen.dosen',[
           'data_dosen'=>$dosen
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dosen.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik'=>'required|digits_between:1,18',
            'nama'=>'required|string',
            'email'=>'required|email',
            'no_telp'=>'required|min:10|max:15',
            'prodi'=>'required',
            'alamat'=>'required',
        ],[
            'nik.required'=>'nik maksimal 16 angka',
            'nama.required'=>'nama lengkap wajib diisi',
            'nama.string'=>'nama harus berupa teks',
            'email.required'=>'email wajib diisi',
            'email.email'=>'format email tidak valid',
            'no_telp.required'=>'nomor telepon wajib diisi',
            'prodi.required'=>'program studi wajib diisi',
            'alamat.required'=>'alamat wajib diisi',
        ]);

        Dosen::create([
            'nik'=>$request->nik,
            'nama'=>$request->nama,
            'email'=>$request->email,
            'no_telp'=>$request->no_telp,
            'prodi'=>$request->prodi,
            'alamat'=>$request->alamat,
        ]);

        return redirect('/dosen')->with('pesan','Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dosen = Dosen::findOrFail($id);
        
        return view('dosen.detail',[
            'dosen'=>$dosen
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Dosen::findOrFail($id);
        return view('dosen.edit',[
            'data'=>$data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nik'=>'required|digits_between:1,18',
            'nama'=>'required|string',
            'email'=>'required|email',
            'no_telp'=>'required|min:10|max:15',
            'prodi'=>'required',
            'alamat'=>'required',
        ],[
            'nik.required'=>'nik maksimal 16 angka',
            'nama.required'=>'nama lengkap wajib diisi',
            'nama.string'=>'nama harus berupa teks',
            'email.required'=>'email wajib diisi',
            'email.email'=>'format email tidak valid',
            'no_telp.required'=>'nomor telepon wajib diisi',
            'prodi.required'=>'program studi wajib diisi',
            'alamat.required'=>'alamat wajib diisi',
        ]);

        Dosen::where('id',$id)->update([
            'nik'=>$request->nik,
            'nama'=>$request->nama,
            'email'=>$request->email,
            'no_telp'=>$request->no_telp,
            'prodi'=>$request->prodi,
            'alamat'=>$request->alamat,
        ]);

        return redirect('/dosen')->with('pesan','Berhasil edit data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Dosen::findOrFail($id)->delete();
        return redirect('/dosen')->with('pesan','Data berhasil dihapus');
    }
}
