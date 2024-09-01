<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div data-aos="fade-up" data-aos-once="true" data-aos-easing="ease-in-out"
        class="flex flex-col w-full m-10 justify-center items-center gap-5 overflow-hidden">
        <h1 class="font-extrabold text-5xl text-center">Solusi Paket Hosting Terbaik dari Kami</h1>
        <p class="text-center">Kami menawarkan solusi paket hosting terbaik untuk segala kebutuhan website dan sistem
            Anda. Mulai dari blog hingga website bisnis dan perusahaan</p>
        <div class="solution-card flex justify-center items-center mt-5 gap-5">
            @foreach ($solution as $solution)
                <a href="{{ $solution['url'] }}">
                    <div
                        class="card flex flex-col justify-center items-center solution-bg w-[30rem] h-40 shadow-xl text-white">
                        <div class="flex flex-col p-5 justify-start items-center text-center text-pretty gap-2">
                            <h2 class="text-2xl underline font-extrabold">{{ $solution['title'] }}</h2>
                            <p class="text-lg font-semibold">{{ $solution['detail'] }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</body>

</html>
