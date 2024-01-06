// import './App.css'
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom'
import Home from './pages/Home'
import { HelmetProvider } from 'react-helmet-async'
import About from './pages/About'

function App() {
  const helmetContext = {}
  return (
    <HelmetProvider context={helmetContext}>
      <Router>
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/about" element={<About />} />
        </Routes>
      </Router>
    </HelmetProvider>
  )
}

export default App
