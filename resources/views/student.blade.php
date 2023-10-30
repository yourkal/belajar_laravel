<!-- Layouts Using Template Inheritance -->
@extends('layouts.mainlayout')

@section('title', 'Students')

@section('content')

    <h1>Ini Halaman Student</h1>

    <div class="my-5 d-flex justify-content-between">
        <a href="student-tambah" class="btn btn-primary">Tambah Data</a>
        <a href="student-terhapus" class="btn btn-info">List Data Terhapus</a>
    </div>

    @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif

    <h3>List Students</h3>
    <div class="my-3">
        <form action="" method="get">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="keyword" placeholder="Cari Nama/Nis/Kelas">
                <button class="input-group-text btn btn-primary">Search</button>
            </div>
        </form>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Nis</th>
                <th>Kelas</th>
                {{-- <th>Kelas</th>
                    <th>Extracurricular</th>
                    <th>Wali Kelas</th> --}}
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <ol>
                <!-- perulangan foreach ngambil data dari table students -->
                {{-- memanggil studentList dari Controller Student --}}
                @foreach ($studentList as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->gender }}</td>
                        <td>{{ $data->nis }}</td>
                        <td>{{ $data->class->name }}</td>
                        {{-- <td>{{$data->class->name}}</td>
                    <td>
                        @foreach ($data->extracurriculars as $item)
                            - {{$item->name}} <br>
                        @endforeach
                    </td>
                    <td>{{$data->class->waliKelas->name}}</td> --}}
                        <td><a href="student/{{ $data->id }}">Detail</a> |
                            <a href="student-edit/{{ $data->id }}">Edit</a> |
                            <a href="student-delete/{{ $data->id }}">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </ol>
        </tbody>
    </table>

    <div class="my-5 d-flex justify-content-center">
        {{ $studentList->withQueryString()->links() }}
    </div>

@endsection
