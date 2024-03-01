import React from 'react'
import { HiCalendar, HiCash, HiClock, HiLocationMarker } from 'react-icons/hi'
import { format } from 'date-fns'

export default function EventCardComponent({ event }) {
  return (
    <div className="card w-full bg-base-100 shadow-xl mb-0 pb-0">
      <figure className="cardImg">
        <img src={event.img} alt={event.title} />
      </figure>
      <div className="card-body">
        <h2 className="card-title text-xl truncate" title={event.title}>
          {event.title}
        </h2>
        <p className="flex items-center">
          <HiCalendar className="mr-2" />{' '}
          {format(new Date(event.date), 'EEEE, d MMMM yyyy')}
        </p>
        <p className="flex items-center">
          <HiLocationMarker className="mr-2 truncate" /> {event.place}
        </p>
        <hr className="border-primary" />
        <p className="flex items-center">
          <HiCash className="mr-2" />
          Rp: {event.rp.toLocaleString('id-ID')},00
        </p>
      </div>
    </div>
  )
}
