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
                      <form action="{{ route('store.galeri') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class=" my-3">
                          <label class="form-label">Judul Kegiatan</label>
                          <input type="text" class="form-control" name="title">
                        </div>
      
                        <label class="form-label my-3">Gambar Format : JPG, PNG, JPEG</label>
                        <div class=" ">
                          <input type="file" class="form-control" name="img">
                        </div>
                        <div class="text-center">
                          <a href="{{ route('index.galeri') }}" class="btn bg-gradient-success w-30 my-4 mb-2">Kembali</a>
                          <button type="sumbit" class="btn bg-gradient-primary w-30 my-4 mb-2">Simpan</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
