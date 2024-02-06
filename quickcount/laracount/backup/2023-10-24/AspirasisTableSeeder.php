<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AspirasisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('aspirasis')->delete();
        
        \DB::table('aspirasis')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Rifqi Munawar',
                'email' => 'rifqi@gmail.com',
                'pesan' => 'dema semakin maju',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}