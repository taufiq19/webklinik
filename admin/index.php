<?php include 'header.php' ?>

<!-- <div class="content-wrapper"> -->

<?php
if (isset($_GET['halaman'])) {
    if ($_GET['halaman'] == "artikel") {
        include 'UI/artikel.php';
    } elseif ($_GET['halaman'] == "fasilitas") {
        include 'UI/fasilitas.php';
    } elseif ($_GET['halaman'] == "dokter") {
        include 'UI/dokter.php';
    } elseif ($_GET['halaman'] == "jadwaldokter") {
        include 'UI/jadwaldokter.php';
    } elseif ($_GET['halaman'] == "lab") {
        include 'UI/lab.php';
    } elseif ($_GET['halaman'] == "mcu") {
        include 'UI/mcu.php';
    } elseif ($_GET['halaman'] == "alurpelayanan") {
        include 'UI/alurpelayanan.php';
    } elseif ($_GET['halaman'] == "produk") {
        include 'UI/produkapotik.php';
    } elseif ($_GET['halaman'] == "deskripsiproduk") {
        include 'UI/deskripsiproduk.php';
    } elseif ($_GET['halaman'] == "sejarah") {
        include 'UI/sejarah.php';
    } elseif ($_GET['halaman'] == "komitmen") {
        include 'UI/komitmentujuan.php';
    } elseif ($_GET['halaman'] == "visimisi") {
        include 'UI/visimisi.php';
    } elseif ($_GET['halaman'] == "qna") {
        include 'UI/qna.php';
    } elseif ($_GET['halaman'] == "kritik") {
        include 'UI/kritiksaran.php';
    } elseif ($_GET['halaman'] == "kontak") {
        include 'UI/kontak.php';
    } elseif ($_GET['halaman'] == "visimisi") {
        include 'UI/visimisi.php';
    } elseif ($_GET['halaman'] == "visimisi") {
        include 'UI/visimisi.php';
    } elseif ($_GET['halaman'] == "visimisi") {
        include 'UI/visimisi.php';
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