@section('title')
    {{ 'User' }}
@endsection
@extends('.master')
@section('content')
    <div class="card info-card sales-card">
        <div class="container">
            <h2 class="text-center my-2 pt-2">Data Pendaftaran</h2>
            <div class="mb-3">
                {{-- <a href="" class="btn btn-primary btn-sm">Tambah Admin</a> --}}
            </div>

            <div class="">
                <div>

                    <form action="{{ route('tiketStore') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name"
                                class="form-control
                    @error('name') is-invalid @enderror" id="name"
                                required>

                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="wa" class="form-label">wa</label>
                            <input type="text" name="wa"id="wa"
                                class="form-control
                  @error('wa') is-invalid @enderror" id="wa"
                                required>

                            @error('wa')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email"id="email"
                                class="form-control
                    @error('email') is-invalid @enderror" id="email"
                                required>
                                <input type="text" hidden name="user_id" value="0">

                            @error('email')
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
            {{-- {{ $admin->links() }} --}}
        </div>

    </div>
@endsection
