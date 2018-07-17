<?php
include ("koneksi.php");

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

$username=$_POST['username'];
$password=md5($_POST['password']);
$email=$_POST['email'];
$membership=$_POST['membership'];
$capca1=$_POST['capca1'];
$capca2=$_POST['capca2'];
 
$query = mysqli_query($connect, "SELECT * FROM user WHERE nama_user='".$username."'");
if($row=mysqli_fetch_array($query)){
	echo"<script>alert('Maaf username sudah dipakai!!')</script>";
	echo"<script>document.location='daftar.php'</script>";
}else{
	if($capca1!=$capca2){
		echo"<script>alert('Maaf captca anda salah!!')</script>";
		echo"<script>document.location='daftar.php'</script>";
	}else{
		$query2 = mysqli_query($connect, "SELECT * FROM user WHERE email='".$email."'");
		if($row2=mysqli_fetch_array($query2)){
			echo"<script>alert('Maaf emal sudah terdaftar!!')</script>";
			echo"<script>adocument.location='daftar.php'</script>";	
		}else{
			try {
				$str_Query = "insert into user (kd_user, nama_user, password, membership, email, status) values (?, ?, ?, ?, ?, ?)";
				$str_final_Query = $connect->prepare($str_Query);
				$str_final_Query->bind_param("ssssss", autonumber($MaxID, 4, 3), $username, $password, $membership, $email, $status);
				$status = "Terdaftar";
				$str_final_Query->execute();		
				header("Location: index.php");
			}catch (PDOException $e) {
				die("Error: ".$e->getMessage());
			}
		}
	}
}
?>