<html>
<head>
<title>Untitled Document</title>
</head>
<body>
		
		<br>
		<div align="center">
		
		<table id="tb-admin" style="background-color:#fff;float:left;">
			<tr>
				<th>
				No
				</th>
				<th>
				Nama Lomba
				</th>
				<th>
				Tanggal
				</th>
				<th>
				Waktu
				</th>
				<?php
				if(empty($_SESSION['id_user'])){
					
				}else{
					echo"<th>Ikuti Lomba</th>";	
				}
				?>
			</tr>
		<?php
			include "config/koneksi.php";
			$query = mysqli_query($konek,"SELECT * FROM perlombaan");
			$i = 0;
			$xy =0;
			echo"<tr>";
			while($row=mysqli_fetch_array($query)){
				$i++;
				echo"<td>".$row['NAMA_PERLOMBAAN']."</td>";
				echo"<td>".$i."</td>";
				echo"<td>".$row['TANGGAL_PERLOMBAAN']."</td>";
				echo"<td>".$row['WAKTU_PERLOMBAAN']."</td>";
				if(empty($_SESSION['id_user'])){
					
				}else{
				$id_user = $_SESSION['id_user'];
				$query2 = mysqli_query($konek,"SELECT * FROM detail_perlombaan WHERE KD_PERLOMBAAN='".$row['KD_PERLOMBAAN']."' AND KD_USER='".$id_user."'");
				while($row2=mysqli_fetch_array($query2)){
					$xy = 1;
				}
				if($xy==1){
					echo"<td>Sudah Ikut Lomba Ini</td>";
				}else{
					echo"<form action='daftar_lomba.php' method='post'>";
					echo"<input type='hidden' name='id_lomba' value='".$row['KD_PERLOMBAAN']."' />";
					echo"<td><input name='button' type='submit' class='tombol' id='button' value='Ikut'/></td>";
					echo"</form>";
				}
				}
				
			}
			echo"</tr>";
		?>
		</table>
		</div>	
</body>
</html>