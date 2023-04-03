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
                        <li class="breadcrumb-item active">Deskripsi Produk</li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Tambah Data
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="namagambar" class="form-label">Deskripsi</label>
                                    <input type="" class="form-control" id="" aria-describedby="">
                                </div>
                                <div class="mb-3">
                                    <label for="namagambar" class="form-label">Komposisi</label>
                                    <input type="" class="form-control" id="" aria-describedby="">
                                </div>
                                <div class="mb-3">
                                    <label for="jabatandokter" class="form-label">Kemasan</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Pilih Kemasan</option>
                                        <option value="1">...</option>
                                        <option value="2">...</option>
                                        <option value="3">...</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="namagambar" class="form-label">Manfaat</label>
                                    <input type="" class="form-control" id="" aria-describedby="">
                                </div>
                                <div class="mb-3">
                                    <label for="namagambar" class="form-label">Kategori</label>
                                    <input type="" class="form-control" id="" aria-describedby="">
                                </div>
                                <div class="mb-3">
                                    <label for="namagambar" class="form-label">Dosis</label>
                                    <input type="" class="form-control" id="" aria-describedby="">
                                </div>
                                <div class="mb-3">
                                    <label for="namagambar" class="form-label">Penyajian</label>
                                    <input type="" class="form-control" id="" aria-describedby="">
                                </div>
                                <div class="mb-3">
                                    <label for="namagambar" class="form-label">Nama Standar MIMS</label>
                                    <input type="" class="form-control" id="" aria-describedby="">
                                </div>
                                <div class="mb-3">
                                    <label for="namagambar" class="form-label">Nomor Izin Edar</label>
                                    <input type="" class="form-control" id="" aria-describedby="">
                                </div>
                                <div class="mb-3">
                                    <label for="jabatandokter" class="form-label">Golongan Obat</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Pilih Golongan</option>
                                        <option value="1">...</option>
                                        <option value="2">...</option>
                                        <option value="3">...</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="ketgambar" class="form-label">Keterangan</label>
                                    <input type="" class="form-control" id="" aria-describedby="">
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="submit" class="btn btn-primary">Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
           