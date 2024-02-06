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
                'img' => 'home__1697613177_JPG',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}