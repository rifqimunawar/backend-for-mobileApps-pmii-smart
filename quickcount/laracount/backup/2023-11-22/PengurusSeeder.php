<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PengurusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('penguruses')->insert([
        'name' => 'cahyadi',
        'jabatan' => 'presma',
        'username_ig' => 'cahya__',
        'img' => 'home__1697613177_JPG',
      ]);

      
    }
}
