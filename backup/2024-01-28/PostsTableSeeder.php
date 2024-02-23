<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 9,
                'title' => 'ini judul postingan',
                'slug' => 'ini-judul-postingan',
                'img' => 'Blog_ini judul postingan_65b53585365cd.jpg',
                'status' => 1,
                'views' => '12',
                'content' => '<p>test 123</p>',
                'category_id' => 1,
                'user_id' => 1,
                'created_at' => '2024-01-27 23:53:01',
                'updated_at' => '2024-01-27 23:55:33',
            ),
        ));
        
        
    }
}