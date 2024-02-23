@section('title')
    {{ 'Galeri' }}
@endsection
@section('favicon')
    {{ asset('img/logo-senat.png') }}
@endsection
@extends('masterClient')
@section('content')
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio m-5" data-aos="fade-up">

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

                <div class="row g-0 portfolio-container">

                    @foreach ($galery->take(12) as $item)
                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                            <img src="{{ asset('img/' . $item->img) }}" class="img-fluid" alt=""
                            style="width:350px; height:200px; object-fit:cover">
                            <div class="portfolio-info">
                                <h4>{{ $item->title }}</h4>
                                <a href="{{ asset('img/' . $item->img) }}" title="{{ $item->title }}"
                                    data-gallery="portfolio-gallery" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="{{ asset('img/' . $item->img) }}" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    @endforeach

                    <!-- End Portfolio Item -->

                </div><!-- End Portfolio Container -->

            </div>

        </div>
    </section><!-- End Portfolio Section -->
@endsection
