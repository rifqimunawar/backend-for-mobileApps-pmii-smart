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
        <div class="mb-3">
          <select class="form-select" aria-label="Default select example" 
          name="suara">
            <option selected disabled>Pilih Suara</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
        </div>
        <div class="mb-3">
          <select class="form-select" aria-label="Default select example" 
          name="provinsi">
            <option selected disabled>--- Pilih Provinsi ---</option>
            <option value="Jabar">Jabar</option>
            <option value="Jateng">Jateng</option>
            <option value="Jatim">Jatim</option>
          </select>
        </div>
        <div class="mb-3">
          <select class="form-select" aria-label="Default select example" 
          name="usia">
            <option disabled>---Usia---</option>
            <option selected value="17-27">17-27</option>
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </section>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>