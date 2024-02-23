<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Peserta</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
      border: 1px solid #ddd;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <div>
    <table>
      <caption><h2>Data Peserta Mabim</h2><h5><br>Pada Tanggal :{{ $tanggal }}</h5></caption>
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Name</th>
          <th scope="col">Nim</th>
          <th scope="col">Angkatan</th>
          <th scope="col">Prodi</th>
          <th scope="col">Kelas</th>
          <th scope="col">Ukuran Kaos</th>
          <th scope="col">Status Pembayaran</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($peserta as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->name }}</td>
          <td>{{ $item->nim }}</td>
          <td>{{ $item->angkatan }}</td>
          <td>{{ $item->prodi }}</td>
          <td>{{ $item->class }}</td>
          <td>{{ $item->ukuran_kaos }}</td>
          <td>{{ $item->pembayaran }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
