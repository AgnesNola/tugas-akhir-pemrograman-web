<?php
include "header.php";
?>

<div id="main-tengah">
	<div class="batas">
		
		<h1>Daftar Perlombaan</h1>
		<div class="ijo" style="height:5px;width:100%;"></div>
		<br>
		<div align="center">
		<table id="tb-admin">
			<tr>
				<th>
				No
				</th>
				<th>
				Nama Perlombaan
				</th>
				<th>
				Kategori
				</th>
				<th>
				Tanggal
				</th>
				<th>
				Waktu
				</th>
				<th>
				Deskripsi
				</th>
				<th>
				Status
				</th>
				<th>
				Editing
				</th>
			</tr>
		<?php
		$batas=8;
		$p=@$_GET['p'];
		if(empty($p)){
			$p=1;
		}
		$of=$batas*($p-1);
		
				try { $str_Query = "SELECT * FROM perlombaan ORDER BY NAMA_PERLOMBAAN ASC LIMIT $of,$batas"; 
				$str_final_Query =  $my_koneksi->prepare($str_Query); 
				$str_final_Query->execute();      
				} catch (PDOException $e) {  
					die("Error: ".$e->getMessage()); 
				} 
				
				
		//$query = mysqli_query($konek, "SELECT * FROM perlombaan ORDER BY NAMA_PERLOMBAAN ASC LIMIT $of,$batas");
		$j=1;
		while($row = $str_final_Query->fetch()){
		if($j%2!=0){
		?>
			<tr>
				<td>
				<?php echo $j; ?>
				</td>
				<td>
				<?php echo $row['NAMA_PERLOMBAAN']; ?>
				</td>
				<td>
				<?php echo $row['KD_KATEGORI']; ?>
				</td>
				<td>
				<?php echo $row['TANGGAL_PERLOMBAAN']; ?>
				</td>
				<td>
				<?php echo $row['WAKTU_PERLOMBAAN']; ?>
				</td>
				<td>
				<?php echo $row['DESKRIPSI_PERLOMBAAN']; ?>
				</td>
				<td>
				<?php echo $row['status']; ?>
				</td>
				<td >
				<a href="hapus_lomba.php?id_lomba=<?php echo $row['KD_PERLOMBAAN']; ?>"><img src="../img/sampah.gif" style="heigh:100%;"/></a>
				<a href="edit_lomba.php?id_lomba=<?php echo $row['KD_PERLOMBAAN']; ?>"><img src="../img/pensil.gif" style="heigh:100%;"/></a>
				<a href="detail_lomba.php?id_lomba=<?php echo $row['KD_PERLOMBAAN']; ?>"><img src="../img/lup.png" style="heigh:100%;"/></a>
				</td>
			<tr>
		<?php
		}else{
		?>
			<tr>
				<td style="background:#fff;">
				<?php echo $j; ?>
				</td>
				<td style="background:#fff;">
				<?php echo $row['NAMA_PERLOMBAAN']; ?>
				</td>
				<td style="background:#fff;">
				<?php echo $row['KD_KATEGORI']; ?>
				</td>
				<td style="background:#fff;">
				<?php echo $row['TANGGAL_PERLOMBAAN']; ?>
				</td>
				<td style="background:#fff;">
				<?php echo $row['WAKTU_PERLOMBAAN']; ?>
				</td>
				<td style="background:#fff;">
				<?php echo $row['DESKRIPSI_PERLOMBAAN']; ?>
				</td>
				<td style="background:#fff;">
				<?php echo $row['status']; ?>
				</td>
				<td style="background:#fff;">
				<a href="hapus_lomba.php?id_lomba=<?php echo $row['KD_PERLOMBAAN']; ?>"><img src="../img/sampah.gif" style="heigh:100%;"/></a>
				<a href="edit_lomba.php?id_lomba=<?php echo $row['KD_PERLOMBAAN']; ?>"><img src="../img/pensil.gif" style="heigh:100%;"/></a>
				<a href="detail_lomba.php?id_lomba=<?php echo $row['KD_PERLOMBAAN']; ?>"><img src="../img/lup.png" style="heigh:100%;"/></a>
				</td>
			<tr>
		<?php
		}
		$j++;
		}
		?>
		<tr>
			<td colspan="8">
				<center>
				<?php
				try { $str_Query = "SELECT * FROM perlombaan ORDER BY NAMA_PERLOMBAAN ASC LIMIT $of,$batas"; 
				$str_final_Query =  $my_koneksi->prepare($str_Query); 
				$str_final_Query->execute();      
				} catch (PDOException $e) {  
					die("Error: ".$e->getMessage()); 
				} 
				$hasil = $str_final_Query->fetch(); 
				$y=$hasil;
				try { $str_Query = "SELECT COUNT(*) FROM perlombaan ORDER BY NAMA_PERLOMBAAN ASC LIMIT $of,$batas"; 
				$str_final_Query =  $my_koneksi->prepare($str_Query); 
				$str_final_Query->execute();      
				} catch (PDOException $e) {  
					die("Error: ".$e->getMessage()); 
				} 
				$je=$str_final_Query->fetchColumn(); 
				$jum=ceil($je/$batas);
				for($u=1;$u<=$jum;$u++){
					if($u==$p){
						$cl="p_s";
					}else{
						$cl="p";
					}
				?>
				<a href="film.php?p=<?php echo $u;?>" class="<?php echo $cl;?>"><?php echo $u;?></a>
				<?php }?>
				</center>
			</td>
		</tr>
		<tr>
			<td colspan="8">
				<center>
				<a href="tambah_lomba.php" style="text-decoration:none;"><div style="padding:8px;font-size: 23px;width:100%;color:#000;">Tambah perlombaan</div></a>
				</center>
			</td>
		</tr>
		</table>
		</div>
		
	</div>
</div>
<?php
include "footer.php";
?>