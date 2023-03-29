<?php
$id_admin = $_SESSION['admin']['id_admin'];
$ambil = $host->query("select * from alur_pelayanan where id_alur = '$_GET[id_alur]'");
$data = $ambil->fetch_assoc();
?>


<!-- Isi Dashboard -->
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">User Interface</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item ">Pelayanan</li>
                <li class="breadcrumb-item active">Alur Pelayanan</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Ubah Data
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nama_alur" class="form-label">Nama Alur</label>
                            <input type="text" name="nama_alur" class="form-control" value="<?php echo $data['nama_alur'] ?>" id="nama_alur" aria-describedby="">
                        </div>
                        <img src="../image/alur-pelayanan/<?php echo $data['gambar'] ?>" alt="preview" class="img-fluid mt-3 mb-3" id="prev">

                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Masukkan Gambar</label>
                            <input class="form-control" type="file" name="gambar" id="gambar" multiple>
                        </div>
                        <div class="mb-3">
                            <label for="ketgambar" class="form-label">Penjelasan</label>
                            <input type="text" value="<?php echo $data['penjelasan'] ?>" class="form-control" id="penjelasan" name="penjelasan" aria-describedby="">
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
                            move_uploaded_file($lokasi, "../image/alur-pelayanan/" . $nama);
                        }

                        $result = mysqli_query($host, "UPDATE alur_pelayanan SET nama_alur = '$_POST[nama_alur]',penjelasan = '$_POST[penjelasan]',gambar = '$nama' WHERE id_alur='$_GET[id_alur]'");

                        // cek hasil query
                        if (!$result) {
                            die('Query Error : ' . mysqli_errno($host) .
                                ' - ' . mysqli_error($host));
                        } else {
                            echo "<div class='alert alert-success text-center'>Berhasil Disimpan</div>";
                            echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=alurpelayanan'>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>