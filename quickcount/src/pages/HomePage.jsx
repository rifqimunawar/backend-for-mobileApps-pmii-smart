import SuaraComponent from "../components/SuaraComponent";

export default function HomePage() {


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
              <SuaraComponent/>
            </div>
          </section>
          {/* Second Section */}
          <section className="col-lg-6">
            <div className="row">
              <h3>test</h3>
            </div>
          </section>
        </div>
      </div>
    </main>
  );
}
