<html>
<head>
<link href="../css/style.css" rel="stylesheet">
<script src="../js/jquery-2.1.1.js"></script>
<script src="../js/page.js"></script>
<script>
$(document).ready(function(){
	$("#menu-user-1").hide();
	$("#akun1").click(function(){
		$("#menu-user-1").slideToggle();
	});
	
	$("#menu-user-1").mouseleave(function(){
		$("#menu-user-1").slideUp();
	});
});
</script>
</head>
<body>
		<?php
		include "../config/koneksi.php"
		?>
<div id="header1">
	<div class="batas">
	
		<a href="index2.php" class="menu_link" >HOME</a>
    	<a href="lomba.php" class="menu_link" >Lomba</a>
    	<a href="pilih_juara.php" class="menu_link" >Pilih Juara</a>
    	<a href="logout.php" class="menu_link" >Logout</a>

<?php
session_start();
if(empty($_SESSION['id_user1'])){
	echo"<script>alert('Login gagal!!');</script>";
	echo"<script>document.location='index.php'</script>";
}else{
	$id_user = $_SESSION['id_user1'];	
}
?>
	</div>

	<div id="menu2">
	<div class="batas">
		<a href="#" id="menu2_l">Menu</a>
	</div>
	</div>
<div class="ijo" style="height:5px;width:100%;box-shadow: 0px 3px 7px 0px;margin-top:51px;"></div>
</div>
<div class="batas">
</div>
