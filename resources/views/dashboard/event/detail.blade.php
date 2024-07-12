@section('title')
    {{ 'User' }}
@endsection
@extends('.master')
@section('content')
    <div class="card info-card sales-card">
        <div class="container">
            <h2 class="text-center my-2 pt-2">Data Event {{ $event->title }}</h2>
            <div>
                <p>Total Tiket : {{ $event->jumlah_tiket + $tiket->count() }}</p>
                <p>Tiket belum terjual : {{ $event->jumlah_tiket }}</p>
                <p>Tiket sudah terjual : {{ $tiket->count() }}</p>
            </div>

            <div class="row">
                <table class="table">
                    <tr>
                        <td class="text-center">No</td>
                        <td class="text-center">Nama Pengunjung</td>
                        <td class="text-center">Email</td>
                        <td class="text-center"> Status</td>
                    </tr>

                    @foreach ($tiket as $index)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="">{{ $index->name }}</td>
                            <td class="">{{ $index->email }}</td>
                            <td class="text-center">
                                @if ($index->status == 1)
                                    <p class="btn btn-info btn-sm"> Sudah discan</p>
                                @else
                                    <p class="btn btn-danger btn-sm">Belum discan</p>
                                @endif

                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            {{-- {{ $event->links() }} --}}
        </div>

    </div>
@endsection
