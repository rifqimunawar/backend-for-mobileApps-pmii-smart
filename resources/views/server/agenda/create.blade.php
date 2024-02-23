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
                                  Create Agenda
                              </div>
                              <div class="card-body">
                                <form action="{{ route('store.agenda') }}" method="post" enctype="multipart/form-data">
                                  @csrf
                                  <div class="mb-3">
                                    <label class="form-label">Judul Kegiatan</label>
                                    <input type="text" class="form-control" name="name">
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">Tanggal Kegiatan</label>
                                    <input type="date" class="form-control" name="date">
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">Lokasi Kegiatan</label>
                                    <input type="text" class="form-control" name="location">
                                  </div>
                
                                  <label class="form-label my-3">Famflet Gambar Format : JPG, PNG, JPEG</label>
                                  <div class="mb-3" >
                                    <input type="file" class="form-control" name="img" value="pamflet-kosong" style="">
                                  </div>
                                  <div class="text-center">
                                    <a href="{{ route('index.agenda') }}" class="btn btn-warning w-30 my-4 mb-2">Kembali</a>
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