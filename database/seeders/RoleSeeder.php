<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
                //Empty the table first
                Type::truncate();
        //Define data
        $roles = [
            ['role'=>'comédien'],
            ['role'=>'scénographe'],
            ['role'=>'auteur'],
        ];
        
        //Insert data in the table
        DB::table('roles')->insert($roles);
    }
}
