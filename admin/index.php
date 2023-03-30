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
    } elseif ($_GET['halaman'] == "galeri") {
        include 'UI/galeri.php';
    } elseif ($_GET['halaman'] == "visimisi") {
        include 'UI/visimisi.php';
    } elseif ($_GET['halaman'] == "visimisi") {
        include 'UI/visimisi.php';
    } elseif ($_GET['halaman'] == "tambahartikel") {
        include 'Proses/tambahartikel.php';
    } elseif ($_GET['halaman'] == "editartikel") {
        include 'Proses/editartikel.php';
    } elseif ($_GET['halaman'] == "tambahfasilitas") {
        include 'Proses/tambahfasilitas.php';
    } elseif ($_GET['halaman'] == "editfasilitas") {
        include 'Proses/editfasilitas.php';
    } elseif ($_GET['halaman'] == "tambahdokter") {
        include 'Proses/tambahdokter.php';
    } elseif ($_GET['halaman'] == "editdokter") {
        include 'Proses/editdokter.php';
    } elseif ($_GET['halaman'] == "tambahjadwal") {
        include 'Proses/tambahjadwaldokter.php';
    } elseif ($_GET['halaman'] == "editjadwal") {
        include 'Proses/editjadwal.php';
    } elseif ($_GET['halaman'] == "tambahlab") {
        include 'Proses/tambahlab.php';
    } elseif ($_GET['halaman'] == "editlab") {
        include 'Proses/editlab.php';
    } elseif ($_GET['halaman'] == "editmcu") {
        include 'Proses/editmcu.php';
    } elseif ($_GET['halaman'] == "tambahmcu") {
        include 'Proses/tambahmcu.php';
    } elseif ($_GET['halaman'] == "tambahalur") {
        include 'Proses/tambahalurpelayanan.php';
    } elseif ($_GET['halaman'] == "editalur") {
        include 'Proses/editalurpelayanan.php';
    } elseif ($_GET['halaman'] == "tambahprodukapotik") {
        include 'Proses/tambahprodukapotik.php';
    } elseif ($_GET['halaman'] == "editprodukapotik") {
        include 'Proses/editprodukapotik.php';
    }
} else {
    include 'home.php';
}
?>

<!-- </div> -->
<?php include 'footer.php' ?>
<!-- <link rel="stylesheet" type="text/css" href=""> -->