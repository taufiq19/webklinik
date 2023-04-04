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
                        <li class="breadcrumb-item active">Q & A</li>
                    </ol>

                    <h2 class="accordion-header" id="flush-headingOne">
                        <a href="../Proses/tambahq&a.php"><button type="button" class="btn btn-primary btn-lg mb-4"><i class="bi bi-plus-circle"></i> Tambah Data</button></a>
                    </h2>

                    <div class="card shadow-sm mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Daftar Pertanyaan
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pertanyaan</th>
                                        <th>Jawaban</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Dimanakah Lokasi Klinik Sitti Khadijah?</td>
                                        <td>Jl. Pettana Rajeng No.5 Kota Parepare Sulawesi Selatan</td>
                                        <td>
                                            <button class="btn btn-warning" type="submit"><i class="bi bi-pencil-square"></i></button>
                                            <button class="btn btn-danger" type="submit"><i class="bi bi-trash3"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>