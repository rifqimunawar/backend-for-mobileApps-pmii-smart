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
                        Tag Blogs
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"> </h5>
                        <a href="{{ route('create.tagPost') }}" class="btn btn-primary mb-3">Tambah</a>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Tags</th>
                                    <th>Jumlah Article dalam Tags</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tags as $item)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->posts->count() }} Article</td>

                                        <td class="text-center">
                                            <a href="{{ route('edit.tagPost', $item->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <a href="{{ route('tagPost.destroy', $item->id) }}" class="btn btn-danger btn-sm"
                                                data-confirm-delete="true">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
