@extends('masterServer')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- Default Card Example -->
                <div class="card mb-12">
                    <div class="card-header">
                        Edit Article
                    </div>
                    <div class="card-body">
                        <form action="/admin/post/update/{{ $post->id }}" method="post" enctype="multipart/form-data">
                            @csrf @method('put')
                            <div class="my-3">
                                <label class="form-label">Judul</label>
                                <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                            </div>


                            <label class="form-label my-3">Gambar Format : JPG, PNG, JPEG</label>
                            <div class="">
                                <input type="file" class="form-control mb-3" name="img" value="{{ $post->img }}">
                            </div>
                            <label class="form-label my-3">Gambar Saat Ini</label>
                            <div class="">
                                <img src="{{ asset('img/' . $post->img) }}" alt=""
                                    style="width: auto; height:200px; object-fit:cover">
                            </div>

                            <label class="form-label my-3 mb-3">Paragraf Utama</label>
                            <div class="w-12">
                                <textarea id="editor" placeholder="Enter the Description" rows="3" name="content">{{ $post->content }}</textarea>
                            </div>

                            <label class="form-label my-3">Kategory Postingan</label>
                            <select class="form-select mb-3" name="category_id" aria-label="Default select example">
                                <option selected disabled>=== Pilih Kategory === </option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $post->category_id == $item->id ? 'selected' : '' }}>{{ $item->title }}</option>
                                @endforeach

                            </select>


                            <label class="form-label my-3">Hastag Postingan</label>
                            <div class="form-check mb-3">
                                <div class="form-check mb-3">
                                    @foreach ($tags as $key => $value)
                                        <div class="form-check">
                                            <input name="tags[]" class="form-check-input" type="checkbox" id="gridCheck1"
                                                value="{{ $value->id }}"
                                                @if (isset($post)) @if (in_array($value->id, $post->tags->pluck('id')->all(), true)) checked @endif
                                                @endif >
                                            {{ $value->title }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>

                            </div>

                            <label class="form-label my-3">Status Postingan</label>
                            <div class="form-group">
                                <label class="radio-inline">
                                    <input id="yes" name="status" type="radio" value="1"
                                        @if (isset($post->status) && $post->status === 1) checked @endif> Aktifkan Postingan
                                </label>
                                <label class="radio-inline">
                                    <input id="no" name="status" type="radio" value="0"
                                        @if (isset($post->status) && $post->status === 0) checked @endif> Nonaktifkan Postingan
                                </label>
                            </div>

                            <div class="my-3">
                                <label class="form-label">Penulis</label>

                                @if ($post->user)
                                    <input type="hidden" value="{{ $post->user->id }}" class="form-control mb-3"
                                        name="user_id">
                                    <input type="text" value="{{ $post->user->name }}" class="form-control mb-3"
                                        readonly>
                                @else
                                    <span class="text-danger">No author information available</span>
                                @endif
                            </div>


                            <div class="text-center">
                                <a href="{{ route('index.post') }}" class="btn btn-warning my-4 mb-2">Kembali</a>
                                <button type="sumbit" class="btn btn-success w-30 my-4 mb-2">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
    <script>
      ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .catch( error => {
              console.error( error );
          } );
  </script>
@endsection
