import { Helmet } from 'react-helmet-async'
import NavbarComponent from '../components/NavbarComponent'
import FooterComponent from '../components/FooterComponent'

export default function Pengurus() {
  return (
    <section>
      <Helmet>
        <title>Pengurus Anjir</title>
      </Helmet>
      <NavbarComponent />
      <div>Pengurus</div>
      <FooterComponent/>
    </section>
  )
}
