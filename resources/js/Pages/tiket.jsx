import React, { useEffect } from 'react'
import '../../../public/css/tiket.css' // Import file CSS jika diperlukan
import { HiCalendar, HiCash, HiClock, HiLocationMarker } from 'react-icons/hi'
import { format } from 'date-fns'
import QRCode from 'qrcode.react'
import html2canvas from 'html2canvas'

export default function Ticket({ tiket, qrCode, event }) {
  console.log({ tiket })
  console.log({ event })

  useEffect(() => {
    const captureScreen = () => {
      const ticketElement = document.querySelector(
        '.ticket.created-by-anniedotexe'
      )
      html2canvas(ticketElement).then((canvas) => {
        const dataUrl = canvas.toDataURL()
        // Simpan gambar atau kirim ke backend
        // Contoh: Simpan gambar ke lokal user
        const link = document.createElement('a')
        link.href = dataUrl
        link.download = 'ticket_screenshot.png'
        link.click()
      })
    }

    captureScreen() // Panggil fungsi captureScreen saat komponen dimuat
  }, []) // Gunakan array kosong untuk memastikan efek hanya dijalankan sekali

  return (
    <div className="body">
      <div
        className="ticket created-by-anniedotexe"
        style={{ transform: 'rotate(90deg)' }}
      >
        <div className="left">
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
              <QRCode value={qrCode} />
            </div>
            {/* <p className="ticket-number">#200302250</p> */}
          </div>
        </div>
      </div>
    </div>
  )
}
