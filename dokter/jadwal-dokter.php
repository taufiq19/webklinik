    <!-- Hiasan -->
    <section class="sc-dokter">
    </section>
    <!-- Akhir Hiasan -->

    <!-- Jadwal Dokter -->
    <section class="py-5">
        <div class="container-lg">
            <div class="row text-center">
                <div class="col">
                    <h1 class="text-capitalize fw-bold mb-4">jadwal dokter</h1>
                </div>
            </div>
            <div class="row justify-content-center rw-jadwal-dokter">
                <div class="col-lg-12 col-md-10 col-12">
                    <table class="table table-bordered table-striped table-hover tb-jadwal-dokter text-center">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" class="th-1">NAMA DOKTER</th>
                                <th scope="col" class="th-2">JABATAN</th>
                                <th scope="col" class="th-3">HARI</th>
                                <th scope="col" class="th-4">JAM</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $ambil_data = $host->query("SELECT * FROM jadwal_dokter JOIN dokter ON jadwal_dokter.id_dokter = dokter.id_dokter order by id_jadwal DESC;");
                            while ($data = $ambil_data->fetch_assoc()) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $data['nama'] ?></th>
                                    <th scope="col"><?php echo $data['jabatan'] ?></th>
                                    <th scope="col"><?php echo $data['hari'] ?></th>
                                    <th scope="col"><?php echo $data['waktu'] ?></th>
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

    