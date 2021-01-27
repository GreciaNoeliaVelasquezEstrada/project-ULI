<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Grade;
class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $grade = new grade();

        $grade->name = "nivel 1a";

        $grade->save();
        

        $grade = new grade();

        $grade->name = "nivel 1b";
        
        $grade->save();


        $grade = new grade();

        $grade->name = "nivel 1c";
        
        $grade->save();


        $grade = new grade();

        $grade->name = "nivel 2a";
        
        $grade->save();


        $grade = new grade();

        $grade->name = "nivel 2b";
        
        $grade->save();


        
    }
}
