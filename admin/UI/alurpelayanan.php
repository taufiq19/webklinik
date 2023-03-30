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
                <li class="breadcrumb-item active">Alur Pelayanan</li>
            </ol>

            <h2 class="accordion-header" id="flush-headingOne">
                <a href="index.php?halaman=tambahalur"><button type="button" class="btn btn-primary btn-lg mb-4"><i class="bi bi-plus-circle"></i> Tambah Data</button></a>
            </h2>

            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Daftar Alur Pelayanan
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Nama Alur</th>
                                <th>Bagan Alur</th>
                                <th>Penjelasan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $ambil_data = $host->query("select * from alur_pelayanan  "); ?>
                            <?php while ($data = $ambil_data->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $data['nama_alur'] ?></td>
                                    <td>
                                        <img height="100" src="../image/alur-pelayanan/<?php echo $data['gambar'] ?>" alt="">
                                    </td>
                                    <td><?php echo $data['penjelasan'] ?></td>
                                    <td>
                                        <form method="post" enctype="multipart/form-data">
                                            <input type="text" id="id_alur" name="id_alur" value="<?php echo $data['id_alur'] ?>" hidden>

                                            <button class="btn btn-danger mb-1" type="submit" name="hapus" onclick="return confirm('Yakin Hapus?')"><i class="bi bi-trash3"></i></button>
                                            <button class="btn btn-warning mb-1" type="submit" name="edit"><i class="bi bi-pencil-square"></i></button>
                                        </form>
                                        <?php
                                        if (isset($_POST['hapus'])) {
                                            $host->query("delete from alur_pelayanan where id_alur = '$_POST[id_alur]'");
                                            echo "<script> location='index.php?halaman=alurpelayanan'</script>";
                                        } elseif (isset($_POST['edit'])) {
                                            echo "<script> location='index.php?halaman=editalur&id_alur=$_POST[id_alur]'</script>";
                                        }

                                        ?>
                                    </td>
                                </tr>
                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>