 <?php 

 session_start();

 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 	echo "<center> silahkan login dahulu untuk mengakses modul<br>
 	<a href='../../index.php'><b>LOGIN</b></a></center>";

 }else{

 	include"../../../lib/koneksi.php";
 	include"../../../lib/config.php";

 	$kd=$_GET['kd_galeri'];
 	
 	$query=mysqli_query($koneksi,"SELECT * FROM galeri WHERE id_galeri='$kd'");
  	while ($data=mysqli_fetch_array($query)) {

	 	if(is_file("../../upload/".$data['gambar'])) // Jika foto ada
	  	unlink("../../upload/".$data['gambar']); // Hapus foto yang telah diupload dari folder images

	 	$queryHapus= mysqli_query($koneksi,"DELETE FROM galeri WHERE id_galeri='$kd'");

	 	if($queryHapus){
	 		echo "<script>alert('Data Berhasil DiHapus '); window.location='$admin_url'+'adminweb.php?module=galeri';</script>";
	 	}else{
	 		echo "<script>alert('Gagal menghapus data '); window.location='$admin_url'+'adminweb.php?module=galeri';</script>";
	 	}

 	}
 }

 ?>