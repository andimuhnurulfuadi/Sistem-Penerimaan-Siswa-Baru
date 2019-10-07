 <?php 

 session_start();

 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 	echo "<center> silahkan login dahulu untuk mengakses modul<br>
 	<a href='../../index.php'><b>LOGIN</b></a></center>";

 }else{

 	include"../../../lib/koneksi.php";
 	include"../../../lib/config.php";

 	$id=$_POST['kd'];
 	$nama=$_POST['nama'];
 	$isi=$_POST['isi'];

    $queryEdit= mysqli_query($koneksi,"UPDATE pengumuman SET nama_pengumuman='$nama', isi='$isi' WHERE id_pengumuman='$id'");
 	if($queryEdit){
 		echo "<script>alert('Data Berhasil diubah '); window.location='$admin_url'+'adminweb.php?module=pengumuman';</script>";
 	}else{
 		echo "<script>alert('Gagal mengubah data '); window.location='$admin_url'+'adminweb.php?module=edit_pengumuman&kd_pengumuman='+'$id';</script>";
 	}
 }

 ?>