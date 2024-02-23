<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Login - Senat </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- Favicons -->
    <link href="{{ asset('img/logo senat.jpg') }}" rel="icon">
    <link href="{{ asset('img/logo senat.jpg') }}" rel="apple-touch-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Main CSS File -->
    <link href="{{ asset('styleLogin.css') }}" rel="stylesheet">

</head>
<section class="vh-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 text-black">

                <div class="px-5 ms-xl-4">
                    <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                    <div>
                      <img src="{{ asset('img/logo-senat.png') }}" alt="" style="width: 160px">
                    </div>
                </div>

                <div class="d-flex align-items-center h-100%-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                    <form class="row g-3 needs-validation" method="POST" action="/login/authenticate"
                        style="width: 23rem;">
                        @csrf

                        <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

                        <div class="form-outline mb-4">
                            <input type="email" name="email" class="form-control" id="yourUsername" required>
                            <label class="form-label" for="form2Example18">Email address</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" name="password" class="form-control" id="form2Example28" required>
                            <label class="form-label" for="form2Example28">Password</label>
                        </div>

                        <div class="pt-1 mb-4">
                          <a href="/" class="btn btn-lg btn-success">Kembali</a>
                            <button class="btn btn-info btn-lg btn-block" type="sumbit">Login</button>
                        </div>

                    </form>

                </div>

            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp"
                    alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
        </div>
    </div>
</section>
@include('sweetalert::alert')
</body>

</html>
