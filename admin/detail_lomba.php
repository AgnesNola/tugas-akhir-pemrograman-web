<?php
include "header.php";
//$id = $_GET['id_lomba'];
//$query = mysqli_query($konek, "SELECT * FROM perlombaan WHERE kd_perlombaan='" . $id . "'");
//$row = mysqli_fetch_array($query);
//echo "Nama : " . $row['NAMA_PERLOMBAAN'];
//echo "Kd : " . $row['KD_KATEGORI'];
//echo "Tanggal : " . $row['TANGGAL_PERLOMBAAN']; 
//echo "Waktu : " . $row['WAKTU_PERLOMBAAN'];
//echo "Deskripsi : " . $row['DESKRIPSI_PERLOMBAAN'];
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
			</tr>
		<?php
		$id = $_GET['id_lomba'];
		$query = mysqli_query($konek, "SELECT * FROM perlombaan WHERE kd_perlombaan='" . $id . "'");
		$row = mysqli_fetch_array($query);
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
			<tr>
		</table>
		</div>
		
	</div>
</div>

<?php
include "footer.php";
?>