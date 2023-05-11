<?php
if (!isset($_SESSION['admin']) or empty($_SESSION['admin'])) {
    //echo " <script>location:='proses/login.php'</script>";
    header('location:../login.php');
    exit();
}
$id_admin = $_SESSION['admin']['id_admin'];
$ambil = $host->query("select * from pertanyaan_lab where id_p_lab = '$_GET[id_p_lab]'");
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
                    Tambah Pertanyaan
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="pertanyaan" class="form-label">Pertanyaan (?)</label>
                            <input type="text" class="form-control" value="<?php echo $data['pertanyaan'] ?>" name="pertanyaan" id="pertanyaan" aria-describedby="">
                        </div>
                        <div class="mb-3">
                            <label for="jawab" class="form-label">Jawab</label>
                            <textarea class="form-control" name="jawab" id="jawab" cols="30" rows="10"><?php echo $data['jawab'] ?></textarea>
                        </div>

                        <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                        <button type="submit" class="btn btn-primary">Batal</button>
                    </form>
                    <?php
                    if (isset($_POST['save'])) {

                        $result = mysqli_query($host, "UPDATE pertanyaan_lab SET pertanyaan = '$_POST[pertanyaan]',jawab = '$_POST[jawab]' WHERE id_p_lab='$_GET[id_p_lab]'");

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