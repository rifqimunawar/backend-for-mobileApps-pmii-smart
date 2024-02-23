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
                        Edit Beasiswa
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update.beasiswa', $beasiswa->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf @method('put')
                            <div class="my-3">
                                <label class="form-label">Nama Beasiswa</label>
                                <input type="text" class="form-control" name="title" value="{{ $beasiswa->title }}">
                            </div>

                            <div class="my-3">
                                <label class="form-label">Link Beasiswa</label>
                                <input type="text" class="form-control" name="link" value="{{ $beasiswa->link }}">
                            </div>

                            <label class="form-label mt-3">Deskripsi Beasiswa</label>
                            <div class="mb-3">
                                <textarea name="description" id="description" cols="100" rows="8">{{ $beasiswa->description }}</textarea>
                            </div>

                            <label class="form-label my-3">Gambar Format : JPG, PNG, JPEG</label>
                            <div class="my-2">
                                <p>Gambar Saat ini</p>
                                <img src="{{ asset('img/' . $beasiswa->img) }}" style="width: 150px; height:auto">
                            </div>
                            <div class="">
                                <input type="file" class="form-control" name="img" value="{{ $beasiswa->img }}">
                            </div>
                            <div class="text-center">
                                <a href="{{ route('index.beasiswa') }}"
                                    class="btn bg-gradient-success w-30 my-4 mb-2">Kembali</a>
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
