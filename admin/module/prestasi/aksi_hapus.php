 <?php 

 session_start();

 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 	echo "<center> silahkan login dahulu untuk mengakses modul<br>
 	<a href='../../index.php'><b>LOGIN</b></a></center>";

 }else{

 	include"../../../lib/koneksi.php";
 	include"../../../lib/config.php";

 	$kd=$_GET['kd_prestasi'];
 	
 	$query=mysqli_query($koneksi,"SELECT * FROM prestasi WHERE id_prestasi='$kd'");
  	while ($data=mysqli_fetch_array($query)) {

	 	if(is_file("../../upload/".$data['foto'])) // Jika foto ada
	  	unlink("../../upload/".$data['foto']); // Hapus foto yang telah diupload dari folder images

	 	$queryHapus= mysqli_query($koneksi,"DELETE FROM prestasi WHERE id_prestasi='$kd'");

	 	if($queryHapus){
	 		echo "<script>alert('Data Berhasil DiHapus '); window.location='$admin_url'+'adminweb.php?module=prestasi';</script>";
	 	}else{
	 		echo "<script>alert('Gagal menghapus data '); window.location='$admin_url'+'adminweb.php?module=prestasi';</script>";
	 	}

 	}
 }

 ?>