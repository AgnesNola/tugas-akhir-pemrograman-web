<?php
include "../config/koneksi.php";
$id = $_GET['id_lomba'];
try { $str_Query =  "DELETE from perlombaan WHERE KD_PERLOMBAAN='$id'"; 
$str_final_Query =  $my_koneksi->prepare($str_Query); 
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