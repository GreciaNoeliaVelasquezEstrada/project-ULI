<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use\App\Model\Matter;
use\App\Model\teacher;
use\App\Model\Student;
class Subject extends Model
{
    use HasFactory;

    public function matter(){
        return $this->belongsTo(Matter::class);
    }

    public function teacher(){
        return $this->belongsToMany(Teacher::class);
    }
    public function student(){
        return $this->belongsToMany(Student::class);
    }
}
