import React from 'react'
import NavbarComponent from '../components/NavbarComponent'
import { Link, useForm } from '@inertiajs/react'
import { HiCalendar, HiClock, HiLocationMarker } from 'react-icons/hi'
import { format } from 'date-fns'
import FooterComponent from '../components/FooterComponent'

export default function EventChoise({ eventChoise }) {
  const { data, setData, post, processing } = useForm({
    name: '',
    wa: '',
    email: '',
    _token: document.querySelector('meta[name="csrf-token"]').content,
    event_id: eventChoise.id,
  })

  const handleChange = (e) => {
    setData(e.target.id, e.target.value)
  }

  const handleSubmit = (e) => {
    e.preventDefault()
    const localeventId = localStorage.getItem('event_id')

    post('/transaction/store')
  }

  return (
    <div>
      <NavbarComponent />
      <div className="container mx-auto flex flex-col md:flex-row justify-center mt-6">
        <div className="md:w-1/2 p-6">
          <div className="cardDescription mt-5 rounded-2xl shadow-lg">
            <div className="flex">
              <img
                src={eventChoise.img}
                alt=""
                className="eventImgSmall shadow-xl "
              />
              <h1 className="text-xl mt-3 mb-3">{eventChoise.title}</h1>
            </div>
            <div className="flex mt-2 mb-2">
              <p className="flex align items-center mr-3">
                <HiCalendar className="mr-1" />
                {format(new Date(eventChoise.date), 'EEEE, d MMMM yyyy')}
              </p>
              <p className="flex align items-center mr-3">
                <HiClock className="mr-1" />
                {eventChoise.time.split(':').slice(0, 2).join(':')} WIB
              </p>
              <p className="flex align items-center">
                <HiLocationMarker className="mr-1 truncate" />
                {eventChoise.place}
              </p>
            </div>

            <div>
              <hr className="border-primary" />
              <p className="ml-5">Harga: {eventChoise.rp}</p>
            </div>
          </div>
        </div>

        <div className="md:w-1/2 flex justify-center">
          <div className="cardForm p-6 shadow-xl mb-8">
            <h1 className="">Detail Pemesan</h1>

            <form onSubmit={handleSubmit} className="p-4">
              <label className="block mb-3">
                <span className="block font-semibold mb-1">Nama Lengkap</span>
                <input
                  type="text"
                  id="name"
                  required
                  value={data.name}
                  onChange={handleChange}
                  placeholder="Nama Lengkap"
                  className="input input-bordered w-full input input-bordered bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                />
              </label>

              <label className="block mb-3">
                <span className="block font-semibold mb-1">Nomor Ponsel</span>
                <input
                  type="number"
                  id="wa"
                  value={data.wa}
                  onChange={handleChange}
                  required
                  placeholder="Type here"
                  className="input input-bordered w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                />
              </label>

              <label className="block mb-3">
                <span className="block font-semibold">Email Aktif</span>
                <p className="italic color text-red-400">
                  tiket akan dikirim ke email anda
                </p>
                <input
                  type="email"
                  id="email"
                  value={data.email}
                  onChange={handleChange}
                  required
                  placeholder="Type here"
                  className="input input-bordered w-full input input-bordered bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                />
              </label>

              <div className="flex justify-center">
                <button
                  type="submit"
                  className="btn btn-primary"
                  disabled={processing}
                >
                  {processing ? 'Menyimpan Pesanan...' : 'Pesan Tiket Sekarang'}
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <FooterComponent />
    </div>
  )
}
