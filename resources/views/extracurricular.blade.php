<!-- Layouts Using Template Inheritance -->
@extends('layouts.mainlayout')

@section('title', 'Extracurricular')

@section('content')
    <h1>Ini Halaman Extracurricular</h1>
    <h3>Extracurricular List</h3>
    <table class="table">
        <thead>          
                <tr>
                    <th>#</th>
                    <th>Extracurricular</th>
                    {{-- <th>Anggota Eskul</th> --}}
                    <th>Action</th>
                </tr>
        </thead>
        <tbody>
            <ol>
                <!-- perulangan foreach ngambil data dari table extracurriculars -->
                {{-- memanggil eskulList dari Controller Extracurricular --}}
                @foreach ($eskulList as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->name}}</td>
                    {{-- <td>
                        @foreach ($data->students as $item)
                            - {{$item->name}} <br>
                        @endforeach
                    </td> --}}
                    <td><a href="eskul-detail/{{$data->id}}">Detail</a></td>
                </tr>
                @endforeach
            </ol>
        </tbody>
    </table>

    
@endsection
