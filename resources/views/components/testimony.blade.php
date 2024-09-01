<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="bg-secondary w-full flex flex-col py-20 m-10 justify-center items-center gap-5">
        <h1 class="font-extrabold text-5xl text-center">Apa Kata Mereka?</h1>
        <p class="text-center">Apa kata mereka yang sudah menggunakan layanan web hosting Indonesia dari Qwords? Simak
            pengalaman mereka yang telah membuktikan sendiri fitur dari layanan kami.</p>
        <div class="flex justify-center items-start mt-5 gap-5">
            @foreach ($testimony as $testimony)
                <a href="{{ $testimony['url'] }}">
                    <div
                        class="card overflow-hidden flex flex-col justify-start items-start w-[30rem] h-[26rem] shadow-xl">
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
