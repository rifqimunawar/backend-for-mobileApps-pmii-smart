<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GalerisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('galeris')->delete();
        
        \DB::table('galeris')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'ngopi bareng',
                'img' => 'pengurus_Rifqi_1697618146.JPG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}