<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AspirasisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('aspirasis')->delete();
        
        \DB::table('aspirasis')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Rifqi Munawar',
                'email' => 'rifqi@gmail.com',
                'pesan' => 'dema semakin maju',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'aa',
                'email' => 'a@gmail.com',
                'pesan' => 'dslkfjs',
                'created_at' => '2023-11-27 16:06:27',
                'updated_at' => '2023-11-27 16:06:27',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'rifqi',
                'email' => 'rifqi@gmail.com',
                'pesan' => 'kdsljfa',
                'created_at' => '2023-11-27 16:13:25',
                'updated_at' => '2023-11-27 16:13:25',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'rifqi',
                'email' => 'rifqi@gmail.com',
                'pesan' => 'dema sekarang anjing banget gituh',
                'created_at' => '2023-11-27 16:16:55',
                'updated_at' => '2023-11-27 16:16:55',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'rifqi',
                'email' => 'kdsjaf@gmail.com',
                'pesan' => 'lkasjfda',
                'created_at' => '2023-11-27 16:19:14',
                'updated_at' => '2023-11-27 16:19:14',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'rifqi',
                'email' => 'lkfjd@gmail.com',
                'pesan' => 'lksadjfa',
                'created_at' => '2023-11-27 16:19:52',
                'updated_at' => '2023-11-27 16:19:52',
            ),
        ));
        
        
    }
}