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
                    $no = 1;
                    $ambil_data = $host->query("SELECT DISTINCT unit FROM fasilitas order by id_fasilitas DESC;"); ?>
                    <?php while ($data = $ambil_data->fetch_assoc()) {
                        $unit = $data['unit'];
                    ?>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item bd-acd-fasilitas rounded-0">
                                <h2 class="accordion-header" id="heading<?php echo $no?>">
                                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#fas-<?php echo $no?>" aria-expanded="true" aria-controls="fas-<?php echo $no?>">
                                        <?php echo $unit ?>
                                    </button>
                                </h2>
                                <div id="fas-<?php echo $no?>" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
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
                    <?php
                        $no++;
                    } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Fasilitas Klinik -->