 <?php 

 session_start();

 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 	echo "<center> silahkan login dahulu untuk mengakses modul<br>
 	<a href='../../index.php'><b>LOGIN</b></a></center>";

 }else{

 	include"../../../lib/koneksi.php";
 	include"../../../lib/config.php";

 	$id=$_POST['kd'];
 	$judul=$_POST['judul'];
 	$deskripsi=nl2br($_POST['deskripsi']);
	$queryEdit= mysqli_query($koneksi,"UPDATE sekolah SET judul='$judul', deskripsi='$deskripsi' WHERE id_sekolah='$id'");

 	if($queryEdit){
 		echo "<script>alert('Data Berhasil diubah '); window.location='$admin_url'+'adminweb.php?module=profil';</script>";
 	}else{
 		echo "<script>alert('Gagal mengubah data '); window.location='$admin_url'+'adminweb.php?module=edit_profil&kd_sekolah='+'$id';</script>";
 	}
 }

 ?>