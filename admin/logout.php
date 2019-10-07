<?php 
	session_start();
	session_destroy();

	include "../lib/koneksi.php";
	include "../lib/config.php";

	echo "<script>alert('Anda telah berhasil Logout'); window.location='$admin_url'+'index.php';</script>";
 ?>