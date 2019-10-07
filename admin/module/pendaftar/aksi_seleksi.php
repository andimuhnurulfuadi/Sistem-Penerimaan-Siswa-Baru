 <?php 

 session_start();

 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 	echo "<center> silahkan login dahulu untuk mengakses modul<br>
 	<a href='../../index.php'><b>LOGIN</b></a></center>";

 }else{

 	include"../../../lib/koneksi.php";
 	include"../../../lib/config.php";

 	$kd = $_POST['kd'];

 	for ($i=0; $i < count($kd) ; $i++) { 
 		$queryEdit = mysqli_query($koneksi,"UPDATE pendaftaran SET status_daftar='lulus' WHERE id_siswa='$kd[$i]'");
 	}
 	if($queryEdit){
 		echo "<script>alert('Data Berhasil diubah '); window.location='$admin_url'+'adminweb.php?module=pendaftar';</script>";
 	}else{
 		echo "<script>alert('Gagal mengubah data '); window.location='$admin_url'+'adminweb.php?module=pendaftar';</script>";
 	}
 }

 ?>