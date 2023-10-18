<!-- Layouts Using Template Inheritance -->
@extends('layouts.mainlayout')

@section('title', 'Students')

@section('content')
    <h1>Ini Halaman Student</h1>
    <h3>List Students</h3>
    <ol>
        <!-- perulangan foreach ngambil data dari table students -->
        @foreach ($studentList as $data)
        <li>
            {{$data -> name}} | {{$data -> gender}} | {{$data -> nis}}
        </li>
        @endforeach
    </ol>
@endsection

























     