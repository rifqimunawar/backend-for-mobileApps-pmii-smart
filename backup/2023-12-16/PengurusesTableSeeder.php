<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PengurusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('penguruses')->delete();
        
        \DB::table('penguruses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'cahyadi',
                'jabatan' => 'presma',
                'username_ig' => 'cahya__',
                'img' => 'pengurus_cahyadi_1700642756.jpeg',
                'created_at' => NULL,
                'updated_at' => '2023-11-22 08:45:57',
            ),
        ));
        
        
    }
}