<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentCreateRequest;
use App\Http\Requests\StudentEditRequest;
use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Doctrine\DBAL\Types\Type;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $student = Student::with('class')
                   ->where('name', 'like', "%$keyword%")
                   ->orWhere('gender',"%$keyword%")
                   ->orWhere('nis', 'like', "%$keyword%")
                   ->orWhereHas('class', function($query) use ($keyword){
                       $query->where('name', 'Like', '%'.$keyword.'%');
                   })
                   ->paginate(10); 
        return view('student', ['studentList' => $student]);
    }

    public function show($id)
    {
        //eloquent belongsTo
        $student = Student::with(['class.waliKelas', 'extracurriculars'])
            ->findOrFail($id);
        return view('student-detail', ['student' => $student]);
    }

    public function create()
    {
        $class = ClassRoom::select('id', 'name')->get();
        return view('student-tambah', ['class' => $class]);
    }

    public function store(StudentCreateRequest $request)
    { //menyimpan data dengan mass assignment
        $student = Student::create($request->all());

        if ($student) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data Berhasil Disimpan');
        }

        return redirect('/students');
    }

    public function edit(Request $request, $id)
    {
        //eloquent
        $student = Student::with('class')->findOrFail($id);
        $class = ClassRoom::where('id', '!=', $student->class_id)->select('id', 'name')->get();
        return view('student-edit', ['student' => $student, 'class' => $class]);
    }

    public function update(StudentEditRequest $request, $id)
    {
        $student = Student::findOrFail($id);
        //menyimpan data dengan mass assignment
        $student->update($request->all());

        if ($student) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data Berhasil Disimpan');
        }

        return redirect('/students');
    }

    public function delete($id)
    {
        $student = Student::findOrFail($id);
        return view('student-delete', ['student' => $student]);
    }

    public function destroy($id)
    {
        // dd($id);

        //QUERY BUILDER DELETE
        // $deleteStudent = DB::table('students')->where('id',$id)->delete();

        //ELUQUENT DELETE
        $deletedStudent = Student::findOrFail($id);
        $deletedStudent->delete();

        if ($deletedStudent) 
        {
            Session::flash('status', 'success');
            Session::flash('message', 'Data Berhasil Dihapus!');
        }

        return redirect('/students');
    }

    public function deletedStudent()
    {
        $deletedStudent = Student::onlyTrashed()->get();
        return view('student-terhapus', ['student' => $deletedStudent]);
    }

    public function restore($id)
    {
        $deletedStudent = Student::withTrashed()->where('id',$id)->restore();

        if ($deletedStudent) 
        {
            Session::flash('status', 'success');
            Session::flash('message', 'Data Berhasil Direstore!');
        }

        return redirect('/students');
    }
}

























 //cara lazy loading
        // $student = Student::all(); // select * from students;
        // return view('student', ['studentList'=> $student]);

        //cara eager loading
        // $student = Student::with(['class.waliKelas', 'extracurriculars'])->get(); // select * from students;
        // return view('student', ['studentList'=> $student]);



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