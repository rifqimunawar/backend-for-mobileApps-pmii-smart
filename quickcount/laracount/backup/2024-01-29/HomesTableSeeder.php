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
                'title' => 'Welcome to HMI Komisariat Syari\'ah dan Hukum Cabang Kabupaten Bandung',
                'description' => 'Selamat datang di website resmi senat mahasiswa fakultas teknik universitas islam nusantara kota Bandung Jawa Barat',
                'img' => 'home__1706374143.jpg',
                'created_at' => '2023-10-18 07:12:58',
                'updated_at' => '2024-01-29 12:03:13',
            ),
        ));
        
        
    }
}