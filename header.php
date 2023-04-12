<?php
include('admin/koneksi/konek.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="image/LOGO ST KHADIJAH.png" />
    <title>Klinik Utama Sitti Khadijah</title>
    <!-- Link Aos -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
    <link rel="stylesheet" href="node_modules/aos/dist/aos.css">
    <!-- Link Bootstrap -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css" />
    <!-- Link Css -->
    <link rel="stylesheet" href="node_modules/bootstrap/Css_Saya/stye.css" />
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- Link Bootsrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>

    <!-- Navbar bagian 1  -->
    <div class="navbar navbar-expand-lg d-none d-xxl-block d-xl-block d-lg-block d-md-block" id="navbar-header">
        <div class="container">
            <div class="collapse navbar-collapse justify-content-between">
                <!-- <img class="img-logo-klinik" src="image/LOGO ST KHADIJAH.png" alt="Logo Klinik" data-tilt> -->
                <div></div>
                <form class="d-flex" role="search">
                    <input class="form-control form-control-search bg-light shadow-sm" type="search" placeholder="Masukkan Kata Kunci" aria-label="Search">
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active pe-3" aria-current="page" href="https://instagram.com/k.u.aisyiyahsittikhadijah?igshid=MWM2YjBjM2Q=">
                            <img src="node_modules/bootstrap-icons/icons/instagram.svg" style="width: 15px;" alt="Icon-Instagram"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active pe-3" aria-current="page" href="https://www.facebook.com/profile.php?id=100081070261855&mibextid=ZbWKwL">
                            <img src="node_modules/bootstrap-icons/icons/facebook.svg" style="width: 15px;" alt="Icon-Facebook"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="https://wa.me/628114441119">
                            <img src="node_modules/bootstrap-icons/icons/whatsapp.svg" style="width: 15px;" alt="Icon-Whatsapp"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    <!-- Akhir Navbar bagian 1 -->

    <nav class="navbar navbar-expand-lg align-items-center shadow-sm bg-trasnparent sticky-top" id="navbar-2">
        <div class="container-lg cn-navbar-2 align-content-center">
            <div class="navbar-brand img-logo-brand " href="index.php">
                <img src="image/alogo.png" class="img-fluid" alt="">
                <!-- <h2 class="title-navbar-klinik navbar2 border">Klinik Utama</h2>
                <h3 class="title-navbar-sitti navbar2">Sitti Khadijah</h3> -->
            </div>
            <button class="navbar-toggler btn-tgl" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" ria-labelledby="offcanvasNavbarLabel" id="navbarNav">
                <div class="offcanvas-header shadow-sm">
                    <h5 class="offcanvas-title underline-text" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body txt-navbar-2 text-muted">
                    <ul class="navbar-nav justify-content-end flex-grow-1 mg-tgl">
                        <li class="nav-item mg-navbar mb-3 px-2">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item mg-navbar mb-3 px-2">
                            <a class="nav-link" href="index.php?halaman=fasilitas">Fasilitas</a>
                        </li>
                        <li class="nav-item dropdown mb-3 px-2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dokter
                            </a>
                            <ul class="dropdown-menu border-0 shadow txt-navbar-2">
                                <li><a class="dropdown-item mb-3" href="index.php?halaman=dokter">Daftar Dokter</a>
                                </li>
                                <li><a class="dropdown-item" href="index.php?halaman=jadwal-dokter">Jadwal Dokter</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown mb-3 px-2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Spesialisasi
                            </a>
                            <ul class="dropdown-menu border-0 shadow txt-navbar-2">
                                <li><a class="dropdown-item mb-3" href="spesialisasi/spesialis-penyakit-dalam.html">Klinik Penyakit
                                        Dalam</a></li>
                                <li><a class="dropdown-item mb-3" href="spesialisasi/spesialis-bedah.html">Klinik Bedah</a></li>
                                <li><a class="dropdown-item mb-3" href="spesialisasi/spesialis-anak.html">Klinik Anak</a></li>
                                <li><a class="dropdown-item" href="spesialisasi/spesialis-obgyn.html">Klinik Obgyn</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown mb-3 px-2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Layanan
                            </a>
                            <ul class="dropdown-menu border-0 shadow txt-navbar-2">
                                <li><a class="dropdown-item mb-3" href="index.php?halaman=jadwal-dokter">Apotik</a></li>
                                <li><a class="dropdown-item mb-3" href="layanan/lab.html">Laboratorium</a></li>
                                <li><a class="dropdown-item mb-3" href="layanan/daftar-online.html">Pendaftaran Online</a>
                                </li>
                                <li><a class="dropdown-item" href="layanan/mcu-umum.html">Medical Check Up Umum</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown mb-3 px-2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tentang
                            </a>
                            <ul class="dropdown-menu border-0 shadow txt-navbar-2">
                                <li><a class="dropdown-item mb-3" href="tentang/hubungi-kami.html">Hubungi Kami</a></li>
                                <li><a class="dropdown-item mb-3" href="tentang/profil-klinik.html">Profil Klinik</a></li>
                                <li><a class="dropdown-item" href="tentang/alur-klinik.html">Alur Klinik</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>