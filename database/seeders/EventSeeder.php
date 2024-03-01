<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('events')->insert([
        'title' => 'konser DCDC',
        'img' => 'https://s3-ap-southeast-1.amazonaws.com/loket-production-sg/images/banner/20220916155646_63243a4ec5193.jpg',
        'description' => 'konser seru dcdc dihadiri banyak artis',
        'date' => '12-12-2022',
        'time' => '09.30',
        'place' => 'Lapang Uninus',
        'penyelenggara' => 'Dema',
        'jumlah_tiket' => '100',
        // 'tiket_id' => '1',
    ]);
    }
}
