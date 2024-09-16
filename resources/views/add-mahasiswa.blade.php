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
                <form action="{{route('mahasiswa.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="masukkan nama mahasiswa..." name="nama" id="nama" value="{{old('nama')}}"/>
                        @error('nama')
                            <p class="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">nim</label>
                        <input type="text" class="form-control  @error('nim') is-invalid @enderror" placeholder="masukkan nim mahasiswa..." name="nim" id="nim" value="{{old('nim')}}"/>
                        @error('nim')
                            <p class="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">alamat</label>
                        <input type="text" class="form-control  @error('alamat') is-invalid @enderror" placeholder="alamat" name="alamat" id="alamat" value="{{old('alamat')}}"/>
                        @error('alamat')
                            <p class="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="prodi_id" class="form-label">ID Prodi</label>
                        <select name="prodi_id" class="form-control  @error('prodi_id') is-invalid @enderror" id="prodi_id">
                            <option value="">pilih id prodi</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            @error('prodi_id')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Create</button>   
                </form>                  
                </div>
            </div>                 
        </div>
    </div>       
</div>
@endsection