<?php
if (!isset($_SESSION['admin']) or empty($_SESSION['admin'])) {
    //echo " <script>location:='proses/login.php'</script>";
    header('location:../login.php');
    exit();
}
$id_admin = $_SESSION['admin']['id_admin'];
$ambil_data = $host->query("SELECT * from jadwal_dokter JOIN dokter ON jadwal_dokter.id_dokter = dokter.id_dokter WHERE id_jadwal = '$_GET[id_jadwal]'");
$data = $ambil_data->fetch_assoc();
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
                    Ubah Data
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="jabatandokter" class="form-label">Nama Dokter</label>
                            <select class="form-select" name="nama" id="nama" aria-label="Default select example">
                                <option selected>-- Pilih Dokter --</option>
                                <?php
                                $no = 1;
                                $ambil_data2 = $host->query("SELECT * FROM dokter");
                                // $ambil_data = $host->query("select * from dokter"); 
                                ?>
                                <?php while ($data2 = $ambil_data2->fetch_assoc()) {
                                ?>
                                    <?php
                                    if ($data['id_dokter'] == $data2['id_dokter']) {
                                    ?>
                                        <option selected value="<?php echo $data2['id_dokter'] ?>"><?php echo $data2['nama'] ?></option>
                                    <?php
                                    } else {
                                    ?>
                                        <option value="<?php echo $data2['id_dokter'] ?>"><?php echo $data2['nama'] ?></option>
                                <?php }
                                } ?>

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="hari" class="form-label">Hari</label>
                            <select class="form-select" name="hari" id="hari" aria-label="Default select example">
                                <option selected>Pilih Hari</option>
                                <option value="Senin" <?= $data['hari'] == 'Senin' ? ' selected="selected"' : ''; ?>>Senin</option>
                                <option value="Selasa" <?= $data['hari'] == 'Selasa' ? ' selected="selected"' : ''; ?>>Selasa</option>
                                <option value="Rabu" <?= $data['hari'] == 'Rabu' ? ' selected="selected"' : ''; ?>>Rabu</option>
                                <option value="Kamis" <?= $data['hari'] == 'Kamis' ? ' selected="selected"' : ''; ?>>Kamis</option>
                                <option value="Jumat" <?= $data['hari'] == 'Jumat' ? ' selected="selected"' : ''; ?>>Jum'at</option>
                                <option value="Sabtu" <?= $data['hari'] == 'Sabtu' ? ' selected="selected"' : ''; ?>>Sabtu</option>
                                <option value="Ahad" <?= $data['hari'] == 'Ahad' ? ' selected="selected"' : ''; ?>>Ahad</option>
                                <option value="Setiap Hari" <?= $data['hari'] == 'Setiap Hari' ? ' selected="selected"' : ''; ?>>Setiap Hari</option>
                                <option value="Senin - Jumat" <?= $data['hari'] == 'Senin - Jumat' ? ' selected="selected"' : ''; ?>>Senin - Jum'at</option>
                                <option value="Lainnya" <?= $data['hari'] == 'Lainnya' ? ' selected="selected"' : ''; ?>>Lainnya</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="waktu" class="form-label">Waktu</label>
                            <input type="text" name="waktu" value=" <?php echo $data['waktu'] ?> " class="form-control" id="waktu" aria-describedby="">
                        </div>
                        <div class="mb-3">
                            <label for="lokasi" class="form-label">Lokasi</label>
                            <select class="form-select" name="lokasi" id="lokasi" aria-label="Default select example">
                                <option selected>Pilih Lokasi</option>
                                <option value="1" <?= $data['lokasi'] == '1' ? ' selected="selected"' : ''; ?>>Klinik Utama Sitti Khadijah Parepare</option>
                                <option value="2" <?= $data['lokasi'] == '2' ? ' selected="selected"' : ''; ?>>Lainnya</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="ketgambar" class="form-label">Keterangan</label>
                            <input type="" class="form-control" value=" <?php echo $data['waktu'] ?> " id="ket" name="ket" aria-describedby="">
                        </div>
                        <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                        <button type="submit" class="btn btn-primary">Batal</button>
                    </form>
                    <?php
                    if (isset($_POST['save'])) {

                        $result = mysqli_query($host, "INSERT INTO jadwal_dokter(id_dokter, hari, waktu, lokasi, keterangan) values('$_POST[nama]','$_POST[hari]','$_POST[waktu]','$_POST[lokasi]','$_POST[ket]')");
                        $result = mysqli_query($host, "UPDATE jadwal_dokter SET id_dokter = '$_POST[nama]',hari = '$_POST[hari]',waktu = '$_POST[waktu]',lokasi = '$_POST[lokasi]',keterangan = '$_POST[keterangan]' WHERE id_jadwal='$_GET[id_jadwal]'");

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