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
                'description' => 'Selamat datang di website resmi dewan eksekutif mahasiswa universitas islam nusantara',
                'img' => 'home__1698126937.JPG',
                'created_at' => '2023-10-18 07:12:58',
                'updated_at' => '2023-10-24 05:55:38',
            ),
        ));
        
        
    }
}