import React from 'react'

export default function EventCheckout({tiket}) {
  return (
    <div>Selamat {tiket.name} data anda sudah di simpan
    <button className='btn btn-secondary'>Bayar Sekarang</button>
    </div>
  )
}
