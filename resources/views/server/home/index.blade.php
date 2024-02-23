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
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">Judul</th>
                                      <th scope="col">Deskripsi</th>
                                      <th scope="col">Gambar</th>
                                      <th scope="col">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      @foreach ($home as $item)
                                      <td>{{ $item->title }}</td>
                                      <td>{{ $item->description }}</td>
                                      <td><div>
                                        <img src="{{ asset('img/'. $item->img ) }}" style="width: 60px; height:60px; object-fit:cover" alt="">
                                        </div></td>
                                      <td>
                                        <a href="/admin/home/edit/1" class="btn btn-warning">Edit</a>
                                      </td>
                                      @endforeach

                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                          </div>
                      </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
@endsection