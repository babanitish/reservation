<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocalitySeeder extends Seeder
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
        $localities = [
            ['localities'=>'comédien'],
            ['postal_code'=>'winston'],
        ];
        
        //Insert data in the table
        DB::table('localities')->insert($localities);
    }
}
