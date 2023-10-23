<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Doctrine\DBAL\Types\Type;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        //cara lazy loading
        // $student = Student::all(); // select * from students;
        // return view('student', ['studentList'=> $student]);

        //cara eager loading
        // $student = Student::with(['class.waliKelas', 'extracurriculars'])->get(); // select * from students;
        // return view('student', ['studentList'=> $student]);

        $student = Student::get(); // select * from students;
        return view('student', ['studentList'=> $student]);
        
    }

    public function show($id)
    {
        //eloquent belongsTo
        $student = Student::with(['class.waliKelas', 'extracurriculars'])
        ->findOrFail($id);
        return view('student-detail', ['student'=> $student]);
    }

   
}





























//insert data query builder
// DB::table('students')->insert([
//     'name' => 'query builder',
//     'gender' => 'Laki-laki',
//     'nis' => '0202021',
//     'class_id' => 1
// ]);

//get data query builder
// $student = DB::table('students')->get();
// dd($student);

//update data query builder
// DB::table('students')->where('id', 15)->update([
//     'name' => 'salma',
//     'gender' => 'Perempuan',
//     'class_id' => 1
// ]);

//delete data query builder
// DB::table('students')->where('id', 15)->delete();

//insert data eluquent
// Student::create([
//     'name' => 'Eluquent',
//     'gender' => 'Perempuan',
//     'nis' => '0202022',
//     'class_id' => 2
// ]);

//get data eluquent
// $student = Student::all();
// dd($student);

//update data eluquent
// Student::find(16)->update([
//     'name' => 'Eluquent2',
//     'gender' => 'Perempuan',
//     'class_id' => 2
// ]);

//delete data eluquent
// Student::find(16)->delete();