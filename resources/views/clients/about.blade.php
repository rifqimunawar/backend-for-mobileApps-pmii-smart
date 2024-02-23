@section('title')
    {{ 'About' }}
@endsection
@section('favicon')
    {{ asset('img/logo-senat.png') }}
@endsection
@extends('masterClient')
@section('content')
    <!-- ======= About Section ======= -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about m-5">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>About Us</h2>
                <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas
                    asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p>
            </div>

            <div class="row g-4 g-lg-6" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-5">
                    <div class="about-img">
                        <img src="{{ asset('img/values-2.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-7">
                    <h3 class="pt-0 pt-lg-5">Peran Penting Senat Mahasiswa Fakultas Teknik
                    </h3>

                    <div class="d-flex align-items-center mt-4">
                    </div>
                    <p>Senat Mahasiswa Fakultas Teknik memiliki peran sentral sebagai perwakilan mahasiswa khususnya dari
                        Fakultas Teknik di Universitas Islam Nusantara. Kita berkomitmen kuat untuk melindungi dan
                        memperjuangkan hak-hak mahasiswa, sekaligus menjaga identitas fakultas teknik dengan semangat
                        nilai-nilai Islam Ahlu Sunnah wal Jama'ah. Dengan menjadi suara aktif mahasiswa, Senat bertujuan
                        memastikan bahwa setiap kebijakan atau kegiatan yang diambil oleh senat mahasiswa fakultas teknik
                        mencerminkan aspirasi dan kebutuhan sejati dari seluruh anggota mahasiswa Fakultas Teknik serta
                        selaras dengan nilai-nilai keislaman.</p>


                </div><!-- End Tab 1 Content -->

            </div>

        </div>

        </div>

        </div>
    </section><!-- End About Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Pengurus</h2>
                <p>Periode 2023-2024</p>
            </header>

            <div class="row gy-5">

                @foreach ($pengurusData as $item)
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('img/'. $item->img) }}" class="img-fluid" alt="" 
                                style="height:250px; width: 300px; object-fit:cover">
                            </div>
                            <div class="member-info">
                                <div class="social">
                                    <a href="https://www.instagram.com/{{ $item->username_ig }}"><i class="bi bi-twitter"></i></a>
                                    <a href="https://www.instagram.com/{{ $item->username_ig }}"><i class="bi bi-facebook"></i></a>
                                    <a href="https://www.instagram.com/{{ $item->username_ig }}"><i class="bi bi-instagram"></i></a>
                                    <a href="https://www.instagram.com/{{ $item->username_ig }}"><i class="bi bi-linkedin"></i></a>
                                </div>
                                <h4>{{ $item->name }}</h4>
                                <span>{{ $item->jabatan }}</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->
                @endforeach
            </div>

        </div>

    </section><!-- End Team Section -->
@endsection
