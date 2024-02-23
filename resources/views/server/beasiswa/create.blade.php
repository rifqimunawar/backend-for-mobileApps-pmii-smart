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
                                  Tambah Beasiswa
                              </div>
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-12">
                          
                                        <div class="card-body">
                                          <form action="{{ route('store.beasiswa') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class=" my-3">
                                              <label class="form-label">Nama Beasiswa</label>
                                              <input type="text" class="form-control" name="title" required>
                                            </div>
                          
                                            <div class=" my-3">
                                              <label class="form-label">Link Beasiswa</label>
                                              <input type="text" class="form-control" name="link">
                                            </div>
                          
                                            <label class="form-label mt-3">Deskripsi Beasiswa</label>
                                            <div class=" mb-3">
                                              <textarea name="description" id="description" cols="100" rows="8"></textarea required>
                                            </div>
                          
                                            <label class="form-label my-3">Gambar Format : JPG, PNG, JPEG</label>
                                            <div class=" ">
                                              <input type="file" class="form-control" name="img" required>
                                            </div>

                                            <label class="form-label my-3">Link Pendaftaran Beasiswa</label>
                                            <div class=" ">
                                              <input type="text" class="form-control" name="link" required>
                                            </div>
                                            <div class="text-center m-4">
                                              <a href="{{ route('index.beasiswa') }}" class="btn btn-warning">Kembali</a>
                                              <button type="sumbit" class="btn btn-primary">Simpan</button>
                                            </div>
                                          </form>
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