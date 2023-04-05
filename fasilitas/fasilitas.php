    <!-- Banner Fasilitas -->
    <section class="jumbotron-fasilitas shadow-sm">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="image/banner/banner3.jpg" class="d-block w-100 img-fluid" alt="Gambar Banner">
                    <div class="carousel-caption carousel-caption-fasilitas caption-fasilitas box-fasilitas d-none d-sm-block">
                        <div class="box-fleks px-3 py-3 rounded-4 shadow-lg">
                            <h4 class="text-start fw-bold mb-3">Pelayanan Yang Ramah</h4>
                            <p class="text-start fs-6 txt-set-fasilitas text-muted">Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing elit. Velit dolore est laborum. Alias suscipit debitis dolorem. Repellat,
                                iste accusantium. Doloremque!</p>
                        </div>
                    </div>
                    <div class="carousel-caption d-none d-md-block mg-bn-fasilitas"></div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- Akhir Banner Fasilitas -->

    <!-- Fasilitas Klinik -->
    <section class="py-5">
        <div class="container-lg">
            <div class="row text-center">
                <div class="col">
                    <h1 class="fw-bold text-capitalize mb-4">fasilitas klinik</h1>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-lg-12 col-md-11 col-12">
                    <p class="txt-fasiltias">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Sapiente libero
                        quisquam quod hic doloribus, qui vero nesciunt! Debitis eius atque a. Nihil optio ab maiores
                        omnis, dolore perspiciatis accusantium exercitationem consequatur iusto facilis repellendus
                        debitis dolores magnam? Impedit vitae veniam temporibus perspiciatis deleniti, sequi quae libero
                        excepturi quas iusto voluptas.</p>
                </div>
            </div>
            <div class="row justify-content-center pt-3 px-3 text-center mb-4">
                <div class="col-lg-4 col-md-4 col-12 mb-4">
                    <div class="crd-fasiltias rounded-2 shadow">
                        <i class="icn-fasilitas bi bi-hospital fs-1"></i>
                        <h3 class="mb-1 fw-bold">Memiliki Fasilitas Yang Memadai</h3>
                        <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quidem
                            recusandae
                            atque
                            laudantium amet perspiciatis repellat ipsam mollitia velit provident?</p>
                    </div>
                </div>
                <div class="mb-4 col-lg-4 col-md-4 col-12">
                    <div class="crd-fasiltias rounded-2 shadow">
                        <i class="icn-fasilitas bi bi-heart-pulse fs-1"></i>
                        <h3 class="mb-1 fw-bold">Memiliki Fasilitas Yang Memadai</h3>
                        <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quidem
                            recusandae
                            atque
                            laudantium amet perspiciatis repellat ipsam mollitia velit provident?</p>
                    </div>
                </div>
                <div class="mb-4 col-lg-4 col-md-4 col-12">
                    <div class="crd-fasiltias rounded-2 shadow">
                        <i class="icn-fasilitas bi bi-activity fs-1"></i>
                        <h3 class="mb-1 fw-bold">Memiliki Fasilitas Yang Memadai</h3>
                        <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quidem
                            recusandae
                            atque
                            laudantium amet perspiciatis repellat ipsam mollitia velit provident?</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center text-center">
                <div class="col-lg-12 col-md-12 col-12">
                    <?php
                    $ambil_data = $host->query("SELECT DISTINCT unit FROM fasilitas order by id_fasilitas DESC;"); ?>
                    <?php while ($data = $ambil_data->fetch_assoc()) {
                        $unit = $data['unit'];
                    ?>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item bd-acd-fasilitas rounded-0">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo str_replace(' ', '', $data['unit']); ?>" aria-expanded="true" aria-controls="collapseOne">
                                        <?php echo $data['unit'] ?>
                                    </button>
                                </h2>
                                <div id="<?php echo str_replace(' ', '', $data['unit']); ?>" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row justify-content-center text-center">
                                            <?php
                                            $ambil_data2 = $host->query("SELECT * FROM fasilitas WHERE unit='$unit' order by id_fasilitas DESC;");
                                            while ($data_sub = $ambil_data2->fetch_assoc()) {
                                            ?>
                                                <div class="garis-acd col-lg-4 col-md-4 col-12 mb-3">
                                                    <h6 class="text-capitalize mb-4 fw-bold"><?php echo $data_sub['jenisfasilitas'] ?></h6>
                                                    <img class="img-fasilitas mb-3 rounded-2 img-fluid" src="image/fasilitas/<?php echo $data_sub['gambar'] ?>" alt="Gambar Fasilitas">
                                                    <p class="fw-lighter text-capitalize txt-acd-fasilitas"><?php echo $data_sub['ketgambar'] ?></p>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Fasilitas Klinik -->

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
            <hr class="garis-hub">
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