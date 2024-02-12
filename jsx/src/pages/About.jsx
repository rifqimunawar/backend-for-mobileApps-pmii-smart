import { Helmet } from 'react-helmet-async';
import NavbarComponent from '../components/NavbarComponent';
import FooterComponent from '../components/FooterComponent';
import img from '/BizLand/assets/img/about.jpg'

const About = () => {
  return (
    <section>
      <Helmet>
        <title>About Anjir</title>
      </Helmet>
      <NavbarComponent />

      <section id="about" className="about section-bg">
        <div className="container">
          <div className="section-title">
            <h2>About</h2>
            <h3>Find Out More <span>About Us</span></h3>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
          </div>

          <div className="row">
            <div className="col-lg-6" >
            <img src={img} alt="about" className='img-fluid' />
            </div>
            <div className="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center">
              <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
              <p className="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
              <ul>
                <li>
                  <i className="bx bx-store-alt"></i>
                  <div>
                    <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                    <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                  </div>
                </li>
                <li>
                  <i className="bx bx-images"></i>
                  <div>
                    <h5>Magnam soluta odio exercitationem reprehenderit</h5>
                    <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                  </div>
                </li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
            </div>
          </div>
        </div>
      </section>
      <FooterComponent />
    </section>
  );
};

export default About;
