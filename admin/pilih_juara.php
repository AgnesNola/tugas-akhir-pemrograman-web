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
		$query = mysqli_query( "SELECT * FROM perlombaan ORDER BY NAMA_PERLOMBAAN ASC LIMIT $of,$batas");
		$j=1;
		while($row=mysqli_fetch_array($query)){
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
				<td >
				<a href="lihat_peserta.php?id_lomba=<?php echo $row['KD_PERLOMBAAN']; ?>"><img src="../img/lup.png" style="heigh:100%;"/></a>
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
				<a href="lihat_peserta.php?id_lomba=<?php echo $row['KD_PERLOMBAANPrimary']; ?>"><img src="../img/lup.png" style="heigh:100%;"/></a>
				</td>
			<tr>
		<?php
		}
		$j++;
		}
		?>
		<tr>
			<td colspan="6">
				<center>
				<?php
				$y=mysqli_query($konek,"select *from perlombaan");
				$je=mysqli_num_rows($y);
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
		</tr>
		</table>
		</div>
		
	</div>
</div>
<?php
include "footer.php";
?>