<div>
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
</div>
