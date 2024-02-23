@section('title')
    {{ 'Kominfo' }}
@endsection
@section('favicon')
    {{ asset('img/logo-senat.png') }}
@endsection
@extends('masterClient')
@section('content')

    <!-- ======= Services Section ======= -->
    <section id="services" class="services m-5">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Divisi Kominfo</h2>
          <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores adipisci aliquam.</p>
        </div>

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('img/diskom (1).png') }}" class="img-fluid" alt=""
                style="width: 400px; height:250px; object-fit:cover">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-activity"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Rifqi Munawar Ridwan</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('img/diskom (3).png') }}" class="img-fluid" alt=""
                style="width: 400px; height:250px; object-fit:cover">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-easel"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Rika Damayanti</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('img/diskom (2).png') }}" class="img-fluid" alt=""
                style="width: 400px; height:250px; object-fit:cover">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-broadcast"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Melyta Contesa</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('img/diskom (4).png') }}" class="img-fluid" alt=""
                style="width: 400px; height:250px; object-fit:cover">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-bounding-box-circles"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Rizal Abdul Latif</h3>
                </a>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('img/diskom (5).png') }}" class="img-fluid" alt=""
                style="width: 400px; height:250px; object-fit:cover">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-calendar4-week"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Abdul Aziz Ramalana</h3>
                </a>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div><!-- End Service Item -->


        </div>

      </div>
    </section><!-- End Services Section -->
@endsection
