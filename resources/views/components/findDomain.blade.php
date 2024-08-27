<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-col w-full min-h-72 p-10 mt-10 bg-secondary justify-center items-center">
        <h1 class="font-extrabold text-5xl text-center m-5">Cari Nama Domainmu</h1>
        <p class="text-center">Nama Domain digunakan untuk mempermudah pengunjung menuju ke situs Anda. Pilih nama domain
            yang paling mencerminkan bisnis, produk, atau layanan Anda.</p>
        <div class="flex flex-col lg:flex-row w-full lg:w-2/3 justify-center items-center gap-5 m-10">
            <input type="text" placeholder="Cari nama domain Anda" class="input input-bordered lg:w-3/4 w-full" />
            <button class="btn btn-primary text-white lg:w-1/4 w-full">Cek Domain</button>
        </div>
        <div class="flex flex-wrap justify-center items-center gap-5">
            <button class="w-40 h-40 flex flex-col btn btn-line gap-2">
                <h1 class="text-3xl font-extrabold">.com</h1>
                <s class="text-sm font-light">Rp 100.000</s>
                <p class="text-xl">Rp 50.000</p>
            </button>
            <button class="w-40 h-40 flex flex-col btn btn-line gap-2">
                <h1 class="text-3xl font-extrabold">.id</h1>
                <s class="text-sm font-light">Rp 100.000</s>
                <p class="text-xl">Rp 50.000</p>
            </button>
            <button class="w-40 h-40 flex flex-col btn btn-line gap-2">
                <h1 class="text-3xl font-extrabold">.info</h1>
                <s class="text-sm font-light">Rp 100.000</s>
                <p class="text-xl">Rp 50.000</p>
            </button>

        </div>
    </div>
</body>

</html>
