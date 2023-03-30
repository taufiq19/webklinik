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
                <li class="breadcrumb-item active">Jadwal Dokter</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tambah Data
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="jabatandokter" class="form-label">Nama Dokter</label>
                            <select class="form-select" name="nama" id="nama" aria-label="Default select example">
                                <option selected>-- Pilih Dokter --</option>
                                <?php
                                $no = 1;
                                $ambil_data = $host->query("SELECT * FROM dokter");
                                // $ambil_data = $host->query("select * from dokter"); 
                                ?>
                                <?php while ($data = $ambil_data->fetch_assoc()) {
                                ?>
                                    <option value="<?php echo $data['id_dokter'] ?>"><?php echo $data['nama'] ?></option>
                                <?php } ?>

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="hari" class="form-label">Hari</label>
                            <select class="form-select" name="hari" id="hari" aria-label="Default select example">
                                <option selected>Pilih Hari</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jum'at">Jumat</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Ahad">Ahad</option>
                                <option value="Setiap Hari">Setiap Hari</option>
                                <option value="Senin - Jumat">Senin - Jum'at</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="waktu" class="form-label">Waktu</label>
                            <input type="text" name="waktu" class="form-control" id="waktu" aria-describedby="">
                        </div>
                        <div class="mb-3">
                            <label for="lokasi" class="form-label">Lokasi</label>
                            <select class="form-select" name="lokasi" id="lokasi" aria-label="Default select example">
                                <option selected>Pilih Lokasi</option>
                                <option value="1">Klinik Utama Sitti Khadijah Parepare</option>
                                <option value="2">Lainnya</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="ketgambar" class="form-label">Keterangan</label>
                            <input type="" class="form-control" id="ket" name="ket" aria-describedby="">
                        </div>
                        <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                        <button type="submit" class="btn btn-primary">Batal</button>
                    </form>
                    <?php
                    if (isset($_POST['save'])) {

                        $result = mysqli_query($host, "INSERT INTO jadwal_dokter(id_dokter, hari, waktu, lokasi, keterangan) values('$_POST[nama]','$_POST[hari]','$_POST[waktu]','$_POST[lokasi]','$_POST[ket]')");
                        // cek hasil query
                        if (!$result) {
                            die('Query Error : ' . mysqli_errno($host) .
                                ' - ' . mysqli_error($host));
                        } else {
                            echo "<div class='alert alert-success text-center'>Berhasil Disimpan</div>";
                            echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=jadwaldokter'>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>