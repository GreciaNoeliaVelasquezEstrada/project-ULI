<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name'];
    //protected $fillable = ['id', 'name'];
   // protected static function boot(){
     //   parent::boot();
       // self::creating(function ($table){
         //   if(! app()->runningInConsole()){
           //     $table->id_course = auth()->id();
        //    }
       // });
    //}
    public function user() {
        return $this->belongsTo(User::class);
    }
}