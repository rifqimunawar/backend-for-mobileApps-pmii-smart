@section('title', 'Edit Event')
@extends('.master')
@section('content')
    <div class="card info-card sales-card">
        <div class="container">
            <h2 class="text-center my-2 pt-2">Edit Event</h2>
            <div class="mb-3"></div>

            <div class="">
                <div>
                    <form action="{{ route('event.update', $event->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                id="title" value="{{ $event->title }}" required>
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" name="date" class="form-control @error('date') is-invalid @enderror"
                                id="date" value="{{ $event->date }}" required>
                            @error('date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="time" class="form-label">Time</label>
                            <input type="time" name="time" class="form-control @error('time') is-invalid @enderror"
                                id="time" value="{{ $event->time }}" required>
                            @error('time')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="place" class="form-label">Place</label>
                            <input type="text" name="place" class="form-control @error('place') is-invalid @enderror"
                                id="place" value="{{ $event->place }}" required>
                            @error('place')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="penyelenggara" class="form-label">Penyelenggara</label>
                            <input type="text" name="penyelenggara"
                                class="form-control @error('penyelenggara') is-invalid @enderror" id="penyelenggara"
                                value="{{ $event->penyelenggara }}" required>
                            @error('penyelenggara')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="jumlah_tiket" class="form-label">Jumlah Tiket</label>
                            <input type="text" name="jumlah_tiket"
                                class="form-control @error('jumlah_tiket') is-invalid @enderror" id="jumlah_tiket"
                                value="{{ $event->jumlah_tiket }}" required>
                            @error('jumlah_tiket')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi Event</label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description"
                                rows="3" required>{{ $event->description }}</textarea>
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <img src="{{ asset('img/' . $event->img) }}" alt="" style="width: 100px">
                        </div>
                        <div class="mb-3">
                            <label for="img" class="form-label">Poster</label>
                            <input type="file" name="img" class="form-control 
                            @error('img') is-invalid @enderror"
                                id="img">
                            @error('img')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="pt-3 text-center">
                            <a href="{{ route('dataAdmin') }}" class="btn btn-warning btn-sm">Kembali</a>
                            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
