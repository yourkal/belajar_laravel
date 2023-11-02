@extends('layouts.mainlayout')

@section('title', 'Student-Update')

@section('content')

    {{-- {{$student}}
<br>
{{$class}} --}}

    <div class="mt-5 col-8 mx-auto">

        {{-- pesan error --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/student/{{ $student->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $student->name }}" >
            </div>

            <div class="mb-3">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control" >
                    <option value="{{ $student->gender }}">{{ $student->gender }}</option>
                    @if ($student->gender == 'laki-laki')
                        <option value="perempuan">perempuan</option>
                    @else
                        <option value="laki-laki">laki-laki</option>
                    @endif
                </select>
            </div>

            <div class="mb-3">
                <label for="nis">Nis</label>
                <input type="text" name="nis" class="form-control" id="nis" value="{{ $student->nis }}"
                    >
            </div>

            {{-- Memanggil Data Class --}}
            <div class="mb-3">
                <label for="class">Class</label>
                <select name="class_id" id="class" class="form-control" >
                    <option value="{{ $student->class->id }}">{{ $student->class->name }}</option>
                    @foreach ($class as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="photo">Tambah Gambar</label>
                <div class="input-group">
                    <input type="file" class="form-control" id="photo" name="photo">
                </div>
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit">Update</button>
            </div>
        </form>
    </div>


@endsection
