<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HomesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('homes')->delete();
        
        \DB::table('homes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'welcome to dema update',
                'img' => 'home__1698126937.JPG',
                'created_at' => '2023-10-18 07:12:58',
                'updated_at' => '2023-10-24 05:55:38',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'welcome to dema',
                'img' => 'home__1697613297.JPG',
                'created_at' => '2023-10-18 07:14:59',
                'updated_at' => '2023-10-18 07:14:59',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'judul lagi',
                'img' => 'home__1697613453.JPG',
                'created_at' => '2023-10-18 07:17:35',
                'updated_at' => '2023-10-18 07:17:35',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'wwww',
                'img' => 'home__1698127035.JPG',
                'created_at' => '2023-10-24 05:57:16',
                'updated_at' => '2023-10-24 05:57:16',
            ),
        ));
        
        
    }
}