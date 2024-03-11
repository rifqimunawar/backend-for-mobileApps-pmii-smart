import React from 'react'
import NavbarComponent from '../components/NavbarComponent'
import FooterComponent from '../components/FooterComponent'

export default function Contact() {
  return (
    <div>
      <NavbarComponent/>
      <div className='container mx-auto mt-10 mb-8'>

        <div className=''>
          <h1 className='flex justify-center text-3xl'>Contact Us</h1>
          <div className="w-full flex justify-center bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div className='w-1/2 h-24 justify-center flex items-center'> 
            <i class="bi bi-telephone-fill w-10"></i> 
            </div>

          </div>
        </div>
      </div>
      <FooterComponent/>
    </div>
  )
}
