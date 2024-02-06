<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'rifqi',
                'post_id' => '2',
                'comment' => 'anjay',
                'created_at' => '2023-11-22 06:50:17',
                'updated_at' => '2023-11-22 06:50:17',
            ),
        ));
        
        
    }
}