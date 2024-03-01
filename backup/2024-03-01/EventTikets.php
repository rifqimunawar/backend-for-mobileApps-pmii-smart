<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventTikets extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      \DB::table('event_tikets')->delete();
        
      \DB::table('event_tikets')->insert(array (
          0 => 
          array (
              'id' => 1,
              'event_id' => 1,
              'tiket_id' => 1,
              'created_at' => NULL,
              'updated_at' => NULL,
          ),
      ));
    }
}
