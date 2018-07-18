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
				try { $str_Query = "UPDATE perlombaan SET NAMA_PERLOMBAAN='$judul', KD_KATEGORI='$kategori', TANGGAL_PERLOMBAAN='$tgl_lomba', WAKTU_PERLOMBAAN='$time', DESKRIPSI_PERLOMBAAN='$deskripsi' WHERE KD_PERLOMBAAN='$id'"; 
				$str_final_Query =  $my_koneksi->prepare($str_Query); 
				$str_final_Query->execute();      
				echo"<script>alert('Lomba berhasil di-edit!!')</script>";
echo"<script>document.location='lomba.php'</script>";
				} catch (PDOException $e) {  
					die("Error: ".$e->getMessage()); 
				} 
				
//mysqli_query($konek, "UPDATE perlombaan SET NAMA_PERLOMBAAN='$judul', KD_KATEGORI='$kategori', TANGGAL_PERLOMBAAN='$tgl_lomba', WAKTU_PERLOMBAAN='$time', DESKRIPSI_PERLOMBAAN='$deskripsi' WHERE KD_PERLOMBAAN='$id'");

?>