<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>payment-gateway</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <html data-theme="retro">

    </html>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: transparent;
        }

        .card-container {
            position: relative;
            /* Untuk posisi absolute card */
            width: 300px;
            /* Atur sesuai kebutuhan */
            height: 200px;
            /* Atur sesuai kebutuhan */
            background-color: #ffffff;
            /* Warna latar belakang card */
            border-radius: 10px;
            /* Atur sesuai kebutuhan */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Efek bayangan card */
        }

        .cardItem {
            width: 400px;
            height: 350px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Optional: Add shadow for better visibility */
        }

        .cardItem .gambar {
            height: 30%;
            /* Height of the image section */
            background-color: cadetblue;
            /* Background color for the image section */
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .cardItem .keterangan {
            height: 70%;
            /* Height of the description section */
            padding: 20px;
            background-color: #f9fafb;
            /* Background color for the description section */
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .konf {
            margin-left: 23%;
            margin-bottom: 5px;
        }

        .konf h1 {
            font-family: 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-weight: bold;
        }

        .button {
            margin-top: 20px;
            margin-bottom: 5px;
            margin-left: 23%;
            /* margin-right: 50%; */
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="cardItem shadow-2xl">
        <div class="gambar">
            {{-- <img src="{{ asset('img/' . $event->img) }}}" alt=""> --}}
            <img src="{{ asset('img/' . $event->img) }}" alt="">
        </div>
        <div class="keterangan">
            <div class="konf">
                <h1>Konfirmasi Pembayaran</h1>
            </div>
            <table>
                <tr>
                    <td>Nama </td>
                    <td>: {{ $tiket->name }}</td>
                </tr>
                <tr>
                    <td>Phone </td>
                    <td>: {{ $tiket->wa }}</td>
                </tr>
                <tr>
                    <td>Email </td>
                    <td>: {{ $tiket->email }}</td>
                </tr>
                <tr>
                    <td>Harga </td>
                    <td>: {{ $event->rp }}</td>
                </tr>
            </table>
            <div class="button">
                <button class="btn btn-secondary" id="pay-button">Konfirmasi Pembayaran</button>
            </div>

        </div>
    </div>

    <!-- TODO: gunakan yang ini untuk mode productions" -->
    <script src="https://app.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    
    <!-- TODO: Remove ".sandbox" from script src URL for production environment. Also input your client key in "data-client-key" -->
    {{-- <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script> --}}
    
    
    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function() {
            // SnapToken acquired from previous step
            snap.pay('{{ $tiket->snap_token }}', {
                // Optional
                onSuccess: function(result) {
                    window.location.href =
                        "/event/checkout/success/pay/{{ $tiket->qr_code }}/{{ $tiket->snap_token }}";
                    // /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                },
                // Optional
                onPending: function(result) {
                    /* You may add your own js here, this is just example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                },
                // Optional
                onError: function(result) {
                    /* You may add your own js here, this is just example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                }
            });
        };
    </script>
</body>

</html>
