<?php
if (!isset($_SESSION['admin']) or empty($_SESSION['admin'])) {
    //echo " <script>location:='proses/login.php'</script>";
    header('location:../login.php');
    exit();
}
$id_admin = $_SESSION['admin']['id_admin'];
$ambil = $host->query("select * from sejarah where id_sejarah = '1'");
$data = $ambil->fetch_assoc();
?>

<!-- Isi Dashboard -->
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">User Interface</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Sejarah Klinik</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    Sejarah Klinik
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-floating mb-3">
                            <div id="toolbar-container"></div>
                            <div class="border" id="editor">
                                <textarea class="ckeditor" id="ckedtor" name="sejarah"><?php echo $data['sejarah'] ?></textarea>
                            </div>
                        </div>
                        <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                        <button type="submit" class="btn btn-primary">Batal</button>
                    </form>
                    <?php
                    if (isset($_POST['save'])) {
                        $result = mysqli_query($host, "UPDATE sejarah SET sejarah = '$_POST[sejarah]' WHERE id_sejarah='1'");
                        // cek hasil query
                        if (!$result) {
                            die('Query Error : ' . mysqli_errno($host) .
                                ' - ' . mysqli_error($host));
                        } else {
                            echo "<div class='alert alert-success text-center'>Berhasil Disimpan</div>";
                            echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=sejarah'>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>