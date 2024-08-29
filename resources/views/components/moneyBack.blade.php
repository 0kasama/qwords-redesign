<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="bg-secondary mb-10">
        <div class="flex lg:flex-row flex-col-reverve gap-5 justify-center items-center px-5 lg:px-32">
            <div class="w-full lg:w-2/5">
                <img src="{{ asset('assets/graphics/moneyback-amico.png') }}" alt="web builder" />
            </div>
            <div
                class="flex flex-col justify-center items-center gap-10 w-full lg:w-3/5 text-center">
                <h1 class="lg:text-7xl text-3xl font-extrabold">
                    Garansi 30 Hari <span class="text-primary">Uang Kembali</span>
                </h1>
                <p class="texl-lg">Untuk menjaga kepuasan pelanggan, kami memberikan garansi uang kembali yang berlaku hingga 30 hari setelah hosting aktif.</p>
            </div>
        </div>
    </div>
</body>

</html>
