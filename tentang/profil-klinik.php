<?php
$sejarah = $host->query("SELECT * FROM sejarah;");
$data_sejarah = $sejarah->fetch_assoc();
$komit = $host->query("SELECT * FROM komitmen;");
$data_komit = $komit->fetch_assoc();
$visi = $host->query("SELECT * FROM visimisi;");
$data_visi = $visi->fetch_assoc();
?>
<!-- Hiasan -->
<section class="hiasan-tentang">
</section>
<!-- Ahkhir Hiasan -->

<!-- Profil Klinik -->
<section class="py-5">
    <div class="container-lg container-profil">
        <div class="row rw-profilklinik text-center">
            <div class="col-lg-4 col-md-4 col-12 text-center">
                <img class="img-fluid img-profil" src="image/profil/profilK.jpg" alt="Gambar Profil Klinik" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
            </div>
            <div class="col-lg-8 col-md-8 col-12 col d-flex align-content-between flex-wrap cl-profilklinik garis-profil-index">
                <div>
                    <h1>Tentang Klinik</h1>
                    <h2>Klinik Utama Sitti Khadijah</h2>
                    <p class="isi-profil indentasi-profil mb-2">
                        <?php echo $data_sejarah['sejarah'] ?>
                    </p>
                </div>
                </hr>

                <h3 class="motto-profil">Ikhlas Dalam Melayani</h3>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Profil Klinik -->

<!-- Komitmen dan tujuan -->
<section class="sc-tentang-profil">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12 text-center p-5"><img src="image/LOGO ST KHADIJAH.png" width="200px" alt="Gambar Logo Klinik">
            </div>
            <div class="col-lg-8 col-sm-12 garis-tentang-profil">
                <h2 class="text-capitalize">Komitmen dan Tujuan</h2>
                <h6 class="text-capitalize lh-lg">
                    <?php echo $data_komit['isi'] ?>
                </h6>
              
            </div>
        </div>
    </div>
</section>
<!-- Akhir Komitmen dan tujuan -->

<!-- Visi Misi Klinik -->
<section class="py-5">
    <div class="container cn-visimisi">
        <div class="row">
            <div class="col-lg-10 col-md-12 col-12 garis-tentang">
                <div>
                    <h1 class="fw-bold">Visi, Misi & Motto Klinik</h1>
                    <h2>Klinik Utama Sitti Khadijah</h2>
                    <?php echo $data_visi['isi'] ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Visi Misi Klinik -->

<!-- Float Menu -->
<div class="floating-icon">
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
<!-- Akhir Float Menu -->