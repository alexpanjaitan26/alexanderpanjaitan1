<?php
include "koneksi.php";
$nomor = $_GET['nomormotor'];

mysqli_query($conn,"DELETE FROM daftarmotor WHERE nomormotor = '$nomor'");
header("location:informasi penduduk.php?pesan=input");
?>