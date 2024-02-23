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
                        Create Tags
                    </div>
                    <div class="card-body">
                        <form action="{{ route('store.tagPost') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="input input-outline my-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title">
                            </div>

                            
                            <div class="text-center">
                                <a href="{{ route('index.tagPost') }}"
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
