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
      $this->call(PengurusSeeder::class);
      $this->call(GaleriSeeder::class);
      $this->call(AspirasiSeeder::class);
      $this->call(BeasiswaSeeder::class);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(UsersTableSeeder::class);
        $this->call(HomesTableSeeder::class);
        $this->call(PengurusesTableSeeder::class);
        $this->call(GalerisTableSeeder::class);
        $this->call(AspirasisTableSeeder::class);
        $this->call(BeasiswasTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(TagsTableSeeder::class);
    }
}
