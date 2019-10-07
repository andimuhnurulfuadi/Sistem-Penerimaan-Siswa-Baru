 <?php 

 session_start();

 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 	echo "<center> silahkan login dahulu untuk mengakses modul<br>
 	<a href='../../index.php'><b>LOGIN</b></a></center>";

 }else{

 	include"../../../lib/koneksi.php";
 	include"../../../lib/config.php";

 	$kd=$_GET['kd_pendaftar'];

 	$query=mysqli_query($koneksi,"SELECT * FROM pendaftaran WHERE id_daftar='$kd'");
  	while ($data=mysqli_fetch_array($query)) {
  		$kdsiswa=$data['id_siswa'];
	 	$queryHapusDaftar= mysqli_query($koneksi,"DELETE FROM pendaftaran WHERE id_siswa='$kdsiswa'");
	 	$queryHapusNilai= mysqli_query($koneksi,"DELETE FROM nilai WHERE id_siswa='$kdsiswa'");
	 	$queryHapusSiswa= mysqli_query($koneksi,"DELETE FROM siswa WHERE id_siswa='$kdsiswa'");

	 	if($queryHapusDaftar AND $queryHapusNilai AND $queryHapusSiswa ){
	 		echo "<script>alert('Data Berhasil DiHapus '); window.location='$admin_url'+'adminweb.php?module=pendaftar';</script>";
	 	}else{
	 		echo "<script>alert('Gagal menghapus data '); window.location='$admin_url'+'adminweb.php?module=pendaftar';</script>";
	 	}
 	}
 }

 ?>