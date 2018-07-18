<html>
<head>
<title>Untitled Document</title>
</head>
<body>
	<div id="menu-user-1">
	<center>
	<h2>
	<?php 
	include "config/koneksi.php";
	$id_user=$_SESSION['id_user'];
	$query = mysqli_query($konek,"SELECT * FROM user WHERE KD_USER='$id_user'");
	if($row=mysqli_fetch_array($query)){
	echo $row['NAMA_USER']."<br>";
	}
	?>
	</h2>
		<a href="edit_profil.php"><h3>Edit Profile</h3></a>
		<a href="logout.php"><h3>Logout</h3></a>
	</center>
	</div>
</body>
</html>