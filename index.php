<?php
include 'header.php'
?>

<!-- <div class="content-wrapper"> -->

<?php
if (isset($_GET['halaman'])) {
  if ($_GET['halaman'] == "artikel") {
    include 'UI/artikel.php';
  } elseif ($_GET['halaman'] == "fasilitas") {
    include 'UI/fasilitas.php';
  } elseif ($_GET['halaman'] == "tambahartikel") {
    include 'Proses/tambahartikel.php';
  }
} else {
  include 'home.php';
}
?>

<!-- </div> -->
<?php include 'footer.php' ?>
<!-- <link rel="stylesheet" type="text/css" href=""> -->