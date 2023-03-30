<?php
if (!isset($_SESSION['admin']) or empty($_SESSION['admin'])) {
    //echo " <script>location:='proses/login.php'</script>";
    header('location:../login.php');
    exit();
}
$id_admin = $_SESSION['admin']['id_admin'];
$ambil = $host->query("select * from lab where id_lab = '$_GET[id_lab]'");
$data = $ambil->fetch_assoc();
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">User Interface</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Laboratorium</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Ubah Data
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="namagambar" class="form-label">Jenis Pemeriksaan</label>
                            <input type="text" class="form-control" name="jenis_pemeriksaan" value="<?php echo $data['jenis_pemeriksaan'] ?>" id="jenis_pemeriksaan" aria-describedby="">
                        </div>
                        <div class="input-group mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="number" name="harga" id="harga" value="<?php echo $data['harga'] ?>" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-text">,-00</span>
                            </div>
                        </div>
                        <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                        <button type="submit" class="btn btn-primary">Batal</button>
                    </form>
                    <?php
                    if (isset($_POST['save'])) {
                        $result = mysqli_query($host, "UPDATE lab SET jenis_pemeriksaan = '$_POST[jenis_pemeriksaan]',harga = '$_POST[harga]' WHERE id_lab='$_GET[id_lab]'");

                        // cek hasil query
                        if (!$result) {
                            die('Query Error : ' . mysqli_errno($host) .
                                ' - ' . mysqli_error($host));
                        } else {
                            echo "<div class='alert alert-success text-center'>Berhasil Disimpan</div>";
                            echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=lab'>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>