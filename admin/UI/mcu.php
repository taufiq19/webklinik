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
                <li class="breadcrumb-item active">Medical Check Up</li>
            </ol>

            <h2 class="accordion-header" id="flush-headingOne">
                <a href="index.php?halaman=tambahmcu"><button type="button" class="btn btn-primary btn-lg mb-4"><i class="bi bi-plus-circle"></i> Tambah Data</button></a>
            </h2>

            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Daftar Pemeriksaan
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Paket</th>
                                <th>Harga</th>
                                <th>Jenis Pemeriksaan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $ambil_data = $host->query("select * from mcu"); ?>
                            <?php while ($data = $ambil_data->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $data['jenis_paket'] ?></td>
                                    <td><?php echo $data['harga'] ?></td>
                                    <td><?php echo $data['jenis_pemeriksaan'] ?></td>
                                    <td>
                                        <form method="post" enctype="multipart/form-data">
                                            <input type="text" id="id_mcu" name="id_mcu" value="<?php echo $data['id_mcu'] ?>" hidden>

                                            <button class="btn btn-danger mb-1" type="submit" name="hapus" onclick="return confirm('Yakin Hapus?')"><i class="bi bi-trash3"></i></button>
                                            <button class="btn btn-warning mb-1" type="submit" name="edit"><i class="bi bi-pencil-square"></i></button>

                                        </form>
                                        <?php
                                        if (isset($_POST['hapus'])) {
                                            $host->query("delete from lab where id_mcu = '$_POST[id_mcu]'");
                                            echo "<script> location='index.php?halaman=lab'</script>";
                                        } elseif (isset($_POST['edit'])) {
                                            echo "<script> location='index.php?halaman=editmcu&id_mcu=$_POST[id_mcu]'</script>";
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