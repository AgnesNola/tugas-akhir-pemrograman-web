<?php
include "header.php";
?>

<div id="main-tengah">
	<div class="batas">
		
		<h1>Detail Perlombaan</h1>
		<div class="ijo" style="height:5px;width:100%;"></div>
		<br>
		<div align="center">
		<table id="tb-admin">
			<tr>
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
			</tr>
		<?php
		$id = $_GET['id_lomba'];
		try { $str_Query = "SELECT * FROM perlombaan WHERE kd_perlombaan='" . $id . "'"; 
		$str_final_Query =  $my_koneksi->prepare($str_Query); 
				$str_final_Query->execute();      
				} catch (PDOException $e) {  
					die("Error: ".$e->getMessage()); 
				} 
				$row = $str_final_Query->fetch(); 
		?>
			<tr>
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
			<tr>
		</table>
		</div>
		
	</div>
</div>

<?php
include "footer.php";
?>