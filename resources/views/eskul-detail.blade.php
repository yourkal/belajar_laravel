@extends('layouts.mainlayout')

@section('title', 'eskul-detail')

@section('content')
    <h2>
        anda sedang ke halaman detail dari extracurricular {{$eskul->name}}
    </h2>

    <div class="mt-5">
        <h3>List Anggota :</h3>
        <ol>
            @foreach ($eskul->students as $item)
                <li>{{$item->name}}</li>
            @endforeach
        </ol>
        {{$eskul}}
    </div>

@endsection