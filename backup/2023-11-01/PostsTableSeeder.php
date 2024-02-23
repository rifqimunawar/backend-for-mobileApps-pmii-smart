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
                'id' => 1,
                'title' => 'Komdis Sadis',
                'slug' => 'komdis-sadis',
                'img' => 'home__1697613297.JPG',
                'status'=> false,
                'views' => '5',
                'content' => 'komdis saat ini sangat terlihat sadis sekali dalam menindak maba',
                'category_id' => 1,
                'user_id' => 1,
                'created_at' => '2023-10-25 16:50:59',
                'updated_at' => '2023-10-25 16:50:59',
            ),
        ));
        \DB::table('posts')->insert(array (
            1 => 
            array (
                'id' => 2,
                'title' => 'Anjay Sadis',
                'slug' => 'komdis-sadis',
                'img' => 'home__1697613297.JPG',
                'status'=> true,
                'views' => '5',
                'content' => 'komdis saat ini sangat terlihat sadis sekali dalam menindak maba',
                'category_id' => 2,
                'user_id' => 1,
                'created_at' => '2023-10-25 16:50:59',
                'updated_at' => '2023-10-25 16:50:59',
            ),
        ));
        
        
    }
}