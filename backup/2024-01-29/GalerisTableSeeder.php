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
                'title' => 'Harlah PMII Solo',
                'img' => 'Dema_uninus_Harlah PMII Solo_1706374195.jpg',
                'created_at' => NULL,
                'updated_at' => '2024-01-27 23:49:55',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Kantor Depan PCNU',
                'img' => 'Dema_uninus_Kantor Depan PCNU_1706374220.JPG',
                'created_at' => '2023-12-14 08:27:47',
                'updated_at' => '2024-01-27 23:50:21',
            ),
        ));
        
        
    }
}