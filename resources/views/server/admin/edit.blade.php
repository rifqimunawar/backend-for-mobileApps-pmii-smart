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
                        Edit Admin
                    </div>
                    <div class="card-body">
                        <!-- No Labels Form -->
                        <form class="row g-3" action="{{ route('update.admin', $user->id) }}" method="POST">
                            @csrf @method('put')
                            <div class="col-md-12">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" 
                                required value="{{ $user->name }}">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="Email"
                                required value="{{ $user->email }}">
                            </div>
                            <div class="col-md-6">
                                <input type="password" name="password" class="form-control" placeholder="Password"
                                    min="8" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('index.admin') }}" class = "btn btn-secondary">Kembali
                                </a>
                            </div>
                        </form><!-- End No Labels Form -->
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
