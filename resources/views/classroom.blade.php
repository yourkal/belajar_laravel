<!-- Layouts Using Template Inheritance -->
@extends('layouts.mainlayout')

@section('title', 'Student')

@section('content')
    <h1>Ini Halaman Class</h1>
    <h3>List Class</h3>

    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Kelas</th>
                <th>Students</th>
                <th>Walikelas</th>
            </tr>
        </thead>
        <tbody>
            <!-- perulangan foreach ngambil data dari table class -->
            {{-- memanggil classList dari Controller Class --}}
            @foreach ($classList as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->name}}</td>
                <td>
                    @foreach($data->students as $students)
                    -{{$students->name}} <br>
                    @endforeach
                </td>
                <td>{{$data->Walikelas->name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection