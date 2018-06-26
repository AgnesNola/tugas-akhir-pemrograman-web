<?php
session_start();
include "../config/koneksi.php";
session_destroy();
echo"<script>alert('Logout berhasil!!');</script>";
echo"<script>document.location='index.php'</script>";
?>