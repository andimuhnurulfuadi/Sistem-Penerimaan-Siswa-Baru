 <?php 

 session_start();

 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 	echo "<center> silahkan login dahulu untuk mengakses modul<br>
 	<a href='../../index.php'><b>LOGIN</b></a></center>";

 }else{

 	include"../../../lib/koneksi.php";
 	include"../../../lib/config.php";

 	$kd=$_GET['kd_sekolah'];
 	
 	$queryHapus= mysqli_query($koneksi,"DELETE FROM sekolah WHERE id_sekolah='$kd'");

 	if($queryHapus){
 		echo "<script>alert('Data Berhasil DiHapus '); window.location='$admin_url'+'adminweb.php?module=profil';</script>";
 	}else{
 		echo "<script>alert('Gagal menghapus data '); window.location='$admin_url'+'adminweb.php?module=profil';</script>";
 	}
 }

 ?>