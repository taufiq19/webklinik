<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">User Interface</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Fasilitas Klinik</li>
            </ol>

            <h2 class="accordion-header" id="flush-headingOne">
                <a href="index.php?halaman=tambahfasilitas"><button type="button" class="btn btn-primary btn-lg mb-4"><i class="bi bi-plus-circle"></i> Tambah Data</button></a>
            </h2>

            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Daftar Fasilitas
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Unit</th>
                                <th>Jenis Fasilitas</th>
                                <!-- <th>Gambar</th> -->
                                <th>Isi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $ambil_data = $host->query("select * from fasilitas"); ?>
                            <?php while ($data = $ambil_data->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td>
                                        <?php echo $no ?>
                                    </td>
                                    <td>
                                        <?php echo $data['unit']; ?>
                                    </td>
                                    <td>
                                        <?php echo $data['jenisfasilitas'] ?>
                                    </td>
                                    <td>
                                        <?php echo $data['ketgambar'] ?>
                                    </td>
                                    <!-- <td>
                                        <img class="" height="100" src="../image/fasilitas/<?php echo $data['gambar'] ?>" alt="">
                                    </td> -->
                                    <td>
                                        <form method="post" enctype="multipart/form-data">
                                            <input type="text" id="id_fasilitas" name="id_fasilitas" value="<?php echo $data['id_fasilitas'] ?>" hidden>

                                            <button class="btn btn-danger mb-1" type="submit" name="hapus" onclick="return confirm('Yakin Hapus?')"><i class="bi bi-trash3"></i></button>
                                            <button class="btn btn-warning mb-1" type="submit" name="edit"><i class="bi bi-pencil-square"></i></button>
                                            <!-- <?php
                                                    if ($status == "S") {
                                                        echo '<button class="btn btn-primary    " type="submit" name="tampilkan"><i class="bi bi-eye"></i></button>';
                                                    } else {
                                                        echo ' <button class="btn btn-secondary" type="submit" name="sembunyikan"><i class="bi bi-eye-slash"></i></button>';
                                                    }
                                                    ?> -->
                                        </form>
                                        <?php
                                        if (isset($_POST['hapus'])) {
                                            $host->query("delete from fasilitas where id_fasilitas = '$_POST[id_fasilitas]'");
                                            echo "<script> location='index.php?halaman=fasilitas'</script>";
                                        } elseif (isset($_POST['edit'])) {
                                            echo "<script> location='index.php?halaman=editfasilitas&id_fasilitas=$_POST[id_fasilitas]'</script>";
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