<?php
$host = mysqli_connect("localhost", "root", "", "db_khadijah");
if ($host) {
} else {
  echo "Koneksi gagal!" . mysqli_connect_error();
  die();
}
