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
                        <form action="{{ route('update.pengurus', $pengurus->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf @method('PUT')
                            <div class="input input-outline my-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="name" value="{{ $pengurus->name }}">
                            </div>

                            <div class="input input-outline my-3">
                                <label class="form-label">Jabatan</label>
                                <input type="text" class="form-control" name="jabatan" value="{{ $pengurus->jabatan }}">
                            </div>

                            <div class="input input-outline my-3">
                                <label class="form-label">Username Instagram contoh : a_cah899</label>
                                <input type="text" class="form-control" name="username_ig"
                                    value="{{ $pengurus->username_ig }}">
                            </div>

                            <label class="form-label my-3">Gambar Format : JPG, PNG, JPEG</label>
                            <div class="input input-outline ">
                                <input type="file" class="form-control" name="img" value="{{ $pengurus->img }}">
                            </div>
                            <div class="my-2">
                                <p>Gambar Saat ini</p>
                                <img src="{{ asset('img/' . $pengurus->img) }}" style="width: 150px; height:auto">
                            </div>
                            <div class="text-center">
                                <a href="{{ route('index.pengurus') }}"
                                    class="btn btn-success w-30 my-4 mb-2">Kembali</a>
                                <button type="sumbit" class="btn btn-primary w-30 my-4 mb-2">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
