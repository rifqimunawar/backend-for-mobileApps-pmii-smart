import ChartComponent from "../components/ChartComponent";

export default function HomePage() {

  const imgPaslon = '/surat-suara.png';
  return (

    <main id="main" className="main">
      <div className="pagetitle">
        <h1>SURVEI ELEKTABILITAS PASANGAN CALON PRESIDEN - WAKIL PRESIDEN</h1>
      </div>
      <div className="pagetitle">
        <h3>Satu mawar untuk satu suara</h3>
      </div>
      <div className="container-fluid">
        <div className="row">
          {/* First Section */}
          <section className="col-lg-6">
            <div className="row">
              <div className="col-lg-4 d-flex align-items-center justify-content-center">
                <div className="card">
                  <div className="card-body text-center" style={{ position: 'relative' }}>
                    <img src={imgPaslon} alt="" style={{ width: '37rem' }} />
                    <livewire:suara />
                  </div>
                </div>
              </div>
            </div>
          </section>

          {/* Second Section */}
          <section className="col-lg-6">
            <div className="row">
              <ChartComponent />
              <h3>test</h3>
            </div>
          </section>

          <section>
            {/* <livewire:add-suara/> */}
          </section>
        </div>
      </div>
    </main>
  );
}