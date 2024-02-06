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
            1 => 
            array (
                'id' => 2,
                'name' => 'rifqi',
                'post_id' => '3',
                'comment' => 'tidur adalah anugerah',
                'created_at' => '2023-11-22 07:40:47',
                'updated_at' => '2023-11-22 07:40:47',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'test',
                'post_id' => '2',
                'comment' => 'koment',
                'created_at' => '2023-11-22 09:54:21',
                'updated_at' => '2023-11-22 09:54:21',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'test komentar',
                'post_id' => '2',
                'comment' => 'ini adalha komentar yang harusnya agak panjang dan memeakan banyak ruang dan waktu anjay dema sekarang punya website resmi cuy',
                'created_at' => '2023-11-22 09:55:32',
                'updated_at' => '2023-11-22 09:55:32',
            ),
        ));
        
        
    }
}