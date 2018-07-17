<?php
include "../config/koneksi.php";
$id = $_GET['id_lomba'];
mysqli_query($konek, "DELETE from perlombaan WHERE KD_PERLOMBAAN='$id'");
echo $id;
echo"<script>alert('Lomba berhasil dihapus!!')</script>";
echo"<script>document.location='lomba.php'</script>";
?>