<?php
$id_admin = $_SESSION['admin']['id_admin'];
$ambil = $host->query("select * from dokter where id_dokter = '$_GET[id_dokter]'");
$data = $ambil->fetch_assoc();
?>

<!-- Isi Dashboard -->
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">User Interface</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item ">Dokter</li>
                <li class="breadcrumb-item active">Tambah Dokter</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Ubah Data
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <img src="../image/dokter/<?php echo $data['gambar'] ?>" alt="preview" class="img-fluid mt-3 mb-3" id="prev">
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Masukkan Gambar</label>
                            <input class="form-control" type="file" name="gambar" id="gambar" multiple>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Dokter</label>
                            <input type="" class="form-control" value="<?php echo $data['nama'] ?>" name="nama" id="nama" aria-describedby="">
                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <select class="form-select" name="jabatan" id="jabatan" aria-label="Default select example">
                                <option selected>-- PILIH JABATAN --</option>
                                <option value="Dokter Umum" <?= $data['jabatan'] == 'Dokter Umum' ? ' selected="selected"' : ''; ?>>Dokter Umum</option>
                                <option value="Dokter Paruh Waktu" <?= $data['jabatan'] == 'Dokter Paruh Waktu' ? ' selected="selected"' : ''; ?>>Dokter Paruh Waktu</option>
                                <option value="Dokter Spesialis" <?= $data['jabatan'] == 'Dokter Spesialis' ? ' selected="selected"' : ''; ?>>Dokter Spesialis</option>
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
                            move_uploaded_file($lokasi, "../image/dokter/" . $nama);
                        }
                        $result = mysqli_query($host, "UPDATE dokter SET nama = '$_POST[nama]',jabatan = '$_POST[jabatan]',gambar = '$nama' WHERE id_dokter='$_GET[id_dokter]'");

                        // cek hasil query
                        if (!$result) {
                            die('Query Error : ' . mysqli_errno($host) .
                                ' - ' . mysqli_error($host));
                        } else {
                            echo "<div class='alert alert-success text-center'>Berhasil Disimpan</div>";
                            echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=dokter'>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>