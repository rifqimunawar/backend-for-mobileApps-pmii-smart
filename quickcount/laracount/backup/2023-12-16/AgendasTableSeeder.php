<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AgendasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('agendas')->delete();
        
        \DB::table('agendas')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Yasinan',
                'date' => '2023-11-22',
                'location' => 'Mesjid Uninus',
                'img' => 'Dema_uninus_Yasinan_1700653049.png',
                'created_at' => '2023-11-22 11:37:30',
                'updated_at' => '2023-11-22 11:37:30',
            ),
        ));
        
        
    }
}