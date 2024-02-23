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
            1 => 
            array (
                'id' => 2,
                'name' => 'Agil Abdul G.',
                'jabatan' => 'Demisioner',
                'username_ig' => 'al-gifari',
                'img' => 'pengurus_Agil Abdul G._1706504908.png',
                'created_at' => '2024-01-29 12:08:29',
                'updated_at' => '2024-01-29 12:11:14',
            ),
        ));
        
        
    }
}