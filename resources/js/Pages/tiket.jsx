import React from 'react'
import '../../../public/css/tiket.css' // Import file CSS jika diperlukan
import { HiCalendar, HiCash, HiClock, HiLocationMarker } from 'react-icons/hi'
import { format } from 'date-fns'

export default function Ticket({ tiket, qrCodePath, event }) {
  console.log({ tiket })
  console.log({ event })

  return (
    <div className="body">
      <div className="ticket created-by-anniedotexe">
        <div className="left">
          <div className="image">
            <p className="admit-one">
              <span>ADMIT ONE</span>
              <span>ADMIT ONE</span>
              <span>ADMIT ONE</span>
            </p>
            <div className="ticket-number">
              <p>#20030220</p>
            </div>
          </div>
          <div className="ticket-info">
            <p className="date">
              <span></span>
              <span className="june-29">{tiket.name}</span>
              <span></span>
            </p>
            <div className="show-name">
              <h3>{event.title}</h3>
            </div>
            <div className="time">


              <hr className="border-primary" />
            </div>
            <p className="location">
              <span>
              <p className="flex items-center text-sm">
                <HiCalendar className="mr-2 truncate text-nowrap" />{' '}
                {format(new Date(event.date), 'EEEE, d MMMM yyyy')}
              </p>
              </span>
              <span className="separator">
                <i className="far fa-smile"></i>
              </span>
              <span>
              <p className="flex items-center">
                <HiLocationMarker className="mr-2 truncate" /> {event.place}
              </p>
              </span>
            </p>
          </div>
        </div>
        <div className="right">
          <p className="admit-one">
            <span>ADMIT ONE</span>
            <span>ADMIT ONE</span>
            <span>ADMIT ONE</span>
          </p>
          <div className="right-info-container">
            <div className="show-name">
              {/* <h1>SOUR Prom</h1> */}
            </div>
            <div className="time">
              <p>
                {/* 8:00 PM <span>TO</span> 11:00 PM */}
              </p>
              <p>
                {/* DOORS <span>@</span> 7:00 PM */}
              </p>
            </div>
            <div className="barcode">
            {qrCodePath}
            </div>
            {/* <p className="ticket-number">#20030220</p> */}
          </div>
        </div>
      </div>
    </div>
  )
}
