<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Subject;
use App\Model\Matter;
class Activitie extends Model
{
    use HasFactory;

    public function subject(){
        return $this->belongsToMany(Subject::class);
    }
    public function matter(){
        return $this->belongsToMany(Matter::class);
    }
}
