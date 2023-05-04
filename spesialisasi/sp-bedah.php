<?php
$ambil_data = $host->query("SELECT * FROM jadwal_dokter JOIN dokter ON jadwal_dokter.id_dokter = dokter.id_dokter WHERE jabatan = 'Dokter Spesialis Bedah' order by id_jadwal DESC;");
$ambil_data2 = $host->query("SELECT * FROM jadwal_dokter JOIN dokter ON jadwal_dokter.id_dokter = dokter.id_dokter WHERE jabatan = 'Dokter Spesialis Bedah' order by id_jadwal DESC;");

?>
<!-- Banner Spesialis Bedah -->
<section class="banner-spesialis">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item c-i active">
                <img src="image/banner/bedah.jpg" class="d-block w-100" alt="Banner Spesialisasi">
                <div class="carousel-caption d-flex justify-content-center">
                    <div class="bks-spesialis">
                        <div class="box-s-pd py-4 px-4 lh-base bg-gradient rounded-3 d-none d-sm-block">
                            <h1>Klinik</h1>
                            <h2 class="mb-4">Bedah</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque perferendis
                                dignissimos
                                deserunt ad doloremque voluptate adipisci reprehenderit facere atque sapiente!</p>
                        </div>
                    </div>
                    <div class="carousel-caption cc-hp d-flex justify-content-center">
                        <div class="bks-spesialis">
                            <div class="box-sm py-3 px-3 rounded-2 d-xl-none d-md-none d-sm-none">
                                <h4 class="mb-1">Klinik</h4>
                                <h4>Bedah</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Banner Spesialis Bedah -->

<!-- Keluhan Penyakit -->
<section class="sc-keluhan-penyakit py-5">
    <div class="container-lg">
        <div class="row text-center">
            <div class="col">
                <h1 class="fw-bold text-capitalize mb-4">Keluhan Penyakit</h1>
            </div>
        </div>
        <div class="row justify-content-center px-2 text-center">
            <div class="px-2 col-lg-4 col-md-7 col-12">
                <div class="crd-spesialis p-4 bg-gradient rounded-3 shadow">
                    <img class="img-keluhan img-fluid mb-3 rounded-2" src="image/spesialis/pd/gm1.jpg" alt="Gambar Keluhan Penyakit">
                    <h4 class="mb-2 fw-bold text-capitalize text-start">Penyakit Karena Infeksi Tropik</h5>
                        <p class="fw-lighter text-capitalize txt-acd-fasilitas">Lorem ipsum, dolor sit amet
                            consectetur
                            adipisicing elit. Ea amet odit, at labore cum error ab perferendis architecto, id eum
                            dolore!
                            Aliquid dolorum eligendi eaque ullam dolor commodi expedita quidem quaerat repudiandae
                            nostrum?
                            Voluptate modi magni voluptates exercitationem magnam quaerat.</p>
                </div>
            </div>
            <div class="px-2 col-lg-4 col-md-7 col-12">
                <div class="crd-spesialis p-4 bg-gradient rounded-3 shadow">
                    <img class="img-keluhan img-fluid mb-3 rounded-2" src="image/spesialis/pd/gm1.jpg" alt="Gambar Keluhan Penyakit">
                    <h4 class="mb-2 fw-bold text-capitalize text-start">Penyakit Karena Infeksi Tropik</h5>
                        <p class="fw-lighter text-capitalize txt-acd-fasilitas">Lorem ipsum, dolor sit amet
                            consectetur
                            adipisicing elit. Ea amet odit, at labore cum error ab perferendis architecto, id eum
                            dolore!
                            Aliquid dolorum eligendi eaque ullam dolor commodi expedita quidem quaerat repudiandae
                            nostrum?
                            Voluptate modi magni voluptates exercitationem magnam quaerat.</p>
                </div>
            </div>
            <div class="px-2 col-lg-4 col-md-7 col-12">
                <div class="crd-spesialis p-4 bg-gradient rounded-3 shadow">
                    <img class="img-keluhan img-fluid mb-3 rounded-2" src="image/spesialis/pd/gm1.jpg" alt="Gambar Keluhan Penyakit">
                    <h4 class="mb-2 fw-bold text-capitalize text-start">Penyakit Karena Infeksi Tropik</h5>
                        <p class="fw-lighter text-capitalize txt-acd-fasilitas">Lorem ipsum, dolor sit amet
                            consectetur
                            adipisicing elit. Ea amet odit, at labore cum error ab perferendis architecto, id eum
                            dolore!
                            Aliquid dolorum eligendi eaque ullam dolor commodi expedita quidem quaerat repudiandae
                            nostrum?
                            Voluptate modi magni voluptates exercitationem magnam quaerat.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Keluhan Penyakit -->

