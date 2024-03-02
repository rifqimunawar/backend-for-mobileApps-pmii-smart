import React, { useState } from 'react';
import { useForm } from '@inertiajs/inertia-react';

export default function EventForm() {
    const { data, setData, post } = useForm({
        name: '',
        wa: '',
        email: '',
        _token: document.querySelector('meta[name="csrf-token"]').content,
    });

    const handleChange = (e) => {
        setData(e.target.id, e.target.value);
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        console.log(data)
        post('/transaction/store');
    };

    return (
        <form onSubmit={handleSubmit}>
            <label htmlFor="name">Name:</label>
            <input type="text" id="name" value={data.name} onChange={handleChange} />
            <label htmlFor="wa">WhatsApp:</label>
            <input type="text" id="wa" value={data.wa} onChange={handleChange} />
            <label htmlFor="email">Email:</label>
            <input type="email" id="email" value={data.email} onChange={handleChange} />
            <button type="submit">Submit</button>
        </form>
    );
}
