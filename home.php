<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,400;0,500;1,700&display=swap"
        rel="stylesheet">
    <!-- BOOTSTRAP STYLE -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="isi-content">
        <div class="home-center">
            <img src="assets/uhamakasehat.png" alt="" width="150px">
            <h1>SELAMAT DATANG DI APLIKASI UHAMKA SEHAT</h1>
        </div>

        <p>ini merupakan aplikasi kesehatan berbasis website untuk menunjang sistem kesehatan Universitas Prof.
            Dr. HAMKA. pada aplikasi ini dapat melihat artikel-artikel terkait kesehatan, data pasien dan juga
            dokter yg ada di Unit kesehatan UHAMKA.</p>

        <div class="home-center pt-5">
            <h1>Galeri Foto</h1>
        </div>

        <!-- CAROUSEL START -->
        <div id="carouselExample" class="carousel slide container-fluid slide-img">
            <div class="carousel-inner" style="align-items: center;">
                <div class="carousel-item active">
                    <img src="assets/foto1.jpg" class="d-block w-100" alt="..." style="width: 500px; height: 300px;">
                </div>
                <div class="carousel-item">
                    <img src="assets/foto2.jpg" class="d-block w-100" alt="..." style="width: 500px; height: 300px;">
                </div>
                <div class="carousel-item">
                    <img src="assets/foto4.jpg" class="d-block w-100" alt="..." style="width: 500px; height: 300px;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- CAROUSEL END -->

        <div class="home-center pt-5">
            <h1>Vidio Tentang Kesehatan</h1>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/jkS6glRPD_o"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>

    </div>

    <!-- SCRIPT JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

    <!-- SCRIPT BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>