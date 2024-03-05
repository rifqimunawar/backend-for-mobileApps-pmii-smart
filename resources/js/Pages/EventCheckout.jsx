import { useEffect } from 'react';
import React from 'react'
export default function EventCheckout({ tiket }) {
    useEffect(() => {
        const payButton = document.getElementById('pay-button');
        if (payButton) {
            payButton.addEventListener('click', () => {
                // Mengambil snap token dari properti URL
                const searchParams = new URLSearchParams(window.location.search);
                const snapToken = searchParams.get('snapToken');
                if (snapToken) {
                    snap.pay(snapToken, {
                        onSuccess: function (result) {
                            document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                        },
                        onPending: function (result) {
                            document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                        },
                        onError: function (result) {
                            document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                        }
                    });
                }
            });
        }
    }, []);

    return (
        <div>
            <p>Selamat {tiket.name}, data Anda telah disimpan.</p>
            <button id="pay-button" className='btn btn-secondary'>Bayar Sekarang</button>
            <div id="result-json">Hasil JSON akan muncul di sini setelah pembayaran:</div>
        </div>
    );
}
