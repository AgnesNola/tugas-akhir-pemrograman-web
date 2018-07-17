<?php
session_start();
include "config/koneksi.php";
$id_lomba = $_POST['id_lomba'];
$id_user = $_SESSION['id_user'];
$query = mysqli_query($konek,"INSERT INTO detail_perlombaan VALUES('".$id_lomba."','".$id_user."','0')");
echo"<script>alert('Pendaftaran sudah di proses!!)</script>";
echo"<script>document.location='index.php'</script>";
?>