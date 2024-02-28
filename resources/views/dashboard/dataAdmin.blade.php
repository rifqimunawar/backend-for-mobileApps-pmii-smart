@section('title')
    {{ 'User' }}
@endsection
@extends('.master')
@section('content')
    <div class="card info-card sales-card">
        <div class="container">
            <h2 class="text-center my-2 pt-2">Data Admin</h2>
            <div class="mb-3">
                <a href="{{ route('adminCreate') }}" class="btn btn-primary btn-sm">Tambah Admin</a>
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
                        <td class="text-center">Role</td>
                        <td class="text-center"> Action</td>
                    </tr>

                    {{-- syntak dibawah 
                    ($user as $index=> $kdr)
                    untuk kebutuhan pagination --}}
                    @foreach ($admin as $index)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="">{{ $index->name }}</td>
                            <td class="text-center">{{ $index->role }}</td>
                            <td class="text-center">
                                {{-- <form action="{{ route('user.destroy', $index->id) }}" method="POST"> --}}
                                <form action="/adminDelete/{{$index->id}}" method="POST">
                                    <a href="/adminEdit/{{ $index->id }}" class="btn btn-warning btn-sm">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm
                            ('Apakah Anda yakin ingin menghapus user ini?')
">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            {{-- {{ $admin->links() }} --}}
        </div>

    </div>
@endsection
