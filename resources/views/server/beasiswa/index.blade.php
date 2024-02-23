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
                        <div class="row">
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive p-0">
                                    <a href="{{ route('create.beasiswa') }}" class="btn btn-success m-4">Tambah</a>
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th class="">No</th>
                                                <th class="">Images</th>
                                                <th class="">Title</th>
                                                <th class="">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($beasiswa as $item)
                                                <tr>
                                                    <td class="d-flex justify-content-center">{{ $loop->iteration }}
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div>
                                                                <img src="{{ asset('img/' . $item->img) }}" class=""
                                                                    style="width:80px; height:80px;object-fit: cover">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="">{{ $item->title }}</p>
                                                    </td>

                                                    <td class="">

                                                        <form action="{{ route('beasiswa.destroy', $item->id) }}"
                                                            method="POST">
                                                            <a href="/admin/beasiswa/edit/{{ $item->id }}"
                                                                class="btn btn-warning">Edit</a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"
                                                                onclick="return confirm
                                                      ('Apakah Anda yakin ingin menghapus data ini?')
">Hapus</button>
                                                        </form>

                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
