<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TiketsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tikets')->delete();
        
        \DB::table('tikets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'rifqi',
                'wa' => '0000',
                'email' => 'a@gmail.com',
                'qr_code' => 'XwozoDvcwVdvWEXj0KNp',
                'status' => 0,
                'user_id' => '0',
                'event_id' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}