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
                <li class="breadcrumb-item active">Kritik & Saran</li>
            </ol>

            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    Daftar Kritik & Saran Masuk
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No Telp</th>
                                <th>Kritik / Saran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $ambil_data = $host->query("SELECT * FROM kritiksaran ORDER BY waktu ASC"); ?>
                            <?php while ($data = $ambil_data->fetch_assoc()) {
                            ?>
                                <tr>
                                    <th><?php echo $no ?></th>
                                    <th><?php echo $data['nama'] ?></th>
                                    <th><?php echo $data['email'] ?></th>
                                    <th><?php echo $data['whatsapp'] ?></th>
                                    <th><?php echo $data['pesan'] ?></th>

                                    <td>
                                        <form method="post" enctype="multipart/form-data">
                                            <input type="text" id="id_kritik" name="id_kritik" value="<?php echo $data['id_kritik'] ?>" hidden>

                                            <button class="btn btn-danger mb-1" type="submit" name="sussu" onclick="return confirm('Yakin Hapus?')"><i class="bi bi-trash3"></i></button>

                                        </form>
                                        <?php
                                        if (isset($_POST['sussu'])) {
                                            $host->query("delete from kritiksaran where id_kritik = '$_POST[id_kritik]'");
                                            echo "<script> location='index.php?halaman=kritik'</script>";
                                        } 

                                        ?>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>