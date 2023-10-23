<?php

namespace App\Http\Controllers;

use App\Models\Exracurricular;
use App\Models\Extracurricular;
use Illuminate\Http\Request;

class ExtracurricularController extends Controller
{
    public function index()
    {
        //eiger loading
        $eskul = Extracurricular::with('students')->get();
        return view('extracurricular', ['eskulList'=> $eskul]);
    }

}
