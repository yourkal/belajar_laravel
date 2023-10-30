@extends('layouts.mainlayout')

@section('title', 'Students')

@section('content')

    <h1>Ini Halaman Student Terhapus</h1>
    

    <div class="my-5">
        <a href="/students" class="btn btn-primary">Kembali</a>
    </div>

    <div class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Nis</th>
                    {{-- <th>Kelas</th>
                        <th>Extracurricular</th>
                        <th>Wali Kelas</th> --}}
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($student as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->gender }}</td>
                        <td>{{ $data->nis }}</td>
                        <td>
                            <a href="/student/{{ $data->id }}/restore">Restore</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection