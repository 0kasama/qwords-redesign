<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div data-aos="fade-up" data-aos-once="true" data-aos-easing="ease-in-out" class="bg-secondary w-full flex flex-col py-20 m-10 justify-center items-center gap-5">
        <h1 class="font-extrabold text-5xl text-center">Apa Kata Mereka?</h1>
        <p class="text-center">Apa kata mereka yang sudah menggunakan layanan web hosting Indonesia dari Qwords? Simak
            pengalaman mereka yang telah membuktikan sendiri fitur dari layanan kami.</p>
        <div class="flex lg:flex-row flex-col justify-center items-center mt-5 gap-5">
            @foreach ($testimony as $testimony)
                <a href="{{ $testimony['url'] }}">
                    <div
                    data-aos="flip-down" data-aos-duration="1000" data-aos-delay="{{ $loop->iteration * 100}}" data-aos-once="true" data-aos-easing="ease-in-out" class="card overflow-hidden flex flex-col justify-start items-start mx-auto w-5/6 lg:w-[30rem] lg:h-[26rem] shadow-xl">
                        <div class="flex flex-row bg-primary w-full justify-start items-center p-2">
                            <div class="w-1/5 bg-white rounded-full">
                                <img src="{{ $testimony['img'] }}" alt="{{ $testimony['name'] }}">
                            </div>
                            <div class="flex flex-col p-5 justify-start items-start text-pretty gap-2">
                                <h2 class="text-2xl font-extrabold">{{ $testimony['name'] }}</h2>
                                <p class="text-lg font-semibold">{{ $testimony['role'] }}</p>
                            </div>
                        </div>
                        <div class="flex flex-col p-5 justify-start items-start text-justify gap-2">
                            <p class="text-lg font-semibold">{{ $testimony['title'] }}</p>
                            <p>{{ $testimony['detail'] }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</body>

</html>
