<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">User Interface</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dokter</li>
            </ol>

            <h2 class="accordion-header" id="flush-headingOne">
                <a href="index.php?halaman=tambahdokter"><button type="button" class="btn btn-primary btn-lg mb-4"><i class="bi bi-plus-circle"></i> Tambah Data</button></a>
            </h2>

            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Daftar Dokter
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Nama Dokter</th>
                                <th>Jabatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $ambil_data = $host->query("select * from dokter"); ?>
                            <?php while ($data = $ambil_data->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td>
                                        <img height="100" src="../image/dokter/<?php echo $data['gambar'] ?>" alt="">
                                    </td>
                                    <td><?php echo $data['nama'] ?></td>
                                    <td><?php echo $data['jabatan'] ?></td>
                                    <td>
                                        <form method="post" enctype="multipart/form-data">
                                            <input type="text" id="id_dokter" name="id_dokter" value="<?php echo $data['id_dokter'] ?>" hidden>

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

                                        <!-- <button class="btn btn-warning" type="submit"><i class="bi bi-pencil-square"></i></button> -->
                                        <!-- <button class="btn btn-danger" type="submit"><i class="bi bi-trash3"></i></button> -->
                                    </td>
                                </tr>
                            <?php $no++;
                            } ?>
                        </tbody>

                        <?php
                        if (isset($_POST['hapus'])) {
                            $host->query("delete from dokter where id_dokter = '$_POST[id_dokter]'");
                            echo "<script> location='index.php?halaman=dokter'</script>";
                        } elseif (isset($_POST['edit'])) {
                            echo "<script> location='index.php?halaman=editdokter&id_dokter=$_POST[id_dokter]'</script>";
                        }

                        ?>

                    </table>
                </div>
            </div>
        </div>
    </main>