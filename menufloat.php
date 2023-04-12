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

<!-- Float Menu -->
<div class="floating-icon d-none d-md-block d-lg-block d-xl-block d-xxl-block">
    <a href="layanan/daftar-online.html">
        <button class="btn-melayang bm-tiga d-flex justify-content-center align-items-center">
            <span class="span-melayang text-capitalize text-white fs-6">daftar online</span>
            <i class="bi bi-phone-flip fs-2 text-white fw-bold"></i>
        </button>
    </a>

    <a data-bs-toggle="modal" data-bs-target="#exampleModal">
        <button class="btn-melayang bm-satu d-flex justify-content-center align-items-center">
            <span class="span-melayang text-capitalize text-white fs-6">ketersediaan tempat tidur</span>
            <i class="bi bi-building-check text-white fw-bold fs-2"></i>
        </button>
    </a>

    <a data-bs-toggle="modal" data-bs-target="#exampleModal">
        <button class="btn-melayang bm-dua d-flex justify-content-center align-items-center">
            <span class="span-melayang text-capitalize text-white fs-6">antrian terkini</span>
            <i class="bi bi-people text-white fw-bold fs-2"></i>
        </button>
    </a>
</div>

<div class="floating-icon2 d-block d-md-none d-lg-none d-xl-none d-xxl-none ">
    <div class="btn-float-1">
        <button class="btn-melayang2 float-1 d-flex justify-content-center align-items-center mb-1">
            <a href="layanan/daftar-online.html"><span class="isi-daftaronline text-white">DAFTAR ONLINE</span></a>
            <i class="i-float bi bi-phone-flip fs-2 text-white fw-bold"></i>
        </button>
    </div>
    <div class="btn-float-2">
        <button class="btn-melayang2 float-2 d-flex justify-content-center align-items-center mb-1">
            <a data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="isi-daftaronline2 text-white">KETERSEDIAAN TEMPAT TIDUR</span></a>
            <i class="i-float2 bi bi-building-check fs-2 text-white fw-bold"></i>
        </button>
    </div>
    <div class="btn-float-3">
        <button class="btn-melayang2 float-3 d-flex justify-content-center align-items-center mb-1">
            <a data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="isi-daftaronline3 text-white">ANTRIAN TERKINI</span></a>
            <i class="i-float3 bi bi-people fs-2 text-white fw-bold"></i>
        </button>
    </div>
</div>

<script>
    document.querySelector('.btn-float-1').addEventListener('click', function(e) {
        document.querySelector('.isi-daftaronline').classList.toggle('isi-daftaronline-aktif');
        document.querySelector('.float-1').classList.toggle('btn-melayang-aksi');
        document.querySelector('.i-float').classList.toggle('btn-melayang-i-aksi');
    });
    document.querySelector('.btn-float-2').addEventListener('click', function(e) {
        document.querySelector('.isi-daftaronline2').classList.toggle('isi-daftaronline-aktif2');
        document.querySelector('.float-2').classList.toggle('btn-melayang-aksi2');
        document.querySelector('.i-float2').classList.toggle('btn-melayang-i-aksi2');
    });
    document.querySelector('.btn-float-3').addEventListener('click', function(e) {
        document.querySelector('.isi-daftaronline3').classList.toggle('isi-daftaronline-aktif3');
        document.querySelector('.float-3').classList.toggle('btn-melayang-aksi3');
        document.querySelector('.i-float3').classList.toggle('btn-melayang-i-aksi3');
    });
</script>