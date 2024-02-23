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
                                <a href="{{ route('create.agenda') }}" class="btn btn-primary m-3">Tambah Agenda</a>
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">Judul</th>
                                      <th scope="col">Tanggal</th>
                                      <th scope="col">Lokasi</th>
                                      <th scope="col">Pamflet</th>
                                      <th scope="col">Action</th>
                                    </tr>
                                  </thead>
                                  @foreach ($dataKegiatan as $item)
                                  <tbody>
                                    <tr>
                                      <td>{{ $item->name }}</td>
                                      <td>{{ $item->date }}</td>
                                      <td>{{ $item->location }}</td>
                                      <td><div>
                                        <img src="{{ asset('img/'. $item->img ) }}" style="width: 60px; height:60px; object-fit:cover" alt="">
                                        </div></td>
                                      <td>
                                        <a href="{{ route('edit.agenda', $item->id) }}" class="btn btn-warning">Edit</a>
                                        <form method="POST" action="{{ route('agenda.destroy', $item->id) }}" style="display:inline">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-danger" data-confirm-delete="true">Delete</button>
                                      </form>
                                      
                                      </td>
                                    </tr>
                                  </tbody>
                                  @endforeach
                                </table>
                              </div>
                          </div>
                      </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
@endsection