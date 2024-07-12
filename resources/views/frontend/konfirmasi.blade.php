<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>konfirmasi pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <html data-theme="retro">

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
    </style>

</head>


<body>
    <span class="loading loading-spinner loading-lg"></span>
    <a href="/event/checkout/{{ $qr_code }}"id="konfirmasi-button"> </a>

    <script>
        window.addEventListener('load', function() {
            document.getElementById('konfirmasi-button').click();
        });
    </script>
</body>

</html>
