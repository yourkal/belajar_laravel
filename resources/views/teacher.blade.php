@extends('layouts.mainlayout')

@section('title', 'Teacher')

@section('content')
    <h1>Ini Halaman Teacher</h1>
    <h3>List Teacher</h3>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Teacher</th>
            </tr>
        </thead>
        <tbody>
            {{-- mengambil teacherList dari Controller --}}
            @foreach ($teacherList as $item) 
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection