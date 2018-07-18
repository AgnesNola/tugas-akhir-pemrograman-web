<html>
<head>
<link href="css/style.css" rel="stylesheet">
<script src="js/jquery-2.1.1.js"></script>
<script src="js/page.js"></script>
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
<div id="header1">
	<div class="batas">
	
		<a href="index.php" class="menu_link" >HOME</a>
    	<a href="pg_now_playing.php" class="menu_link" >Lomba Sekarang</a>
		
		<a href="#" class="menu_link" id="akun1" style="float:right;">MENU AKUN</a>
		<?php
		session_start();
		if(empty($_SESSION['id_user'])){
			include "login.php";
		}else{
			include "menu_user.php";
			$id_user = $_SESSION['id_user'];	
		}
		?>
	</div>

		<a href="index.php" class="link-head2" style="margin-top:58px;">Home</a>
		<a href="pg_now_playing.php" class="link-head2" style="margin-top:108px;">NOW PLAYING</a>
		<a href="pg_coming_soon.php" class="link-head2" style="margin-top:158px;">COMMING SOON</a>
		<a class="link-head2" style="margin-top:208px;">Login</a>
		<a href="daftar.php" class="link-head2" style="margin-top:208px;">Daftar</a>
		<a class="link-head2" style="margin-top:208px;">Edit Profil</a>
		<a href="pembayaran.php" class="link-head2" style="margin-top:258px;">Pembayaran</a>
		<a href="logout.php" class="link-head2" style="margin-top:308px;">Logout</a>
	<div id="menu2">
	<div class="batas">
		<a href="#" id="menu2_l">Menu</a>
	</div>
	</div>
</div>
<div class="batas">
</div>