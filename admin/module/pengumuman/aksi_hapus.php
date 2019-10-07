 <?php 

 session_start();

 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 	echo "<center> silahkan login dahulu untuk mengakses modul<br>
 	<a href='../../index.php'><b>LOGIN</b></a></center>";

 }else{

 	include"../../../lib/koneksi.php";
 	include"../../../lib/config.php";

 	$kd=$_GET['kd_pengumuman'];

 	$query=mysqli_query($koneksi,"SELECT * FROM pengumuman WHERE id_pengumuman='$kd'");
  	while ($data=mysqli_fetch_array($query)) {
	 	$queryHapus= mysqli_query($koneksi,"DELETE FROM pengumuman WHERE id_pengumuman='$kd'");

	 	if($queryHapus){
	 		echo "<script>alert('Data Berhasil DiHapus '); window.location='$admin_url'+'adminweb.php?module=pengumuman';</script>";
	 	}else{
	 		echo "<script>alert('Gagal menghapus data '); window.location='$admin_url'+'adminweb.php?module=pengumuman';</script>";
	 	}
 	}
 }

 ?>