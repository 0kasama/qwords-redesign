<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <div class="flex flex-col justify-center items-center">
        <div class="px-10 hero-bg min-h-[70vh] flex lg:flex-row flex-col-reverse justify-center items-center">
            <div data-aos="fade-right" data-aos-once="true" data-aos-easing="ease-in-out" class="w-full flex flex-col justify-center items-center text-center gap-5">
                <h1 class="font-extrabold text-5xl">Cloud Hosting</h1>
                <h1 class="font-extrabold text-5xl">untuk</h1>
                <h1 class="font-extrabold text-5xl text-primary">Kesuksesan Websitemu!</h1>
                <p>Qwords menawarkan layanan Cloud Hosting yang Cepat, Aman, dan Dukungan 24 jam untuk memenuhi
                    kebutuhan
                    hosting Anda. Tersertifikasi ISO 27001 dengan Data Center Tier 3.</p>
                <a href="#pricing" role="button"
                    class="my-5 flex justify-center items-center text-white text-2xl btn btn-lg rounded-full lg:w-1/3 w-full btn-primary">Pesan
                    Sekarang</a>
            </div>
            <div data-aos="fade-left" data-aos-once="true" data-aos-easing="ease-in-out" class="w-full flex justify-center items-center"><img
                    src="{{ asset('assets/graphics/cloud-hosting-amico.png') }}" width="80%" alt="qwords logo" />
            </div>
        </div>

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
</body>

</html>
