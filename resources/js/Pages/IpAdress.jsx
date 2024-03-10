import React from 'react'
import NavbarComponent from '../components/NavbarComponent'
import { Link } from '@inertiajs/react'

export default function IpAdress({ IpAdress }) {
  return (
    <div>
      <NavbarComponent />
      <div className="contain flex justify-center text-center items-center mt-10">
        <div className="card card-compact w-96 bg-white shadow-2xl">
          <figure>
            <img
              src="https://img.freepik.com/free-vector/warning-sign-with-warning-word_78370-4060.jpg"
              alt="Warning"
            />
          </figure>
          <div className="card-body text-center">
            <h2 className="text-2xl font-bold">Mohon Maaf!</h2>
            <p>Anda Tidak Bisa Melakukan Pembelian Tiket</p>
            <p>Yang Sama Untuk Kedua Kalinya</p>
            <div className="card-actions justify-center">
              <Link href ={'/'}>
                <button className="btn btn-primary">Kembali</button>
              </Link>
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}
