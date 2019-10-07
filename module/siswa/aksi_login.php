<?php 

//mengakses koneksi di folder lib
include "../../lib/koneksi.php";
include "../../lib/config.php";

$user = $_POST['username'];
$pass = $_POST['password'];

if(!ctype_alnum($user) OR !ctype_alnum($pass)){
	echo "<script>alert('Login gagal, username atau password salah!'); window.location='$base_url'+'index.php?module=login';</script>";
} else {

	$login = mysqli_query($koneksi,"SELECT * FROM siswa s JOIN nilai n ON s.id_siswa=n.id_siswa JOIN pendaftaran p ON p.id_siswa=s.id_siswa WHERE s.username='$user' AND s.password='$pass'");
	$ketemu = mysqli_num_rows($login);
	$array = mysqli_fetch_array($login);

	if($ketemu > 0){
		session_start();
		$_SESSION['usersiswa'] = $array['username'];
		$_SESSION['passsiswa'] = $array['password'];

		header('location:'.$base_url.'index.php?module=biodata');
	} else {
		echo "<script>alert('Login gagal, username atau password salah!'); window.location='$base_url'+'index.php?module=login';</script>";
	}
}

 ?>
