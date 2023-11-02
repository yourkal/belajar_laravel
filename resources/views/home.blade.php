<!-- Layouts Using Template Inheritance -->
@extends('layouts.mainlayout')

@section('title', 'Home')

@section('content')

    <div class="mt-5">
        @if (Session::has('status'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif
    </div>

    <h1>Ini Halaman Home</h1>
    <h2>Selamat Datang, {{ Auth::user()->name }}. Anda Adalah {{ Auth::user()->role->name }}</h2>

    {{-- {{ Auth::user() }} --}}
@endsection






















{{-- 
<!-- if statement -->
@if ($role == 'admin')
<a href=""> ke halaman admin</a>
@elseif($role == 'staff')
<a href=""> ke halaman gudang</a>
@else
<a href=""> ke halaman user</a>
@endif



<!-- switch statement -->
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

<!-- for loop -->
@for ($i = 0; $i < 5; $i++)
{{ $i }} <br>
@endfor

<!-- foreach loop -->
@foreach ($buah as $data)
{{ $data }} <br>
@endforeach --}}
