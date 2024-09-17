@extends('layouts.app')

@section('main')
<div class="d-flex justify-content-center" style="height: 100vh;margin-top:50px;">
    <div>
        @include('layouts.messages')
        <h2>Daftar Mahasiswa</h2>
        <form class="d-flex " method="GET" style="gap: 8px; margin-bottom:10px;">
            <input class="form-control me-2" type="text" placeholder="cari mahasiswa..." aria-label="Search" name="keyword" value="{{Request::get('keyword')}}">
            <button class="btn btn-outline-primary" type="submit">Search</button>
            <a href="{{route('mahasiswa.list')}}" class="btn btn-outline-success">clear</a>
        </form>
        <table class="table table-striped table-bordered">
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
                        <a href="{{route('edit.mahasiswa',$mhs->id)}}"  class="btn btn-primary text-white"><i class="bi bi-recycle"></i></a>
                        <a href="{{route('mahasiswa.deleted', $mhs->id)}}" onclick="return confirm('Anda Yakin Ingin Menghapusnya?');" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$mahasiswa->links('pagination::bootstrap-5')}}
    </div>
</div>
@endsection

    