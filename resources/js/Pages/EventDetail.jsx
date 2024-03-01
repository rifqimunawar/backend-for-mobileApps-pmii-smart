import React from 'react'
import NavbarComponent from '../components/NavbarComponent'
import { Link } from '@inertiajs/react'
import { HiCalendar, HiClock, HiLocationMarker } from 'react-icons/hi'
import { format } from 'date-fns'

export default function EventDetail({ event_details }) {
  return (
    <div>
      <NavbarComponent />
      <div className="container mx-auto flex justify-center mt-6">
        <div className="flex">
          <div className="w-1/2">
            <img
              src={event_details.img}
              alt=""
              className="eventImg shadow-xl "
            />
            <div className="mt-5 cardDescription p-2 rounded-2xl shadow-lg">
              <p className="text-base">{event_details.description}</p>
            </div>
          </div>
          <div className="w-1/2 flex justify-center">
            <div className="cardPrice p-6 shadow-xl rounded-2xl">
              <h1 className="text-2xl mt-3 mb-3">{event_details.title}</h1>

              <p className="flex items-center">
                <HiCalendar className="mr-2" />
                {format(new Date(event_details.date), 'EEEE, d MMMM yyyy')}
              </p>
              <p className="flex items-center">
                <HiClock className="mr-2" />
                {event_details.time.split(':').slice(0, 2).join(':')} WIB
              </p>
              <p className="flex items-center">
                <HiLocationMarker className="mr-2 truncate" />
                {event_details.place}
              </p>

              <div className="flex flex-col items-center mt-auto">
                <p className="mb-5 mt-5 text-lg">
                  Harga Mulai Dari: Rp:{' '}
                  <span className=" font-medium">
                    {' '}
                    {event_details.rp.toLocaleString('id-ID')}{' '}
                  </span>
                </p>
                <Link href={'/event/choice/' + event_details.id}>
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
