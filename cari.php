<?php

$sappa = $_GET['sappa'];

?>

<!-- Hasil Pencarian -->
<section class="py-5">
    <div class="container-lg konten-isi-pencarian">
        <div class="row">
            <div class="col">
                <h3 class="text-capitalize">Hasil dari pencarian: *<?php echo $sappa  ?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <hr>
            </div>
        </div>
        <?php
        $no = 1;
        $ambil_data2 = $host->query("select * from berita join admin on berita.id_admin = admin.id_admin WHERE judul_artikel like '%" . $sappa . "%' ORDER BY tanggal DESC LIMIT 3 "); ?>
        <?php
        if (mysqli_num_rows($ambil_data2) == 0) {
        ?>
            <div class="isi-pencairan">
                <div class="side-satu d-flex justify-content-center">
                    <h5 class=" fw-bold mb-3">Data Tidak Ditemukan</h5>

                </div>

            </div>
            <div class="row">
                <div class="col">
                    <hr>
                </div>
            </div>
            <?php
        } else {
            while ($data2 = $ambil_data2->fetch_assoc()) {
            ?>
                <div class="isi-pencairan">
                    <div class="side-satu">
                        <h5 class="fw-bold mb-3"><?php echo $data2['judul_artikel'] ?></h5>
                        <p class="text-justify">
                            <?php
                            echo (str_word_count($data2['isiberita']) > 200 ? substr($data2['isiberita'], 0, 300) . " [...] " : $data2['isiberita']);
                            ?>
                        </p>
                    </div>
                    <div class="side-dua text-start">
                        <img src="gambar-artikel/<?php echo $data2['gambar'] ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <hr>
                    </div>
                </div>
        <?php }
        } ?>
        <!-- <div class="isi-pencairan-2">
            <div class="side-tiga">
                <h5 class="fw-bold mb-3">Judul Artikel</h5>
                <h6 class="text-isi-pencarian">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet
                    voluptate unde explicabo ducimus cumque natus. Rem sequi delectus praesentium! Asperiores
                    accusamus incidunt ex ratione. Nisi perferendis repudiandae tempora inventore itaque, voluptas
                    similique consectetur debitis consequuntur?
                </h6>
            </div>
            <div class="side-empat text-start">
                <img src="image/alur-pelayanan/2303290727301 (15).jpg" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <hr>
            </div>
        </div> -->

        <!-- <div class="row align-content-center">
                <div class="col-lg-6 col-md-12 col-sm-12 text-start keterangan-isi-pencarian">
                    <h5 class="fw-bold mb-3">Judul Artikel</h5>
                    <h6 class="text-isi-pencarian">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet
                        voluptate unde explicabo ducimus cumque natus. Rem sequi delectus praesentium! Asperiores
                        accusamus incidunt ex ratione. Nisi perferendis repudiandae tempora inventore itaque, voluptas
                        similique consectetur debitis consequuntur?
                    </h6>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                    <img src="image/alur-pelayanan/2303290727301 (15).jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <hr>
                </div>
            </div> -->
    </div>
    </div>
</section>
<!-- Akhir Hasil Pencarian -->


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