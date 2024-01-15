import { Helmet } from 'react-helmet-async'
import NavbarComponent from '../components/NavbarComponent'
import FooterComponent from '../components/FooterComponent'

export default function Home() {
  return (
    <>
      <Helmet>
        <title>Home Anjir</title>
      </Helmet>
      <NavbarComponent />
      <section id="hero" className="d-flex align-items-center">
        <div className="container">
          <h1>
            Salam <span>Pergerakan</span>
          </h1>
          <h2>
            We are team of talented designers making websites with Bootstrap
          </h2>
          <div className="d-flex">
            <a href="#about" className="btn-get-started scrollto">
              Get Started
            </a>
            <a
              href="https://www.youtube.com/watch?v=jDDaplaOz7Q"
              className="glightbox btn-watch-video"
            >
              <i className="bi bi-play-circle"></i>
              <span>Watch Video</span>
            </a>
          </div>
        </div>
      </section>
      <main id="main">


<section id="counts" className="counts">
  <div className="container" data-aos="fade-up">

    <div className="row">

      <div className="col-lg-3 col-md-6">
        <div className="count-box">
          <i className="bi bi-emoji-smile"></i>
          <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" className="purecounter"></span>
          <p>Happy Clients</p>
        </div>
      </div>

      <div className="col-lg-3 col-md-6 mt-5 mt-md-0">
        <div className="count-box">
          <i className="bi bi-journal-richtext"></i>
          <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" className="purecounter"></span>
          <p>Projects</p>
        </div>
      </div>

      <div className="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div className="count-box">
          <i className="bi bi-headset"></i>
          <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" className="purecounter"></span>
          <p>Hours Of Support</p>
        </div>
      </div>

      <div className="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div className="count-box">
          <i className="bi bi-people"></i>
          <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" className="purecounter"></span>
          <p>Hard Workers</p>
        </div>
      </div>

    </div>

  </div>
</section>


</main>
      <FooterComponent />
    </>
  )
}
