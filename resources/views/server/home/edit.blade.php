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
                                <form action="{{ route('update.home', $home->id) }}" method="post" enctype="multipart/form-data">

                                  @csrf @method('put')

                                  <div class="mb-3">
                                    <label for="title" class="form-label">Judul Website</label>
                                    <input type="text" name="title" class="form-control" value="{{ $home->title }}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="title" class="form-label">Deskripsi Website</label>
                                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{ $home->description }}</textarea>
                                  </div>
                                  <div class="mb-3">
                                    <label for="formFile" class="form-label">Gambar Saat ini</label><br>
                                    <img src="{{ asset('img/'. $home->img) }}" style="width:200px; height:200px; object-fit:cover">
                                  </div>
                                  <div class="mb-3">
                                    <label for="formFile" class="form-label">Ubah Gambar</label>
                                    <input class="form-control" name="img" type="file" id="formFile"value="{{ $home->img }}">
                                  </div>


                                  <a href="{{ route('index.home') }}" class="btn btn-warning">Kembali</a>
                                  <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                              </div>
                            </div>
                        </div>
                      </div>
  
                  </div>
                  <!-- /.container-fluid -->
  @endsection