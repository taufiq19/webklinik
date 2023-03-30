<?php 
if (!isset($_SESSION['admin']) or empty($_SESSION['admin'])) {
    //echo " <script>location:='proses/login.php'</script>";
    header('location:../login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>KLINIK SITTI KHADIJAH | ADMIN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../image/LOGO ST KHADIJAH.png" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/decoupled-document/ckeditor.js"></script>
</head>

<body class="sb-nav-fixed">

    <!-- Bagian Navbar -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">KU-ST KHADIJAH PAREPARE</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Masukkan Kata Kunci" aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-secondary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- Akhir Bagian Navbar -->

    <!-- Header -->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Dashboard</div>
                        <a class="nav-link" href="../index.html">
                            <div class="sb-nav-link-icon"><i class="bi bi-house"></i></div>
                            Home
                        </a>

                        <div class="sb-sidenav-menu-heading">User Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsesatu" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="bi bi-laptop"></i></div>
                            Beranda
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsesatu" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="../UI/galeri.php">Galeri</a>
                                <a class="nav-link" href="../UI/artikel.php">Artikel</a>
                            </nav>
                        </div>

                        <hr class="mx-3 my-0">

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsedua" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="bi bi-hospital"></i></div>
                            Fasilitas
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsedua" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="../UI/fasilitas.php">Fasilitas Klinik</a>
                            </nav>
                        </div>

                        <hr class="mx-3 my-0">

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsetiga" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="bi bi-person-vcard"></i></div>
                            Dokter
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsetiga" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="../UI/dokter.php">Daftar Dokter</a>
                                <a class="nav-link" href="../UI/Jadwaldokter.php">Jadwal Dokter</a>
                            </nav>
                        </div>

                        <hr class="mx-3 my-0">

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseempat" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="bi bi-list-check"></i></div>
                            Pelayanan
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseempat" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="../UI/lab.php">Laboratorium</a>
                                <a class="nav-link" href="../UI/mcu.php">MCU</a>
                                <a class="nav-link" href="../UI/alurpelayanan.php">Alur Pelayanan</a>
                            </nav>
                        </div>

                        <hr class="mx-3 my-0">

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapselima" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="bi bi-capsule"></i></div>
                            Apotik
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapselima" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="../UI/produkapotik.php">Tambah Produk</a>
                                <a class="nav-link" href="../UI/deskripsiproduk.php">Deskripsi Produk</a>
                            </nav>
                        </div>

                        <hr class="mx-3 my-0">

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseenam" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="bi bi-person-badge-fill"></i></div>
                            Profil
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseenam" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="../UI/sejarah.php">Sejarah</a>
                                <a class="nav-link" href="../UI/komitmentujuan.php">Komitmen & Tujuan</a>
                                <a class="nav-link" href="../UI/visimisi.php">Visi & Misi</a>
                            </nav>
                        </div>

                        <hr class="mx-3 my-0">

                        <a class="nav-link" href="../UI/q&a.php">
                            <div class="sb-nav-link-icon"><i class="bi bi-question-circle"></i></div>
                            Q & A
                        </a>

                        <hr class="mx-3 my-0">

                        <a class="nav-link" href="../UI/kritiksaran.php">
                            <div class="sb-nav-link-icon"><i class="bi bi-chat-fill"></i></div>
                            Kritik & Saran
                        </a>

                        <hr class="mx-3 my-0">

                        <a class="nav-link" href="../UI/kontak.php">
                            <div class="sb-nav-link-icon"><i class="bi bi-telephone"></i></div>
                            Kontak
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Akhir Header -->

        <!-- Isi Dashboard -->
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">User Interface</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Visi & Misi</li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header">
                            Visi & Misi Klinik
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-floating mb-3">
                                    <div id="toolbar-container"></div>
                                    <div class="border" id="editor">
                                        <textarea class="form-control" placeholder="Sejarah" id="floatingTextarea2" style="height: 100px"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="submit" class="btn btn-primary">Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <footer class=" py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-center small">
                        <div class="text-muted">Copyright &copy; <i class="fa fa-heartbeat" style="color: orange"></i>
                            KU-ST KHADIJAH</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../assets/demo/chart-area-demo.js"></script>
    <script src="../assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../js/datatables-simple-demo.js"></script>

    <!-- CK Editor -->
    <script>
        DecoupledEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                const toolbarContainer = document.querySelector('#toolbar-container');

                toolbarContainer.appendChild(editor.ui.view.toolbar.element);
            })
            .catch(error => {
                console.error(error);
            });
    </script>

</body>

</html>