<!-- Konsultasi Dokter -->
<section class="sc-konsul-dokter py-5">
    <div class="container p-4">
        <div class="row py-5 txt-konsul-dokter">
            <div class="col-lg-8 col-sm-12 p-2 mb-2">
                <h3 class="fw-semibold text-capitalize mb-3">Konsultasi Dokter Spesialis Bedah</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit quasi vero numquam! Soluta
                    similique aspernatur maiores quod possimus temporibus rerum eligendi voluptate quasi atque,
                    porro eius quaerat nam, pariatur suscipit.</p>
            </div>
            <div class="col-lg-4 col-sm-12 p-2 text-center">
                <h1 class="fw-semibold">Konsultasi</h1>
                <h2 class="fw-bold mb-3">Di Sini</h2>
                <a href="https://wa.me/628114441119">
                    <button type="button" class="btn btn-primary btn-lg text-white" data-aos="zoom-in-up" data-aos-easing="ease-out-cubic" data-aos-delay="50"><i class="bi bi-whatsapp p-2"></i>Mulai
                        Konsultasi</button>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Konsultasi Dokter -->

<!-- Jadwal Dokter -->
<section class="py-5">
    <div class="container-lg">
        <div class="row justify-content-end text-center mb-2">
            <div class="col-lg-9 d-none d-xxl-block d-xl-block d-lg-block">
                <h1 class="fw-bold text-capitalize mb-4">Jadwal Poliklinik
                </h1>
            </div>
        </div>
        <?php
        $datadokter = $ambil_data2->fetch_assoc();
        ?>
        <div class="row justify-content-center text-center">
            <div class="gmbr-dr-spesialis col-lg-3 col-12 text-center profil-dokter mb-2">
                <img src="image/dokter/<?php echo isset($datadokter['gambar']) ? $datadokter['gambar'] : '' ?>" width="200" class="shadow-sm" alt="Gambar Dokter" data-tilt>
                <h4 class="mb-2"><?php echo isset($datadokter['nama']) ? $datadokter['nama'] : 'Dokter Tidak Ditemukan' ?></h5>
                    <h5 class="text-danger"><?php echo isset($datadokter['jabatan']) ? $datadokter['jabatan'] : '' ?></h5>
            </div>
            <div class="col-lg-9 text-center d-xxl-none d-xl-none d-lg-none d-md-block d-sm-block">
                <h1 class="fw-bold text-capitalize mb-4">Jadwal Poliklinik
                </h1>
            </div>
            <div class="col-lg-9 col-md-11 col-12 tbl-spesialisasi">
                <table class="table table-bordered table-striped table-hover text-center tb-spesialisasi">
                    <thead class="table-dark fw-bold">
                        <tr>
                            <th scope="col" class="th-1">HARI</th>
                            <th scope="col" class="th-2">JAM</th>
                            <th scope="col" class="th-4">KETERANGAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($data = $ambil_data->fetch_assoc()) {
                        ?>
                            <tr>
                                <th scope="col"><?php echo $data['hari'] ?></th>
                                <th scope="col"><?php echo $data['waktu'] ?></th>
                                <th scope="col"><?php echo $data['keterangan'] ?></th>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Jadwal Dokter -->

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