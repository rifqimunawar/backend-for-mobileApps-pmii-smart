import { Link, useNavigate } from 'react-router-dom'
import logo from '../../public/BizLand/assets/img/Logo PMII Format PNG.png' // Sesuaikan path sesuai dengan struktur direktori proyek

function NavbarComponent() {
  const navigate = useNavigate()

  return (
    
    <header id="header" className="d-flex align-items-center">
      <div className="container d-flex align-items-center justify-content-between">
        <h1 className="logo">
          <Link to="/" className="nav-link">
            <img src={logo} alt="Logo" />
            PMII<span> TEKNIK</span>
          </Link>
        </h1>

        <nav id="navbar" className="navbar">
          <ul>
            <li>
              <Link
                to="/"
                className="nav-link scrollto"
                onClick={() => navigate('/')}
              >
                Home
              </Link>
            </li>
            <li>
              <Link
                to="/about"
                className="nav-link scrollto"
                onClick={() => navigate('/about')}
              >
                About
              </Link>
            </li>
            <li>
              <Link
                to="/pengurus"
                className="nav-link scrollto"
                onClick={() => navigate('/pengurus')}
              >
                Pengurus
              </Link>
            </li>
          </ul>
          <i className="bi bi-list mobile-nav-toggle"></i>
        </nav>
      </div>
    </header>
  )
}

export default NavbarComponent
