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
                <h2 class="text-capitalize fw-bold">laboratorium</h2>
                <h5 class="text-uppercase">laboratoium klinik sitti khadijah</h5>
                <h5 class="text-uppercase">di kota parepare</h5>
                <h6 class="text-capitalize">jl. pettana rajeng no. 5 kota parepare</h6>
                <h6 class="text-capitalize">telp : (0421) 21313</h6>
                <h6 class="text-capitalize">whatsapp : +628114441119</h6>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Judul Layanan -->

<!-- Informasi Lab -->
<section class="mt-5">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <div class="row rw-lab justify-content-center text-center">
                    <div class="col">
                        <h5 class="text-uppercase mb-3">laboratoium Klinik</h5>

                        <h1 class="text-capitalize">klinik utama sitti khadijah</h1>
                        <h2 class="text-capitalize fst-italic mb-5">Laboratorium</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center justify-content-center">
            <div class="col-lg-10 col-md-9 col-12">
                <div class="crd-layanan crd-lab rounded-4 mb-3 border">
                    <h2 class="text-capitalize mb-1 fw-bold">pemeriksaan yang tersedia</h2>
                    <?php $ambil_data = $host->query("SELECT * FROM lab order by id_lab DESC;");
                    while ($data = $ambil_data->fetch_assoc()) { ?>
                        <div class="row lab align-items-center">
                            <div class="col-11 align-items-center text-start">
                                <h5 class="text-capitalize text-start"><?php echo $data['jenis_pemeriksaan'] ?></h5>
                                <p class="text-success">Rp<b><?php echo number_format($data['harga'], 0, ',', '.'); ?></b><small>,00</small></p>
                            </div>
                            <div class="col-1 text-end"><button type="button" class="btn btn-primary fs-6" id="btn-tambah"><i class="bi bi-cart-plus"></i></button></div>
                        </div>
                        <hr class="mt-0">
                    <?php } ?>

                </div>
            </div>
        </div>

        <div class="row text-center justify-content-center mb-5">
            <div class="col-lg-10 col-md-9 col-sm-12">
                <div class="crd-layanan crd-periksanda rounded-4 border">
                    <h2 class="text-capitalize mb-1 fw-bold">pemeriksaan anda !</h2>
                    <div class="row text-center justify-content-center">
                        <div class="col">

                            <div class="row lab align-items-center">
                                <div class="col-8 align-items-center text-start">
                                    <h5 class="text-capitalize text-start">Pemeriksaan Gula Darah</h5>
                                </div>
                                <div class="col-4 align-items-center text-end">
                                    <p class="text-success">Rp. 1000.000-,00</p>
                                </div>
                            </div>
                            <hr class="mt-0">
                            <div class="row lab align-items-center">
                                <div class="col-8 align-items-center text-start">
                                    <h5 class="text-capitalize text-start">Pemeriksaan Gula Darah</h5>
                                </div>
                                <div class="col-4 align-items-center text-end">
                                    <p class="text-success">Rp. 1000.000-,00</p>
                                </div>
                            </div>
                            <hr class="mt-0">
                            <div class="row lab align-items-center">
                                <div class="col-8 align-items-center text-start">
                                    <h5 class="text-capitalize text-start">Pemeriksaan Gula Darah</h5>
                                </div>
                                <div class="col-4 align-items-center text-end">
                                    <p class="text-success">Rp. 1000.000-,00</p>
                                </div>
                            </div>
                            <hr class="mt-0">

                            <div class="row">
                                <div class="col-12 text-end">
                                    <p class="text-danger">Rp. Total Price</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col text-end">
                                    <div class=""><button type="button" class="btn btn-primary text-white">Selesai</button></div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Akhir Informasi Lab -->

<!-- Pertanyaan Yang Sering Diajukan -->
<section class="sc-pertanyaan-diajukan py-5">
    <div class="container-lg">
        <div class="row justify-content-center rw-pertanyaan">
            <div class="col-lg-12 col-md-11 col-12">
                <h5 class="text-uppercase mb-2">laboratoium klinik sitti khadijah</h5>
                <h1 class="text-capitalize fw-bold">Pertanyaan</h1>
                <h2 class="text-capitalize fw-bold">yang sering diajukan</h2>
            </div>
        </div>

        <div class="row justify-content-center rw-pertanyaan-diajukan">
            <div class="col-lg-12 col-md-11 col-12">
                <div class="accordion accordion-flush border acr-pertanyaan" id="accordionFlushExample">
                    <div class="accordion-item">
                        <?php
                        $no = 1;
                        $ambil_data_p = $host->query("SELECT * FROM pertanyaan_lab order by id_p_lab ASC;");
                        while ($data_p = $ambil_data_p->fetch_assoc()) { ?>
                            <h2 class="accordion-header" id="flush-heading-penjelasan-one">
                                <button class="accordion-button accordion-button-pertanyaan collapsed fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#pertanyaan-<?php echo $no ?>" aria-expanded="false" aria-controls="pertanyaan-<?php echo $no ?>">
                                    <?php echo $data_p['pertanyaan'] ?>
                                </button>
                            </h2>
                            <div id="pertanyaan-<?php echo $no?>" class="accordion-collapse ac-pertanyaan collapse" aria-labelledby="flush-heading-penjelasan-one" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col">
                                            <p><?php echo $data_p['jawab'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                            $no++;
                        } ?>
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

                <p class="lh-base mb-3">Lorem
                    ipsum dolor sit amet consectetur adipisicing elit.
                    Odio commodi placeat
                    sapiente ducimus
                    corporis, minus, vel laborum reprehenderit laudantium rerum repellat? Soluta nam facilis
                    necessitatibus placeat hic, sequi voluptates quidem labore quos autem, dolorem, dignissimos
                    fuga? Pariatur debitis ducimus totam?</p>
                <p class="lh-base mb-3">Lorem
                    ipsum dolor sit amet consectetur adipisicing elit.
                    Odio commodi placeat
                    sapiente ducimus
                    corporis, minus, vel laborum reprehenderit laudantium rerum repellat? Soluta nam facilis
                    necessitatibus placeat hic, sequi voluptates quidem labore quos autem, dolorem, dignissimos
                    fuga? Pariatur debitis ducimus totam?</p>
                <p class="lh-base">Lorem ipsum
                    dolor sit amet
                    consectetur adipisicing elit. Quibusdam reprehenderit asperiores vitae
                    ullam suscipit laudantium ut repudiandae sunt dignissimos adipisci.</p>
            </div>
            <div class="col-lg-6 col-md-11 col-12">
                <img src="../image/edukasi/edukasi.jpg" class="gambar-edukasi img-fluid mb-2" alt="Gambar Edukasi">
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
                <h5 class="text-uppercase mb-2">laboratoium klinik sitti khadijah</h5>
                <h1 class="text-capitalize fw-bold mb-4">lokasi klinik utama sitti khadijah</h1>
                <div class="embed-responsive  embed-responsive-16by9 text-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.055413500524!2d119.62459211423018!3d-4.009029397084486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d95bb2219233703%3A0x1a029d62ab1032d9!2sKlinik%20Utama%20Sitti%20Khadijah!5e0!3m2!1sen!2sid!4v1669108321076!5m2!1sen!2sid" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-1"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Lokasi Klinik -->