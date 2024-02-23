@section('title')
    {{ 'Aspirasi' }}
@endsection
@section('favicon')
    {{ asset('img/logo-senat.png') }}
@endsection
@extends('masterClient')
@section('content')
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact mt-4">

        <div class="container" data-aos="fade-up">

            <header class="section-header mt-4 m-4">
                <h2>Asprasi Mahasiswa</h2>
                <p>Ruang Aspirasi</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-12">
                    <form action="{{ route('client.aspirasiCreate') }}" method="post">
                        @csrf
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="pesan" rows="10" placeholder="Message" required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn-aspirasi"><span>Kirim</span></button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section><!-- End Contact Section -->
@endsection
