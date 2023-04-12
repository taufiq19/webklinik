<!-- Banner -->
<section class="jumbotron shadow-sm">
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="image/banner/banner.jpg" class="d-block w-100 img-fluid" alt="Banner Klinik">
        <div class="carousel-caption cc-index">
          <h3 class="txt-satu fw-bold">Selamat Datang</h3>
          <p class="txt-dua fw-bold">Web Sistem Informasi Klinik Utama Sitti Khadijah Kota Parepare</p>
        </div>
      </div>
      <?php $ambil_data_utama = $host->query("select * from berita join admin on berita.id_admin = admin.id_admin WHERE status='Y' ORDER BY tanggal DESC LIMIT 2"); ?>
      <?php while ($data_utama = $ambil_data_utama->fetch_assoc()) {
      ?>
        <div class="carousel-item c-i2 active" data-bs-interval="10000">
          <img src="gambar-artikel/<?php echo $data_utama['gambar'] ?>" class="d-block w-100 img-fluid" alt="Banner Klinik">
          <div class="carousel-caption cc-index">
            <h3 class="txt-satu fw-bold text-white text-capitalize"><?php echo $data_utama['judul_artikel'] ?></h3>
            <p class="txt-dua fw-bold text-white text-capitalize">Web Sistem Informasi Klinik Utama Sitti Khadijah Kota Parepare</p>
          </div>
        </div>
      <?php } ?>
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
<!-- Akhir Banner -->

<!-- Galeri -->
<section class="sc-galeri py-5">
  <div class="container-lg">
    <div class="row text-center">
      <div class="col">
        <h1 class="fw-bold text-capitalize mb-4" id="galeri-title">Galeri</h1>
      </div>
    </div>
  </div>
  <div class="container-galeri text-center">
    <div class="card-k">
      <img class="img-card img-fluid" src="image/galeri/galeri1.jpg" style="object-fit: cover;" alt="Gambar Galeri">
      <div class="intro justify-content-center align-items-center d-flex text-center">
        <a class="text-white fw-bold fs-1" href="#gambar1"><i class="bi bi-search"></i></a>
      </div>
      <div class="overlay-galeri" id="gambar1">
        <a href="#galeri-title"><i class="tbl-galeri bi bi-x-circle"></i></a>
        <a class="tbl-prev text-white fs-1 text-decoration-none position-absolute" href="#gambar5"><i class="bi bi-chevron-bar-left"></i></a>
        <img src="image/artikel/healty website.jpg" alt="Gambar Galeri">
        <a class="tbl-next text-white fs-1 text-decoration-none position-absolute" href="#gambar2"><i class="bi bi-chevron-bar-right"></i></a>
      </div>
    </div>

    <div class="card-k">
      <img class="img-card img-fluid" src="image/galeri/galeri2.jpg" style="object-fit: cover;" alt="Gambar Galeri">
      <div class="intro justify-content-center align-items-center d-flex text-center">
        <a class="text-white fw-bold fs-1" href="#gambar1"><i class="bi bi-search"></i></a>
      </div>
      <div class="overlay-galeri" id="gambar2">
        <a href="#galeri-title"><i class="tbl-galeri bi bi-x-circle"></i></a>
        <a class="tbl-prev text-white fs-1 text-decoration-none position-absolute" href="#gambar1"><i class="bi bi-chevron-bar-left"></i></a>
        <img src="image/galeri/galeri2.jpg" alt="Gambar Galeri">
        <a class="tbl-next text-white fs-1 text-decoration-none position-absolute" href="#gambar3"><i class="bi bi-chevron-bar-right"></i></a>
      </div>
    </div>

    <div class="card-k">
      <img class="img-card img-fluid" src="image/galeri/galeri3.jpg" style="object-fit: cover;" alt="Gambar Galeri">
      <div class="intro justify-content-center align-items-center d-flex text-center">
        <a class="text-white fw-bold fs-1" href="#gambar1"><i class="bi bi-search"></i></a>
      </div>
      <div class="overlay-galeri" id="gambar3">
        <a href="#galeri-title"><i class="tbl-galeri bi bi-x-circle"></i></a>
        <a class="tbl-prev text-white fs-1 text-decoration-none position-absolute" href="#gambar2"><i class="bi bi-chevron-bar-left"></i></a>
        <img src="image/galeri/galeri3.jpg" alt="Gambar Galeri">
        <a class="tbl-next text-white fs-1 text-decoration-none position-absolute" href="#gambar4"><i class="bi bi-chevron-bar-right"></i></a>
      </div>
    </div>

    <div class="card-k">
      <img class="img-card img-fluid" src="image/galeri/galeri4.jpg" style="object-fit: cover;" alt="Gambar Galeri">
      <div class="intro justify-content-center align-items-center d-flex text-center">
        <a class="text-white fw-bold fs-1" href="#gambar1"><i class="bi bi-search"></i></a>
      </div>
      <div class="overlay-galeri" id="gambar4">
        <a href="#galeri-title"><i class="tbl-galeri bi bi-x-circle"></i></a>
        <a class="tbl-prev text-white fs-1 text-decoration-none position-absolute" href="#gambar3"><i class="bi bi-chevron-bar-left"></i></a>
        <img src="image/galeri/galeri4.jpg" alt="Gambar Galeri">
        <a class="tbl-next text-white fs-1 text-decoration-none position-absolute" href="#gambar5"><i class="bi bi-chevron-bar-right"></i></a>
      </div>
    </div>

    <div class="card-k">
      <img class="img-card img-fluid" src="image/galeri/galeri5.jpg" style="object-fit: cover;" alt="Gambar Galeri">
      <div class="intro justify-content-center align-items-center d-flex text-center">
        <a class="text-white fw-bold fs-1" href="#gambar1"><i class="bi bi-search"></i></a>
      </div>
      <div class="overlay-galeri" id="gambar5">
        <a href="#galeri-title"><i class="tbl-galeri bi bi-x-circle"></i></a>
        <a class="tbl-prev text-white fs-1 text-decoration-none position-absolute" href="#gambar4"><i class="bi bi-chevron-bar-left"></i></a>
        <img src="image/galeri/galeri5.jpg" alt="Gambar Galeri">
        <a class="tbl-next text-white fs-1 text-decoration-none position-absolute" href="#gambar1"><i class="bi bi-chevron-bar-right"></i></a>
      </div>
    </div>

    <div class="card-k">
      <img class="img-card img-fluid" src="image/galeri/galeri5.jpg" style="object-fit: cover;" alt="Gambar Galeri">
      <div class="intro justify-content-center align-items-center d-flex text-center">
        <a class="text-white fw-bold fs-1" href="#gambar1"><i class="bi bi-search"></i></a>
      </div>
      <div class="overlay-galeri" id="gambar5">
        <a href="#galeri-title"><i class="tbl-galeri bi bi-x-circle"></i></a>
        <a class="tbl-prev text-white fs-1 text-decoration-none position-absolute" href="#gambar4"><i class="bi bi-chevron-bar-left"></i></a>
        <img src="image/galeri/galeri5.jpg" alt="Gambar Galeri">
        <a class="tbl-next text-white fs-1 text-decoration-none position-absolute" href="#gambar1"><i class="bi bi-chevron-bar-right"></i></a>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- Akhir Galeri -->

