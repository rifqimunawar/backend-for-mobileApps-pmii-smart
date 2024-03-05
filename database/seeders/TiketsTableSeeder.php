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
        
        
        
    }
}