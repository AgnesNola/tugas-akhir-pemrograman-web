<?php
include "../config/koneksi.php";
$id_lomba = $_POST['id_lomba'];
$pemenang = $_POST['pemenang'];
$juara = $_POST['juara'];
$query = mysqli_query($konek,"UPDATE detail_perlombaan SET RANK='".$juara."' WHERE KD_PERLOMBAAN='".$id_lomba."' AND KD_USER='".$pemenang."'");
echo"<script>alert('Pemenang sudah di proses!!)</script>";
echo"<script>document.location='lihat_peserta.php?id_lomba=".$id_lomba."'</script>";
?>