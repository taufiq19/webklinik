<?php
$id_admin = $_SESSION['admin']['id_admin'];
$ambil = $host->query("select * from fasilitas where id_fasilitas = '$_GET[id_fasilitas]'");
$data = $ambil->fetch_assoc();
?>
<!-- Isi Dashboard -->
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">User Interface</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">Fasilitas Klinik</li>
                <li class="breadcrumb-item active">Ubah Fasilitas</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Ubah Data
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="unit" class="form-label">Unit</label>
                            <select name="unit" id="unit" class="form-control ">
                                <option style="background-color: whitesmoke;" value="N">-- PILIH UNIT --</option>
                                <option value="Poliklinik" <?= $data['unit'] == 'Poliklinik' ? ' selected="selected"' : ''; ?>>Poliklinik</option>
                                <option value="IGD" <?= $data['unit'] == 'IGD' ? ' selected="selected"' : ''; ?>>IGD</option>
                                <option value="Ambulans" <?= $data['unit'] == 'Ambulans' ? ' selected="selected"' : ''; ?>>Ambulans</option>
                                <option value="Apotik" <?= $data['unit'] == 'Apotik' ? ' selected="selected"' : ''; ?>>Apotik</option>
                                <option value="Kantor" <?= $data['unit'] == 'Kantor' ? ' selected="selected"' : ''; ?>>Kantor</option>
                                <option value="Rawat Inap" <?= $data['unit'] == 'Rawat Inap' ? ' selected="selected"' : ''; ?>>Rawat Inap</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jenisfasilitas" class="form-label">Jenis Fasilitas</label>
                            <input type="text" class="form-control" name="jenisfasilitas" id="jenisfasilitas" value="<?php echo $data['jenisfasilitas'] ?>" aria-describedby="">
                        </div>
                        <img src="../image/fasilitas/<?php echo $data['gambar'] ?>" alt="preview" class="img-fluid mt-3 mb-3" id="prev">
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Masukkan Gambar</label>
                            <input class="form-control" type="file" name="gambar" id="gambar" multiple>
                        </div>
                        <div class="mb-3">
                            <label for="isi" class="form-label">Isi</label>
                            <textarea class="form-control" name="isi" id="isi" cols="30" rows="10"><?php echo $data['ketgambar'] ?></textarea>
                            <!-- <input type="" class="form-control" id="isi" name="isi" aria-describedby=""> -->
                        </div>
                        <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                        <button type="submit" class="btn btn-primary">Batal</button>
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
                            move_uploaded_file($lokasi, "../image/fasilitas/" . $nama);
                        }

                        $result = mysqli_query($host, "UPDATE fasilitas SET unit = '$_POST[unit]',jenisfasilitas = '$_POST[jenisfasilitas]',gambar = '$nama', ketgambar = '$_POST[isi]' WHERE id_fasilitas='$_GET[id_fasilitas]'");
                        // cek hasil query
                        if (!$result) {
                            die('Query Error : ' . mysqli_errno($host) .
                                ' - ' . mysqli_error($host));
                        } else {
                            echo "<div class='alert alert-success text-center'>Berhasil Disimpan</div>";
                            echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=fasilitas'>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>