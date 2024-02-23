@section('title')
    {{ $post->title }}
@endsection
@section('favicon')
    {{ asset('img/' . $post->img) }}
@endsection
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

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    <article class="blog-details">

                        <div class="post-img">
                            <img src="{{ asset('img/' . $post->img) }}" alt="{{ $post->title }}" alt=""
                                class="img-fluid">
                        </div>

                        <h2 class="title">{{ $post->title }}</h2>

                        <div class="meta-top">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                        href="#">{{ $post->user->name }}</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time
                                            datetime="{{ $post->created_at->format('Y-m-d') }}">{{ $post->created_at->format('d M, Y') }}</time>
                                </li>
                                <li class="d-flex align-items-center"><i class="m-2 bi bi-chat-dots"></i> <a
                                        href="#">{{ $post->comments->count() }} Comments</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-folder"></i> <a
                                        href="#">{{ $post->category->title }}</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-eye"></i> <a href="#">
                                        {{ $post->views }} kali</a></li>
                            </ul>
                        </div><!-- End meta top -->

                        <div class="content">
                            <p>
                                {!! $post->content !!}
                            </p>

                        </div><!-- End post content -->

                        <div class="meta-bottom">
                            <i class="bi bi-folder"></i>
                            <ul class="cats">
                                    <li><a href="#">{{ $post->category->title }}</a></li>
                            </ul>

                            <i class="bi bi-tags"></i>
                            <ul class="tags">
                                @foreach ($post->tags as $item)
                                    <li><a href="#">{{ $item->title }}</a></li>
                                @endforeach
                            </ul>
                        </div><!-- End meta bottom -->

                    </article><!-- End blog post -->



                    <div class="comments">

                        <h4 class="comments-count">{{ $post->comments->count() }} Comments</h4>

                        <div id="comment-1" class="comment">
                            <div class="d-flex">
                                <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div>
                                @foreach ($post->comments as $item)
                                    <div>
                                        <h5><a href="">{{ $item->name }}</a> <a href="#" class="reply"><i
                                                    class="bi bi-reply-fill"></i> Reply</a></h5>
                                        <time
                                            datetime="{{ $item->created_at->format('Y-m-d') }}">{{ $item->created_at->format('d M, Y') }}</time>
                                        <p>
                                            {{ $item->comment }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div><!-- End comment #1 -->

                        <div class="reply-form">

                            <h4>Leave a Reply</h4>
                            <p>Your email address will not be published. Required fields are marked * </p>
                            <form action="{{ route('comments.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                <div class="row">
                                    <div class="col form-group">
                                        <input name="name" type="text" class="form-control" placeholder="Your Name*" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <textarea name="comment" class="form-control" placeholder="Your Comment*" required></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Post Comment</button>

                            </form>

                        </div>

                    </div><!-- End blog comments -->

                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">

                        <div class="sidebar-item search-form">

                        </div><!-- End sidebar search formn-->

                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                @foreach ($categories as $item)
                                    <li><a href="/blog/category/{{ $item->slug }}">{{ $item->title }}
                                            <span>({{ $item->post->count() }})</span></a></li>
                                @endforeach
                            </ul>
                        </div><!-- End sidebar categories-->

                        <div class="sidebar-item recent-posts">
                            <h3 class="sidebar-title">Recent Posts</h3>

                            <div class="mt-3">

                                @foreach ($postLatest as $item)
                                    <div class="post-item mt-3">
                                        <img src="{{ asset('img/' . $item->img) }}" alt=""
                                            style="width: 80px; height:50px; object-fit:cover" class="flex-shrink-0">
                                        <div>
                                            <h4><a href="/article/{{ $item->slug }}">{{ $item->title }}</a>
                                            </h4>
                                            <time datetime="{{ $item->created_at->format('Y-m-d') }}">
                                                {{ $item->created_at->format('d M, Y') }}
                                            </time>
                                        </div>
                                    </div><!-- End recent post item-->
                                @endforeach

                            </div>

                        </div><!-- End sidebar recent posts-->

                        <div class="sidebar-item tags">
                            <h3 class="sidebar-title">Tags</h3>
                            <ul class="mt-3">
                                @foreach ($tags as $item)
                                    <li><a href="#">{{ $item->title }}</a></li>
                                @endforeach
                            </ul>
                        </div><!-- End sidebar tags-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section><!-- End Blog Single Section -->
@endsection
