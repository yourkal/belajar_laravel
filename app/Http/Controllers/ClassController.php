<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $class = ClassRoom::all(); // select * from classrooms;
        return view('classroom', ['classList'=> $class]);
    }
}
