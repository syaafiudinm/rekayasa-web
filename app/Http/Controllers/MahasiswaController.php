<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

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
}
