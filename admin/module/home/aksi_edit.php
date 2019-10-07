 <?php 

 session_start();

 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 	echo "<center> silahkan login dahulu untuk mengakses modul<br>
 	<a href='../../index.php'><b>LOGIN</b></a></center>";
 }else{

 	include"../../../lib/koneksi.php";
 	include"../../../lib/config.php";

 	$kd=$_POST['kd'];
 	$nama=$_POST['nama'];
 	$username=$_POST['username'];
 	$password=$_POST['password'];
 	$queryEdit= mysqli_query($koneksi,"UPDATE admin SET nama='$nama', username='$username', password='$password' WHERE id_admin='$kd'");

 	if($queryEdit){
 		$_SESSION['namauser'] = $username;
 		$_SESSION['passuser'] = $password;
 		echo "<script>alert('Data berhasil di ubah '); window.location='$admin_url'+'adminweb.php?module=home';</script>";
 	}else{
 		echo "<script>alert('Gagal mengubah data '); window.location='$admin_url'+'adminweb.php?module=home';</script>";
 	}
 }
 ?>