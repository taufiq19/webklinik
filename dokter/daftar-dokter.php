<!-- Hiasan -->
<section class="sc-dokter">
</section>
<!-- Akhir Hiasan -->

<!-- Daftar Dokter -->
<section class="py-5">
    <div class="container-lg">
        <div class="row justify-content-center text-center">
            <div class="col">
                <h1 class="text-capitalize fw-bold mb-4">dokter kami</h1>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <?php
            $ambil_data = $host->query("SELECT * FROM dokter order by id_dokter DESC;");
            while ($data = $ambil_data->fetch_assoc()) {
            ?>
                <div class="col-lg-4 col-md-5 col-12">
                    <div class="gmbr-dr">
                        <img src="image/dokter/<?php echo $data['gambar'] ?>"  class="img-dr img-fluid mb-3" data-tilt alt="Gambar Dokter">
                        <h4 class="text-capitalize fw-bold"><?php echo $data['nama'] ?></h4>
                        <h6 class="text-capitalize text-danger"><?php echo $data['jabatan'] ?></h6>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- Akhir Daftar Dokter -->

<!-- Float Menu -->
<div class="floating-icon">
    <a href="../layanan/daftar-online.html">
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
