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
            </tr>
        </thead>
        <tbody>
            <!-- perulangan foreach ngambil data dari table class -->
            @foreach ($classList as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection