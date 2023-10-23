<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
         // ge data dari database dengan cara eager loading
         $teacher = Teacher::all(); // select * from students;
         return view('teacher', ['teacherList'=> $teacher]);
    }
}
