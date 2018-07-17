<?php
include "../config/koneksi.php";
$id = $_POST['id'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$d_tgl_lomba = $_POST['d_tgl_lomba'];
$m_tgl_lomba = $_POST['m_tgl_lomba'];
$y_tgl_lomba = $_POST['y_tgl_lomba'];
$time = $_POST['time'];
$deskripsi = $_POST['deskripsi'];
$tgl_lomba = "$y_tgl_lomba-$m_tgl_lomba-$d_tgl_lomba";
mysqli_query($konek, "UPDATE perlombaan SET NAMA_PERLOMBAAN='$judul', KD_KATEGORI='$kategori', TANGGAL_PERLOMBAAN='$tgl_lomba', WAKTU_PERLOMBAAN='$time', DESKRIPSI_PERLOMBAAN='$deskripsi' WHERE KD_PERLOMBAAN='$id'");
echo"<script>alert('Lomba berhasil di-edit!!')</script>";
echo"<script>document.location='lomba.php'</script>";
?>