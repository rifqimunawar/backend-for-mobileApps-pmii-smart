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
                <h2>PORTAL</h2>
                <p>BEASISWA</p>
            </header>

            <div class="card-body">
                <div class="row gy-4">

                  <table class="table">
                    <tbody>
                        @foreach ($beasiswa as $item)
                            <tr>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="{{ asset('img/' . $item->img) }}" class=""
                                                style="width:80px; height:80px;object-fit: cover">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-start">{{ $item->title }}</p>
                                </td>

                                <td class="">
                                  <a href="/beasiswa/{{ $item->id }}" class="btn btn-info">Daftar Beasiswa</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

                </div>
            </div>

        </div>

    </section><!-- End Team Section -->
@endsection
