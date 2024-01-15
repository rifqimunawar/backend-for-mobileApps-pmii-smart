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
      <FooterComponent />
    </>
  )
}
