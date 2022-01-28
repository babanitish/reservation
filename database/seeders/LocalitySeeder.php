<?php

namespace Database\Seeders;

use App\Models\Locality;
use Illuminate\Support\Facades\DB;

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
                Locality::truncate();
        //Define data
        $localities = [
            ['locality'=>'uccle'],

            ['locality'=>'saint-gilles'],

        ];

        //Insert data in the table
        DB::table('localities')->insert($localities);
    }
}
