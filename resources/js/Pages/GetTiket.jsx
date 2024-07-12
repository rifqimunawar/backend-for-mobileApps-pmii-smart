import React from 'react'
import '../../../public/css/tiket.css' // Import file CSS jika diperlukan
import { HiCalendar, HiCash, HiClock, HiLocationMarker } from 'react-icons/hi'
import { format } from 'date-fns'
import QRCode from 'qrcode.react'

export default function Ticket({ tiket, qrCode, event }) {
  console.log({ tiket })
  console.log({ event })
  console.log({ qrCode })
  const qrCodeUrl = `https://api.qrserver.com/v1/create-qr-code/?data=${qrCode}&size=300x300`;
  // localStorage.setItem('event_id', event.id);

  return (
    <div className="body">
      <div className="ticket created-by-anniedotexe flex">
        <div className="left flex-grow">
          <div
            className="image"
            style={{ backgroundImage: `url(${event.img})` }}
          >
            <p className="admit-one">
              <span>E-TIKET</span>
              <span>E-TIKET</span>
              <span>E-TIKET</span>
            </p>
            <div className="ticket-number">{/* <p>#20030220</p> */}</div>
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
            <span>E-TIKET</span>
            <span>E-TIKET</span>
            <span>E-TIKET</span>
          </p>
          <div className="right-info-container">
            <div className="barcode">
              {/* <QRCode value={qrCode} /> */}
              <img src={qrCodeUrl} alt="QR Code" title="QR Code" />
            </div>
            {/* <p className="ticket-number">#20030220</p> */}
          </div>
        </div>
      </div>
    </div>
  )
}
