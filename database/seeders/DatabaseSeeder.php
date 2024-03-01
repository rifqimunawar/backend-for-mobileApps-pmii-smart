<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UsersTableSeeder::class);
        $this->call(TiketsTableSeeder::class);
        $this->call(UserTiketsTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(EventTiketsTableSeeder::class);
    }
}
