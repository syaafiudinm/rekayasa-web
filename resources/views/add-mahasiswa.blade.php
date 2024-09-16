@extends('layouts.app')

@section('main')
<div class="container">
    <div class="row my-5">
        <div class="col-md-3">
        </div>
        <div class="col-md-9">
            <div class="card border-0 shadow">
                <div class="card-header text-black">
                    Add Mahasiswa       
                </div>
                <div class="card-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" placeholder="masukkan nama mahasiswa..." name="nama" id="nama"/>
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">nim</label>
                        <input type="text" class="form-control" placeholder="masukkan nim mahasiswa..." name="nim" id="nim"/>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">alamat</label>
                        <input type="text" class="form-control" placeholder="alamat" name="alamat" id="alamat"/>
                    </div>
                    <button class="btn btn-primary mt-2">Create</button>   
                </form>                  
                </div>
            </div>                 
        </div>
    </div>       
</div>
@endsection