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
                <li class="breadcrumb-item active">Medical Check Up</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tambah Data
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="jenis_paket" class="form-label">Jenis Paket</label>
                            <input type="text" name="jenis_paket" class="form-control" id="jenis_paket" aria-describedby="">
                        </div>
                        <div class="input-group mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="number" name="harga" id="harga" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-text">,-00</span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="jenis_pemeriksaan" class="form-label">Pemeriksaan</label>
                            <select class="form-select" name="jenis_pemeriksaan" id="jenis_pemeriksaan" aria-label="Default select example">
                                <option selected>Pilih Pemeriksaan</option>
                                <option value="Pemeriksaan GDS">Pemeriksaan GDS</option>
                                <option value="Pemeriksaan Urin">Pemeriksaan Urin</option>
                            </select>
                        </div>
                      
                        <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                        <button type="submit" class="btn btn-primary">Batal</button>
                    </form>
                    <?php
                    if (isset($_POST['save'])) {

                        $result = mysqli_query($host, "insert into mcu(jenis_paket, jenis_pemeriksaan, harga) values('$_POST[jenis_paket]','$_POST[jenis_pemeriksaan]','$_POST[harga]')");
                        // cek hasil query
                        if (!$result) {
                            die('Query Error : ' . mysqli_errno($host) .
                                ' - ' . mysqli_error($host));
                        } else {
                            echo "<div class='alert alert-success text-center'>Berhasil Disimpan</div>";
                            echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=mcu'>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>