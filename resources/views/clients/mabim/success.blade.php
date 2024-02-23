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
                <h3>Terima Kasih Sudah Melakukan Pendaftaran</h3>
                <h4>{{ $peserta->name }}, <br> selanjutnya lakukan pembayaran ke
                  Bendahara atau hubungi nomor WhatsApp dibawah
                  {{-- +6289503460088 --}}
                </h4>
            </div>
            <div class="text-center" style="max-width: 100%;">
              <a href="https://wa.me/+6285161145097?text=Assalamu'alaikum%20sahabat%20%F0%9F%91%8B,%0A%0ASaya,%20{{ rawurlencode($peserta->name) }},%20telah%20melakukan%20pendaftaran%20untuk%20kegiatan%20mabim%20pada%20tanggal%20dan%20jam%20%F0%9F%95%A5:{{ rawurlencode($peserta->created_at) }}.%0A%0ABerikut%20adalah%20rincian%20pendaftaran%20saya:%0A%0ANama:%20{{ rawurlencode($peserta->name) }}%0AAngkatan:%20{{ rawurlencode($peserta->angkatan) }}%0AProdi:%20{{ rawurlencode($peserta->prodi) }}%0AKelas:%20{{ rawurlencode($peserta->class) }}%0A%0ASaya%20ingin%20melakukan%20pembayaran.%20%0A%0AMohon%20konfirmasi%20kembali%20untuk%20proses%20pembayaran%20selanjutnya.%0A%0ATerima%20Kasih%0ASampai%20Ketemu%20di%20Mabim%20%F0%9F%91%8B," target="_blank">
                <img src="{{ asset('img/WhatsAppButtonGreenLarge.svg') }}" alt="" style="max-width: 100%; height: auto;" class="img-fluid">
              </a>
            </div>
            

        </div>
    </section><!-- End About Section -->

@endsection
