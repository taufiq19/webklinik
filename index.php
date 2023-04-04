<!-- <div class="content-wrapper"> -->

<?php
if (isset($_GET['halaman'])) {
  if ($_GET['halaman'] == "isiartikel") {
    include 'header2.php';
    include 'isi-artikel.php';
  } elseif ($_GET['halaman'] == "fasilitas") {
    include 'header2.php';
    include 'UI/fasilitas.php';
    include 'menufloat.php';
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
<?php
include 'footer.php';
include 'menufloat.php';
?>
<!-- <link rel="stylesheet" type="text/css" href=""> -->