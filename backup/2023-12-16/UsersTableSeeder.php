<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'rifqi',
                'email' => 'rifqi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$mJssI3iglmIEI4Cp8OLLVOrobh5FCzNa84MwY.4XYSZNzgTlamFT.',
                'remember_token' => NULL,
                'created_at' => '2023-11-22 06:53:23',
                'updated_at' => '2023-11-22 06:53:23',
            ),
        ));
        
        
    }
}