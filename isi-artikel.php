<!-- Akhir Navbar bagian 2-->
<?php
include 'admin/koneksi/konek.php';
$data = $host->query("SELECT * from berita join admin on berita.id_admin = admin.id_admin where id_berita=$_GET[id]");
$d = mysqli_fetch_assoc($data);
?>


<!-- Isi Artikel -->
<section class="sc-artikel">
    <div class="container-lg">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12 col-md-8">

                <h4 class="text-capitalize mt-3" data-aos="fade-right" data-aos-delay="100" data-aos-duration="500">
                    <?php
                    echo $d['jenis_spesialis'];
                    ?>
                </h4>
                <h1 class="fw-bold text-capitalize mb-2" data-aos="fade-right" data-aos-delay="300" data-aos-duration="500">
                    <?php
                    echo $d['judul_artikel'];
                    ?>
                </h1>

                <img src="gambar-artikel/<?php echo $d['gambar']; ?>" class="crd-img-artikel-lanjutan img-fluid mb-1" alt="Gambar-Artikel" data-aos="fade-up" data-aos-delay="700" data-aos-duration="500">

                <p class="txt-artikel-lanjutan lh-base isi-artikel mb-5">
                    <?php
                    echo $d['isiberita'];
                    ?>
                </p>

                <hr style="color: #bfbfbf;">
                <h6 class="sumber-art  fw-light fst-italic mb-5" data-aos="fade-right" data-aos-delay="400" data-aos-duration="500">
                    post by
                    <b class="text-capitalize fw-bold">
                        <?php
                        echo $d['nama'];
                        ?>
                    </b>
                </h6>
            </div>

            <div class="kolom-artikel col-lg-4 col-12 col-md-4">
                <hr>
                <h4 class="text-capitalize fw-bold">baca artikel lainnya</h4>
                <hr class="mb-4">
                <?php
                $no = 1;
                $ambil_data2 = $host->query("select * from berita join admin on berita.id_admin = admin.id_admin ORDER BY tanggal DESC LIMIT 3 "); ?>
                <?php while ($data2 = $ambil_data2->fetch_assoc()) {

                ?>

                    <div class="card-artikel p-2" data-aos="fade-left">
                        <img src="gambar-artikel/<?php echo $data2['gambar'];  ?>" class="crd-img-artikel mb-3" alt="">
                        <a class="judul-artikel text-decoration-none" href="">
                            <h3 class="fw-bold text-capitalize mb-1 text-start">judul artikel</h3>
                        </a>
                        <p class="lh-base mb-2">
                            <?php
                            echo (str_word_count($data2['isiberita']) > 200 ? substr($data2['isiberita'], 0, 250) . " [...] " : $data2['isiberita']);
                            ?>
                        </p>
                    </div>

                <?php } ?>

            </div>
        </div>
    </div>
</section>
<!-- Akhir Isi Artikel -->

<!-- Konsultasi -->
<section class="sc-artikel-konsul">
    <div class="container-lg p-4">
        <div class="row p-5 txt-konsul-dokter">
            <div class="col-lg-8 col-sm-12 p-2 mb-2">
                <h3 class="fw-semibold mb-3">Mulai Konsultasi</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit quasi vero numquam! Soluta
                    similique aspernatur maiores quod possimus temporibus rerum eligendi voluptate quasi atque,
                    porro eius quaerat nam, pariatur suscipit.</p>
            </div>
            <div class="col-lg-4 col-sm-12 p-2 text-center">
                <h1 class="fw-semibold">Konsultasi ?</h1>
                <h2 class="fw-bold mb-3">Klik Di Sini</h2>
                <button type="button" class="btn btn-konsul btn-lg text-white" data-aos="zoom-in-up" data-aos-easing="ease-out-cubic" data-aos-delay="50"><i class="bi bi-whatsapp p-2"></i>Mulai
                    Konsultasi</button>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Konsultasi -->

<!-- Float Menu -->
<div class="floating-icon">
    <a href="https://play.google.com/store/apps/details?id=app.bpjs.mobile&gl=US">
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

<!-- Hub Kami -->
<section class="bg-sc py-5">
    <div class="container-lg">
        <div class="row justify-content-center ">
            <div class="row">
                <div class="col">
                    <h1 class="fw-bold text-capitalize text-center mb-4">Hubungi Kami</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 my-2" data-aos="zoom-in-down" data-aos-duration="1000">
                <a href="tel:0421-21313">
                    <div class="card crd-hub hub-gerak bg-cs border-0">
                        <img src="../image/hub kami/callcenter.jpg" class="card-img img-ukuran rounded-0 shadow" alt="Gambar Call Center">
                        <div class="card-img-overlay pt-hub text-hub txt-ctc txt-sd">
                            <h2 class="card-title fw-semibold fs-4">Klik Disini Untuk Telepon !</h5>
                                <h1 class="fw-semibold fs-1">(0421) 21313</h1>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-12 my-2" data-aos="zoom-in-down" data-aos-duration="1000">
                <a href="https://wa.me/6285256953133">
                    <div class="card crd-hub hub-gerak bg-wa border-0">
                        <img src="../image/hub kami/whatsapp.jpg" class="card-img img-ukuran rounded-0 shadow" alt="Gambar Call Center">
                        <div class=" card-img-overlay pt-hub text-hub txt-ctc txt-sd">
                            <h2 class="card-title fw-semibold bg-txt fs-4">Klik Disini Untuk Whatsapp !</h5>
                                <h1 class="fw-semibold fs-1">+6285256953133</h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <hr>
        <div class="row text-center">
            <div class="col-md-4 my-2">
                <h4 class="fw-bold">KU-ST KHADIJAH</h4>
                <br>
                <br>
                <h6>Jl. Pettana Rajeng No.5</h6>
                <br>
                <h6>Telp (0421) 21313</h6>
                <br>
                <h6>Email : st.khadijahpare2@gmail.com</h6>
                <br>
                <h6 class="mb-4">Kota Parepare</h6>
            </div>
            <div class="col-md-4 my-2">
                <h4 class="fw-bold">JAM OPERASIONAL KLINIK</h4>
                <br>
                <br>
                <h6>Senin (08.00 - 18.00)</h6>
                <br>
                <h6>Selasa (08.00 - 18.00)</h6>
                <br>
                <h6>Rabu (08.00 - 18.00)</h6>
                <br>
                <h6>Kamis (08.00 - 18.00)</h6>
                <br>
                <h6>Jumat (08.00 - 18.00)</h6>
                <br>
                <h6>Sabtu (08.00 - 18.00)</h6>
                <br>
                <h6 class="mb-4">Ahad & Hari Besar (Libur)</h6>
            </div>
            <div class="col-md-4 my-2">
                <h4 class="fw-bold">JAM BESUK PASIEN</h4>
                <br>
                <br>
                <h6>Pagi Hari Pukul 10.00 - 13.00 Siang</h6>
                <br>
                <h6>Sore Hari Pukul 17.00 - 21.00 Malam</h6>
                <br>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Hub Kami -->



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Perhatian !</h1>
            </div>
            <div class="modal-body">
                Coming Soon . . . . .
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Keluar</button>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Modal -->