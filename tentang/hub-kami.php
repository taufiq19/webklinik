    <!-- Hiasan -->
    <section class="hiasan-tentang">
    </section>
    <!-- Akhir Hiasan -->

    <!-- Isi Hubungi Kami -->
    <section class="py-5">
        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-5 col-12 text-center p-5">
                    <img class="logo-hub mb-3" src="image/LOGO ST KHADIJAH.png" width="100px" alt="Gambar Logo Klinik">
                    <h6 class="fw-bold lh-lg">Klinik Utama 'Aisyiyah</h6>
                    <h6 class="fw-lighter lh-base">Jl. Pettana Rajeng No. 5</h6>
                    <h6 class="fw-lighter lh-base">Telp : (0421) 21313</h6>
                    <h6 class="fw-lighter lh-base">Whatsapp : +6289654311976</h6>
                    <h6 class="fw-lighter lh-base">Email : st.khadijahpare2@gmail.com</h6>
                    <h6 class="fw-lighter lh-base mb-5">Kota Parepare</h6>
                    <a href="https://wa.me/628114441119"><button type="button" class="btn btn-primary col-lg-12 col-md-10 col-10 btn-lg mb-3 rounded-1 text-white"><i class="bi bi-whatsapp p-2"></i>whatsapp</button></a>
                    <a href="tel:0421-21313"><button type="button" class="btn btn-primary col-lg-12 col-md-10 col-10 btn-lg rounded-1 text-white"><i class="bi bi-telephone-inbound p-2"></i>Call
                            Center</button></a>
                </div>
                <div class="col-lg-8 col-md-7 col-12 p-5">
                    <h1 class="text-center mb-5">MASUKKAN SARAN ATAU PESAN ANDA</h1>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Nama</label>
                            <input type="name" name="name" class="form-control border-dark" id="name" aria-describedby="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Alamat Email</label>
                            <input type="email" name="email" class="form-control border-dark" id="email" aria-describedby="email">
                        </div>
                        <div class="mb-3">
                            <label for="whatsapp" class="form-label fw-bold">Nomor Telepon Atau Whatsapp Yang Dapat Di
                                Hubungi</label>
                            <input type="whatsapp" name="whatsapp" class="form-control border-dark" id="whatsapp" aria-describedby="whatsapp">
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label fw-bold ">Pesan Yang Hendak Di
                                Sampaikan</label>
                            <textarea name="pesan" class="form-control border-dark " id="pesan" rows="5"></textarea>
                        </div>
                        <button type="submit" name="kirim" class="btn btn-primary text-white">Submit</button>
                    </form>
                    <?php
                    if (isset($_POST['kirim'])) {
                        $nama = $_POST['name'];
                        $email = $_POST['email'];
                        $whatsapp = $_POST['whatsapp'];
                        $pesan = $_POST['pesan'];

                        $result = mysqli_query($host, "insert into kritiksaran(nama,email,whatsapp,pesan) values('$nama','$email','$whatsapp','$pesan')");
                        // cek hasil query
                        if (!$result) {
                            die('Query Error : ' . mysqli_errno($host) .
                                ' - ' . mysqli_error($host));
                        } else {
                            echo "<div class='alert alert-success text-center mt-2'>Berhasil Dikirim</div>";
                            echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=hub-kami'>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Akhir Isi Hubungi Kami -->