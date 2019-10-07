<?php 

//mengakses koneksi di folder lib
include "../lib/koneksi.php";
include "../lib/config.php";

$user = $_POST['username'];
$pass = $_POST['password'];

if(!ctype_alnum($user) OR !ctype_alnum($pass)){
	echo "<center>LOGIN GAGAL<br>
			username atau password salah <br>
			atau akun anda tidak terdaftar<br>";
	echo "<a href='index.php'><b>ULANGI LAGI</b></a></center>";

} else {

	$login = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$user' AND password='$pass'");
	$ketemu = mysqli_num_rows($login);
	$array = mysqli_fetch_array($login);

	if($ketemu > 0){
		session_start();
		$_SESSION['namauser'] = $array['username'];
		$_SESSION['passuser'] = $array['password'];

		header('location:adminweb.php?module=home');
	} else {
		echo "<script>alert('Login gagal, username atau password salah!'); window.location='$admin_url'+'index.php';</script>";
	}
}

 ?>
