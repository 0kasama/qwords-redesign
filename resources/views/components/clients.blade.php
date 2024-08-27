<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-col justify-center items-center px-10">
        <h1 class="font-extrabold text-center text-5xl mb-10">Telah Dipercaya oleh 45.000+ pelanggan Aktif</h1>
        <div class="grid lg:grid-cols-6 grid-cols-3 justify-between items-center gap-10">
            <img src="{{ asset('assets/clients/cimory.webp') }}" alt="clients logo" />
            <img src="{{ asset('assets/clients/forisa.webp') }}" alt="clients logo" />
            <img src="{{ asset('assets/clients/elsheskin.webp') }}" alt="clients logo" />
            <img src="{{ asset('assets/clients/icon.webp') }}" alt="clients logo" />
            <img src="{{ asset('assets/clients/horison.webp') }}" alt="clients logo" />
            <img src="{{ asset('assets/clients/md.webp') }}" alt="clients logo" />
        </div>
    </div>
</body>

</html>
