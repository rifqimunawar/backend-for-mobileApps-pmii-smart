import { Helmet } from 'react-helmet-async'
import NavbarComponent from '../components/NavbarComponent'
import FooterComponent from '../components/FooterComponent'

export default function Home() {
  return (
    <section>
      <Helmet>
        <title>Home Anjir</title>
      </Helmet>
      <NavbarComponent />
      <section>
        
      </section>
      <FooterComponent/>
    </section>
  )
}
