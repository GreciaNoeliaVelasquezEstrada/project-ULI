<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use\App\Model\Subject;
use\App\Model\Grade;
use\App\Model\Course;
class Matter extends Model
{
    use HasFactory;

    public function subject(){
        return $this->HasMany(Subject::class);
    }

    public function grade(){
        return $this->BelongsTo(Grade::class);
    }

    public function course(){
        return $this->BelongsTo(Course::class);
    }
}
