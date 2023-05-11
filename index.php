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
  } elseif ($_GET['halaman'] == "spdalam") {
    include 'header2.php';
    include 'spesialisasi/sp-dalam.php';
  } elseif ($_GET['halaman'] == "spanak") {
    include 'header2.php';
    include 'spesialisasi/sp-anak.php';
  } elseif ($_GET['halaman'] == "spbedah") {
    include 'header2.php';
    include 'spesialisasi/sp-bedah.php';
  } elseif ($_GET['halaman'] == "spobgyn") {
    include 'header2.php';
    include 'spesialisasi/sp-obgyn.php';
  } elseif ($_GET['halaman'] == "mcu-umum") {
    include 'header2.php';
    include 'layanan/mcu-umum.php';
  } elseif ($_GET['halaman'] == "lab") {
    include 'header2.php';
    include 'layanan/lab.php';
  } elseif ($_GET['halaman'] == "po") {
    include 'header2.php';
    include 'layanan/po.php';
  } elseif ($_GET['halaman'] == "hub-kami") {
    include 'header2.php';
    include 'tentang/hub-kami.php';
  } elseif ($_GET['halaman'] == "profile") {
    include 'header2.php';
    include 'tentang/profil-klinik.php';
  }
} else {
  include 'header.php';
  include 'home.php';
}
?>

<!-- </div> -->
<?php include 'footer.php' ?>
<?php include 'menufloat.php' ?>
<!-- <link rel="stylesheet" type="text/css" href=""> -->