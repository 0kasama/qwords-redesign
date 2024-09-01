<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-col justify-center items-center px-10 m-5">
        <h1 class="font-extrabold text-center text-5xl mb-10">Partner Kami</h1>
        <div class="grid lg:grid-cols-5 grid-cols-3 justify-between items-center gap-10">
            <img src="{{ asset('assets/partner/google-cloud.webp') }}" alt="partner logo" />
            <img src="{{ asset('assets/partner/cpanel.webp') }}" alt="partner logo" />
            <img src="{{ asset('assets/partner/idea.webp') }}" alt="partner logo" />
            <img src="{{ asset('assets/partner/archi.webp') }}" alt="partner logo" />
            <img src="{{ asset('assets/partner/dotid.webp') }}" alt="partner logo" />
        </div>
        <a class="link link-primary font-bold mt-10">Lihat Semua Partner</a>
    </div>
</body>

</html>
