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
                <h6 class="text-capitalize">telp : (0421) 21313</h6>
                <h6 class="text-capitalize">whatsapp : +628114441119</h6>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Judul Layanan -->

<!-- Informasi Apotik -->
<section class="mt-5">
    <div class="container-lg mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-9 col-sm-10">
                <div class="bks-apotik">
                    <div class="crd-apotik">
                        <div class="row text-center justify-content-center">
                            <div class="item-apotik col-lg-2 col-md-2 col-3 mx-2">
                                <div class="item-obat">
                                    <a href="#"><img src="image/apotik/medicine.png" class="gr-apotik mb-2" alt="Gambar Menu Apotik"></a>
                                    <p class="text-capitalize">Obat</p>
                                </div>
                            </div>
                            <div class="item-apotik col-lg-2 col-md-2 col-3 mx-2">
                                <div class="item-suplemen">
                                    <a href="#"><img src="image/apotik/suplements.png" class="gr-apotik mb-2" alt="Gambar Menu Apotik"></a>
                                    <p class="text-capitalize">Suplemen</p>
                                </div>
                            </div>
                            <div class="item-apotik col-lg-2 col-md-2 col-3 mx-2">
                                <div class="item-nutrisi">
                                    <a href="#"><img src="image/apotik/milk.png" class="gr-apotik mb-2" alt="Gambar Menu Apotik"></a>
                                    <p class="text-capitalize">Nutrisi</p>
                                </div>
                            </div>
                            <div class="item-apotik col-lg-2 col-md-2 col-3 mx-2">
                                <div class="item-herbal">
                                    <a href="#"><img src="image/apotik/vitamins.png" class="gr-apotik mb-2" alt="Gambar Menu Apotik"></a>
                                    <p class="text-capitalize">Herbal</p>
                                </div>
                            </div>
                            <div class="item-apotik item-2-apotik col-lg-2 col-md-2 col-3 mx-2">
                                <div class="item-alkes">
                                    <a href="#"><img src="image/apotik/stethoscope.png" class="gr-apotik mb-2" alt="Gambar Menu Apotik"></a>
                                    <p class="text-capitalize">Alkes</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Informasi Apotik -->

