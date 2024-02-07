<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <section class="mt-5 container">

      <form action="{{ route('store') }}" method="post">
        @csrf
        <div class="mb-3" style="display: none">
          <input type="text" name="suara" value="1">
          <input type="text" name="provinsi" value="Jabar">
          <input type="text" name="usia" value="17-27">
        </div>

        <button type="submit" class="btn btn-primary mb-3">01 Anis Imin</button>
      </form>

      <form action="{{ route('store') }}" method="post">
        @csrf
        <div class="mb-3" style="display: none">
          <input type="text" name="suara" value="2">
          <input type="text" name="provinsi" value="Jabar">
          <input type="text" name="usia" value="17-27">
        </div>

        <button type="submit" class="btn btn-info mb-3">02 Prabowo Gibran</button>
      </form>

      <form action="{{ route('store') }}" method="post">
        @csrf
        <div class="mb-3" style="display: none">
          <input type="text" name="suara" value="3">
          <input type="text" name="provinsi" value="Jabar">
          <input type="text" name="usia" value="17-27">
        </div>

        <button type="submit" class="btn btn-danger">03 Ganjar Mahfud</button>
      </form>
    </section>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>