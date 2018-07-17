<?php
include "header.php";
include "koneksi.php";

function autonumber($id_terakhir, $panjang_kode, $panjang_angka) {
 
    // mengambil nilai kode
    $kode = substr($id_terakhir, 0, $panjang_kode);
 
    // mengambil nilai angka
    $angka = substr($id_terakhir, $panjang_kode, $panjang_angka);
 
    // menambahkan nilai angka dengan 1
    // kemudian memberikan string 0 agar panjang string angka menjadi 3
    $angka_baru = str_repeat("0", $panjang_angka - strlen($angka+1)).($angka+1);
 
    // menggabungkan kode dengan nilai angka baru
    $id_baru = $kode.$angka_baru;
 
    return $id_baru;
}

 $sql="select MAX(kd_user) from user";
 $hasil=mysqli_query($connect, $sql);
 $data=mysqli_fetch_array($hasil);
 $MaxID = $data[0];
?>
<div id="main-tengah">			
	<div class="batas">
		<div id="kanan">
		<h1>Daftar</h1>
		<div class="ijo" style="height:5px;width:100%;"></div>
		<br>
		
		<form method="post" action="tambah_user.php" enctype="multipart/form-data">
		<table width="100%">
			<tr>
				<td width="40%">
					Kode User
				</td>
				<td widtd="60%">
					<?php echo autonumber($MaxID, 4, 3); ?>
				</td>
			</tr>
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
					Membership
				</td>
				<td>
					<select name="membership">
					<option  value="Gold">Gold</option>
					<option  value="Silver">Silver</option>
					<option  value="Bronze">Bronze</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td style="border:1px solid #000;padding:10px;">
					<p>
					Gold
						<ul>
							<li>Boleh renang di kolam</li>
						</ul>
					</p>
					<p>
					Silver
						<ul>
							<li>Boleh bawa pancing sendiri</li>
						</ul>
					</p>
					<p>
					Bronze
						<ul>
							<li>Tidak ada benefit khusus</li>
						</ul>
					</p>
				</td>
			</tr>
			<tr>
				<td>
					Email
				</td>
				<td>
					<input type="text" name="email" required/>
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