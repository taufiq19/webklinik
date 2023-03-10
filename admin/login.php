<?php

include "koneksi/konek.php";
session_start();
if (isset($_SESSION['admin'])) {
    echo " <script>location:='index.php'</script>";
    header('location:index.php');
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
    <title>Login - KLINIK SITTI KHADIJAH Admin</title>
    <link rel="shortcut icon" type="image/x-icon" href="../image/LOGO ST KHADIJAH.png" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@700&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-info bg-opacity-25">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container mt-5">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-12 mb-5 text-center" style="font-family: 'Jura', sans-serif;">
                            <h1 class="text-uppercase">selamat datang</h1>
                            <h2 class="text-uppercase">halaman login admin</h2>
                        </div>
                        <div class="col-md-9 col-lg-6 col-xl-5 mt-5">
                            <img src="gambar/LOGO ST KHADIJAH.png" class="img-fluid" style="width: 300px;" alt="Logo Klinik">
                        </div>
                        <div class="col-md-8 col-lg-6 col-xl-4 mt-5">
                            <form method="POST">
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example3" class="form-control form-control-lg" name="username" placeholder="Masukkan Username" />
                                    <label class="form-label" for="form3Example3">Username</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-3">
                                    <input type="password" id="form3Example4" class="form-control form-control-lg" name="password" placeholder="Masukkan password" />
                                    <label class="form-label" for="form3Example4">Password</label>
                                </div>



                                <div class="text-center text-lg-start mb-3 mt-4 pt-2">
                                    <button class="btn btn-primary btn-lg" name="login" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                                    <!-- <p class="small fw-bold mt-2 pt-1 mb-0">Belum Punya Akun? <a href="register.html" class="link-primary">Daftar</a></p> -->
                                </div>
                                <!-- <button class="btn btn-ok btn-user btn-info btn-block mb-3" name="login">Login</button> -->

                            </form>

                            <?php
                            if (isset($_POST['login'])) {
                                $ambil = $host->query("SELECT * from admin where username = '$_POST[username]' AND password='$_POST[password]'");
                                $sukses = $ambil->num_rows;
                                if ($sukses == 1) {
                                    $_SESSION['admin'] = $ambil->fetch_assoc();

                                    echo "<div class='alert alert-success'>Login Sukses</div>";
                                    echo "<meta http-equiv='refresh' content='1;url=index.php'>";
                                } else {
                                    echo "<div class='alert alert-danger'>Login Gagal</div>";
                                    echo "<meta http-equiv='refresh' content='1;url='>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-center small">
                        <div class="text-muted">Copyright &copy; <i class="fa fa-heartbeat" style="color: orange"></i>
                            KU-ST KHADIJAH</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>

</html>