import { Helmet } from 'react-helmet-async'
import NavbarComponent from '../components/NavbarComponent'

const About = () => {
  return (
    <section>
      <Helmet>
        <title>About Anjir</title>
      </Helmet>
      <NavbarComponent />
      <div>About</div>
    </section>
  )
}

export default About
