<?php
$id_admin = $_SESSION['admin']['id_admin'];
$ambil = $host->query("select * from berita where id_berita = '$_GET[id_berita]'");
$data = $ambil->fetch_assoc();
?>

<!-- Isi Dashboard -->
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">User Interface</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">Artikel</li>
                <li class="breadcrumb-item active">Ubah Artikel</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Ubah Data
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="jenis_spesialis" class="form-label">Jenis Spesialis</label>
                            <select name="jenis_spesialis" id="jenis_spesialis" class="form-control ">
                                <option style="background-color: lavender;" value="N">-- PILIH JENIS SPESIALIS --</option>
                                <option value="PENYAKIT DALAM" <?= $data['jenis_spesialis'] == 'PENYAKIT DALAM' ? ' selected="selected"' : ''; ?>>PENYAKIT DALAM</option>
                                <option value="BEDAH" <?= $data['jenis_spesialis'] == 'BEDAH' ? ' selected="selected"' : ''; ?>>BEDAH</option>
                                <option value="ANAK" <?= $data['jenis_spesialis'] == 'ANAK' ? ' selected="selected"' : ''; ?>>ANAK</option>
                                <option value="KANDUNGAN" <?= $data['jenis_spesialis'] == 'KANDUNGAN' ? ' selected="selected"' : ''; ?>>KANDUNGAN</option>
                            </select>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul Artikel</label>
                            <input type="text" class="form-control" name="judul" value="<?php echo $data['judul_artikel'] ?>" id="judul">
                        </div>
                        <textarea class="ckeditor" id="ckedtor" name="isiartikel"><?php echo $data['isiberita'] ?></textarea>
                        <img src="../gambar-artikel/<?php echo $data['gambar']?>" alt="preview" class="img-fluid mt-3 mb-3" id="prev">
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Masukkan Gambar</label>
                            <input class="form-control" type="file" name="gambar" id="gambar" multiple>
                        </div>
                        <div class="mb-3">
                            <label for="ketgambar" class="form-label">Keterangan Gambar</label>
                            <input type="text" name="ketgambar" value="<?php echo $data['ket_gambar'] ?>" class="form-control" id="ketgambar" aria-describedby="">
                        </div>
                        <div class="mb-3">
                            <label for="tag" class="form-label">Tag</label>
                            <input type="text" name="tag" value="<?php echo $data['tag'] ?>" class="form-control" id="tag" aria-describedby="">
                        </div>

                        <div class="form-group mb-3">
                            <label for="status" class="form-label">Jadikan Sebagai Berita Utama?</label>
                            <select name="status" id="status" class="form-control ">
                                <option value="N">-- Pilih --</option>
                                <option value="Y" <?= $data['status'] == 'Y' ? ' selected="selected"' : ''; ?>>Ya</option>
                                <option value="N" <?= $data['status'] == 'N' ? ' selected="selected"' : ''; ?>>Tidak</option>
                            </select>
                        </div>

                        <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                        <button type="submit" name="" class="btn btn-primary">Batal</button>

                    </form>
                    <?php
                    if (isset($_POST['save'])) {
                        if (!isset($_FILES['gambar'])) {
                            $nama = $data['gambar'];
                        } else {
                            $nama1 = $_FILES['gambar']['name'];
                            $nama = date("ymdHis") . $nama1;
                            // $jeniss = $_POST['jenis'];
                            $lokasi = $_FILES['gambar']['tmp_name'];
                            move_uploaded_file($lokasi, "../gambar-artikel/" . $nama);
                        }

                        // $nama1 = $_FILES['gambar']['name'];
                        // $nama = date("ymdHis") . $nama1;
                        // // $jeniss = $_POST['jenis'];
                        // $lokasi = $_FILES['gambar']['tmp_name'];
                        // move_uploaded_file($lokasi, "../gambar-artikel/" . $nama);
                        $result = mysqli_query($host, "UPDATE berita SET judul_artikel = '$_POST[judul]', jenis_spesialis = '$_POST[jenis_spesialis]',isiberita = '$_POST[isiartikel]',tag = '$_POST[tag]',gambar = '$nama',ket_gambar = '$_POST[ketgambar]',status = '$_POST[status]' where id_berita='$_GET[id_berita]' ");
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