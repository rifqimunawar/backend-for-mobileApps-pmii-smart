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
                'id' => 9,
                'title' => 'ini judul postingan',
                'slug' => 'ini-judul-postingan',
                'img' => 'Blog_ini judul postingan_65b53585365cd.jpg',
                'status' => 1,
                'views' => '65',
                'content' => '<p>test 123</p>',
                'category_id' => 1,
                'user_id' => 1,
                'created_at' => '2024-01-27 23:53:01',
                'updated_at' => '2024-01-29 13:28:09',
            ),
            1 => 
            array (
                'id' => 10,
                'title' => 'anjay',
                'slug' => 'anjay',
                'img' => 'Blog_anjay_65b539962bb7e.jpg',
                'status' => 1,
                'views' => '23',
                'content' => '<p>adi muad</p>',
                'category_id' => 2,
                'user_id' => 1,
                'created_at' => '2024-01-28 00:12:54',
                'updated_at' => '2024-01-29 13:32:28',
            ),
            2 => 
            array (
                'id' => 11,
                'title' => 'Belajar Laravel',
                'slug' => 'belajar-laravel',
                'img' => 'Blog_Belajar Laravel_65b73dd94aa1a.png',
                'status' => 1,
                'views' => '12',
                'content' => '<p>Hai talenta digital yang haus akan materi pemrograman apa kabar? Jika kamu mau jago laravel caritahu di sini ya. Apa Itu Laravel? jadi laravel adalah sebuah <a href="https://en.wikipedia.org/wiki/Framework"><i>framework</i></a> yang membungkus code berbasis PHP di gunakan untuk membantu developer agar dapat efisien saat membuat struktur baris code pada aplikasi web. Selain itu kelebihan framework laravel untuk menjaga situs web tergaja dari ancaman siber.</p><p>Apakah <a href="https://id.wikipedia.org/wiki/Laravel"><i>framework</i></a> itu penting dan apa saja fitur-fitur laravel yang bisa di gunakan oleh web developer? jika kamu penasaran dan ingin jago laravel maka mari kita ulas sampai akhir.</p><h2>Pengenalan Framework</h2><p>Pengertian framework secara istilah yaitu sebuah lapisan terluar atau struktur dasar untuk membentuk kerangka/pola dan sebuah alat untuk mengembangkan perangkat lunak. Framework secara bahasa merujuk pada sebuah kerangka kerja dan struktur dasar untuk mengatur sistem agar membentuk sebuah aplikasi yang tertata dengan baik. Saat ini laravel versi terbaru ada di versi 10.</p><p>Apa yang baru di Laravel 10? Jadi versi ini membantu developer untuk bisa menyertakan laravel <i>pennant</i>. Secara garis besar laravel <i>pennant</i> adalah fitur yang membantu efisiensi sebuah sistem dalam mengaktifkan serta menonaktifkan tools percobaan pada aplikasi yang di buat oleh seorang developer.</p><p><strong>Baca Juga</strong> : <a href="https://www.codepolitan.com/blog/yuk-kenali-fitur-laravel-10/"><i>Yuk Kenali Fitur Laravel 10 Disini!</i></a></p><h3>Fitur Laravel</h3><p>Mau jago laravel maka setelah mengenali dasar framework selanjutnya kita akan mecoba mengenali fitur-fitur laravel. Fitur utama pada laravel di antaranya sebagai berikut:</p><h4>Eloquent ORM</h4><p>Fitur laravel pertama yaitu ada <i>Eloquent ORM</i> atau Object Relational Mapping. ORM memfasilitasi pengguna untuk bisa melakukan interaksi pada sistem database dengan memanfaatkan objek pada PHP. Fungsi Eloquent ORM yaitu membantu proses akses dan manipulasi data lebih praktis dan efisien.</p><p>Penggunaan Eloquent ORM bisa membuat sebuah tabel untuk representasi model di dalam Framework laravel itu sendiri. Fitur dan konsep utama Eloquent ORM ialah mulai dari model, query builder, relasi, hingga migrasi database.</p><p>Artinya dengan menggunakan Eloquent ORM, maka developer bisa mengembangkan dan mendeklarasikan operasi database secara efektif untuk fungsionalitas yang lebih prodkuktif pada aplikasi laravel.</p><h4>Blade Template Engine</h4><p>Supaya jago laravel kita juga harus mengenali fitur lainnya pada framework ini yaitu Blade Template Engine yang merupakan mesin templating sederhana namun memudahkan web developer untuk mengembangkan tampilan antar muka pengguna.</p><p>Fitur ini memfasilitasi sintax yang ekspresif dan sederhana sehingga web developer bisa memanfaatkan fitur ini untuk pengembangan aplikasi mereka dengan cepat.</p><p>Fitur serta konsep Blade Templating Engine contohnya penggunaan variabel <i>{{} $namaVariabel }</i>.</p><h4>Artisan Console</h4><p>Fitur laravel lainnya yaitu ada artisan console yaitu sebuah perintah command-line interface yang memfasilitasi intruksi untuk melakukan tugas pengembangan. Misalnya dalam membuat file, migrasi system database, manajemen cache dan banyak lainnya.</p><p>Nah beberapa fitur dan intruksi yang di running pada artisan console seperti perintah : <i>php artisan make:controller NamaKontroler</i>.</p><p>Jika ingin jago laravel maka pelajari 3 fitur utama barusan ya, namun fitur-fitur laravel lainnya juga masih terbilang cukup banyak. Seperti fitur routing, middleware, paket komposer dan migrasi databae. Kamu bisa belajar lebih dalam seputar laravel dan fiturnya belajar di <a href="https://dashboard.codepolitan.com/learn/courses/detail/belajar-framework-laravel-dasar">sini</a> ya.</p><blockquote><p><strong>Baca juga :</strong> <a href="https://www.codepolitan.com/blog/alasan-mengapa-kamu-harus-menggunakan-framework-laravel-5a08d435ddcfb/"><i>Mengapa Harus Belajar Framewor Laravel? Cek Di Sini!</i></a></p></blockquote><h4>Perbedaan Framework Laravel dan CodeIgniter</h4><p>Sebagai pelajar yang ingin jago laravel untuk menggeluti profesi web programming, maka kamu juga harus tau kelebihan framework ini di banding framework lainnya. Berikut ini perbedaan framework laravel dan framework codeigniter.</p><p>Secara garis besar Laravel merujuk untuk mengembangkan proyek-proyek besar. Fitur-fitur yang di gunakan juga lebih kompleks, misalnya seperti fitur autentifikasi, routing, session manager, hingga caching.</p><p>Sedangkan CodeIgniter banyak di manfaatkan oleh seorang web developer untuk pengembangan proyek sederhana. Karena fitur-fitur yang di sediakan meliputi fitur yang simpel.</p><p>Bagaimana coders? jika kamu mau tau lebih dalam dunia programming dan belajar bahasa pemrograman lebih teratrur kamu bisa kepoin di website CODEPOLITAN ya.</p>',
                'category_id' => 3,
                'user_id' => 1,
                'created_at' => '2024-01-29 12:55:37',
                'updated_at' => '2024-01-29 13:47:11',
            ),
            3 => 
            array (
                'id' => 12,
                'title' => 'jadi fullstack developer dalam 12 minggu',
                'slug' => 'jadi-fullstack-developer-dalam-12-minggu',
                'img' => 'Blog_jadi fullstack developer dalam 12 minggu_65b746e8b2c41.png',
                'status' => 1,
                'views' => '9',
            'content' => '<p>Profesi <strong>full stack developer</strong> memang sangat <a href="https://typoonline.com/kbbi/memikat">memikat</a> ya. Meskipun tugas <strong>full stack developer</strong> terbilang kompleks namun di lirik dengan gaji yang sepadan membuat profesi ini banyak di lirik pada programmer. Apa saja ya keuntungan menjadi <strong>full stack developer</strong>? jika kamu tertarik menggeluti profesi ini yuk caritahu lebih lanjut.</p><h2>Pengenalan</h2><p>Apa itu <strong>full stack developer</strong>? jika kamu seorang mahasiswa IT maka profesi ini mungkin sudah tidak asing ya. Full stack developer adalah seorang pengembang situs web yang bekerja di semua lapisan program. Artinya mereka bekerja di bangak aspek mulai dari <i>user interface</i> atau bagian <i>front-end</i> sampai bagian server yaitu <i>back-end</i>.</p><p><strong>Baca Juga :</strong> <a href="https://www.codepolitan.com/blog/apa-itu-fullstack-developer-pelajari-tugasnya-disini/"><i>Apa Itu Fullstack Developer? Pelajari Tugasnya Disini!</i></a></p><p>Secara garis besar tugas <strong>full stack developer</strong> lebih kompleks di bandingkan dengan profesi developer lainnya. Itu sebabnya profesi ini banyak di cari oleh industri karena di anggap memiliki kemampuan yang <a href="https://kbbi.web.id/mumpuni">mempuni.</a></p><h3>Mengawali Karir Sebagai Full Stack Developer</h3><p>Seperti yang kita ketahui bahwa pengembangan software terus meningkat pada setiap tahunnya. Sehingga menjadi seorang pengembang web merupakan pilihan menarik. Nah untuk kamu yang ingin mengawali karir pada profesi ini, berikut adalah <i>step-by step</i> yang bisa kamu persiapkan.</p><p>&nbsp;</p><h4>Mulailah Pahami Bahasa Pemrograman Dasar</h4><p>Bagi lulusan IT mungkin sudah memahami dasar-dasar pemrograman di wilayah kampus. Bagi kamu yang baru switch career dan ingin menjadi pengembang web maka coba mulai pahami bahasa pemrograman dasar. Misalnya bahasa HTML, CSS dan JavaScript. Kamu bisa belajar melalui buku pemrograman atau platform belajar online.</p><h4>Pahami Teknologi Front-end</h4><p>Setelah memahami bahasa pemrograman dasar kemudian kamu bisa memulai pelajari teknologi font-end. Apa itu teknologi front-end? Jika kamu pernah mengunjungi situs website di google. Tampilan utama situs tersebut ialah dikatakan sebagai tampilan front-end.</p><p>Teknologi front-end akan berinteraksi secara langsung dengan pengguna. Seorang front-end developer bertugas untuk menampilkan halaman antarmuka yang menarik dan responsif. Ketika membangun sebuah halaman front-end maka kamu akan berkaitan dengan berbagai teknologi khusus misalnya Framework.</p><p>Selain itu bahasa pemrograman yang akan sering kamu implementasikan yaitu mulai dari:</p><ol><li>Bahasa pemrograman HTML (Hypertext Markup Language)</li><li>CSS (Cascading Style Sheets)</li><li>JavaScript</li><li>Framework Front-end (React.js, Angular, dan Vue.js)</li><li>Library &amp; plugin</li><li>Testing tools hingga Browser Developer Tools</li></ol><h4>Kenali Teknologi Back-end</h4><p>Seperti yang sudah kita senggol di awal bahwa teknologi back-end berkaitan pada sisi server yaitu bagian belakang website. Kamu bisa mempelajari bahasa pemrograman server-side misalnya bahasa nodejs, python, java, ruby dan sebagainya.</p><p>Bahasa program ini akan melakukan interaksi secara langsung pada database system untuk kemudian di sajikan pada sisi front-end. Sehingga penting sekali bagi seorang <strong>full stack developer</strong> memahami teknologi back-end untuk mengendalikan sebuah sistem agar dapat berjalan sesuai dengan fungsinya.</p><h4>Kuasai Database System</h4><p>Bagi pengembang web pengetahuan <i>management</i> data itu sangat utama. Ketika membangun sebuah system kamu harus mempelajari juga yang namanya SQL (Structured Query Language).</p><p>Fungsinya untuk relasi dan penyimpanan data yang di inputkan pada halaman front-end kemudian di proses oleh back-end dan di simpan di database, contoh nya yaitu MangoDB.</p><h4>Pelajari Version Contol</h4><p>Selanjutnya kamu bisa mempelajari version control misalnya <i>Git</i>. Karena profesi ini akan berkaitan dengan proyek tim maka <i>git</i> akan membantu melacak perubahan baris <i>code</i> yang kamu buat.</p><p>Git akan membantu kamu dalam bekerjasama secara tim dalam mengelola suatu proyek aplikasi secara efisien.</p><p>Nah, jika kamu sudah mempelajari beberapa point di atas maka langkah terpenting berikutnya ialah ikuti kursus atau pelatihan online. Selain bisa memiliki waktu belajar yang lebih efektif bahwa disini kamu biasanya akan mendapatkan banyak relasi. Relasi yang dimaksud tersebut ialah forum diskusi dan komunitas khusus sebagai pengembang web.</p><p>Kursus Full Stack Developer</p><p>Saat ini sudah banyak sekali penyedia kursus <strong>full stack developer</strong>. Karena jenjang karir profesi ini yang sangat kompetitif. Sehingga dalam menempuh pembelajaran bisa <a href="https://id.wiktionary.org/wiki/merogoh">merogoh</a> dompet hingga jutaan rupiah. Jika kamu penasaran lebih lanjut untuk mempelajari materi dengan <i>roadmap</i> jelas dan harga <a href="https://en.wiktionary.org/wiki/affordable"><i>affordable</i></a>, caritahu <a href="https://www.kelasfullstack.id/">disini</a> ya.&nbsp;</p><p><strong>Baca Juga :</strong> <a href="https://www.codepolitan.com/blog/yuk-caritahu-gaji-full-stack-developer-di-indonesia/"><i>Yuk Caritahu Gaji Full Stack Developer di Amerika?</i></a></p><p>Dalam menempuh pembelajaran ini kamu dapat menyelesaikan coursenya se-singkat mungkin. Bahan ajar berupa video langsung dari mentor programming berpengalaman. Materinya bisa di akses seumur hidup tapi kamu bisa menyelesaikannya 3-6 bulan.</p><p>&nbsp;</p>',
                'category_id' => 3,
                'user_id' => 1,
                'created_at' => '2024-01-29 13:32:13',
                'updated_at' => '2024-01-29 13:35:05',
            ),
        ));
        
        
    }
}