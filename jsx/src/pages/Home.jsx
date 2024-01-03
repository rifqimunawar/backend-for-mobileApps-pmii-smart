import { Helmet } from 'react-helmet-async'
import NavbarComponent from '../components/NavbarComponent'

export default function Home() {
  return (
    <section>
      <Helmet>
        <title>Home Anjir</title>
      </Helmet>
      <NavbarComponent />
      <div>Home</div>
    </section>
  )
}
