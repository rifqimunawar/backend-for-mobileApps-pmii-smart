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
                'name' => 'Rifqi Munawar',
                'jabatan' => 'Div. Kominfo',
                'username_ig' => 'rifqi_munawar',
                'img' => 'pengurus_Rifqi Munawar_1706374171.png',
                'created_at' => NULL,
                'updated_at' => '2024-01-27 23:49:31',
            ),
        ));
        
        
    }
}