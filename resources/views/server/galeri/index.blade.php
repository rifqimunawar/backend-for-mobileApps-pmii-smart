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
                                  <a href="{{ route('create.galeri') }}" class="btn btn-success m-4" >Tambah</a>
                                  <table class="table align-items-center mb-0">
                                    <thead>
                                      <tr>
                                        <th class=" text-center">No</th>
                                        <th class="">Images</th>
                                        <th class=" ps-2">Title</th>
                                        <th class="text-center ">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($galeri as $item)
                                      <tr>
                                        <td class="">{{ $loop->iteration }}</td>
                                        <td>
                                            <div>
                                              <img src="{{ asset('img/'.$item->img) }}" style="width: 30px;height:30px; object-fit:cover" class="avatar avatar-sm me-3 border-radius-lg" style="object-fit: cover">
                                            </div>
                                        </td>
                                        <td>
                                          <p class="">{{ $item->title }}</p>
                                        </td>
                        
                                        <td class="">
                                          
                                          <form action="{{ route('galeri.destroy', $item->id) }}" method="POST">
                                          <a href="/admin/galeri/edit/{{ $item->id }}" class="btn btn-warning" >Edit</a>
                                            @csrf
                                            @method('DELETE')
                                              <button type="submit" class="btn btn-danger" 
                                              onclick="return confirm
                                            ('Apakah Anda yakin ingin menghapus gambar ini?')">Hapus</button>
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