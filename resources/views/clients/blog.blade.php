@section('title'){{ 'Article' }}@endsection
@section('favicon'){{ asset('img/logo-senat.png') }}@endsection
@extends('masterClient')
@section('content')
    <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/blog">Blog</a></li>
            </ol>
            <h2>Blog</h2>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    {{-- <section id="blog" class="blog mt-4 pt-4">
        <div class="container" data-aos="fade-up">
            <div class="row">
                @foreach ($postLatest as $item)
                    <div class="col-lg-3">
                        <div class="post-img">
                            <img src="{{ asset('img/' . $item->img) }}" class="img-fluid" alt=""
                                style="width:370px; height:200px; object-fit:cover">
                        </div>
                        <span class="post-date">
                            <time datetime="{{ $item->created_at->format('Y-m-d') }}">
                                {{ $item->created_at->format('d M, Y') }}
                            </time>
                        </span>
                        <a href="/article/{{ $item->slug }}">
                            <h4 class="post-title">{{ $item->title }}</h4>
                            <span>Read More</span><i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                @endforeach
                <div class="blog-pagination">
                    <ul class="justify-content-center">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Blog Section -->

    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-12">

            <div class="row gy-4 posts-list">

              @foreach ($postLatest as $item)
                  
              <div class="col-lg-4">
                <article class="d-flex flex-column">

                  <div class="post-img">
                    <img src="{{ asset('img/' . $item->img) }}" class="img-fluid" alt="img"
                    style="width:370px; height:200px; object-fit:cover">
                  </div>

                  <h2 class="title">
                    <a href="/article/{{ $item->slug }}">{{ $item->title }}</a>
                  </h2>

                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> 
                        <a href="#">{{ $item->user->name }}</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> 
                        <a href="#"><time datetime="{{ $item->created_at->format('Y-m-d') }}">
                          {{ $item->created_at->format('d M, Y') }}</time></a></li>
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="/article/{{ $item->slug }}">Read More</a>
                  </div>

                </article>
              </div><!-- End post list item -->
              @endforeach

            </div><!-- End blog posts list -->

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div><!-- End blog pagination -->

          </div>

        </div>

      </div>
    </section><!-- End Blog Section -->
@endsection
