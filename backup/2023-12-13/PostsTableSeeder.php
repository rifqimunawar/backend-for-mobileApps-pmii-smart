<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Komdis Sadis',
                'slug' => 'komdis-sadis',
                'img' => 'home__1697613297.JPG',
                'status' => 0,
                'views' => '5',
                'content' => 'komdis saat ini sangat terlihat sadis sekali dalam menindak maba',
                'category_id' => 1,
                'user_id' => 1,
                'created_at' => '2023-10-25 16:50:59',
                'updated_at' => '2023-10-25 16:50:59',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Anjay Sadis',
                'slug' => 'komdis-sadis',
                'img' => 'home__1697613297.JPG',
                'status' => 1,
                'views' => '5',
                'content' => 'komdis saat ini sangat terlihat sadis sekali dalam menindak maba',
                'category_id' => 2,
                'user_id' => 1,
                'created_at' => '2023-10-25 16:50:59',
                'updated_at' => '2023-10-25 16:50:59',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Mengenal Lebih Dekat "Abu Naum": Saat Tidur Menjadi Seni',
                'slug' => 'tidurlah',
                'img' => 'Blog_tidurlah_655da9672d28f.jpg',
                'status' => 1,
                'views' => '18',
            'content' => '<p>Julukan "Abu Naum" menghadirkan citra yang unik dan menggelitik imajinasi kita. Dalam bahasa Arab, "Abu" berarti bapak, dan "Naum" berasal dari kata "tidur". Jadi, secara harfiah, Abu Naum dapat diartikan sebagai "Bapak Tidur". Di Universitas Islam Nusantara (Uninus), julukan ini mengacu pada seorang mahasiswa dari Fakultas Hukum yang namanya tidak dapat disebutkan, beliautelah meraih ketenaran dengan kebiasaannya yang unik dan menyenangkan: tidur di mana pun dan kapan pun.</p><h3><strong>Profil Abu Naum: Bapak Tidur di Uninus</strong></h3><h4>Kehidupan Sehari-hari</h4><p>Abu Naum bukanlah sekadar mahasiswa biasa. Ia dikenal karena kemampuannya untuk tidur di berbagai tempat yang tidak biasa, mulai dari kelas, meja kantin, hingga taman depan Rektorat.&nbsp;</p><h4>Pribadinya yang Menyenangkan</h4><p>Meskipun kelihatannya sebagai tukang tidur, Abu Naum memiliki sisi kepribadian yang menyenangkan. Kesenangannya tidur di tempat-tempat yang tidak biasa menciptakan atmosfer yang hangat di sekitarnya, menjadi bahan obrolan, dan membuatnya menjadi sosok yang dikenal oleh banyak teman sejawat.</p><blockquote><p>Baca Juga &nbsp;:<a href="https://www.youtube.com/watch?v=C3OQ8SxD6bQ"> Ini untuk iklan berita lain, misalnya ada berita yang ingin disimpan di tulisan ini jadi tinggal klick anjay</a></p></blockquote><h4>Kesederhanaan dalam Kesenangan</h4><p>Abu Naum membawa semangat kesederhanaan dalam kebahagiaannya. Tidak perlu tempat tidur yang nyaman atau bantal empuk, tempat tidur seperti di lapangan segitiga atau di tengah kantin diatas meja sudah cukup untuk menyajikan tidurnya yang penuh gaya.</p><h4>Tidur di Tempat Terbuka</h4><p>Tidur di tempat terbuka seperti lapangan segitiga tidak hanya menjadi ekspresi kebebasan Abu Naum, tetapi juga menyiratkan bahwa kebahagiaan dapat ditemukan di mana saja dan kapan saja, bahkan di bawah langit terbuka.</p><h3><strong>Kesimpulan: Abu Naum, Sang Bapak Tidur Penuh Gaya</strong></h3><p>Abu Naum di Uninus tidak hanya menjadi tukang tidur biasa, tetapi juga sosok yang menyemarakkan kehidupan kampus. Dengan sikapnya yang santai dan kemampuannya untuk menemukan kesenangan di tempat-tempat sederhana, ia mengajarkan kita bahwa hidup seharusnya tidak selalu diambil terlalu serius. Abu Naum, sang "Bapak Tidur", memberikan inspirasi untuk mencari kebahagiaan di dalam momen-momen sehari-hari, bahkan ketika kita tertidur pulas.<br><br><i><strong>*artikel diatas hanyalah fiktif, tulisan hanya untuk melakukan pengetesan website dema uninus*</strong></i></p>',
                'category_id' => 1,
                'user_id' => 1,
                'created_at' => '2023-11-22 07:10:31',
                'updated_at' => '2023-11-22 08:35:05',
            ),
        ));
        
        
    }
}