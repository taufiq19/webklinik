<?php
$data = $host->query("SELECT * FROM produk WHERE id_produk=$_GET[id]");
$produk = mysqli_fetch_assoc($data);
?>

<!-- Hiasan -->
<section class="sc-layanan">
</section>
<!-- Akhir Hiasan -->

<!-- Judul Layanan -->
<div class="container">
    <div class="row text-center justify-content-center">
        <div class="col-lg-6 col-10 col-md-8">
            <div class="crd-titel">
                <h1 class="text-capitalize fw-bold">sitti khadijah</h1>
                <h2 class="text-capitalize fw-bold">Apotik</h2>
                <h5 class="text-uppercase">Apotik Klinik Sitti Khadijah</h5>
                <h5 class="text-uppercase">di kota parepare</h5>
                <h6 class="text-capitalize">jl. pettana rajeng no. 5 kota parepare</h6>
                <h6 class="text-capitalize">telp : (0421)</h6>
                <h6 class="text-capitalize">whatsapp : 089654311976</h6>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Judul Layanan -->

<!-- Penjelasan Obat -->
<section class="mt-5 py-5">
    <div class="container-lg pj-obat">
        <div class="row text-center justify-content-center">
            <div class="col-lg-3 col-md-3 col-11">
                <h4 class="text-capitalize fw-bold mb-3"><?php echo $produk['nama_produk'] ?></h4>

                <div class="crd-penjelasan-obat position-relative mb-3">
                    <img src="image/banner/anak.jpg" class="img-penjelasan-obat img-fluid" alt="">
                    <div class="lens d-none d-lg-block d-xl-block d-xxl-block"></div>
                    <div class="result d-none d-lg-block d-xl-block d-xxl-block"></div>
                </div>

                <div class="ket-pen-obat mb-5">
                    <h5 class="text-capitalize mb-2">Rp<b><?php echo number_format($produk['harga'], 2, ',', '.'); ?></b></h5>
                    <button type="button" class="btn btn-primary fw-semibold text-white col-12" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-bag"></i>
                        Beli</button>
                </div>

                <div class="att-obat">
                    <h6 class="text-uppercase fw-bold mb-3">perhatian !</h6>
                    <p class="text-uppercase lh-base">Foto dapat berbeda dengan kemasan terbaru. Foto tiap produk
                        akan
                        kami
                        pantau dan perbarui. Harga dapat berbeda dengan di apotek.</p>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 text-start py-5">
                <h6 class="text-capitalize fw-bold mb-2">deskripsi</h6>
                <p class="mb-4"><?php echo $produk['deskripsi'] ?></p>

                <h6 class="text-capitalize fw-bold mb-2">komposisi</h6>
                <p class="mb-4"><?php echo $produk['komposisi'] ?></p>

                <h6 class="text-capitalize fw-bold mb-2">kemasan</h6>
                <p class="mb-4"><?php echo $produk['kemasan'] ?></p>

                <h6 class="text-capitalize fw-bold mb-2">indikasi/manfaat/kegunaan</h6>
                <p class="mb-4"><?php echo $produk['manfaat'] ?></p>

                <!-- <h6 class="text-capitalize fw-bold mb-2">sub kategori</h6>
                <p class="mb-4"><?php echo $produk['deskripsi'] ?></p> -->

                <h6 class="text-capitalize fw-bold mb-2">dosis</h6>
                <p class="mb-4"><?php echo $produk['dosis'] ?></p>

                <h6 class="text-capitalize fw-bold mb-2">penyajian</h6>
                <p class="mb-4"><?php echo $produk['penyajian'] ?></p>

                <h6 class="text-capitalize fw-bold mb-2">nama standar MIMS</h6>
                <p class="mb-4"><?php echo $produk['mims'] ?></p>

                <h6 class="text-capitalize fw-bold mb-2">nomor izin edar</h6>
                <p class="mb-4"><?php echo $produk['izin_edar'] ?></p>

                <h6 class="text-capitalize fw-bold mb-2">golongan obat</h6>
                <p class="mb-4"><?php echo $produk['golongan_obat'] ?></p>

                <h6 class="text-capitalize fw-bold mb-2">keterangan</h6>
                <p class=""><?php echo $produk['ket'] ?></p>

            </div>
        </div>
    </div>
</section>
<!-- Akhir Penjelasan Obat -->

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
                        <img src="image/hub kami/callcenter.jpg" class="card-img img-ukuran rounded-0 shadow" alt="Gambar Call Center">
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
                        <img src="image/hub kami/whatsapp.jpg" class="card-img img-ukuran rounded-0 shadow" alt="Gambar Call Center">
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

<!-- Footer -->
<footer class="bg-ft align-items-center py-3">
    <div class="card-footer text-muted text-center">
        <a class="pe-4 fs-4" href="tel:0421-21313"><i class="bi bi-telephone"></i></a>
        <a class="pe-4 fs-4" href="Https://t.me/klinikstkhadijahpare"><i class="bi bi-telegram"></i></a>
        <a class="pe-4 fs-4" href="https://wa.me/6285256953133"><i class="bi bi-whatsapp"></i></a>
    </div>
</footer>
<!-- Akhir Footer -->

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

<!-- AOS -->
<!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> -->
<script src="../node_modules/aos/dist/aos.js"></script>
<!-- GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/TextPlugin.min.js"></script>
<!-- Javascript -->
<script src="../node_modules/bootstrap/js_saya/script.js"></script>
<!-- <script src="../node_modules/bootstrap/js_saya/zoomimage.js"></script> -->
<!-- Bootstrap -->
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script src="../node_modules/bootstrap/dist/css/bootstrap.css"></script>
<!-- Tilt Js -->
<script type="text/javascript" src="vanilla/vanilla-tilt.js"></script>

</body>

</html>