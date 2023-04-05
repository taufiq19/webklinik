<!-- <div class="content-wrapper"> -->

<?php
if (isset($_GET['halaman'])) {
  if ($_GET['halaman'] == "isiartikel") {
    include 'header2.php';
    include 'isi-artikel.php';
  } elseif ($_GET['halaman'] == "fasilitas") {
    include 'header2.php';
    include 'fasilitas/fasilitas.php';
  } elseif ($_GET['halaman'] == "dokter") {
    include 'header2.php';
    include 'dokter/daftar-dokter.php';
  } elseif ($_GET['halaman'] == "jadwal-dokter") {
    include 'header2.php';
    include 'dokter/jadwal-dokter.php';
  } elseif ($_GET['halaman'] == "produk") {
    include 'header2.php';
    include 'layanan/konsul-apotik.php';
  } elseif ($_GET['halaman'] == "det-produk") {
    include 'header2.php';
    include 'obatapotik/penjelasan-obat.php';
  } elseif ($_GET['halaman'] == "tambahartikel") {
    include 'header2.php';
    include 'Proses/tambahartikel.php';
  }
} else {
  include 'header.php';
  include 'home.php';
}
?>

<!-- </div> -->
<?php include 'footer.php' ?>
<!-- <link rel="stylesheet" type="text/css" href=""> -->