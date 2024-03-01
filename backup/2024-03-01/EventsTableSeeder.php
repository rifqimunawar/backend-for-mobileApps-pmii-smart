<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('events')->delete();
        
        \DB::table('events')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Konser Syahrini dalam menyambut bulan suci ramadhan 2024',
                'img' => 'event_Konser Syahrini dalam menyambut bulan suci ramadhan 2024_1709306452.jpeg',
                'description' => 'WOW Brand, Seminar Brand Terakbar hadir kembali untuk Anda pada tanggal 7 Maret 2024 di The Ballroom at Djakarta Theater. Ajang kesembilan yang mengusung tema Branding to Gen Z, memberikan ide dan wawasan mengenai lanskap pemasaran pada Gen Z, aktivitas engaging serta panggung penghargaan meriah bagi para orang brand.

WOW Brand, Seminar Brand Terakbar hadir kembali untuk Anda pada tanggal 7 Maret 2024 di The Ballroom at Djakarta Theater. Ajang kesembilan yang mengusung tema Branding to Gen Z, memberikan ide dan wawasan mengenai lanskap pemasaran pada Gen Z, aktivitas engaging serta panggung penghargaan meriah bagi para orang brand.
WOW Brand, Seminar Brand Terakbar hadir kembali untuk Anda pada tanggal 7 Maret 2024 di The Ballroom at Djakarta Theater. Ajang kesembilan yang mengusung tema Branding to Gen Z, memberikan ide dan wawasan mengenai lanskap pemasaran pada Gen Z, aktivitas engaging serta panggung penghargaan meriah bagi para orang brand.

WOW Brand, Seminar Brand Terakbar hadir kembali untuk Anda pada tanggal 7 Maret 2024 di The Ballroom at Djakarta Theater. Ajang kesembilan yang mengusung tema Branding to Gen Z, memberikan ide dan wawasan mengenai lanskap pemasaran pada Gen Z, aktivitas engaging serta panggung penghargaan meriah bagi para orang brand.

WOW Brand, Seminar Brand Terakbar hadir kembali untuk Anda pada tanggal 7 Maret 2024 di The Ballroom at Djakarta Theater. Ajang kesembilan yang mengusung tema Branding to Gen Z, memberikan ide dan wawasan mengenai lanskap pemasaran pada Gen Z, aktivitas engaging serta panggung penghargaan meriah bagi para orang brand.',
                'date' => '2022-12-12',
                'time' => '18:00:00',
                'place' => 'Lapang Uninus',
                'rp' => 100000,
                'penyelenggara' => 'Dema',
                'jumlah_tiket' => 100,
                'created_at' => NULL,
                'updated_at' => '2024-03-01 15:20:52',
            ),
        ));
        
        
    }
}