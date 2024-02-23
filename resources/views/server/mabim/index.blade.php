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
                                  Data Pendaftar Mabim
                              </div>
                              <div class="card-body">
                                <div class="table-responsive p-0">
                                  <a href="{{ route('create.mabim') }}" class="btn btn-success m-4" >Tambah</a>
                                  <a href="{{ route('cetak_pdf') }}" class=" btn btn-warning"><i class="bi bi-printer"></i> Print</a>
                                  <table class="table align-items-center mb-0">
                                    <thead>
                                      <tr>
                                        <th class=" text-center">No</th>
                                        <th class="">Nama</th>
                                        <th class=" ps-2">Angkatan</th>
                                        <th class=" ps-2">Prodi</th>
                                        <th class=" ps-2">Kelas</th>
                                        <th class=" ps-2">Size</th>
                                        <th class=" ps-2">Pembayaran</th>
                                        <th class="text-center ">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($mabim as $item)
                                      <tr>
                                        <td class="">{{ $loop->iteration }}</td>
                                        <td>
                                          <p class="">{{ $item->name }}</p>
                                        </td>
                                        <td>
                                          <p class="">{{ $item->angkatan }}</p>
                                        </td>
                                        <td>
                                          <p class="">{{ $item->prodi }}</p>
                                        </td>
                                        <td>
                                          <p class="">{{ $item->class }}</p>
                                        </td>
                                        <td>
                                          <p class="">{{ $item->ukuran_kaos }}</p>
                                        </td>
                                        <td>
                                            @if ( $item->pembayaran =='Belum lunas')
                                            <p class="btn btn-danger">Belum Lunas</p>
                                          @else
                                          <p class="btn btn-success">Sudah Lunas</p>
                                          @endif
                                        </td>
                        
                                        <td class="">
                                          
                                          <form action="{{ route('mabim.destroy', $item->id) }}" method="POST">
                                          <a href="/admin/mabim/edit/{{ $item->id }}" class="btn btn-warning" >Edit</a>
                                            @csrf
                                            @method('DELETE')
                                              <button type="submit" class="btn btn-danger" 
                                              onclick="return confirm
                                            ('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
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