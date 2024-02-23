<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'berita',
                'slug' => 'berita',
                'created_at' => '2023-10-25 16:49:59',
                'updated_at' => '2024-01-29 11:51:27',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'pengumuman',
                'slug' => 'pengumuman',
                'created_at' => '2023-10-25 16:50:11',
                'updated_at' => '2023-10-25 16:50:11',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'opini',
                'slug' => 'organisasi',
                'created_at' => '2024-01-29 11:58:22',
                'updated_at' => '2024-01-29 12:00:14',
            ),
        ));
        
        
    }
}