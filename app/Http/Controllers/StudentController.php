<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Doctrine\DBAL\Types\Type;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all(); // select * from students;
        return view('student', ['studentList'=> $student]);
    }
}
