@section('title')
    {{ 'Daftar Mabim' }}
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
                <h2>Pendaftaran Mabim</h2>
                <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas
                    asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p>
            </div>


            <div class="col lg-8">
                <form action="{{ route('store.mabim') }}" id="pendaftaran" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                        <div id="emailHelp" class="form-text">gunakan huruf kapital di awal kalimat.</div>
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
                        <input type="number" name="nim" id="nim" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="angkatan" class="form-label">Angkatan</label>
                        <select id="angkatan" required name="angkatan" class="form-select"
                            aria-label="Default select example">
                            <option selected disabled value>== Pilih Angkatan ==</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="prodi" class="form-label">Prodi/Jurusan</label>
                        <select id="prodi" required name="prodi" class="form-select"
                            aria-label="Default select example">
                            <option selected disabled value>== Pilih prodi ==</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="class" class="form-label">Kelas</label>
                        <input type="text" name="class" id="class" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="ukuran_kaos" class="form-label">Ukuran Kaos</label>
                        <select id="ukuran_kaos" required name="ukuran_kaos" class="form-select"
                            aria-label="Default select example">
                            <option selected disabled value>== Pilih Ukuran Kaos ==</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="ML">ML</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="XXL">XXL</option>
                            <option value="XXXL">XXXL</option>
                        </select>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-success m-2" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            Lihat Ukuran Kaos
                        </button>
                    </div>

                    <div class="form-check m-3">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                        <label class="form-check-label" for="invalidCheck2">
                            Saya memastikan bahwa data yang saya kirim sudah benar
                        </label>
                    </div>
                    <div class="col-md-12 d-flex align-items-center text-center">
                        <button type="submit" class="btn-aspirasi mx-auto"><span>Kirim</span></button>
                    </div>

            </div>


        </div>
    </section><!-- End About Section -->


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Contoh ukuran kaos mabim</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('img/ukuran_kaos_lokal.png') }}" alt=""
                        class="d-flex align-item-center img-fluid">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    </div>
@endsection
