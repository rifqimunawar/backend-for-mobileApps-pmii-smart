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
                'name' => 'aa',
                'wa' => '333',
                'email' => 'rifqimunawar48@gmail.com',
                'qr_code' => 'event_3_mkoWP80MqBQKjJ4zXmh6',
                'status' => 0,
                'user_id' => NULL,
                'event_id' => '3',
                'snap_token' => 'c6eb92d0-53cb-4d4f-8cd7-5e4f8e831773',
                'statusPay' => 0,
                'ip_address' => NULL,
                'created_at' => '2024-07-09 17:01:48',
                'updated_at' => '2024-07-09 17:01:49',
            ),
        ));
        
        
    }
}