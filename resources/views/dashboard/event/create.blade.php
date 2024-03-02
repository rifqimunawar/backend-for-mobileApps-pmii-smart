@section('title')
    {{ 'User' }}
@endsection
@extends('.master')
@section('content')
    <div class="card info-card sales-card">
        <div class="container">
            <h2 class="text-center my-2 pt-2">Data Event</h2>
            <div class="mb-3">
            </div>

            <div class="">
                <div>

                    <form action="/event/store" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="title"
                                class="form-control
                    @error('title') is-invalid @enderror" id="title"
                                required>
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Tanggal</label>
                            <input type="date" name="date" placeholder="dd-mm-yyyy" value="" min="1997-01-01"
                                max="2030-12-31"
                                class=" form-control
                    @error('date') is-invalid @enderror" id="date"
                                required>
                            @error('date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="time" class="form-label">Jam</label>
                            <input type="time" name="time" placeholder="16:32:55"
                                class=" form-control
                    @error('time') is-invalid @enderror" id="time"
                                required>
                            @error('time')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="place" class="form-label">Tempat/Lokasi Event</label>
                            <input type="text" name="place"
                                class="form-control
                  @error('place') is-invalid @enderror" id="place"
                                required>
                            @error('place')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="penyelenggara" class="form-label">Penyelenggara</label>
                            <input type="text" name="penyelenggara"
                                class="form-control
                  @error('penyelenggara') is-invalid @enderror"
                                id="penyelenggara" required>
                            @error('penyelenggara')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="jumlah_tiket" class="form-label">Jumlah Tiket</label>
                            <input type="text" name="jumlah_tiket"
                                class="form-control
                  @error('jumlah_tiket') is-invalid @enderror"
                                id="jumlah_tiket" required>
                            @error('jumlah_tiket')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                          <label for="description" class="form-label">Deskripsi Event</label>
                          <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" rows="3" required></textarea>
                          @error('description')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                      </div>

                        <div class="mb-3">
                          <label for="rp" class="form-label">Harga Satuan Tiket</label>
                          <input name="rp" class="form-control @error('rp') is-invalid @enderror" id="rp" rows="3" required/>
                          @error('rp')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      

                        <div class="mb-3">
                            <label for="img" class="form-label">Poster</label>
                            <input type="file" name="img"
                                class="form-control
                  @error('img') is-invalid @enderror" id="img"
                                required>
                            @error('img')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="pt-3 text-center">
                            <a href="{{ route('event.index') }}" class="btn btn-warning btn-sm">Kembali</a>
                            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

    </div>
@endsection
<script>
    function myFunction() {
        var x = document.getElementById("myTime").value;
        document.getElementById("demo").innerHTML = x;
    }
</script>
