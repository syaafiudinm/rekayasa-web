@extends('layouts.app')

@section('main')
<div class="d-flex justify-content-center" style="height: 100vh;margin-top:50px;">
    <div>
        <h2>Daftar Mahasiswa</h2>
        <table class="table table-striped">
            <thead class="table-primary">
                <tr><th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">alamat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $mhs)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$mhs['nama']}}</td>
                    <td>{{$mhs['nim']}}</td>
                    <td>{{$mhs['alamat']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

    