@section('title')
    {{ 'User' }}
@endsection
@extends('.master')
@section('content')
    <div class="card info-card sales-card">
        <div class="container">
            <h2 class="text-center my-2 pt-2">Data Admin</h2>
            <div class="mb-3">
                <a href="{{ route('event.create') }}" class="btn btn-primary btn-sm">Tambah Event</a>
            </div>
            <div class="my-3 col-12 col-sm-8 col-md-6">
                <form action="" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search" placeholder="Search.....">
                        <button class="btn btn-primary">Search</button>
                    </div>
                </form>
            </div>
            <div class="row">
                <table class="table">
                    <tr>
                        <td class="text-center">No</td>
                        <td class="text-center">Nama</td>
                        <td class="text-center">Poster</td>
                        <td class="text-center"> Action</td>
                    </tr>

                    @foreach ($events as $index)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="">{{ $index->title }}</td>
                            <td class="text-center">
                              <img src="{{ asset('img/' . $index->img) }}" alt="" style="width: 70px">
                          </td>                          
                            <td class="text-center">
                                {{-- <form action="{{ route('user.destroy', $index->id) }}" method="POST"> --}}
                                <form action="{{ route('event.destroy', $index->id) }}" method="POST">
                                    <a href="{{ route('event.edit', $index->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus event ini?')">Hapus</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            {{ $events->links() }}
        </div>

    </div>
@endsection
