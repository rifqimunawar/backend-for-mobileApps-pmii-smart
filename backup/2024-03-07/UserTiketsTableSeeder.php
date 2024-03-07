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
        
        
        
    }
}