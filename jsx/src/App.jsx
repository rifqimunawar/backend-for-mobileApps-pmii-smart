import './App.css'
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import { Helmet, HelmetProvider } from 'react-helmet-async';
import Home from './pages/Home';
import About from './pages/About';
import Pengurus from './pages/Pengurus';

function App() {
  const helmetContext = {};

  return (
    <HelmetProvider context={helmetContext}>
      <Helmet>
        <meta charSet="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link
          href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet"
        />
        <link href="../public/BizLand/assets/vendor/aos/aos.css" rel="stylesheet" />
        <link href="../public/BizLand/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../public/BizLand/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
        <link href="../public/BizLand/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
        <link href="../public/BizLand/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
        <link href="../public/BizLand/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
      </Helmet>

      <Router>
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/about" element={<About />} />
          <Route path="/pengurus" element={<Pengurus />} />
        </Routes>
      </Router>
    </HelmetProvider>
  );
}

export default App;
