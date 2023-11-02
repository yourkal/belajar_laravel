@extends('layouts.mainlayout')

@section('title', 'Student-Detail')

@section('content')
    <h2>Anda Sedang Ke Halaman Detail Siswa Bernama {{ $student->name }}</h2>

    <div class="my-2">
        <a href="/students" class="btn btn-primary">Kembali</a>
    </div>

    <div class="my-3 d-flex justify-content-center">
        @if ($student->image)
            <img src="{{ asset('storage/photo/' . $student->image) }}" alt="{{ $student->name }}" 
            width="200">
        @else
            <img src="{{ asset('images/undraw_Male_avatar_g98d.png') }}" alt="{{ $student->name }}" 
            width="200">    
        @endif
    </div>

    <div class="mt-5 mb-5">
        <table class="table" table-bordered>
            <tr>
                <th>Nis</th>
                <th>Gender</th>
                <th>Kelas</th>
                <th>Wali Kelas</th>

            </tr>
            <tr>
                <td>{{ $student->nis }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->class->name }}</td>
                <td>{{ $student->class->waliKelas->name }}</td>
            </tr>


        </table>
    </div>

    <div>
        <h3>Extracurricular</h3>
        <ol>
            @foreach ($student->extracurriculars as $item)
                <li> {{ $item->name }}</li>
            @endforeach
        </ol>
    </div>

    <style>
        th {
            width: 25%
        }
    </style>
@endsection
