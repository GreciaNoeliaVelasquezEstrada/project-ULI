<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
     
     public function definition()
    {
    /**return [
            "name" =>$this->faker->company,
            "description" =>$this->faker->paragraph(3),
            "created_at" => now()
        
        ];*/
    } 
    
}
