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
                'name' => 'Pintu A',
                'email' => 'rifqi@gmail.com',
                'role' => 'super admin',
                'email_verified_at' => NULL,
                'password' => '$2y$12$w32O53C0vZnSmUAG8gNTBOMdluGJnBcCSXKwCTNuSi7MCVHYPA2Z.',
                'tiket_id' => NULL,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => '2024-03-02 23:27:18',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Pintu B',
                'email' => 'pintub@gmail.com',
                'role' => 'admin',
                'email_verified_at' => NULL,
                'password' => '$2y$12$GO078Xn2LqyG6ghh9gAOJOpIDXzw4OcLpyszSxKdeuphXrCLX6fVq',
                'tiket_id' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-02 23:28:36',
                'updated_at' => '2024-03-02 23:28:36',
            ),
        ));
        
        
    }
}