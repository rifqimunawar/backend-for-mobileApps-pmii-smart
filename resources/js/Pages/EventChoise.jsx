import React from 'react'
import NavbarComponent from '../components/NavbarComponent'
import { Link } from '@inertiajs/react'
import { HiCalendar, HiClock, HiLocationMarker } from 'react-icons/hi'
import { format } from 'date-fns'

export default function EventDetail({ eventChoise }) {
  return (
    <div>
      <NavbarComponent />
      <div className="container mx-auto flex justify-center mt-6">
        <div className="flex">
          <div className="w-1/2 justify-center mr-10">
            <div className="">
              <div className="cardDescription mt-5 p-2 rounded-2xl shadow-lg">
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

              <div className="cardForm shadow-xl mb-8">
                <h1 className="">Detail Pemesan</h1>
                <from>
                  <label className="form-control w-full mb-3">
                    <div className="label">
                      <span className="label-text">
                        <strong>Nama Lengkap</strong>
                      </span>
                    </div>
                    <input
                      type="text"
                      name='name'
                      required min={4}
                      placeholder=""
                      className="input input-bordered w-full "
                    />
                  </label>

                  <label className="form-control w-full mb-3">
                    <div className="label">
                      <span className="label-text">
                        <strong>Nomor Ponsel</strong>
                      </span>
                    </div>
                    <input
                      type="number"
                      name='wa'
                      required
                      placeholder="Type here"
                      className="input input-bordered w-full "
                    />
                  </label>

                  <label className="form-control w-full mb-3">
                    <div className="label">
                      <span className="label-text">
                        <strong>Email</strong> E-Tiket Akan Dikirim Melalui
                        Email
                      </span>
                    </div>
                    <input
                      type="email"
                      name='email'
                      required
                      placeholder="Type here"
                      className="input input-bordered w-full "
                    />
                  </label>

                  <div className='flex mt-5 justify-center align items-center'>
                    <Link href=''>
                      <button type='submit' className='btn btn-primary'>Kirim</button>
                    </Link>
                  </div>
                </from>
              </div>
            </div>
          </div>

          <div className="w-1/2 flex justify-center">
            <div className="cardPrice p-6 shadow-xl rounded-2xl">
              <h1 className="text-2xl mt-3 mb-3">{eventChoise.title}</h1>

              <p className="flex items-center">
                <HiCalendar className="mr-2" />
                {format(new Date(eventChoise.date), 'EEEE, d MMMM yyyy')}
              </p>
              <p className="flex items-center">
                <HiClock className="mr-2" />
                {eventChoise.time.split(':').slice(0, 2).join(':')} WIB
              </p>
              <p className="flex items-center">
                <HiLocationMarker className="mr-2 truncate" />
                {eventChoise.place}
              </p>

              <div className="flex flex-col items-center mt-auto">
                <p className="mb-5 mt-5 text-lg">
                  Harga Mulai Dari: Rp:{' '}
                  <span className=" font-medium">
                    {' '}
                    {eventChoise.rp.toLocaleString('id-ID')}{' '}
                  </span>
                </p>
                <Link href={'/event/choice/' + eventChoise.id}>
                  <button className="brnChoise btn btn-primary mb-2">
                    Pesan Tiket Sekarang
                  </button>
                </Link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}
