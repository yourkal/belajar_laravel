@extends('layouts.mainlayout')

@section('title', 'Teacher')

@section('content')
    <h2>anda sedang ke halaman detail teacher bernama 
        {{$teacher->name}}
    </h2>

    <div class="mt-5">
        <h3>Kelas : {{$teacher->class->name}} </h3>
    </div>

    <div class="mt-5">
        <h3>List student :</h3>
        <ol>
            @foreach ($teacher->class->students as $item)
                <li>{{$item->name}}</li>
            @endforeach
        </ol>
    </div>
@endsection