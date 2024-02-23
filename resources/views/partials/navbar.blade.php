    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('/img/logo senat.jpg') }}" alt="">
                <h1>Senat <span>Teknik</span></h1>
            </a>

            <nav id="navbar" class="navbar">
              <ul>
                <li><a class="nav-link scrollto @if (request()->is('/')) active @endif" href="/">Home</a></li>
                <li><a class="nav-link scrollto @if (request()->is('about')) active @endif" href="/about">About</a></li>
                <li><a class="nav-link scrollto @if (request()->is('beasiswa')) active @endif" href="/beasiswa">Portal Beasiswa</a></li>
                <li><a class="nav-link scrollto @if (request()->is('galeri')) active @endif" href="/galeri">Galeri</a></li>

                <li class="dropdown nav-link scrollto @if (request()->is('blog')) active @endif"><a href="{{ route('client.blog') }}"><span>Blogs</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                  <ul>
                    @foreach ($navbarCategory as $item)
                      <li><a href="/blog/category/{{ $item->slug }}">{{ $item->title }}</a></li>
                    @endforeach
                  
                  </ul>
                </li>

                <li><a class="nav-link scrollto @if (request()->is('aspirasi')) active @endif" href="{{ route('client.aspirasi') }}">Ruang Aspirasi</a></li>
            </ul>
            
                <i class="bi bi-list mobile-nav-toggle d-none"></i>
            </nav><!-- .navbar -->

            <a class="btn-getstarted scrollto" href="/admin/dashboard">Login</a>

        </div>
    </header><!-- End Header -->
