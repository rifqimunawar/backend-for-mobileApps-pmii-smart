<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTiketsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_tikets')->delete();
        
        \DB::table('user_tikets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'tiket_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'tiket_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}