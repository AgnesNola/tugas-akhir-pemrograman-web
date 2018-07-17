<?php
include "header.php";
?>

<div id="main-tengah">
	<div class="batas">
		
		<h1>Daftar Peserta</h1>
		<div class="ijo" style="height:5px;width:100%;"></div>
		<br>
		<div align="center">
		<table id="tb-admin">
			<tr>
				<th>
				No
				</th>
				<th>
				KD_USER
				</th>
				<th>
				MEMBERSHIP
				</th>
				<th>
				STATUS
				</th>
				<th>
				NAMA USER
				</th>
				<th>
				EMAIL
				</th>
				<th>
				JUARA
				</th>
			</tr>
		<?php
		$batas=8;
		$p=@$_GET['p'];
		if(empty($p)){
			$p=1;
		}
		$id_lomba = $_GET['id_lomba'];
		$of=$batas*($p-1);
		$query2 = mysqli_query($konek,"SELECT * FROM detail_perlombaan WHERE KD_PERLOMBAAN='".$id_lomba."' ORDER BY KD_USER ASC LIMIT $of,$batas");
		
		$j=1;
		while($row2=mysqli_fetch_array($query2)){
			$query = mysqli_query($konek,"SELECT * FROM user WHERE KD_USER='".$row2['KD_USER']."'");
			while($row=mysqli_fetch_array($query)){
		if($j%2!=0){
		?>
			<tr>
				<td>
				<?php echo $j; ?>
				</td>
				<td>
				<?php echo $row['KD_USER']; ?>
				</td>
				<td>
				<?php echo $row['MEMBERSHIP']; ?>
				</td>
				<td>
				<?php echo $row['STATUS']; ?>
				</td>
				<td>
				<?php echo $row['NAMA_USER']; ?>
				</td>
				<td >
				<?php echo $row['EMAIL']; ?>
				</td>
				<td >
				<?php echo $row2['RANK']; ?>
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
				<?php echo $row['KD_USER']; ?>
				</td>
				<td style="background:#fff;">
				<?php echo $row['MEMBERSHIP']; ?>
				</td>
				<td style="background:#fff;">
				<?php echo $row['STATUS']; ?>
				</td>
				<td style="background:#fff;">
				<?php echo $row['NAMA_USER']; ?>
				</td>
				<td style="background:#fff;">
				<?php echo $row['EMAIL']; ?>
				</td>
				<td style="background:#fff;">
				<?php echo $row2['RANK']; ?>
				</td>
			<tr>
		<?php
		}
			}
		$j++;
		}
		?>
		<tr>
			<td colspan="7">
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
				<a href="lihat_peserta.php?p=<?php echo $u;?>" class="<?php echo $cl;?>"><?php echo $u;?></a>
				<?php }?>
				</center>
			</td>
		</tr>
		</table>
		<form method="post" action="p_pilih_juara.php">
		Pemenang
		<select name="pemenang" id="select">
				<?php
				$query4 = mysqli_query($konek,"SELECT * FROM detail_perlombaan WHERE KD_PERLOMBAAN='".$id_lomba."'");
				while($row4=mysqli_fetch_array($query4)){
					$query3 = mysqli_query($konek,"SELECT * FROM user WHERE KD_USER='".$row4['KD_USER']."'");
					while($row3=mysqli_fetch_array($query3)){
						echo "<option value='".$row3['KD_USER']."'>".$row3['KD_USER']."</option>";
					}
				}
				?>
		</select>
		Juara
		<select name="juara" id="select">
				<?php
				$juara = 1;
				while($juara<=10){
					echo "<option value='".$juara."'>".$juara."</option>";
					$juara++;
				}
				?>
		</select>
		<input type='hidden' name='id_lomba' value='<?php echo $id_lomba;?>' />
		<br>
		<td><input name='button' type='submit' class='tombol' id='button' value='Pilih Juara'/>
		</form>
		</div>
		
	</div>
</div>
<?php
include "footer.php";
?>