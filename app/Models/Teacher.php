<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\User;
class Teacher extends Model
{
    use HasFactory;
//relacion de uno a muchos inversa
    public function user(){
        
        return $this->belongsTo('App\Models\User');
    }
}
