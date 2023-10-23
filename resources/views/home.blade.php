<!-- Layouts Using Template Inheritance -->
@extends('layouts.mainlayout')

@section('title', 'Home')

@section('content')
    <h1>Ini Halaman Home</h1>
       <h2>Selamat Datang, {{$name}} Anda Adalah {{$role}}</h2>
@endsection























       <!-- if statement -->
       <!-- 
@if($role == 'admin')
    <a href=""> ke halaman admin</a>
@elseif($role == 'staff')
    <a href=""> ke halaman gudang</a>
@else
    <a href=""> ke halaman user</a>
@endif 
-->


       <!-- switch statement -->
       <!-- 
@switch($role)
    @case($role == 'admin')
        <a href=""> ke halaman admin</a>
    @break
    @case($role == 'staff')
        <a href=""> ke halaman gudang</a>
    @break
    @default
        <a href=""> ke halaman user</a>
@endswitch 
-->

       <!-- for loop -->
       <!-- 
@for($i = 0; $i < 5; $i++)
    {{$i}} <br>
@endfor 
-->

       <!-- foreach loop -->
       <!-- 
@foreach ($buah as $data)
    {{$data}} <br>
@endforeach 
-->