import { Helmet } from 'react-helmet-async';
import NavbarComponent from '../components/NavbarComponent';
import FooterComponent from '../components/FooterComponent';
import imgTeam from '/BizLand/assets/img/team/team-1.jpg';

export default function Pengurus() {
  return (
    <>
      <Helmet>
        <title>Pengurus Anjir</title>
      </Helmet>
      <NavbarComponent />
      
      <section id="team" className="team section-bg">
        <div className="container" data-aos="fade-up">

          <div className="section-title">
            <h2>Team</h2>
            <h3>Our Hardworking <span>Team</span></h3>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
          </div>

          <div className="row">
            <div className="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div className="member">
                <div className="member-img">
                  <img src={imgTeam} className="img-fluid" alt="Walter White" />
                  <div className="social">
                    <a href="/"><i className="bi bi-twitter"></i></a>
                    <a href="/"><i className="bi bi-facebook"></i></a>
                    <a href="/"><i className="bi bi-instagram"></i></a>
                    <a href="/"><i className="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div className="member-info">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>

      <FooterComponent />
    </>
  );
}
