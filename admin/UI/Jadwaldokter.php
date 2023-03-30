<?php 
if (!isset($_SESSION['admin']) or empty($_SESSION['admin'])) {
    //echo " <script>location:='proses/login.php'</script>";
    header('location:../login.php');
    exit();
}
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">User Interface</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Jadwal Dokter</li>
            </ol>

            <h2 class="accordion-header" id="flush-headingOne">
                <a href="index.php?halaman=tambahjadwal"><button type="button" class="btn btn-primary btn-lg mb-4"><i class="bi bi-plus-circle"></i> Tambah Data</button></a>
            </h2>

            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Daftar Jadwal
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Dokter</th>
                                <th>Jabatan</th>
                                <th>Hari</th>
                                <th>Waktu</th>
                                <th>Lokasi</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $ambil_data = $host->query("SELECT * from jadwal_dokter JOIN dokter ON jadwal_dokter.id_dokter = dokter.id_dokter");
                            // $ambil_data = $host->query("select * from dokter"); 
                            ?>
                            <?php while ($data = $ambil_data->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $data['nama'] ?></td>
                                    <td><?php echo $data['jabatan'] ?></td>
                                    <td><?php echo $data['hari'] ?></td>
                                    <td><?php echo $data['waktu'] ?></td>
                                    <td><?php echo $data['lokasi'] ?></td>
                                    <td><?php echo $data['keterangan'] ?></td>
                                    <td>
                                        <form method="post" enctype="multipart/form-data">
                                            <input type="text" id="id_jadwal" name="id_jadwal" value="<?php echo $data['id_jadwal'] ?>" hidden>

                                            <button class="btn btn-danger mb-1" type="submit" name="hapus" onclick="return confirm('Yakin Hapus?')"><i class="bi bi-trash3"></i></button>
                                            <button class="btn btn-warning mb-1" type="submit" name="edit"><i class="bi bi-pencil-square"></i></button>

                                        </form>

                                    </td>
                                </tr>
                            <?php $no++;
                            }

                            if (isset($_POST['hapus'])) {
                                $host->query("delete from jadwal_dokter where id_jadwal = '$_POST[id_jadwal]'");
                                echo "<script> location='index.php?halaman=jadwaldokter'</script>";
                            } elseif (isset($_POST['edit'])) {
                                echo "<script> location='index.php?halaman=editjadwal&id_jadwal=$_POST[id_jadwal]'</script>";
                            }

                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>