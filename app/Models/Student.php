<?php
//  MODEL-> VIEW-> CONTROLLER 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public function class()
    {
        return $this->belongsTo(ClassRoom::class);
    }
    public function extracurriculars()
    {
        return $this->belongsToMany(Extracurricular::class, 
        'student_extracurricular', 'student_id', 'extracurricular_id');
    }
}



















// protected $table ='students';
// protected $primaryKey = 'id';
// public $timestamps = false;