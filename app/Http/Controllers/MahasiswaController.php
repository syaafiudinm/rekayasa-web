<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MahasiswaController extends Controller
{
    public function index(Request $request){
        $mahasiswa = Mahasiswa::orderBy('nama', 'ASC');

        if (!empty($request->keyword)){
            $mahasiswa->where('nama', 'like','%'.$request->keyword.'%');
        }

        $mahasiswa = $mahasiswa->paginate(5)->withQueryString();
                
                   
        return view('mahasiswa.list',[
            'mahasiswa' => $mahasiswa
        ]);
        // return $mahasiswa;
        // dd($mahasiswa);
    }

    public function create(){
        return view('mahasiswa.add-mahasiswa');
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

    public function edit(int $id){
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('mahasiswa.edit-mahasiswa',[
            'mahasiswa' => $mahasiswa 
        ]);
    }

    public function update(Request $request, int $id){
        $mahasiswa = Mahasiswa::findOrFail($id);

        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'nim' => 'required|max:10',
            'alamat' => 'required',
            'prodi_id' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->route('mahasiswa.add')->withInput()->withErrors($validator);
        }

    
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->prodi_id = $request->prodi_id;
        $mahasiswa->save();

        return redirect()->route('mahasiswa.list')->with('status', 'data mahasiswa berhasil diubah');
    }

    public function destroy(int $id){
        $mahasiswa = Mahasiswa::findOrFail($id);

        $mahasiswa->delete();

        return redirect()->route('mahasiswa.list')->with('deleted', 'mahasiswa berhasil di hapus');
    }
}