<!-- Obat Apotik -->
<section class="sc-obat-apotik py-5">
    <div class="container-lg">
        <div class="row text-center justify-content-center">
            <?php $ambil_data = $host->query("SELECT * FROM produk order by id_produk DESC;");
            while ($data = $ambil_data->fetch_assoc()) { ?>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="crd-dalam-obat-apotik">
                        <a href="index.php?halaman=det-produk&id=<?php echo $data['id_produk'] ?>"><img src="image/apotik/jenis-obat/contoh-obat.jpg" class="img-fluid mb-2" alt="Gambar Obat"></a>
                        <h5 class="text-capitalize mb-2"><?php echo $data['nama_produk'] ?></h5>
                        <h6 class="text-capitalize text-success mb-3">Rp<b><?php echo number_format($data['harga'], 2, ',', '.'); ?></b></h6>
                        <button type="button" class="btn btn-primary col-12 fw-semibold text-white" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-bag"></i>
                            Beli</button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- Akhir Obat Apotik -->

<!-- Pertanyaan Yang Sering Diajukan -->
<section class="py-5">
    <div class="container-lg">
        <div class="row justify-content-center rw-pertanyaan">
            <div class="col-lg-12 col-md-11 col-12">
                <h5 class="text-uppercase mb-2">apotik klinik sitti khadijah</h5>
                <h1 class="text-capitalize fw-bold">Pertanyaan</h1>
                <h2 class="text-capitalize fw-bold">yang sering diajukan</h2>
            </div>
        </div>

        <div class="row justify-content-center rw-pertanyaan-diajukan">
            <div class="col col-lg-12 col-md-11 col-12">
                <div class="accordion accordion-flush border acr-pertanyaan" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading-penjelasan-one">
                            <button class="accordion-button accordion-button-pertanyaan collapsed fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#pertanyaan-satu" aria-expanded="false" aria-controls="pertanyaan-satu">
                                Pertanyaan ?
                            </button>
                        </h2>
                        <div id="pertanyaan-satu" class="accordion-collapse ac-pertanyaan collapse" aria-labelledby="flush-heading-penjelasan-one" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio tempora
                                            praesentium est deserunt veritatis. Ducimus aliquid odit ullam suscipit
                                            ea,
                                            in enim, illum qui natus sint iure ut ipsum. Ratione tenetur sed numquam
                                            harum, accusantium assumenda facere recusandae saepe dicta delectus
                                            consequatur odio reprehenderit commodi, velit, praesentium eligendi qui
                                            tempora.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading-penjelasan-one">
                            <button class="accordion-button accordion-button-pertanyaan collapsed fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#pertanyaan-dua" aria-expanded="false" aria-controls="pertanyaan-dua">
                                Pertanyaan ?
                            </button>
                        </h2>
                        <div id="pertanyaan-dua" class="accordion-collapse ac-pertanyaan collapse" aria-labelledby="flush-heading-penjelasan-one" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio tempora
                                            praesentium est deserunt veritatis. Ducimus aliquid odit ullam suscipit
                                            ea,
                                            in enim, illum qui natus sint iure ut ipsum. Ratione tenetur sed numquam
                                            harum, accusantium assumenda facere recusandae saepe dicta delectus
                                            consequatur odio reprehenderit commodi, velit, praesentium eligendi qui
                                            tempora.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading-penjelasan-one">
                            <button class="accordion-button accordion-button-pertanyaan collapsed fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#pertanyaan-tiga" aria-expanded="false" aria-controls="pertanyaan-tiga">
                                Pertanyaan ?
                            </button>
                        </h2>
                        <div id="pertanyaan-tiga" class="accordion-collapse ac-pertanyaan collapse" aria-labelledby="flush-heading-penjelasan-one" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio tempora
                                            praesentium est deserunt veritatis. Ducimus aliquid odit ullam suscipit
                                            ea,
                                            in enim, illum qui natus sint iure ut ipsum. Ratione tenetur sed numquam
                                            harum, accusantium assumenda facere recusandae saepe dicta delectus
                                            consequatur odio reprehenderit commodi, velit, praesentium eligendi qui
                                            tempora.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading-penjelasan-one">
                            <button class="accordion-button accordion-button-pertanyaan collapsed fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#pertanyaan-empat" aria-expanded="false" aria-controls="pertanyaan-empat">
                                Pertanyaan ?
                            </button>
                        </h2>
                        <div id="pertanyaan-empat" class="accordion-collapse ac-pertanyaan collapse" aria-labelledby="flush-heading-penjelasan-one" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio tempora
                                            praesentium est deserunt veritatis. Ducimus aliquid odit ullam suscipit
                                            ea,
                                            in enim, illum qui natus sint iure ut ipsum. Ratione tenetur sed numquam
                                            harum, accusantium assumenda facere recusandae saepe dicta delectus
                                            consequatur odio reprehenderit commodi, velit, praesentium eligendi qui
                                            tempora.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading-penjelasan-one">
                            <button class="accordion-button accordion-button-pertanyaan collapsed fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#pertanyaan-lima" aria-expanded="false" aria-controls="pertanyaan-lima">
                                Pertanyaan ?
                            </button>
                        </h2>
                        <div id="pertanyaan-lima" class="accordion-collapse ac-pertanyaan collapse" aria-labelledby="flush-heading-penjelasan-one" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio tempora
                                            praesentium est deserunt veritatis. Ducimus aliquid odit ullam suscipit
                                            ea,
                                            in enim, illum qui natus sint iure ut ipsum. Ratione tenetur sed numquam
                                            harum, accusantium assumenda facere recusandae saepe dicta delectus
                                            consequatur odio reprehenderit commodi, velit, praesentium eligendi qui
                                            tempora.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Pertanyaan Yang Sering Diajukan -->

<!-- Edukasi MCU -->
<section class="bg-sc py-5">
    <div class="container-lg">
        <div class="row justify-content-center rw-edukasi">
            <div class="col-lg-6 col-md-11 col-12 txt-edukasi">
                <h5 class="text-uppercase mb-2" data-aos="fade-right" data-aos-delay="100" data-aos-duration="500">
                    laboratoium dan medical
                    check up</h5>
                <h1 class="text-capitalize fw-bold" data-aos="fade-right" data-aos-delay="100" data-aos-duration="500">cek kesehatan</h1>
                <h2 class="text-capitalize fw-bold" data-aos="fade-right" data-aos-delay="100" data-aos-duration="500">pentingkah memeriksa
                    kesehatan secara
                    rutin?</h2>

                <p class="lh-base mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Odio commodi placeat
                    sapiente ducimus
                    corporis, minus, vel laborum reprehenderit laudantium rerum repellat? Soluta nam facilis
                    necessitatibus placeat hic, sequi voluptates quidem labore quos autem, dolorem, dignissimos
                    fuga? Pariatur debitis ducimus totam?</p>
                <p class="lh-base mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Odio commodi placeat
                    sapiente ducimus
                    corporis, minus, vel laborum reprehenderit laudantium rerum repellat? Soluta nam facilis
                    necessitatibus placeat hic, sequi voluptates quidem labore quos autem, dolorem, dignissimos
                    fuga? Pariatur debitis ducimus totam?</p>
                <p class="lh-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam reprehenderit
                    asperiores vitae
                    ullam suscipit laudantium ut repudiandae sunt dignissimos adipisci.</p>
            </div>
            <div class="col-lg-6 col-md-11 col-12">
                <img src="../image/banner/bedah.jpg" class="gambar-edukasi img-fluid mb-2" alt="Gambar Edukasi">
                <h4 class="text-capitalize fst-italic">"Melakukan Tes kesehatan yang rutin
                    merupakan
                    investasi
                    jangka panjang
                    yang sangat penting"</h4>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Edukasi MCU -->

<!-- Lokasi Klinik -->
<section class="sc-lokasi py-5">
    <div class="container-lg">
        <div class="row rw-map text-center">
            <div class="col-sm-12">
                <h5 class="text-uppercase mb-2">apotik klinik sitti khadijah</h5>
                <h1 class="text-capitalize fw-bold mb-4">lokasi klinik utama sitti khadijah</h1>
                <div class="embed-responsive  embed-responsive-16by9 text-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.055413500524!2d119.62459211423018!3d-4.009029397084486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d95bb2219233703%3A0x1a029d62ab1032d9!2sKlinik%20Utama%20Sitti%20Khadijah!5e0!3m2!1sen!2sid!4v1669108321076!5m2!1sen!2sid" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-1"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Lokasi Klinik -->

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
<!-- Bootstrap -->
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script src="../node_modules/bootstrap/dist/css/bootstrap.css"></script>

</body>

</html>