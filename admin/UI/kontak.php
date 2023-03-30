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
                <li class="breadcrumb-item active">Kontak</li>
            </ol>

            <h2 class="accordion-header" id="flush-headingOne">
                <a href="../Proses/tambahkontak.php"><button type="button" class="btn btn-primary btn-lg mb-4"><i class="bi bi-pen"></i> Ubah Data</button></a>
            </h2>

            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    Kontak
                </div>
                <div class="card-body">
                    <div class="input-group input-group-lg mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-lg"><i class="bi bi-phone-flip"> IGD</i></span>
                        <input class="form-control" type="text" value="" aria-label="Disabled input example" disabled readonly>
                    </div>
                    <div class="input-group input-group-lg mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-lg"><i class="bi bi-telephone"> Call Center</i></span>
                        <input class="form-control" type="text" value="" aria-label="Disabled input example" disabled readonly>
                    </div>
                    <div class="input-group input-group-lg mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-lg"><i class="bi bi-phone"> Spesialis Interna</i></span>
                        <input class="form-control" type="text" value="" aria-label="Disabled input example" disabled readonly>
                    </div>
                    <div class="input-group input-group-lg mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-lg"><i class="bi bi-phone"> Spesialis Bedah</i></span>
                        <input class="form-control" type="text" value="" aria-label="Disabled input example" disabled readonly>
                    </div>
                    <div class="input-group input-group-lg mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-lg"><i class="bi bi-phone"> Spesialis Obgyn</i></span>
                        <input class="form-control" type="text" value="" aria-label="Disabled input example" disabled readonly>
                    </div>
                    <div class="input-group input-group-lg">
                        <span class="input-group-text" id="inputGroup-sizing-lg"><i class="bi bi-phone"> Spesialis Anak</i></span>
                        <input class="form-control" type="text" value="" aria-label="Disabled input example" disabled readonly>
                    </div>
                </div>
            </div>
        </div>
    </main>