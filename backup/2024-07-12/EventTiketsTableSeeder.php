<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EventTiketsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('event_tikets')->delete();
        
        
        
    }
}