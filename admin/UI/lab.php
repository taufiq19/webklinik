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
                <li class="breadcrumb-item ">Pelayanan</li>
                <li class="breadcrumb-item active">Laboratorium</li>
            </ol>

            <h2 class="accordion-header" id="flush-headingOne">
                <a href="index.php?halaman=tambahlab"><button type="button" class="btn btn-primary btn-sm mb-2"><i class="bi bi-plus-circle"></i> Tambah Data</button></a>
            </h2>

            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Daftar Pemeriksaan
                </div>
                <div class="card-body">
                    <table id="" class="display ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Pemeriksaan</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $ambil_data = $host->query("select * from lab"); ?>
                            <?php while ($data = $ambil_data->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $data['jenis_pemeriksaan'] ?></td>
                                    <td>Rp<b><?php echo number_format($data['harga'], 2, ',', '.'); ?></b></td>
                                    <td>
                                        <form method="post" enctype="multipart/form-data">
                                            <input type="text" id="id_lab" name="id_lab" value="<?php echo $data['id_lab'] ?>" hidden>

                                            <button class="btn btn-danger mb-1" type="submit" name="hapus" onclick="return confirm('Yakin Hapus?')"><i class="bi bi-trash3"></i></button>
                                            <button class="btn btn-warning mb-1" type="submit" name="edit"><i class="bi bi-pencil-square"></i></button>

                                        </form>
                                        <?php
                                        if (isset($_POST['hapus'])) {
                                            $host->query("delete from lab where id_lab = '$_POST[id_lab]'");
                                            echo "<script> location='index.php?halaman=lab'</script>";
                                        } elseif (isset($_POST['edit'])) {
                                            echo "<script> location='index.php?halaman=editlab&id_lab=$_POST[id_lab]'</script>";
                                        }

                                        ?>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <br>
            <a href="index.php?halaman=tambahpertanyaanlab"><button type="button" class="btn btn-primary btn-sm mb-2"><i class="bi bi-plus-circle"></i> Tambah Pertanyaan</button></a>

            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Daftar Pertanyaan

                </div>
                <div class="card-body">
                    <table id="" class="display ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Pertanyaan</th>
                                <th>Jawaban</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $ambil_data = $host->query("select * from pertanyaan_lab"); ?>
                            <?php while ($data = $ambil_data->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $data['pertanyaan'] ?></td>
                                    <td><?php echo $data['jawab'] ?></td>
                                    <td>
                                        <form method="post" enctype="multipart/form-data">
                                            <input type="text" id="id_p_lab" name="id_p_lab" value="<?php echo $data['id_p_lab'] ?>" hidden>

                                            <button class="btn btn-danger mb-1" type="submit" name="sussu" onclick="return confirm('Yakin Hapus?')"><i class="bi bi-trash3"></i></button>
                                            <button class="btn btn-warning mb-1" type="submit" name="ubah"><i class="bi bi-pencil-square"></i></button>

                                        </form>
                                        <?php
                                        if (isset($_POST['sussu'])) {
                                            $host->query("delete from pertanyaan_lab where id_p_lab = '$_POST[id_p_lab]'");
                                            echo "<script> location='index.php?halaman=lab'</script>";
                                        } elseif (isset($_POST['ubah'])) {
                                            echo "<script> location='index.php?halaman=editplab&id_p_lab=$_POST[id_p_lab]'</script>";
                                        }

                                        ?>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>