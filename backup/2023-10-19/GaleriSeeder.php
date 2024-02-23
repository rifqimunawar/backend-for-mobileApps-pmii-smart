<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('galeris')->insert([
        'title' => 'ngopi bareng',
        'img' => 'pengurus_Rifqi_1697618146.JPG',
      ]);
    }
}
