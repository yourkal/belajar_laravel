<!-- Layouts Using Template Inheritance -->
@extends('layouts.mainlayout')

@section('title', 'Students')

@section('content')
    <h1>Ini Halaman Student</h1>
    <h3>List Students</h3>
    <table class="table">
        <thead>          
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Nis</th>
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
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->gender}}</td>
                    <td>{{$data->nis}}</td>
                    {{-- <td>{{$data->class->name}}</td>
                    <td>
                        @foreach ($data->extracurriculars as $item)
                            - {{$item->name}} <br>
                        @endforeach
                    </td>
                    <td>{{$data->class->waliKelas->name}}</td> --}}
                    <td><a href="student/{{$data->id}}">Detail</a></td>
                </tr>
                @endforeach
            </ol>
        </tbody>
    </table>

    
@endsection

























     