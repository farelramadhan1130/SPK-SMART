<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="/img/logo.jpg">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/dashboard-ope.css">
    <title>Dashboard Admin</title>
</head>

<body>

    <div class="container">
        <div class="sidebar active">
            <div class="menu-btn">
                <i class="ph-bold ph-caret-left"></i>
            </div>
            <div class="head">
                <div class="logo-img">
                    <img src="/users/images/logo-warna.jpg" alt="">
                </div>
                <div class="ksp-details">
                    <p class="title">Koperasi Simpan Pinjam</p>
                    <p class="name">Wahana Arta Perdana</p>
                </div>
            </div>
            <div class="nav">
                <div class="menu">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="icon ph-bold ph-house "></i>
                                <span class="text">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                    <p class="title">Data User</p>
                    <ul>
                        <li>
                            <a href="#" class="users-link">
                                <i class="icon ph-bold ph-user"></i>
                                <span class="text">Data User</span>
                            </a>
                        </li>
                    </ul>
                    <p class="title">Master Data</p>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="icon ph-bold ph-cube"></i>
                                <span class="text">Data Kriteria</span>
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="icon ph-bold ph-cube-transparent"></i>
                                <span class="text">Data Sub Kriteria</span>
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="icon ph-bold ph-users-three"></i>
                                <span class="text">Data Alternatif</span>
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="icon ph-bold ph-chart-bar"></i>
                                <span class="text">Data Hasil Akhir</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <a href="{{ route('logout') }}">
                            <i class="icon ph-bold ph-sign-out"></i>
                            <span class="text">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
        integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
        crossorigin="anonymous"></script>
    <script src="js/dashboard-ope.js"></script>
    <script src="fontawesome/js/all.min.js"></script>

</body>

</html>
