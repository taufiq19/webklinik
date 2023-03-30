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
                <li class="breadcrumb-item">Fasilitas Klinik</li>
                <li class="breadcrumb-item active">Tambah Fasilitas</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tambah Data
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="unit" class="form-label">Unit</label>
                            <select name="unit" id="unit" class="form-control ">
                                <option style="background-color: whitesmoke;" value="N">-- PILIH UNIT --</option>
                                <option value="Poliklinik">Poliklinik</option>
                                <option value="IGD">IGD</option>
                                <option value="Ambulans">Ambulans</option>
                                <option value="Apotik">Apotik</option>
                                <option value="Kantor">Kantor</option>
                                <option value="Rawat Inap">Rawat Inap</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jenisfasilitas" class="form-label">Jenis Fasilitas</label>
                            <input type="text" class="form-control" name="jenisfasilitas" id="jenisfasilitas" aria-describedby="">
                        </div>
                        <img src="gambar/default.png" alt="preview" class="img-fluid mt-3 mb-3" id="prev">
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Masukkan Gambar</label>
                            <input class="form-control" type="file" name="gambar" id="gambar" multiple>
                        </div>
                        <div class="mb-3">
                            <label for="isi" class="form-label">Isi</label>
                            <textarea class="form-control" name="isi" id="isi" cols="30" rows="10"></textarea>
                            <!-- <input type="" class="form-control" id="isi" name="isi" aria-describedby=""> -->
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
                        move_uploaded_file($lokasi, "../image/fasilitas/" . $nama);
                        $result = mysqli_query($host, "insert into fasilitas(unit, jenisfasilitas, gambar, ketgambar) values('$_POST[unit]','$_POST[jenisfasilitas]','$nama','$_POST[isi]')");
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