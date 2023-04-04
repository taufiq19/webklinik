<?php
if (!isset($_SESSION['admin']) or empty($_SESSION['admin'])) {
    //echo " <script>location:='proses/login.php'</script>";
    header('location:../login.php');
    exit();
}
?>
<?php

$id_admin = $_SESSION['admin']['id_admin'];
?>

<!-- Isi Dashboard -->
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">User Interface</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Artikel</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tambah Data
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="jenis_spesialis" class="form-label">Jenis Spesialis</label>
                            <select name="jenis_spesialis" id="jenis_spesialis" class="form-control ">
                                <option style="background-color: lavender;" value="N">-- PILIH JENIS SPESIALIS --</option>
                                <option value="PENYAKIT DALAM">PENYAKIT DALAM</option>
                                <option value="BEDAH">BEDAH</option>
                                <option value="ANAK">ANAK</option>
                                <option value="KANDUNGAN">KANDUNGAN</option>
                            </select>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul Artikel</label>
                            <input type="text" class="form-control" name="judul" id="judul">
                        </div>
                        <textarea class="ckeditor" id="ckedtor" name="isiartikel"></textarea>
                        <img src="gambar/default.png" alt="preview" class="img-fluid mt-3 mb-3" id="prev">
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Masukkan Gambar</label>
                            <input class="form-control" type="file" name="gambar" id="gambar" multiple>
                        </div>
                        <div class="mb-3">
                            <label for="ketgambar" class="form-label">Keterangan Gambar</label>
                            <input type="text" name="ketgambar" class="form-control" id="ketgambar" aria-describedby="">
                        </div>
                        <div class="mb-3">
                            <label for="tag" class="form-label">Tag</label>
                            <input type="text" name="tag" class="form-control" id="tag" aria-describedby="">
                        </div>

                        <div class="form-group mb-3">
                            <label for="status" class="form-label">Jadikan Sebagai Berita Utama?</label>
                            <select name="status" id="status" class="form-control ">
                                <option value="N">-- Pilih --</option>
                                <option value="Y">Ya</option>
                                <option value="N">Tidak</option>
                            </select>
                        </div>

                        <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                        <button type="submit" name="" class="btn btn-primary">Batal</button>

                    </form>
                    <?php
                    if (isset($_POST['save'])) {
                        $nama1 = $_FILES['gambar']['name'];
                        $nama = date("ymdHis") . $nama1;
                        // $jeniss = $_POST['jenis'];
                        $lokasi = $_FILES['gambar']['tmp_name'];
                        move_uploaded_file($lokasi, "../gambar-artikel/" . $nama);
                        $result = mysqli_query($host, "insert into berita(id_admin, judul_artikel, jenis_spesialis, isiberita, tag, gambar, ket_gambar, status) values('$id_admin','$_POST[judul]','$_POST[jenis_spesialis]','$_POST[isiartikel]','$_POST[tag]','$nama','$_POST[ketgambar]','$_POST[status]')");
                        // cek hasil query
                        if (!$result) {
                            die('Query Error : ' . mysqli_errno($host) .
                                ' - ' . mysqli_error($host));
                        } else {
                            echo "<div class='alert alert-success text-center'>Berhasil Disimpan</div>";
                            echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=artikel'>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>