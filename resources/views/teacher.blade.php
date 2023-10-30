@extends('layouts.mainlayout')

@section('title', 'Teacher')

@section('content')
    <h1>Ini Halaman Teacher</h1>

    <div class="my5 mt-3 mb-3">
        <a href="" class="btn btn-primary">Tambah Data</a>
    </div>

    <h3>List Teacher</h3>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Teacher</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- mengambil teacherList dari Controller --}}
            @foreach ($teacherList as $item) 
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td><a href="teacher-detail/{{$item->id}}">Detail</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection