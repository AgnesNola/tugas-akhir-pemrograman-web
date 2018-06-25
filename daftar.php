<?php
include "header.php";
?>
<div id="main-tengah">			
	<div class="batas">
		<div id="kanan">
		<h1>Daftar</h1>
		<div class="ijo" style="height:5px;width:100%;"></div>
		<br>
		
		<form method="post" action="proses_daftar.php" enctype="multipart/form-data">
		<table width="100%">
			<tr>
				<td width="40%">
					Username
				</td>
				<td widtd="60%">
					<input type="text" name="username" required/>
				</td>
			</tr>
			<tr>
				<td>
					Password
				</td>
				<td>
					<input type="password" name="password" required/>
				</td>
			</tr>
			<tr>
				<td>
					Nama
				</td>
				<td>
					<input type="text" name="nama" required/>
				</td>
			</tr>
			<tr>
				<td>
					Nomor Tel
				</td>
				<td>
					<input type="text" name="text" required/>
				</td>
			</tr>
			<tr>
				<td>
					VIP Level
				</td>
				<td>
					<select>
					<option name="vip" value="platinum">Platinum</option>
					<option name="vip" value="gold">Gold</option>
					<option name="vip" value="silver">Silver</option>
					<option name="vip" value="bronze">Bronze</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td style="border:1px solid #000;padding:10px;">
					<p>
					Platinum
						<ul>
							<li>Bebas Renang DI Kolam</li>
						</ul>
					</p>
					<p>
					Gold
						<ul>
							<li>Bebas Renang DI Kolam</li>
						</ul>
					</p>
					<p>
					Silver
						<ul>
							<li>Bebas Renang DI Kolam</li>
						</ul>
					</p>
					<p>
					Bronze
						<ul>
							<li>Bebas Renang DI Kolam</li>
						</ul>
					</p>
				</td>
			</tr>
			<tr>
				<td>
					Alamat
				</td>
				<td>
					<textarea name="alamat" id="textarea" cols="35" rows="7" style="widtd:100%;" required></textarea>
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td>
					<a style="padding:2px;background-color:#E88C8C;" ><?php echo $rand=(rand()%99999); ?></a>
					<input type="hidden" name="capca1" value="<?php echo $rand; ?>" />
				</td>
			</tr>
			<tr>
				<td>
				Captca
				</td>
				<td>
					<input type="text" name="capca2" required/>
				</td>
			</tr>
			<tr>
				<td>
					Foto
				</td>
				<td>
					<input type="file" name="foto1"/>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<div align="center">
						<button type="submit">Daftar</button>
					</div>
				</td>
			</tr>
		</table>
	</form>
	
	
		</div>
		
		<div id="kiri">
		</div>
	</div>
</div>
<?php
include "footer.php";
?>