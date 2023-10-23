<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        // $class = ClassRoom::with('students','waliKelas')->get(); // select * from classrooms;
        // return view('classroom', ['classList'=> $class]);

        $class = ClassRoom::get(); // select * from classrooms;
        return view('classroom', ['classList'=> $class]);
    }

    public function show($id)
    {
        //eloquent belongsTo
        $class = ClassRoom::with(['students','waliKelas'])
        ->findOrFail($id);
        return view('class-detail', ['class'=> $class]);
    }
}
