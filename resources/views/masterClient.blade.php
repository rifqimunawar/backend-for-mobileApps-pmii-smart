<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <title>HMI Komsyarkum - @yield('title') </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons dinamis -->
    <link href="@yield('favicon')" rel="icon">
    <link href="@yield('favicon')" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('clients/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('clients/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('clients/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('clients/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="{{ asset('clients/assets/css/variables.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('clients/assets/css/variables-blue.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('clients/assets/css/variables-green.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('clients/assets/css/variables-orange.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('clients/assets/css/variables-purple.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('clients/assets/css/variables-red.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('clients/assets/css/variables-pink.css') }}" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="{{ asset('clients/assets/css/main.css') }}" rel="stylesheet">

    @stack('styles')

    <!-- =======================================================
  * Website Name: Senat Mahasiswa Fakultas Teknik
  * Updated: Des 18 2023 with Bootstrap v5.3.2
  * Author: Rifqi Munawar Ridwan
  ======================================================== -->
</head>

<body>

    @include('partials.navbar')
    @yield('content')
    <!-- Footer -->
    @include('partials.footer')
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('clients/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('clients/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('clients/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('clients/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('clients/assets/vendor/swiper/swiper-bundle.min.js') }} "></script>
    <script src="{{ asset('clients/assets/vendor/php-email-form/validate.js') }} "></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('clients/assets/js/main.js') }}"></script>

    @include('sweetalert::alert')
    @stack('scripts')
</body>

</html>
