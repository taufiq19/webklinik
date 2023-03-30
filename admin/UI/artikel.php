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
                        <li class="breadcrumb-item active">Artikel</li>
                    </ol>

                    <h2 class="accordion-header" id="flush-headingOne">
                        <a href="index.php?halaman=tambahartikel"><button type="button" class="btn btn-primary btn-lg mb-4"><i class="bi bi-plus-circle"></i> Tambah Data</button></a>
                    </h2>

                    <div class="card shadow-sm mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Daftar Artikel
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Penulis</th>
                                        <th>Jenis Spesialis</th>
                                        <th>Judul Artikel</th>
                                        <th>Waktu Posting</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $ambil_data = $host->query("select * from berita join admin on berita.id_admin = admin.id_admin"); ?>
                                    <?php while ($data = $ambil_data->fetch_assoc()) {
                                    ?>
                                        <tr>
                                            <td>
                                                <?php echo $no ?>
                                            </td>
                                            <td>
                                                <?php echo $data['nama'] ?>
                                            </td>
                                            <td>
                                                <?php echo $data['jenis_spesialis'] ?>
                                            </td>
                                            <td>
                                                <?php echo $data['judul_artikel'] ?>
                                            </td>
                                            <td>
                                                <?php echo $data['tanggal'] ?>
                                            </td>
                                            <td>
                                                <?php
                                                $status = $data['status'];
                                                if ($status == "Y") {
                                                    echo "Berita Utama";
                                                } elseif ($status == "S") {
                                                    echo "disembunyikan";
                                                } else {
                                                    echo "Normal";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <form method="post" enctype="multipart/form-data">
                                                    <input type="text" id="id_berita" name="id_berita" value="<?php echo $data['id_berita'] ?>" hidden>

                                                    <button class="btn btn-danger" type="submit" name="hapus" onclick="return confirm('Yakin Hapus?')"><i class="bi bi-trash3"></i></button>
                                                    <button class="btn btn-warning" type="submit" name="edit"><i class="bi bi-pencil-square"></i></button>
                                                    <?php
                                                    if ($status == "S") {
                                                        echo '<button class="btn btn-primary" type="submit" name="tampilkan"><i class="bi bi-eye"></i></button>';
                                                    } else {
                                                        echo ' <button class="btn btn-secondary" type="submit" name="sembunyikan"><i class="bi bi-eye-slash"></i></button>';
                                                    }
                                                    ?>
                                                </form>

                                            </td>
                                            <!-- <td>
                                                <button class="btn btn-warning" type="submit"><i class="bi bi-pencil-square"></i></button>
                                                <button class="btn btn-danger" type="submit"><i class="bi bi-trash3"></i></button>
                                                <button class="btn btn-secondary" type="submit"><i class="bi bi-eye-slash"></i></button>
                                            </td> -->
                                        </tr>
                                        <?php $no++; ?>
                                    <?php  } ?>
                                    <?php
                                    if (isset($_POST['sembunyikan'])) {
                                        $result = mysqli_query($host, "UPDATE berita SET status = 'S' where id_berita='$_POST[id_berita]'");
                                        if (!$result) {
                                            die('Query Error : ' . mysqli_errno($host) .
                                                ' - ' . mysqli_error($host));
                                        } else {
                                            echo "<div class='alert alert-success text-center'>Artikel disembunyikan</div>";
                                            echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=artikel'>";
                                        }
                                    } elseif (isset($_POST['tampilkan'])) {
                                        $result = mysqli_query($host, "UPDATE berita SET status = 'T' where id_berita='$_POST[id_berita]'");
                                        if (!$result) {
                                            die('Query Error : ' . mysqli_errno($host) .
                                                ' - ' . mysqli_error($host));
                                        } else {
                                            echo "<div class='alert alert-success text-center'>Artikel di tampilkan</div>";
                                            echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=artikel'>";
                                        }
                                    } elseif (isset($_POST['hapus'])) {

                                        $host->query("delete from berita where id_berita = '$_POST[id_berita]'");
                                        echo "<script> location='index.php?halaman=artikel'</script>";
                                    } elseif (isset($_POST['edit'])) {
                                        echo "<script> location='index.php?halaman=editartikel&id_berita=$_POST[id_berita]'</script>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>