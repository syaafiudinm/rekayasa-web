<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswa = Mahasiswa::get();
                
                   
        return view('list',[
            'mahasiswa' => $mahasiswa
        ]);
        // return $mahasiswa;
        // dd($mahasiswa);
    }

    public function create(){
        return view('add-mahasiswa');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'nim' => 'required|max:10',
            'alamat' => 'required',
            'prodi_id' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->route('mahasiswa.add')->withInput()->withErrors($validator);
        }

        $mahasiswa = new Mahasiswa();
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->prodi_id = $request->prodi_id;
        $mahasiswa->save();

        return redirect()->route('mahasiswa.list')->with('success', 'mahasiswa berhasil di tambahkan');

    }
}
