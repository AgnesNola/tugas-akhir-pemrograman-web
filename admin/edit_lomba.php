<?php
include "header.php";
?>
<div id="main-tengah">
	<div class="batas">
		
		<h1>Edit Lomba</h1>
		<h2>Masukkan data yang baru</h2>
		<div class="ijo" style="height:5px;width:100%;"></div>
		<br>
		<div align="center">
		<form method="post" action="p_edit_lomba.php" enctype="multipart/form-data">
		
		<input type="hidden" name="id" value="<?php echo $id = $_GET['id_lomba']; ?>" readonly>
		<table>
			<tr>
				<td width="48%">
				Judul Lomba
				</td>
				<td>
				<?php
				try { $str_Query = "SELECT NAMA_PERLOMBAAN FROM perlombaan WHERE KD_PERLOMBAAN='" . $id = $_GET['id_lomba'] ."'"; $str_final_Query =  $my_koneksi->prepare($str_Query); 
				$str_final_Query->execute();      
				} catch (PDOException $e) {  
					die("Error: ".$e->getMessage()); 
				} 
				$hasil = $str_final_Query->fetch(); 
				?>
				<?php
				//$query = mysqli_query($konek, "SELECT NAMA_PERLOMBAAN FROM perlombaan WHERE KD_PERLOMBAAN='" . $id = $_GET['id_lomba'] ."'");
				//while($judul=mysqli_fetch_array($query)){
				//	?>
					<input type="text" name="judul" value="<?php echo $hasil[0]; ?>" style="width:70%;" required/>
					<?php
				//}
				?>
				
				</td>
			</tr>
			<tr>
				<td>
				Kategori
				</td>
				<td>
				<?php
				try { $str_Query = "SELECT kategori_perlombaan.NAMA_KATEGORI FROM perlombaan,kategori_perlombaan WHERE perlombaan.KD_KATEGORI=kategori_perlombaan.KD_KATEGORI AND perlombaan.KD_PERLOMBAAN='" . $id = $_GET['id_lomba'] ."'"; $str_final_Query =  $my_koneksi->prepare($str_Query); 
				$str_final_Query->execute();      
				} catch (PDOException $e) {  
					die("Error: ".$e->getMessage()); 
				} 
				$hasil = $str_final_Query->fetch(); 
				?>
				<?php
				//$query = mysqli_query($konek, "SELECT kategori_perlombaan.NAMA_KATEGORI FROM perlombaan,kategori_perlombaan WHERE perlombaan.KD_KATEGORI=kategori_perlombaan.KD_KATEGORI AND perlombaan.KD_PERLOMBAAN='" . $id = $_GET['id_lomba'] ."'");
				//while($judul=mysqli_fetch_array($query)){
				//	?>
					<select name="kategori" id="select" value="<?php echo $hasil[0]; ?>">
					<?php
				//}
				//?>
				<?php
				try { $str_Query = "SELECT * FROM kategori_perlombaan"; 
				$str_final_Query =  $my_koneksi->prepare($str_Query); 
				$str_final_Query->execute();      
				} catch (PDOException $e) {  
					die("Error: ".$e->getMessage()); 
				} 
				$hasil = $str_final_Query->fetch();
				//$query = mysqli_query($konek, "SELECT * FROM kategori_perlombaan");
				//while($row=mysqli_fetch_array($query)){
					echo "<option value='".$hasil['KD_KATEGORI']."'>".$hasil['NAMA_KATEGORI']."</option>";
				//}
				?>
				</select>
				</td>
			</tr>
			<tr>
				<td>
				Tanggal perlombaan
				<?php
				try { $str_Query = "SELECT date(TANGGAL_PERLOMBAAN),month(TANGGAL_PERLOMBAAN),year(TANGGAL_PERLOMBAAN) FROM perlombaan WHERE KD_PERLOMBAAN='" . $id = $_GET['id_lomba'] ."'"; 
				$str_final_Query =  $my_koneksi->prepare($str_Query); 
				$str_final_Query->execute();      
				} catch (PDOException $e) {  
					die("Error: ".$e->getMessage()); 
				} 
				$date = $str_final_Query->fetch(); 
				$tanggal = $date[0];
					$bulan = $date[1];
					$tahun = $date[2];
					//$query = mysqli_query($konek, "SELECT date(TANGGAL_PERLOMBAAN),month(TANGGAL_PERLOMBAAN),year(TANGGAL_PERLOMBAAN) FROM //perlombaan WHERE KD_PERLOMBAAN='" . $id = $_GET['id_lomba'] ."'");
				//while($date=mysqli_fetch_array($query)){
				?>
				
					
				
				</td>
				<td>
				<select name="d_tgl_lomba" id="select" value="<?php echo $tanggal; ?>">
				<?php
				$d=1;
				while($d<=31){
				echo "<option value='$d'>$d</option>";
				$d++;
				}
				?>
				</select>
				<select name="m_tgl_lomba" id="select" value="<?php echo $bulan; ?>">
				<?php
				$m=1;
				while($m<=12){
				echo "<option value='$m'>$m</option>";
				$m++;
				}
				?>
				</select>
				<select name="y_tgl_lomba" id="select" value="<?php echo $tahun; ?>">
				<?php
				$y=2018;
				while($y<=2040){
				echo "<option value='$y'>$y</option>";
				$y++;
				}
				?>
				</select>
				</td>
			</tr>
			<tr>
				<td>
				Waktu perlombaan
				</td>
				<td>
				<?php
				try { $str_Query = "SELECT date(TANGGAL_PERLOMBAAN),month(TANGGAL_PERLOMBAAN),year(TANGGAL_PERLOMBAAN) FROM perlombaan WHERE KD_PERLOMBAAN='" . $id = $_GET['id_lomba'] ."'"; 
				$str_final_Query =  $my_koneksi->prepare($str_Query); 
				$str_final_Query->execute();      
				} catch (PDOException $e) {  
					die("Error: ".$e->getMessage()); 
				} 
				$hasil = $str_final_Query->fetch(); 
				?>
				<?php
				//$query = mysqli_query($konek, "SELECT DESKRIPSI_PERLOMBAAN FROM perlombaan WHERE KD_PERLOMBAAN='" . $id = $_GET['id_lomba'] ."'");
				//while($waktu=mysqli_fetch_array($query)){
					?>
					<input type="time" name="time" value="<?php $date = date("H:i", strtotime($hasil[0])); echo "$date"; ?>"/>
					<?php
				//}
				?>
				
				</td>
			</tr>
			<tr>
				<td>
				Deskripsi
				</td>
				<td>
				<?php
				try { $str_Query = "SELECT DESKRIPSI_PERLOMBAAN FROM perlombaan WHERE KD_PERLOMBAAN='" . $id = $_GET['id_lomba'] ."'"; 
				$str_final_Query =  $my_koneksi->prepare($str_Query); 
				$str_final_Query->execute();      
				} catch (PDOException $e) {  
					die("Error: ".$e->getMessage()); 
				} 
				$hasil = $str_final_Query->fetch(); 
				?>
				<?php
				//$query = mysqli_query($konek, "SELECT DESKRIPSI_PERLOMBAAN FROM perlombaan WHERE KD_PERLOMBAAN='" . $id = $_GET['id_lomba'] ."'");
				//while($judul=mysqli_fetch_array($query)){
				//	$deskripsi = $judul[0];
					?>
					<textarea name="deskripsi" id="deskripsi" cols="45" rows="5" ><?php echo htmlspecialchars($hasil[0]); ?></textarea>
					<?php
				//}
				?>
				
				</td>
			</tr>
			<tr>
				<td colspan="2">
				<center>
					<button style="width:26%;decoration:none;">Simpan</button>
				</center>
				</td>
			</tr>
		</table>
		</form
		</div>
		
	</div>
</div>
<?php
include "footer.php";
?>