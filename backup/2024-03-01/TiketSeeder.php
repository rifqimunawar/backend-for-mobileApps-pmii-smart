<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TiketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('tikets')->insert([
        'name' => 'rifqi',
        'wa' => '0000',
        'email' => 'a@gmail.com',
        'qr_code' => 'XwozoDvcwVdvWEXj0KNp',
        'status' => '0',
        'user_id' => '0',
        'event_id' => '1',
    ]);
    }
}
