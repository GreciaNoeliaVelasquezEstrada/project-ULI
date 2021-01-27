<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role = new role();

        $role->description = "Students";

        $role->save();

        $role = new role();

        $role->description = "Teacher";
        
        $role->save();

    }
}
