<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-col m-10 justify-center items-center gap-5">
        <h1 class="font-extrabold text-5xl text-center">Komitmen Qwords</h1>
        <p class="text-center">Berbagai alasan mengapa pelanggan memilih sewa hosting di Qwords</p>
        <div class="flex justify-center items-center mt-5 gap-5">
            @foreach ($commitment as $commitment)
                    <div class="card commitment-bg flex flex-col justify-center items-center w-[30rem] h-52 shadow-xl">
                        <div class="flex flex-col p-5 justify-start items-center text-center gap-2">
                            <h2 class="text-2xl underline font-extrabold">{{ $commitment['title'] }}</h2>
                            <p class="text-lg font-semibold">{{ $commitment['detail'] }}</p>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
</body>

</html>
