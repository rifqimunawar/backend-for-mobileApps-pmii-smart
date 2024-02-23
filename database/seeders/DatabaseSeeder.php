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
        $this->call(HomesTableSeeder::class);
        $this->call(PengurusesTableSeeder::class);
        $this->call(GalerisTableSeeder::class);
        $this->call(AspirasisTableSeeder::class);
        $this->call(BeasiswasTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(PostTagTableSeeder::class);
        $this->call(AgendasTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
    }
}
