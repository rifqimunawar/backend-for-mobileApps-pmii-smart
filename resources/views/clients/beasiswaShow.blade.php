@section('title')
    {{ 'Beasiswa' }}
@endsection
@section('favicon')
    {{ asset('img/logo-senat.png') }}
@endsection
@extends('masterClient')
@section('content')
    <!-- ======= Team Section ======= -->
    <section id="team" class="team m-4">

        <div class="container" data-aos="fade-up">

            <header class="section-header m-4">
                <h2>Detail</h2>
                <p>BEASISWA</p>
            </header>

            <div class="align-item-center text-center" style=" border-radius:20px">
                <div class="row">
                    <div class="col p-4">
                        <img src="{{ asset('img/'. $beasiswa->img) }}" 
                        style="width: 20rem; height:auto; border-radius:20px" 
                        alt="beasiswa">
                    </div>
                    <div class="col">
                        <h4 class="m-4">{{ $beasiswa->title }}</h4>
                        <p class="text-start">{{ $beasiswa->description }}</p>
                        <a href="{{ $beasiswa->link }}" class="btn btn-info">Daftar Sekarang</a>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- End Team Section -->
@endsection
