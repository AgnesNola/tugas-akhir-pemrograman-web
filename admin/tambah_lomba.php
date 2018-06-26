<?php
include "header.php";
?>
<div id="main-tengah">
	<div class="batas">
		
		<h1>Perlombaan</h1>
		<div class="ijo" style="height:5px;width:100%;"></div>
		<br>
		<div align="center">
		<form method="post" action="p_tambah_lomba.php" enctype="multipart/form-data">
		<table>
			<tr>
				<td width="48%">
				Judul Lomba
				</td>
				<td>
				<input type="text" name="judul" style="width:70%;;" required/>
				</td>
			</tr>
			<tr>
				<td>
				Kategori
				</td>
				<td>
				<select name="kategori" id="select">
				<?php
				$query = mysql_query("SELECT * FROM kategori_perlombaan");
				while($row=mysql_fetch_array($query)){
					echo "<option value='".$row['KD_KATEGORI']."'>".$row['NAMA_KATEGORI']."</option>";
				}
				?>
				</select>
				</td>
			</tr>
			<tr>
				<td>
				Tanggal perlombaan
				</td>
				<td>
				<select name="d_tgl_lomba" id="select">
				<?php
				$d=1;
				while($d<=31){
				echo "<option value='$d'>$d</option>";
				$d++;
				}
				?>
				</select>
				<select name="m_tgl_lomba" id="select">
				<?php
				$m=1;
				while($m<=12){
				echo "<option value='$m'>$m</option>";
				$m++;
				}
				?>
				</select>
				<select name="y_tgl_lomba" id="select">
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
				<input type="time" name="time" />
				</td>
			</tr>
			<tr>
				<td>
				Deskripsi
				</td>
				<td>
				<textarea name="deskripsi" id="deskripsi" cols="45" rows="5"></textarea>
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