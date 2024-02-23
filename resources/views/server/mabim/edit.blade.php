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

                            <form action="{{ route('update.mabim', ['id' => $mabim->id]) }}" method="post">
                                @csrf
                                @method('PUT') <!-- Gunakan metode PUT untuk operasi update -->

                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        value="{{ $mabim->name }}" required>
                                    <div id="emailHelp" class="form-text">gunakan huruf kapital di awal kalimat.</div>
                                </div>

                                <!-- Tambahan: Nilai Awal untuk NIM -->
                                <div class="mb-3">
                                    <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
                                    <input type="number" name="nim" id="nim" class="form-control"
                                        value="{{ $mabim->nim }}" required>
                                </div>

                                <!-- Tambahan: Nilai Awal untuk Angkatan -->
                                <div class="mb-3">
                                    <label for="angkatan" class="form-label">Angkatan</label>
                                    <select id="angkatan" required name="angkatan" class="form-select"
                                        aria-label="Default select example">
                                        <option value="2020" {{ $mabim->angkatan == '2020' ? 'selected' : '' }}>2020
                                        </option>
                                        <option value="2021" {{ $mabim->angkatan == '2021' ? 'selected' : '' }}>2021
                                        </option>
                                        <option value="2022" {{ $mabim->angkatan == '2022' ? 'selected' : '' }}>2022
                                        </option>
                                        <option value="2023" {{ $mabim->angkatan == '2023' ? 'selected' : '' }}>2023
                                        </option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="prodi" class="form-label">Prodi/Jurusan</label>
                                    <select id="prodi" required name="prodi" class="form-select"
                                        aria-label="Default select example">
                                        <option selected disabled>== Pilih prodi ==</option>
                                        <option value="Teknik Informatika"
                                            {{ $mabim->prodi == 'Teknik Informatika' ? 'selected' : '' }}>Teknik Informatika
                                        </option>
                                        <option value="Teknik Elektro"
                                            {{ $mabim->prodi == 'Teknik Elektro' ? 'selected' : '' }}>Teknik Elektro
                                        </option>
                                        <option value="Teknik Industri"
                                            {{ $mabim->prodi == 'Teknik Industri' ? 'selected' : '' }}>Teknik Industri
                                        </option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="class" class="form-label">Kelas</label>
                                    <input type="text" name="class" id="class" class="form-control"
                                        value="{{ $mabim->class }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="ukuran_kaos" class="form-label">Ukuran Kaos</label>
                                    <select id="ukuran_kaos" required name="ukuran_kaos" class="form-select"
                                        aria-label="Default select example">
                                        <option selected disabled>== Pilih Ukuran Kaos ==</option>
                                        <option value="S" {{ $mabim->ukuran_kaos == 'S' ? 'selected' : '' }}>S
                                        </option>
                                        <option value="M" {{ $mabim->ukuran_kaos == 'M' ? 'selected' : '' }}>M
                                        </option>
                                        <option value="ML" {{ $mabim->ukuran_kaos == 'ML' ? 'selected' : '' }}>ML
                                        </option>
                                        <option value="L" {{ $mabim->ukuran_kaos == 'L' ? 'selected' : '' }}>L
                                        </option>
                                        <option value="XL" {{ $mabim->ukuran_kaos == 'XL' ? 'selected' : '' }}>XL
                                        </option>
                                        <option value="XXL" {{ $mabim->ukuran_kaos == 'XXL' ? 'selected' : '' }}>XXL
                                        </option>
                                        <option value="XXXL" {{ $mabim->ukuran_kaos == 'XXXL' ? 'selected' : '' }}>XXXL
                                        </option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                  <label for="pembayaran" class="form-label">Pembayaran</label>
                                  <select id="pembayaran" required name="pembayaran" class="form-select"
                                      aria-label="Default select example">
                                      <option selected disabled>== Pilih Status Pembayran ==</option>
                                      <option value="Belum lunas" {{ $mabim->pembayaran == 'Belum lunas' ? 'selected' : '' }}>Belum lunas
                                      <option value="Lunas" {{ $mabim->pembayaran == 'Lunas' ? 'selected' : '' }}>Lunas
                                      </option>
                                  </select>
                              </div>


                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
