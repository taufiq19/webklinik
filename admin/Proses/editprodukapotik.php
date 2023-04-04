<?php
if (!isset($_SESSION['admin']) or empty($_SESSION['admin'])) {
    //echo " <script>location:='proses/login.php'</script>";
    header('location:../login.php');
    exit();
}
$id_admin = $_SESSION['admin']['id_admin'];
$ambil = $host->query("SELECT * FROM produk WHERE id_produk = '$_GET[id_produk]'");
$data = $ambil->fetch_assoc();
?>

<!-- Isi Dashboard -->
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">User Interface</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item ">Produk</li>
                <li class="breadcrumb-item active">Edit Produk</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tambah Data
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nama_produk" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" value="<?php echo $data['nama_produk'] ?>" id="nama_produk" name="nama_produk" aria-describedby="">
                        </div>
                        <div class="input-group mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="text" name="harga" value="<?php echo $data['harga'] ?>" id="harga" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-text">,-00</span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="kategori_produk" class="form-label">Katogori</label>
                            <select class="form-select" name="kategori_produk" id="kategori_produk" aria-label="Default select example">
                                <option selected>-- Pilih Kategori --</option>
                                <option value="Obat" <?= $data['kategori'] == 'Obat' ? ' selected="selected"' : ''; ?>>Obat</option>
                                <option value="Suplemen" <?= $data['kategori'] == 'Suplemen' ? ' selected="selected"' : ''; ?>>Suplemen</option>
                                <option value="Nutrisi" <?= $data['kategori'] == 'Nutrisi' ? ' selected="selected"' : ''; ?>>Nutrisi</option>
                                <option value="Herbal" <?= $data['kategori'] == 'Herbal' ? ' selected="selected"' : ''; ?>>Herbal</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="namagambar" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" value="<?php echo $data['deskripsi'] ?>" name="deskripsi" aria-describedby="">
                        </div>
                        <div class="mb-3">
                            <label for="namagambar" class="form-label">Komposisi</label>
                            <input type="" class="form-control" id="komposisi" name="komposisi" value="<?php echo $data['komposisi'] ?>" aria-describedby="">
                        </div>
                        <div class="mb-3">
                            <label for="jabatandokter" class="form-label">Kemasan</label>
                            <select class="form-select" name="kemasan" id="kemasan" aria-label="Default select example">
                                <option selected>Pilih Kemasan</option>
                                <option value="1">...</option>
                                <option value="2">...</option>
                                <option value="3">...</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="namagambar" class="form-label">Manfaat</label>
                            <input type="" class="form-control" id="manfaat" value="<?php echo $data['manfaat'] ?>" name="manfaat" aria-describedby="">
                        </div>

                        <div class="mb-3">
                            <label for="namagambar" class="form-label">Dosis</label>
                            <input type="" class="form-control" id="dosis" name="dosis" value="<?php echo $data['dosis'] ?>" aria-describedby="">
                        </div>
                        <div class="mb-3">
                            <label for="namagambar" class="form-label">Penyajian</label>
                            <input type="" class="form-control" id="penyajian" name="penyajian" value="<?php echo $data['penyajian'] ?>" aria-describedby="">
                        </div>
                        <div class="mb-3">
                            <label for="namagambar" class="form-label">Nama Standar MIMS</label>
                            <input type="" class="form-control" id="mims" name="mims" value="<?php echo $data['mims'] ?>" aria-describedby="">
                        </div>
                        <div class="mb-3">
                            <label for="namagambar" class="form-label">Nomor Izin Edar</label>
                            <input type="" class="form-control" id="izin_edar" name="izin_edar" value="<?php echo $data['izin_edar'] ?>" aria-describedby="">
                        </div>
                        <div class="mb-3">
                            <label for="jabatandokter" class="form-label">Golongan Obat</label>
                            <select class="form-select" name="golongan_obat" id="golongan_obat" aria-label="Default select example">
                                <option selected>Pilih Golongan</option>
                                <option value="1">...</option>
                                <option value="2">...</option>
                                <option value="3">...</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="ketgambar" class="form-label">Keterangan</label>
                            <input type="" class="form-control" id="ket" value="<?php echo $data['ket'] ?>"  name="ket" aria-describedby="">
                        </div>
                        <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                        <button type="submit" class="btn btn-primary">Batal</button>
                    </form>
                    <?php
                    if (isset($_POST['save'])) {
                        $result = mysqli_query($host, "UPDATE produk SET nama_produk = '$_POST[nama_produk]',kategori = '$_POST[kategori_produk]',harga = '$_POST[harga]',deskripsi = '$_POST[deskripsi]',komposisi = '$_POST[komposisi]',kemasan = '$_POST[kemasan]',manfaat = '$_POST[manfaat]',dosis = '$_POST[dosis]',penyajian = '$_POST[penyajian]', mims = '$_POST[mims]',izin_edar = '$_POST[izin_edar]',golongan_obat = '$_POST[golongan_obat]',ket = '$_POST[ket]' WHERE id_produk='$_GET[id_produk]'");
                        // cek hasil query
                        if (!$result) {
                            die('Query Error : ' . mysqli_errno($host) .
                                ' - ' . mysqli_error($host));
                        } else {
                            echo "<div class='alert alert-success text-center'>Berhasil Disimpan</div>";
                            echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>";
                        }
                    }

                    ?>
                </div>
            </div>
        </div>
    </main>