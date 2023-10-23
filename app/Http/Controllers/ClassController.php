<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $class = ClassRoom::with('students','waliKelas')->get(); // select * from classrooms;
        return view('classroom', ['classList'=> $class]);
    }
}
