<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div data-aos="fade-up" data-aos-once="true" data-aos-easing="ease-in-out" class="bg-secondary flex flex-col justify-center items-center gap-5 m-20 p-20 w-full">
        <h1 class="font-extrabold text-center text-5xl">Lihat Juga Layanan Kami Yang Lain</h1>
        <p class="text-center">Optimalkan performa website bisnis Anda dengan berbagai layanan berkualitas dari Qwords</p>
        <div class="flex flex-row flex-wrap justify-center items-center gap-5 mt-10">
            @foreach ($otherService as $service)
                <div data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="{{ $loop->iteration * 100}}" data-aos-once="true" data-aos-easing="ease-in-out"
                    class="card overflow-hidden hover:scale-105 active:scale-95 transition-all ease-in-out duration-300 bg-base-100 w-96 shadow-xl border border-slate-200 gap-5">
                    <div class="flex flex-col justify-center items-center text-center">
                        <div class="flex justify-center items-center bg-primary text-white w-full h-20">
                            <h2 class="text-3xl font-extrabold">{{ $service['title'] }}</h2>
                        </div>
                        <div class="h-96">
                            <img src="{{ $service['img'] }}">
                        </div>
                        <div class="px-5">
                            <p>{{ $service['detail'] }}</p>
                        </div>
                        <div class="mt-5">
                            <p>Harga Mulai</p>
                            <div class="flex flex-row justify-center items-center gap-2">
                                <p class="text-primary text-2xl font-extrabold">{{ $service['price'] }}<span
                                        class="text-black text-sm font-normal"> / {{ $service['duration'] }}</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="p-5 flex justify-center items-center">
                        <a role="button" class="btn btn-primary text-white w-3/4">Pesan Sekarang</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
