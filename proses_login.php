<?php
session_start();
include "config/koneksi.php";
$query = mysqli_query($konek,"SELECT * FROM user WHERE NAMA_USER='".$_POST['username']."' AND PASSWORD='".md5($_POST['pass'])."' AND STATUS='Terdaftar'");
if($row=mysqli_fetch_array($query)){
	$_SESSION['id_user'] = $row['KD_USER'];
	echo"<script>alert('Login berhasil!!');</script>";
	echo"<script>document.location='index.php'</script>";
}
else{
	echo"<script>alert('Login gagal!!');</script>";
	echo"<script>document.location='index.php'</script>";
}
?>