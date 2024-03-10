import React from 'react'
import FooterComponent from '../components/FooterComponent'
import NavbarComponent from '../components/NavbarComponent'

export default function About() {
  return (
    <div>
      <NavbarComponent />
      <div className="container mx-auto mt-10 mb-8">
        <h1 className='text-center items-center justify-center flex'>About Us</h1>

        <div className="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <p>
          lorem100
        </p>
        </div>
      </div>
      <FooterComponent />
    </div>
  )
}
