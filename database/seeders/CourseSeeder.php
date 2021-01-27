<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Course;
class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $course = new Course();

        $course->name = "Gramatica";

        $course->save();
        

        $course = new Course();

        $course->name = "Numbers";
        
        $course->save();


        $course = new Course();

        $course->name = "Presente Simple";
        
        $course->save();
    }
}
