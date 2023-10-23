@extends('layouts.mainlayout')

@section('title', 'Student-Detail')

@section('content')
    <h2>anda sedang ke halaman detail siswa bernama {{$student->name}}</h2>

 <div class="mt-5 mb-5" >
    <table class="table" table-bordered>
        <tr>
            <th>Nis</th>
            <th>Gender</th>
            <th>Kelas</th>
            <th>Wali Kelas</th>
            
        </tr>
        <tr>
            <td>{{$student->nis}}</td>
            <td>{{$student->gender}}</td>
            <td>{{$student->class->name}}</td>
            <td>{{$student->class->waliKelas->name}}</td>
        </tr>
        
        
    </table>
</div>

<div>
    <h3>Extracurricular</h3>
    <ol>
    @foreach ($student->extracurriculars as $item)
       <li> {{$item->name}}</li>
    @endforeach
    </ol>
</div>

    <style>
        th{
            width: 25%
        }
    </style>
@endsection