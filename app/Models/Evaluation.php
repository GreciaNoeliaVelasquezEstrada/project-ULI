<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Subject;
use App\Model\Matter;
use App\Model\teacher;
use App\Model\Student;

class Evaluation extends Model
{
    use HasFactory;

    public function subject(){
        return $this->belongsTo(Subject::class);
    }
    public function matter(){
        return $this->belongsTo(Matter::class);
    }
    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
    public function student(){
        return $this->belongsTo(Student::class);
    }

}
