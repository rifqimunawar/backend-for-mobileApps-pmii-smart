@section('title')
    {{ 'Home' }}
@endsection
@section('favicon')
    {{ asset('img/logo-senat.png') }}
@endsection
@extends('masterClient')
@push('style')
    @livewireStyles
@endpush
@push('scripts')
    @livewireScripts
@endpush
@section('content')
    <!-- ======= Hero Section ======= -->

    <section id="hero-animated" class="hero-animated d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
            data-aos="zoom-out">
            <img src="{{ asset('img/' . $dataHome[0]->img) }}" class="img-fluid animated">
            <h2><span>{{ $dataHome[0]->title }}</span></h2>
            <a href="{{ route('create.mabim') }}" class="btn btn-primary btn-lg"> <i class="bi bi-triangle-half"></i>  Daftar Mabim</a>
            <p><span>{{ $dataHome[0]->description }}</span></p>

        </div>
    </section>

    <main id="main">


        <!-- ======= Values Section ======= -->
        {{-- <section id="values" class="values">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Our Values</h2>
                    <p>Datang dan Meriahkan</p>
                </header>

                <div class="row">

                    @foreach ($dataKegiatan as $item)
                        <div class="container mt-5">
                            <table class="table bordered-table table-kegiatan d-flex align-items-center justify-content-center">
                        <thead>
                            <tr>
                              <th scope="col" class="date-header d-flex align-items-center justify-content-center"><time datetime="{{ $item->created_at->format('Y-m-d') }}">{{ $item->created_at->format('d M, Y') }}</time></th>
                                <th scope="col" class="info-column">
                                  <h4>{{ $item['name'] }}</h4>
                                    <i class="bi bi-clock"></i>  <time datetime="{{ $item->created_at->format('Y-m-d') }}">{{ $item->created_at->format('d M, Y') }}</time> <br>
                                    <i class="bi bi-geo-alt"></i> {{ $item['location'] }} 
                                </th>
                                <th>
                                  <div> 
                                    <img src="{{ asset('img/'. $item->img) }}" style="width:100px; height:70px; object-fit:cover" alt="">
                                  </div>
                                </th>
                            </tr>
                        </thead>
                    </table>
                        </div>
                    @endforeach


                </div>

            </div>

        </section> --}}


        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>VISI DAN MISI</h2>
                    <p></p>
                </div>

                <ul class="nav nav-tabs row gy-4 d-flex justify-content-center align-item-center">

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <i class="bi bi-brightness-high color-teal"></i>
                            <h4>Visi</h4>
                        </a>
                    </li><!-- End Tab 1 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <i class="bi bi-command color-red"></i>
                            <h4>Misi</h4>
                        </a>
                    </li><!-- End Tab 2 Nav -->

                </ul>


                <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                                <h3>Visi</h3>
                                <p class="fst-italic">
                                    Menempatkan mahasiswa fakultas teknik uninus menjadi kontrol sosial di lingkungan kampus
                                    dan kehidupan masyarakat yang mengedepankan ilmu pengetahuan, teknologi, agama, dan
                                    negara.
                                </p>

                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img src="{{ asset('clients/assets/img/features-1.svg') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 1 -->

                    <div class="tab-pane" id="tab-2">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Misi</h3>
                                <p>
                                    Mengembangkan potensial kreatif dan inovatif serta memperjuangkan kesejahteraan
                                    Mahasiswa Fakultas Teknik yang tidak menyimpang dari azas, sifat dan kaidah-kaidah
                                    organisasi.

                                </p>
                                <p class="fst-italic">
                                    Membina dan menigkatkan hubungan baik antara Mahasiswa dan Organisasi dibawah naungan
                                    Fakultas Teknik dengan civitas akademik UNINUS serta pihak" lain dalam rangka pencapaian
                                    visi organisasi yang tidak menyimpang dari azas, sifat dan kaidah-kaidah organisasi.
                                </p>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="{{ asset('clients/assets/img/features-2.svg') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 2 -->

                    <div class="tab-pane" id="tab-3">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Pariatur</h3>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Provident mollitia neque rerum asperiores
                                        dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                                </ul>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="assets/img/features-3.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 3 -->

                    <div class="tab-pane" id="tab-4">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Nostrum</h3>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum
                                </p>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                        storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="assets/img/features-4.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 4 -->

                    <div class="tab-pane" id="tab-5">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Adipiscing</h3>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum
                                </p>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                        storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="assets/img/features-5.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 5 -->

                    <div class="tab-pane" id="tab-6">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Reprehit</h3>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum
                                </p>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                        storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="assets/img/features-6.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 6 -->

                </div>

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Ormawa di Fakultas Teknik</h2>
                    <p>Temporibus omnis officia</p>
                </header>

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="{{ asset('img/himatif.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('img/hme.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('img/hmti.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('img/himatif.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('img/hme.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('img/hmti.png') }}" class="img-fluid"
                                alt=""></div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </section><!-- End Clients Section -->


        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio" data-aos="fade-up">

            <div class="container">

                <div class="section-header">
                    <h2>Galery</h2>
                    <p>Non hic nulla eum consequatur maxime ut vero memo vero totam officiis pariatur eos dolorum sed fug
                        dolorem est possimus esse quae repudiandae. Dolorem id enim officiis sunt deserunt esse soluta
                        consequatur quaerat</p>
                </div>

            </div>

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">

                    <ul class="portfolio-flters">
                        {{-- <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Product</li>
            <li data-filter=".filter-branding">Branding</li>
            <li data-filter=".filter-books">Books</li> --}}
                    </ul><!-- End Portfolio Filters -->

                    <div class="row g-0 portfolio-container">

                        @foreach ($galery->take(4) as $item)
                            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                                <img src="{{ asset('img/' . $item->img) }}" class="img-fluid" alt=""
                                    style="width:350px; height:200px; object-fit:cover">
                                <div class="portfolio-info">
                                    <h4>{{ $item->title }}</h4>
                                    <a href="{{ asset('img/' . $item->img) }}" title="{{ $item->title }}"
                                        data-gallery="portfolio-gallery" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="{{ asset('img/' . $item->img) }}" title="More Details"
                                        class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        @endforeach

                        <!-- End Portfolio Item -->

                    </div><!-- End Portfolio Container -->

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-blog-posts" class="recent-blog-posts">

            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Blog</h2>
                    <p>Recent posts form our Blog</p>
                </div>

                <div class="row">

                    @foreach ($postLatest->take(3) as $item)
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="post-box">
                                <div class="post-img"><img src="{{ asset('img/' . $item->img) }}" class="img-fluid"
                                        alt="" style="width: 400px; height:250px; object-fit:cover"></div>
                                <div class="meta">
                                    <span class="post-date"><time
                                            datetime="{{ $item->created_at->format('Y-m-d') }}">{{ $item->created_at->format('d M, Y') }}</time></span>
                                    <span class="post-author"> / Julia Parker</span>
                                </div>
                                <h3 class="post-title">{{ $item->title }}</h3>
                                <a href="/article/{{ $item->slug }}"
                                    class="readmore stretched-link"><span>Read More</span><i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>

        </section><!-- End Recent Blog Posts Section -->


        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row gy-4">

                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content px-xl-5">
                            <h3>Frequently Asked and <strong>Questions</strong></h3>
                            <p>
                                Pertanyaan yang sering ditanyakan
                            </p>
                        </div>

                        <div class="accordion accordion-flush px-xl-5" id="faqlist">

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Apa peran utama dari Senat Mahasiswa Fakultas Teknik?
                                    </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Senat Mahasiswa Fakultas Teknik memiliki peran utama sebagai lembaga perwakilan
                                        mahasiswa yang bertugas memperjuangkan dan mengadvokasi kepentingan serta hak-hak
                                        mahasiswa di tingkat fakultas.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-2">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Apa itu Senat Mahasiswa Fakultas Teknik?
                                    </button>
                                </h3>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Senat Mahasiswa Fakultas Teknik adalah wadah perwakilan mahasiswa untuk menyuarakan
                                        dan memperjuangkan kepentingan mereka di tingkat fakultas.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-3">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Apa perbedaan antara Senat dan Himpunan Mahasiswa Jurusan di Fakultas Teknik?
                                    </button>
                                </h3>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Himpunan Mahasiswa Fakultas Teknik lebih fokus pada fungsi perwakilan dan advokasi
                                        mahasiswa, sementara Senat Mahasiswa memiliki tanggung jawab lebih luas termasuk
                                        kegiatan Himpunan, pengembangan, dan pelayanan kepada mahasiswa.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-4">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Bagaimana Senat Mahasiswa Fakultas Teknik berinteraksi dengan pihak fakultas dan
                                        universitas?
                                    </button>
                                </h3>
                                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Senat Mahasiswa Fakultas Teknik berinteraksi dengan pihak fakultas dan universitas
                                        melalui dialog, rapat kerja, dan forum lainnya. Mereka menyampaikan aspirasi
                                        mahasiswa dan berpartisipasi dalam pengambilan keputusan terkait kebijakan akademik
                                        dan non-akademik.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-5">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Apa saja kegiatan yang diadakan oleh Senat Mahasiswa Fakultas Teknik?
                                    </button>
                                </h3>
                                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Senat sering mengadakan kegiatan seperti seminar, dan diskusi, untuk meningkatkan
                                        pengalaman dan kesejahteraan mahasiswa di fakultas.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                        </div>

                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                        style='background-image: url("{{ asset('clients/assets/img/faq.jpg') }}");'>&nbsp;</div>
                </div>

            </div>
        </section><!-- End F.A.Q Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="testimonials-slider swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('img/cahyadi.jpg') }}" class="testimonial-img" alt=""
                                    style="width:120px; height:120px; object-fit:cover">
                                <h3>Muhmmad Cahyadi</h3>
                                <h4>Presma Uninus</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Maju mundurnya uninus tergantung kemajuan teknologinya, dan kemajuan teknologi
                                    tergantung mahasiswa tekniknya
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('img/endi.jpg') }}" class="testimonial-img" alt=""
                                    style="width:120px; height:120px; object-fit:cover">
                                <h3>Endi Rahman Muhammad</h3>
                                <h4>Ketua PAC IPNU Pangandaran</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Ketika kamu tidak tahu tanyakan, ketika kamu sudah tau nyatakan
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('img/daus.png') }}" class="testimonial-img" alt=""
                                    style="width:120px; height:120px; object-fit:cover">
                                <h3>Firdaus Nur Hariyanto S.T</h3>
                                <h4>Wakil Presma 2020-2021</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Memberdayakan perubahan dengan memerdayakan teknologi
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->




    </main><!-- End #main -->
@endsection
