import { Helmet } from 'react-helmet-async'
import NavbarComponent from '../components/NavbarComponent'
import FooterComponent from '../components/FooterComponent'

const About = () => {
  return (
    <section>
      <Helmet>
        <title>About Anjir</title>
      </Helmet>
      <NavbarComponent />
      <div>About</div>
      <FooterComponent/>
    </section>
  )
}

export default About
