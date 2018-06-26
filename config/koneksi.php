<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "ta_web";

$konek = mysql_connect ($host,$user,$pass) OR DIE ("Koneksi Gagal!!");
mysql_select_db($db);
?>