 <?php 

 session_start();

 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 	echo "<center> silahkan login dahulu untuk mengakses modul<br>
 	<a href='../../index.php'><b>LOGIN</b></a></center>";

 }else{

 	include"../../../lib/koneksi.php";
 	include"../../../lib/config.php";

 	$judul=$_POST['judul'];
 	$deskripsi=nl2br($_POST['deskripsi']);
	$querySimpan= mysqli_query($koneksi,"INSERT INTO sekolah (judul,deskripsi) VALUES ('$judul','$deskripsi')");

 	if($querySimpan){
 		echo "<script>alert('Data Berhasil Disimpan '); window.location='$admin_url'+'adminweb.php?module=profil';</script>";
 	}else{
 		echo "<script>alert('Gagal menyimpan data '); window.location='$admin_url'+'adminweb.php?module=tambah_profil';</script>";
 	}
 }

 ?>