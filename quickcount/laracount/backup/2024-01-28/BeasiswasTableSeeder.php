<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BeasiswasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('beasiswas')->delete();
        
        \DB::table('beasiswas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'beasiswa a',
                'description' => 'beasiswa 50% untuk tidak bayar ukt',
                'img' => 'Beasiswa_uninus_beasiswa PMII update_1701100068.png',
                'link' => 'https://www.instgram.com/watch?v=nDcyoeJ8G1M',
                'created_at' => NULL,
                'updated_at' => '2023-12-14 08:15:46',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'beasiswa B',
                'description' => 'beasiswa 70% potongan UKT',
                'img' => 'pengurus_Rifqi_1697618146.JPG',
                'link' => 'https://www.youtube.com/watch?v=nDcyoeJ8G1M',
                'created_at' => NULL,
                'updated_at' => '2023-12-14 08:16:05',
            ),
        ));
        
        
    }
}