<?php
include "../config/koneksi.php";
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$d_tgl_lomba = $_POST['d_tgl_lomba'];
$m_tgl_lomba = $_POST['m_tgl_lomba'];
$y_tgl_lomba = $_POST['y_tgl_lomba'];
$time = $_POST['time'];
$deskripsi = $_POST['deskripsi'];
$tgl_lomba = "$y_tgl_lomba-$m_tgl_lomba-$d_tgl_lomba";
$x=0;
$query = mysqli_query($konek, "SELECT * FROM perlombaan where TANGGAL_PERLOMBAAN='".$tgl_lomba."'");
while($row=mysqli_fetch_array($query)){
	$x=$x+1;
}

$kd_lomba = "LOM$y_tgl_lomba$m_tgl_lomba$x";
	mysqli_query($konek, "INSERT INTO perlombaan VALUES('$kd_lomba','$kategori','$judul','$tgl_lomba','$time','$deskripsi')");
	echo"<script>alert('Berhasil menambah lomba!!')</script>";
	echo"<script>document.location='lomba.php'</script>";
?>