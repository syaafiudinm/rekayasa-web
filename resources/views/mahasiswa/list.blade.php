@extends('layouts.app')

@section('main')
<div class="d-flex justify-content-center" style="height: 100vh;margin-top:50px;">
    <div>
        @include('layouts.messages')
        <h2>Daftar Mahasiswa</h2>
        <table class="table table-striped">
            <thead class="table-info">
                <tr><th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">alamat</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $index => $mhs)
                <tr>
                    <td>{{$mahasiswa->firstItem() + $index}}</td>
                    <td>{{$mhs->nama}}</td>
                    <td>{{$mhs->nim}}</td>
                    <td>{{$mhs->alamat}}</td>
                    <td>
                        <a href="{{route('edit.mahasiswa',$mhs->id)}}" class="btn btn-info text-white">update</a>
                        <a href="" class="btn btn-danger">delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$mahasiswa->links('pagination::bootstrap-5')}}
    </div>
</div>
@endsection

    