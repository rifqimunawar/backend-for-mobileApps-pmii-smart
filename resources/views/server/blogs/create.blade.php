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
                        Edit Homepage
                    </div>
                    <div class="card-body">
                        <form action="{{ route('store.post') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="my-3">
                                <label class="form-label">Judul</label>
                                <input type="text" class="form-control" name="title">
                            </div>


                            <label class="form-label my-3">Gambar Format : JPG, PNG, JPEG</label>
                            <div class="">
                                <input type="file" class="form-control mb-3" name="img">
                            </div>

                            <label class="form-label my-3 mb-3">Paragraf Utama</label>
                            <div class="w-12">
                                <textarea id="editor" placeholder="Enter the Description" rows="3" name="content"></textarea>
                            </div>

                            <label class="form-label my-3">Kategory Postingan</label>
                            <select class="form-select mb-3" name="category_id" aria-label="Default select example">
                                <option selected disabled>=== Pilih Kategory === </option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>


                            <label class="form-label my-3">Hastag Postingan</label>
                            <div class="form-check mb-3">
                                @foreach ($tag as $item)
                                    <div>
                                        <input class="form-check-input mb-3" type="checkbox" value="{{ $item->id }}"
                                            name="tags">
                                        <label class="form-check-label">{{ $item->title }}</label>
                                    </div>
                                @endforeach
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
                                <input type="hidden" value="{{ $user->id }}" class="form-control mb-3" name="user_id">
                                <input type="text" value="{{ $user->name }}" class="form-control mb-3" readonly>
                            </div>

                            <div class="text-center">
                                <a href="{{ route('index.post') }}"
                                    class="btn btn-warning my-4 mb-2">Kembali</a>
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
