import React from 'react'
import NavbarComponent from '../components/NavbarComponent'
import { Link, useForm } from '@inertiajs/react'
import { HiCalendar, HiClock, HiLocationMarker } from 'react-icons/hi'
import { format } from 'date-fns'

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
    console.log(data)
    post('/transaction/store')
    // post('/event/store');
  }

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

              {/* <FormComponent/> */}

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
                    Harga Tiket: Rp:{' '}
                    <span className=" font-medium">
                      {' '}
                      {eventChoise.rp.toLocaleString('id-ID')}{' '}
                    </span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div className="w-1/2 flex justify-center">
          <div className="cardForm shadow-xl mb-8">
            <h1 className="">Detail Pemesan</h1>

            <form onSubmit={handleSubmit}>
              <label className="form-control w-full mb-3">
                <div className="label">
                  <span className="label-text">
                    <strong>Nama Lengkap</strong>
                  </span>
                </div>
                <input
                  type="text"
                  id="name"
                  required
                  value={data.name}
                  onChange={handleChange}
                  placeholder="Nama Lengkap"
                  className="input input-bordered w-full"
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
                  id="wa"
                  value={data.wa}
                  onChange={handleChange}
                  required
                  placeholder="Type here"
                  className="input input-bordered w-full "
                />
              </label>

              <label className="form-control w-full mb-3">
                <div className="label">
                  <span className="label-text">
                    <strong>Email</strong> E-Tiket Akan Dikirim Melalui Email
                  </span>
                </div>
                <input
                  type="email"
                  id="email"
                  value={data.email}
                  onChange={handleChange}
                  required
                  placeholder="Type here"
                  className="input input-bordered w-full "
                />
              </label>

              <div className="flex mt-5 justify-center align items-center">
                <button
                  type="submit"
                  className="btn btn-primary"
                  disabled={processing}
                >
                  {' '}
                  {processing ? 'Menyimpan Pesanan...' : 'Pesan Tiket Sekarang'}
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  )
}
// import React, { useState } from 'react';
// import { useForm } from '@inertiajs/inertia-react';

// export default function EventForm({eventChoise}) {
//     const { data, setData, post } = useForm({
//         name: '',
//         wa: '',
//         email: '',
//         _token: document.querySelector('meta[name="csrf-token"]').content,
//         event_id :eventChoise.id
//     });

//     const handleChange = (e) => {
//         setData(e.target.id, e.target.value);
//     };

//     const handleSubmit = (e) => {
//         e.preventDefault();
//         console.log(data)
//         post('/transaction/store');
//         // post('/event/store');
//     };

//     return (
//         <form onSubmit={handleSubmit}>
//             <label htmlFor="name">Name:</label>
//             <input type="text" id="name" value={data.name} onChange={handleChange} />
//             <label htmlFor="wa">WhatsApp:</label>
//             <input type="text" id="wa" value={data.wa} onChange={handleChange} />
//             <label htmlFor="email">Email:</label>
//             <input type="email" id="email" value={data.email} onChange={handleChange} />
//             <button type="submit">Submit</button>
//         </form>
//     );
// }