<!-- Pelayanan -->
<section class="bg-sc py-5">
  <div class="container-lg">
    <div class="row text-center justify-content-center">
      <div class="row text-center">
        <div class="col">
          <h1 class="fw-bold text-capitalize mb-4">Pelayanan Klinik</h1>
        </div>
      </div>
      <div class="icn-pelayanan icn-bedah col-md-3 col-lg-3 col-6">
        <div class="img-pelayanan"><a href="spesialisasi/spesialis-bedah.html"><img class="gerak" src="image/pelayanan spesialis/bedah.png" alt="Icon Pelayanan"></a>
          <b>
            <p class="mt-3">POLI BEDAH</p>
          </b>
        </div>
      </div>
      <div class="icn-pelayanan icn-interna col-md-3 col-lg-3 col-6">
        <div class="img-pelayanan"><a href="spesialisasi/spesialis-penyakit-dalam.html"><img class="gerak" src="image/pelayanan spesialis/interna.png" alt="Icon Pelayanan"></a>
          <b>
            <p class="mt-3">POLI INTERNA</p>
          </b>
        </div>
      </div>
      <div class="icn-pelayanan icn-obgyn col-md-3 col-lg-3 col-6">
        <div class="img-pelayanan"><a href="spesialisasi/spesialis-obgyn.html"><img class="gerak" src="image/pelayanan spesialis/mother.png" alt="Icon Pelayanan"></a>
          <b>
            <p class="mt-3">POLI OBYN</p>
          </b>
        </div>
      </div>
      <div class="icn-pelayanan icn-anak col-md-3 col-lg-3 col-6">
        <div class="img-pelayanan"><a href="spesialisasi/spesialis-anak.html"><img class="gerak" src="image/pelayanan spesialis/anak.png" alt="Icon Pelayanan"></a>
          <b>
            <p class="mt-3">POLI ANAK</p>
          </b>
        </div>
      </div>
      <div class="icn-pelayanan icn-umum col-md-3 col-lg-3 col-6">
        <div class="img-pelayanan"><a><img class="gerak" src="image/pelayanan spesialis/umum.png" data-bs-toggle="modal" data-bs-target="#exampleModal" alt="Icon Pelayanan"></a>
          <b>
            <p class="mt-3">POLI UMUM</p>
          </b>
        </div>
      </div>
      <div class="icn-pelayanan icn-igd col-md-3 col-lg-3 col-6">
        <div class="img-pelayanan"><a><img class="gerak" src="image/pelayanan spesialis//igd.png" data-bs-toggle="modal" data-bs-target="#exampleModal" alt="Icon Pelayanan"></a>
          <b>
            <p class="mt-3">I G D</p>
          </b>
        </div>
      </div>
      <div class="icn-pelayanan icn-apotik col-md-3 col-lg-3 col-6">
        <div class="img-pelayanan"><a href="layanan/konsul-apotik.html"><img class="gerak" src="image/pelayanan spesialis/apotik.png" alt="Icon Pelayanan"></a>
          <b>
            <p class="mt-3">APOTIK</p>
          </b>
        </div>
      </div>
      <div class="icn-pelayanan icn-lab col-md-3 col-lg-3 col-6">
        <div class="img-pelayanan"><a href="layanan/lab.html"><img class="gerak" src="image/pelayanan spesialis/lab.png" alt="Icon Pelayanan"></a>
          <b>
            <p class="mt-3">LABORATORIUM</p>
          </b>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Akhir Pelayanan -->

