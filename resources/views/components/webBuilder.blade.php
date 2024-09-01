<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div data-aos="fade-up" data-aos-once="true" data-aos-easing="ease-in-out" class="card web-builder-bg mx-10 mb-20">
        <div class="flex lg:flex-row flex-col gap-5 justify-center items-center p-5 lg:p-20">
            <div
                class="flex flex-col justify-center lg:items-start items-center gap-10 w-full lg:w-3/5 lg:text-left text-center text-white">
                <h1 class="lg:text-5xl lg:leading-tight text-3xl font-extrabold">
                    <span class="bg-info">Bikin website impian</span> dengan mudah disini hanya 1jutaan
                </h1>
                <p class="texl-lg text-pretty">Bikin website impian include paket hosting Indonesia terbaik hanya 1
                    jutaan Jasa pembuatan website
                    profesional untuk Perusahaan, Bisnis & UKM. Bikin Website Impian dengan mudah di sini, desain
                    website elegan dan mudah dikelola.</p>
                <button class="btn btn-lg btn-info text-white lg:text-2xl text-lg font-bold rounded-full">Lihat
                    Selengkapnya</button>
            </div>
            <div class="flex justify-center items-center w-full lg:w-2/5">
                <img src="{{ asset('assets/graphics/web-builder-bro.png') }}" width="450" alt="web builder" />
            </div>
        </div>
    </div>
</body>

</html>
