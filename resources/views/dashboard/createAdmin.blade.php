@section('title')
    {{ 'User' }}
@endsection
@extends('.master')
@section('content')
    <div class="card info-card sales-card">
        <div class="container">
            <h2 class="text-center my-2 pt-2">Data Admin</h2>
            <div class="mb-3">
                {{-- <a href="" class="btn btn-primary btn-sm">Tambah Admin</a> --}}
            </div>

            <div class="">
                <div>

                    <form action="{{ route('adminStore') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name"
                                class="form-control
                    @error('name') is-invalid @enderror" id="name" required>

                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email"id="email"
                                class="form-control
                    @error('email') is-invalid @enderror" id="email"
                                required>

                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="text" name="password"id="password"
                                class="form-control
                    @error('password') is-invalid @enderror"
                                id="password" required>

                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Role</label>
                            <select class="form-select" name="role" aria-label="Default select example">
                                <option value="super admin">Role Super Admin</option>
                                <option value="admin" selected>Role Admin</option>
                            </select>
                        </div>

                        <div class="pt-3 text-center">
                            <a href="{{ route('dataAdmin') }}" class="btn btn-warning btn-sm">Kembali</a>
                            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                        </div>

                    </form>

                </div>
            </div>
            {{-- {{ $admin->links() }} --}}
        </div>

    </div>
@endsection
