<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('beasiswas')->insert([
        'title' => 'beasiswa PMII',
        'description'=> 'beasiswa 50% untuk kader PMII',
        'img' => 'pengurus_Rifqi_1697618146.JPG',
        'link'=> 'https://www.youtube.com/watch?v=nDcyoeJ8G1M',
      ]);
      DB::table('beasiswas')->insert([
        'title' => 'beasiswa NU',
        'description'=> 'beasiswa 70% potongan UKT untuk warga nahdlyin',
        'img' => 'pengurus_Rifqi_1697618146.JPG',
        'link'=> 'https://www.youtube.com/watch?v=nDcyoeJ8G1M',
      ]);
    }
}
