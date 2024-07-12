import React from 'react'
import '../../../public/css/tiket.css' // Import file CSS jika diperlukan
import { HiCalendar, HiCash, HiClock, HiLocationMarker } from 'react-icons/hi'
import { format } from 'date-fns'
import html2canvas from 'html2canvas'
import jsPDF from 'jspdf'

export default function Ticket({ tiket, qrCode, event }) {
  console.log({ tiket })
  console.log({ event })
  console.log({ qrCode })
  const qrCodeUrl = `https://api.qrserver.com/v1/create-qr-code/?data=${qrCode}&size=300x300`

  const handleDownload = () => {
    const input = document.getElementById('content')
    html2canvas(input)
      .then((canvas) => {
        const imgData = canvas.toDataURL('image/png')

        // Membuat file PDF atau JPG
        const pdf = new jsPDF('p', 'mm', 'a4')
        const imgProps = pdf.getImageProperties(imgData)
        const pdfWidth = pdf.internal.pageSize.getWidth()
        const pdfHeight = (imgProps.height * pdfWidth) / imgProps.width

        pdf.addImage(imgData, 'PNG', 0, 0, pdfWidth, pdfHeight)
        pdf.save('tiket.pdf')

        // Atau jika ingin menyimpan sebagai JPG:
        // const link = document.createElement('a');
        // link.href = imgData;
        // link.download = 'tiket.jpg';
        // document.body.appendChild(link);
        // link.click();
        // document.body.removeChild(link);
      })
      .catch((err) => {
        console.error('Error generating PDF', err)
      })
  }

  return (
    <div className="body">
      <div
        className="ticket created-by-anniedotexe flex"
        style={{ transform: 'rotate(0deg)', marginTop: '4rem' }}
      >
        <div className="left flex-grow" id="content">
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
              <img src={qrCodeUrl} alt="QR Code" title="QR Code" />
            </div>
            {/* <p className="ticket-number">#20030220</p> */}
          </div>
        </div>
      </div>
      <div style={{ marginTop: '-22rem' }} className="text-center">
        <a href="/" className="btn btn-primary">
          Kembali
        </a>
        {/* <button onClick={handleDownload} className="btn btn-secondary">
          Download Tiket
        </button> */}
      </div>
    </div>
  )
}
