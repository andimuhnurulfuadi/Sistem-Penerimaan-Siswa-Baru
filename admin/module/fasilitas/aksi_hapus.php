 <?php 

 session_start();

 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 	echo "<center> silahkan login dahulu untuk mengakses modul<br>
 	<a href='../../index.php'><b>LOGIN</b></a></center>";

 }else{

 	include"../../../lib/koneksi.php";
 	include"../../../lib/config.php";

 	$kd=$_GET['kd_fasilitas'];
 	
 	$query=mysqli_query($koneksi,"SELECT * FROM fasilitas WHERE id_fasilitas='$kd'");
  	while ($data=mysqli_fetch_array($query)) {

	 	if(is_file("../../upload/".$data['foto'])) // Jika foto ada
	  	unlink("../../upload/".$data['foto']); // Hapus foto yang telah diupload dari folder images

	 	$queryHapus= mysqli_query($koneksi,"DELETE FROM fasilitas WHERE id_fasilitas='$kd'");

	 	if($queryHapus){
	 		echo "<script>alert('Data Berhasil DiHapus '); window.location='$admin_url'+'adminweb.php?module=fasilitas';</script>";
	 	}else{
	 		echo "<script>alert('Gagal menghapus data '); window.location='$admin_url'+'adminweb.php?module=fasilitas';</script>";
	 	}

 	}
 }

 ?>