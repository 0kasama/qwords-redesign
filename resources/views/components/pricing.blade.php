<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div data-aos="fade-up" data-aos-once="true" data-aos-easing="ease-in-out" id="pricing" class="flex flex-col m-10 justify-center items-center gap-5">
        <h1 class="font-extrabold text-5xl text-center">Cloud Hosting Indonesia <span class="text-primary">Diskon
                Hingga 50%</span></h1>
        <p class="text-center">Layanan cloud hosting indonesia terbaik dengan teknologi andal untuk website anda</p>
        <div class="flex flex-wrap justify-center items-center mt-5 gap-5">
            @foreach ($pricing as $pricing)
                <div data-aos="flip-up" data-aos-duration="1000" data-aos-delay="{{ $loop->iteration * 100}}" data-aos-once="true" data-aos-easing="ease-in-out" class="card bg-secondary w-96 shadow-xl divide-y border border-slate-200">
                    <div class="flex flex-col p-5 justify-center items-center text-center">
                        <h2 class="text-3xl font-extrabold">{{ $pricing['title'] }}</h2>
                        <p>{{ $pricing['detail'] }}</p>
                        <div class="flex flex-row justify-center items-center gap-2">
                            <s class="text-red-600 text-sm font-light">{{ $pricing['price'] }}</s>
                            <p class="text-lg font-extrabold">{{ $pricing['discount'] }}</p>
                        </div>
                    </div>
                    <div class="grid grid-rows-2 divide-y">
                        <div class="grid grid-cols-2 text-center divide-x">
                            <div class="flex flex-col py-2">
                                <p>Disk</p>
                                <p class="text-lg font-extrabold text-primary">{{ $pricing['disk'] }}</p>
                            </div>
                            <div class="flex flex-col py-2">
                                <p>Bandwidth</p>
                                <p class="text-lg font-extrabold text-primary">{{ $pricing['bandwidth'] }}</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 text-center divide-x">
                            <div class="flex flex-col py-2">
                                <p>Core CPU</p>
                                <p class="text-lg font-extrabold text-primary">{{ $pricing['core'] }}</p>
                            </div>
                            <div class="flex flex-col py-2">
                                <p>Addon</p>
                                <p class="text-lg font-extrabold text-primary">{{ $pricing['addon'] }}</p>
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
