@extends('layouts.mainlayout')

@section('title', 'Student-Hapus')

@section('content')

    <div class="mt-5">
        {{-- {{$student}} --}}
        <h2>Apakah Anda Yakin Ingin Menghapus Data : {{ $student->name }} ({{ $student->nis }}) ?</h2>

        <form style="display: inline-block" action="/student-hapus/{{ $student->id }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="/students" class="btn btn-secondary">Cancel</a>
    </div>

@endsection
