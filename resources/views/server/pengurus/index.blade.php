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
                        <div class="table-responsive p-0">
                            <a href="{{ route('create.pengurus') }}"
                                class="btn btn-success m-4">Tambah</a>
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            No</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Images</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Nama</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Jabatan</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengurus as $item)
                                        <tr>
                                            <td >{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('img/' . $item->img) }}"
                                                            class="avatar avatar-sm me-3 border-radius-lg"
                                                            style=" width:60px; height:60px; object-fit: cover">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="">{{ $item->name }}</p>
                                            </td>
                                            <td>
                                                <p class="">{{ $item->jabatan }}</p>
                                            </td>

                                            <td class="align-middle text-center text-sm">

                                                <form action="{{ route('pengurus.destroy', $item->id) }}" method="POST">
                                                    <a href="/admin/pengurus/edit/{{ $item->id }}"
                                                        class="btn btn-warning">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm
                                            ('Apakah Anda yakin ingin menghapus pengurus ini?')
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
    <!-- /.container-fluid -->
@endsection
