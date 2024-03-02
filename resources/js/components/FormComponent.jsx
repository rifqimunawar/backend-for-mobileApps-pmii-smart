import { useForm } from '@inertiajs/inertia-react'
import React, { useState, useEffect } from 'react';
import { Inertia } from '@inertiajs/inertia';

const FormComponent=()=> {
  
  const {data, setData}=useForm({
    name:'',
  });

  const handleSubmit = (e) => {
    e.preventDefault(); // Perhatikan penulisan yang benar disini
    console.log("oke");
  };

  return (
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
            name="name"
            required
            value={data.name}
            // onChange={(e) => setData('name', e.target.value)} // Panggil setData dengan nama bidang dan nilai baru
            placeholder=""
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
            name="wa"
            value={data.wa}
            // onChange={(e) => setData('wa', e.target.value)}
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
            name="email"
            value={data.email}
            // onChange={(e) => setData('email', e.target.value)}
            required
            placeholder="Type here"
            className="input input-bordered w-full "
          />
        </label>

        <div className="flex mt-5 justify-center align items-center">
        <button type="submit" className="btn btn-primary"> 
        {/*  disabled={processing}>  {processing ? 'Menyimpan...' : 'Kirim'} */}
        </button>
        </div>
      </form>
    </div>
  )
}

export default FormComponent