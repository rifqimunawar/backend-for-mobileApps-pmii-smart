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
                'img' => 'event_1709789186.jpeg',
                'description' => 'WOW Brand, Seminar Brand Terakbar hadir kembali untuk Anda pada tanggal 7 Maret 2024 di The Ballroom at Djakarta Theater. Ajang kesembilan yang mengusung tema Branding to Gen Z, memberikan ide dan wawasan mengenai lanskap pemasaran pada Gen Z, aktivitas engaging serta panggung penghargaan meriah bagi para orang brand.

WOW Brand, Seminar Brand Terakbar hadir kembali untuk Anda pada tanggal 7 Maret 2024 di The Ballroom at Djakarta Theater. Ajang kesembilan yang mengusung tema Branding to Gen Z, memberikan ide dan wawasan mengenai lanskap pemasaran pada Gen Z, aktivitas engaging serta panggung penghargaan meriah bagi para orang brand.
WOW Brand, Seminar Brand Terakbar hadir kembali untuk Anda pada tanggal 7 Maret 2024 di The Ballroom at Djakarta Theater. Ajang kesembilan yang mengusung tema Branding to Gen Z, memberikan ide dan wawasan mengenai lanskap pemasaran pada Gen Z, aktivitas engaging serta panggung penghargaan meriah bagi para orang brand.

WOW Brand, Seminar Brand Terakbar hadir kembali untuk Anda pada tanggal 7 Maret 2024 di The Ballroom at Djakarta Theater. Ajang kesembilan yang mengusung tema Branding to Gen Z, memberikan ide dan wawasan mengenai lanskap pemasaran pada Gen Z, aktivitas engaging serta panggung penghargaan meriah bagi para orang brand.

WOW Brand, Seminar Brand Terakbar hadir kembali untuk Anda pada tanggal 7 Maret 2024 di The Ballroom at Djakarta Theater. Ajang kesembilan yang mengusung tema Branding to Gen Z, memberikan ide dan wawasan mengenai lanskap pemasaran pada Gen Z, aktivitas engaging serta panggung penghargaan meriah bagi para orang brand.',
                'date' => '2022-12-12',
                'time' => '18:01:00',
                'place' => 'Lapang Uninus',
                'rp' => 100000,
                'penyelenggara' => 'Dema',
                'jumlah_tiket' => 100,
                'created_at' => NULL,
                'updated_at' => '2024-03-07 05:26:26',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Konser Dadakan',
                'img' => 'event_1709789200.jpeg',
                'description' => 'Konser musik adalah pertunjukan musik yang dilakukan secara langsung di depan para penggemarnya. Konser biasanya diadakan di tempat-tempat khusus seperti gedung konser atau festival. 
Konser memiliki tujuan untuk menghibur penonton. Selain itu, konser juga dapat menjadi ajang silaturahmi dan sarana interaksi antara musisi dan penikmat musik.',
                'date' => '2024-03-04',
                'time' => '20:01:00',
                'place' => 'Lapang Segitiga Uninus',
                'rp' => 175000,
                'penyelenggara' => 'Birokrasi Uninus',
                'jumlah_tiket' => 200,
                'created_at' => '2024-03-02 23:35:18',
                'updated_at' => '2024-03-07 05:26:40',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'aaa',
                'img' => 'event_1709767537.jpg',
                'description' => 'dsfas',
                'date' => '2024-03-01',
                'time' => '11:30:00',
                'place' => 'aaa',
                'rp' => 25000,
                'penyelenggara' => 'aaa',
                'jumlah_tiket' => 11,
                'created_at' => '2024-03-06 23:25:37',
                'updated_at' => '2024-03-06 23:25:37',
            ),
        ));
        
        
    }
}