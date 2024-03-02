// import React from 'react'
// import NavbarComponent from '../components/NavbarComponent'
// import { Link } from '@inertiajs/react'
// import { HiCalendar, HiClock, HiLocationMarker } from 'react-icons/hi'
// import { format } from 'date-fns'
// import FormComponent from '../components/FormComponent'
// import { useState } from 'react'
// import { router } from '@inertiajs/react'

// export default function EventDetail({ eventChoise }) {

//   const [values, setValues] = useState({
//     name: "",
//     wa: "",
//     email: "",
//   })



//   function handleChange(e) {
//     const key = e.target.id;
//     const value = e.target.value
//     setValues(values => ({
//         ...values,
//         [key]: value,
//     }))
//   }

//   function handleSubmit(e) {
//     e.preventDefault()
//     console.log(values)
//     router.post('/event/store', values)
//   }

  

//   return (
//     <div>
//       <NavbarComponent />
//       <div className="container mx-auto flex justify-center mt-6">
//         <div className="flex">
//           <div className="w-1/2 justify-center mr-10">
//             <div className="">
//               <div className="cardDescription mt-5 p-2 rounded-2xl shadow-lg">
//                 <div className="flex">
//                   <img
//                     src={eventChoise.img}
//                     alt=""
//                     className="eventImgSmall shadow-xl "
//                   />
//                   <h1 className="text-xl mt-3 mb-3">{eventChoise.title}</h1>
//                 </div>
//                 <div className="flex mt-2 mb-2">
//                   <p className="flex align items-center mr-3">
//                     <HiCalendar className="mr-1" />
//                     {format(new Date(eventChoise.date), 'EEEE, d MMMM yyyy')}
//                   </p>
//                   <p className="flex align items-center mr-3">
//                     <HiClock className="mr-1" />
//                     {eventChoise.time.split(':').slice(0, 2).join(':')} WIB
//                   </p>
//                   <p className="flex align items-center">
//                     <HiLocationMarker className="mr-1 truncate" />
//                     {eventChoise.place}
//                   </p>
//                 </div>

//                 <div>
//                   <hr className="border-primary" />
//                   <p className="ml-5">Harga: {eventChoise.rp}</p>
//                 </div>
//               </div>


//                 {/* <FormComponent/> */}

//                 <form onSubmit={handleSubmit}>
//       <label htmlFor="name">First name:</label>
//       <input id="name" value={values.name} onChange={handleChange} />
//       <label htmlFor="wa">Last name:</label>
//       <input id="wa" value={values.wa} onChange={handleChange} />
//       <label htmlFor="email">Email:</label>
//       <input id="email" value={values.email} onChange={handleChange} />
//       <button type="submit">Submit</button>
//     </form>


//               </div>
//             </div>
//           </div>

//           <div className="w-1/2 flex justify-center">
//             <div className="cardPrice p-6 shadow-xl rounded-2xl">
//               <h1 className="text-2xl mt-3 mb-3">{eventChoise.title}</h1>

//               <p className="flex items-center">
//                 <HiCalendar className="mr-2" />
//                 {format(new Date(eventChoise.date), 'EEEE, d MMMM yyyy')}
//               </p>
//               <p className="flex items-center">
//                 <HiClock className="mr-2" />
//                 {eventChoise.time.split(':').slice(0, 2).join(':')} WIB
//               </p>
//               <p className="flex items-center">
//                 <HiLocationMarker className="mr-2 truncate" />
//                 {eventChoise.place}
//               </p>

//               <div className="flex flex-col items-center mt-auto">
//                 <p className="mb-5 mt-5 text-lg">
//                   Harga Mulai Dari: Rp:{' '}
//                   <span className=" font-medium">
//                     {' '}
//                     {eventChoise.rp.toLocaleString('id-ID')}{' '}
//                   </span>
//                 </p>
//                 <Link href={'/event/choice/' + eventChoise.id}>
//                   <button className="brnChoise btn btn-primary mb-2">
//                     Pesan Tiket Sekarang
//                   </button>
//                 </Link>
//               </div>
//             </div>
//           </div>
//         </div>
//       </div>
//   )
// }


import React, { useState, useEffect } from 'react';
import { useForm } from '@inertiajs/inertia-react';
import { Inertia } from '@inertiajs/inertia';

export default function EventChoise({ eventChoise }) {
  const { data, setData, post } = useForm({
    name: '',
    wa: '',
    email: '',
    _token: '', // CSRF token
    event_id: eventChoise ? eventChoise.id : '', // Assign event_id directly if eventChoise is available
  });

  useEffect(() => {
    // Mendapatkan CSRF token dari tag meta
    setData('_token', document.querySelector('meta[name="csrf-token"]').content);
  }, []);

  function handleChange(e) {
    const key = e.target.id;
    const value = e.target.value;
    setData(key, value);
  }

  function handleSubmit(e) {
    e.preventDefault();
    
    // Assign event_id if available
    if (eventChoise) {
      setData('event_id', eventChoise.id);
    }

    console.log(data);
    post('/event/store');
  }

  return (
    <form onSubmit={handleSubmit}>
      <label htmlFor="name">Name:</label>
      <input id="name" value={data.name} onChange={handleChange} />
      <label htmlFor="wa">Wa:</label>
      <input id="wa" value={data.wa} onChange={handleChange} />
      <label htmlFor="email">Email:</label>
      <input id="email" value={data.email} onChange={handleChange} />
      <button type="submit">Submit</button>
    </form>
  );
}
