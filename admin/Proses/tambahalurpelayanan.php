<?php 
if (!isset($_SESSION['admin']) or empty($_SESSION['admin'])) {
    //echo " <script>location:='proses/login.php'</script>";
    header('location:../login.php');
    exit();
}
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
                    Tambah Data
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nama_alur" class="form-label">Nama Alur</label>
                            <input type="text" name="nama_alur" class="form-control" id="nama_alur" aria-describedby="">
                        </div>
                        <img src="gambar/default.png" alt="preview" class="img-fluid mt-3 mb-3" id="prev">

                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Masukkan Gambar</label>
                            <input class="form-control" type="file" name="gambar" id="gambar" multiple>
                        </div>
                        <div class="mb-3">
                            <label for="ketgambar" class="form-label">Penjelasan</label>
                            <input type="text" class="form-control" id="penjelasan" name="penjelasan" aria-describedby="">
                        </div>
                        <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                        <button type="submit" class="btn btn-primary">Batal</button>
                    </form>
                    <?php
                    if (isset($_POST['save'])) {
                        $nama1 = $_FILES['gambar']['name'];
                        $nama = date("ymdHis") . $nama1;
                        // $jeniss = $_POST['jenis'];
                        $lokasi = $_FILES['gambar']['tmp_name'];
                        move_uploaded_file($lokasi, "../image/alur-pelayanan/" . $nama);
                        $result = mysqli_query($host, "INSERT INTO alur_pelayanan(nama_alur, gambar, penjelasan) VALUES('$_POST[nama_alur]','$nama','$_POST[penjelasan]')");
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