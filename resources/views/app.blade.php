<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite('resources/js/app.jsx')
    @inertiaHead
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/react.css') }}">
    <title>React-Inertia</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <html data-theme="retro"></html>
</head>

<body>
    @inertia
</body>

</html>
