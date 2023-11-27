<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('style/landing.css') }}">
    <link rel="stylesheet" href="{{ asset('style/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('style/footer.css') }}">
    <title>WDJK | Landingpage</title>
</head>
<body>
    <header class="container mt-5">
        @include('layouts.landing.navbar')
    </header>
    <section class="container">
        <div class="container">
            <div class="row">
                <div class="col-6 homeLeft mt-4">
                    <span class="title">
                        <span class="accent">Langkah</span> Gaya, Kebanggaan <span class="accent"> Lokal</span>.
                    </span>
                    <div class="mt-4">
                        {{-- Kami mengundang Anda untuk mengikuti langkah gaya baru dengan koleksi sepatu lokal terbaik. --}}
                        Kami mempersembahkan koleksi sepatu lokal terbaik, tidak hanya mencerminkan tren terkini, tetapi juga menjadi simbol kebanggaan akan warisan dan kreativitas lokal.
                    </div>
                    <div class="d-grid gap-1 d-md-block mt-4">
                        <button class="btn homeButton me-3" type="button">Explore</button>
                        <button class="btn homeButton2" type="button">Contact Us</button>
                    </div>
                </div>
                <div class="col-6 mt-4">
                    <img src="{{ asset('img/home4.png') }}" alt="" class="img-fluid homeRight" style="max-width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </section>
    <section class="container mt-5" id="aboutUs">
        <div class="container">
            <div class="row">
                <div class="col justify-content-center d-flex">
                    <img src="{{ asset('img/about1.png') }}" class="w-50" alt="">
                </div>
                <div class="col justify-content-center d-flex">
                    <img src="{{ asset('img/about2.png') }}" class="w-50" alt="">
                </div>
                <div class="col justify-content-center d-flex">
                    <img src="{{ asset('img/about3.png') }}" class="w-50" alt="">
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="row align-items-center">
                <div class="col-6">
                    <img src="{{ asset('img/home5.jpg') }}" alt="" class="w-100 homeLeft2">
                </div>
                <div class="col-6">
                    <div class="homeRight2">
                        Setiap produk merupakan hasil dari dedikasi pengrajin yang menggabungkan tradisi dengan desain modern. Anda tidak hanya mendapatkan sepatu berkualitas, tetapi juga menjadi bagian dari gerakan mendukung pertumbuhan industri sepatu lokal.
                    </div>
                    <div class="mt-4">
                        <button class="btn homeButton" type="button">Explore</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="container mt-5">
        <hr>
        @include('layouts.landing.footer')
    </footer>
</body>
</html>