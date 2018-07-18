<?php
include "../config/koneksi.php";
$id = $_GET['id_lomba'];
try { $str_Query = "SELECT kategori_perlombaan.NAMA_KATEGORI FROM perlombaan,kategori_perlombaan WHERE perlombaan.KD_KATEGORI=kategori_perlombaan.KD_KATEGORI AND perlombaan.KD_PERLOMBAAN='" . $id = $_GET['id_lomba'] ."'"; $str_final_Query =  $my_koneksi->prepare($str_Query); 
				$str_final_Query->execute();      
				} catch (PDOException $e) {  
					die("Error: ".$e->getMessage()); 
				} 
				//$hasil = $str_final_Query->fetch(); 
//mysqli_query($konek, "DELETE from perlombaan WHERE KD_PERLOMBAAN='$id'");
//echo $id;
echo"<script>alert('Lomba berhasil dihapus!!')</script>";
echo"<script>document.location='lomba.php'</script>";
?>