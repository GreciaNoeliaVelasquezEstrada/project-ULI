<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Teacher;
use App\Model\Student;

class Assistance extends Model
{
    use HasFactory;

    public function teacher(){
        return $this->hasMany(Teacher::class);
    }
    public function student(){
        return $this->hasMany(Student::class);
    }
}
