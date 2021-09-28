<?php
// diketahui :
define('PHI', 3.14);
define('SETENGAH', 0.5);

// 1. Menghitung Luas Persegi
//      Rumus Luas Persegi = (sisi * sisi)
$sisi = 10;
$luas_persegi = $sisi * $sisi;

// 2.Menghitung Luas Segitiga 
//      Rumus Luas Segitiga = (1/2 * alas * tinggi)
$alas = 10;
$tinggi = 5;
$luas_segitiga = (SETENGAH * $alas * $tinggi);

// 3. Menghitung Luas Trapesium
//      Rumus Luas Trapesium = (1/2 * (sisi1 + sisi2) * tinggi)
$sisi1 = 10;
$sisi2 = 8;
$tinggi = 5;
$luas_trapesium = (SETENGAH * ($sisi1 + $sisi2) * $tinggi);

// 4. Menghitung Luas Permukaan Tabung
//      Rumus Luas Permukaan Tabung = (2 * phi * r * (r + t))
$jari2 = 10;
$tinggi = 10;
$luas_permukaan_tabung = (2 * PHI * $jari2 * ($jari2 + $tinggi));

// 5. Menghitung Luas Permukaan Lingkaran
//      Rumus Luas Permukaan Lingkaran = ( 4 * phi * r * r)
$jari2 = 15;
$luas_permukaan_lingkaran = (4 * PHI * $jari2 * $jari2);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>

    <!-- bootstrap css online -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


    <!-- bootstrap icon online -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
            <div class="container-fluid">

                <!-- navbar brand -->
                <a href="#" class="navbar-brand" JongKoding>
                    <img src="image/logo-BangunDatar.png">
                </a>

                <!-- navbar toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- navbar collapse -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profile
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Login</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Register</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <div id="fitur" class="py-4">
        <div class="container">
            <div class="row">
                <div class="col col-12 py-3">
                    <div class="card text-center py-2">
                        <div class="card-body">
                            <h3 class="card-title">Perhitungan Luas Bangun Datar dan Bangun Ruang</h3>
                        </div>
                    </div>
                </div>
                <div class="col col-2.4 py-3">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="icon mb-4">
                                <i class="bi bi-square"></i>
                            </div>
                            <h5 class="card-title">Luas Persegi</h5>
                            <p class="card-text"><?= $luas_persegi ?> cm<sup>2</sup></p>
                        </div>
                    </div>
                </div>
                <div class="col col-2.4 py-3">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="icon mb-4">
                                <i class="bi bi-triangle"></i>
                            </div>
                            <h5 class="card-title">Luas Segitiga</h5>
                            <p class="card-text"><?= $luas_segitiga ?> cm<sup>2</sup></p>

                        </div>
                    </div>
                </div>
                <div class="col col-2.4 py-3">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="icon mb-4">
                                <img class="icon1" src="image/icon-trapesium.png" alt="">
                            </div>
                            <h5 class="card-title">Luas Trapesium</h5>
                            <p class="card-text"><?= $luas_trapesium ?> cm<sup>2</sup></p>
                        </div>
                    </div>
                </div>
                <div class="col col-2.4 py-3">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="icon mb-4">
                                <i class="bi bi-circle-fill"></i>
                            </div>
                            <h5 class="card-title">Luas Permukaan Tabung</h5>
                            <p class="card-text"><?= $luas_permukaan_tabung ?> cm<sup>2</sup></p>
                        </div>
                    </div>
                </div>
                <div class="col col-2.4 py-3">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="icon mb-4">
                                <i class="bi bi-circle"></i>
                            </div>
                            <h5 class="card-title">Luas Permukaan Lingkaran</h5>
                            <p class="card-text"><?= $luas_permukaan_lingkaran ?> cm<sup>2</sup></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


</body>

</html>