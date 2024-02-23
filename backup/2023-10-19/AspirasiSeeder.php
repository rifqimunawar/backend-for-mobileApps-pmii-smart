<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AspirasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('aspirasis')->insert([
        'name' => 'Rifqi Munawar',
        'email' => 'rifqi@gmail.com',
        'pesan' => 'dema semakin maju',
      ]);
    }
}
