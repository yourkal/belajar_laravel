@extends('layouts.mainlayout')

@section('title', 'Class-Detail')

@section('content')

    <h2>
        anda sedang ke halaman detail dari {{$class->name}}
    </h2>

    <div class="mt-5">
        <h4>Wali Kelas :  {{$class->waliKelas->name}}</h4>
    </div>

    <div class="mt-5">
        <h4>List Student :</h4>
        <ol>
            @foreach ($class->students as $item)
                <li>{{$item->name}}</li>
            @endforeach
        </ol>
    </div>

@endsection