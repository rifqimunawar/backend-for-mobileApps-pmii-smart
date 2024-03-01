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
                'role' => 'super admin',
                'email_verified_at' => NULL,
                'password' => '$2y$12$eYeGi36lPO/jqbv0yoiI6eeSyex6kUC4X9Ywn7hvR1Zy8HUL7XsaS',
                'tiket_id' => NULL,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}