<!-- Artikel -->
<section class="pt-5 pb-3">
  <div class="container-lg">
    <div class="row justify-content-evenly">
      <div class="row text-center">
        <div class="col">
          <h1 class="fw-bold text-capitalize mb-4">artikel terbaru</h1>
        </div>
      </div>
      <?php
      $ambil_data = $host->query("select * from berita join admin on berita.id_admin = admin.id_admin ORDER BY tanggal DESC LIMIT 6"); ?>
      <?php while ($data = $ambil_data->fetch_assoc()) {

      ?>
        <div class="col-lg-4 col-md-5 col-11">
          <div class="card-artikel">
            <img src="gambar-artikel/<?php echo $data['gambar'] ?>" class="crd-img-artikel mb-3" alt="Gambar Artikel">
            <h5 class="fw-bold text-capitalize mb-1 text-start">
              <?php
              echo $data['judul_artikel'];
              ?>
            </h5>
            <p class="lh-base mb-2">
              <?php
              echo (str_word_count($data['isiberita']) > 200 ? substr($data['isiberita'], 0, 300) . " [...] " : $data['isiberita']);
              ?>
            </p>
            <!-- <a href="artikel/isi-artikel.html"><button type="button" class="mt-2 text-capitalize btn btn-primary fw-bold">baca
                selengkapnya</button></a> -->
            <a href="index.php?halaman=isiartikel&id=<?php echo $data['id_berita'] ?>"><button type="button" class="mt-2 mx-0 text-capitalize btn btn-primary fw-bold">baca
                selengkapnya</button></a>
          </div>
        </div>
      <?php
      }
      ?>

    </div>
  </div>
</section>
<!-- Akhir Artikel -->

<!-- Lokasi Klinik -->
<section class="sc-lokasi py-5">
  <div class="container-lg">
    <div class="row justify-content-center text-center">
      <div class="col-12">
        <h1 class="text-capitalize fw-bold mb-4">lokasi klinik</h1>
        <div class="embed-responsive  embed-responsive-16by9 text-center">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.055413500524!2d119.62459211423018!3d-4.009029397084486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d95bb2219233703%3A0x1a029d62ab1032d9!2sKlinik%20Utama%20Sitti%20Khadijah!5e0!3m2!1sen!2sid!4v1669108321076!5m2!1sen!2sid" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-1"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Akhir Lokasi Klinik -->

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