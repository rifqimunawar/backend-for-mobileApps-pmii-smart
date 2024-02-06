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
                'title' => 'beasiswa PMII update',
                'description' => 'beasiswa 50% untuk kader PMII update',
                'img' => 'Beasiswa_uninus_beasiswa PMII update_1698124740.JPG',
                'link' => 'https://www.instgram.com/watch?v=nDcyoeJ8G1M',
                'created_at' => NULL,
                'updated_at' => '2023-10-24 05:19:01',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'beasiswa NU',
                'description' => 'beasiswa 70% potongan UKT untuk warga nahdlyin',
                'img' => 'pengurus_Rifqi_1697618146.JPG',
                'link' => 'https://www.youtube.com/watch?v=nDcyoeJ8G1M',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'title' => 'bea',
                'description' => 'dd',
                'img' => 'Beasiswa_uninus_bea_1698126916.JPG',
                'link' => 'http://127.0.0.1:8000/admin/beasiswa/create',
                'created_at' => '2023-10-24 05:55:17',
                'updated_at' => '2023-10-24 05:55:17',
            ),
        ));
        
        
    }
}