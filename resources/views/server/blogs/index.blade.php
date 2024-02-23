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
                                  <a href="{{ route('create.post') }}" class="btn btn-primary m-4" >Tambah Post</a>
                                  <table class="table align-items-center mb-0">
                                    <thead>
                                      <tr>
                                        <th>No</th>
                                        <th>Images</th>
                                        <th>Title</th>
                                        <th class="text-center">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($post as $item)
                                      <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                          <img src="{{ asset('img/'.$item->img) }}" 
                                          class="avatar avatar-sm me-3 border-radius-lg" 
                                          style="width: 35px; height:35px; object-fit: cover">
                                        </td>
                                        <td>
                                          <p>{{ $item->title }}</p>
                                        </td>
                        
                                        <td class="align-middle text-center text-sm">
                                          
                                          <form action="{{ route('post.destroy', $item->id) }}" method="POST">
                                          <a href="/admin/post/edit/{{ $item->id }}" class="btn btn-warning" >Edit</a>
                                            @csrf
                                            @method('DELETE')
                                              <button type="submit" class="btn btn-danger" 
                                              onclick="return confirm
                                            ('Apakah Anda yakin ingin menghapus blog ini?')">Hapus</button>
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