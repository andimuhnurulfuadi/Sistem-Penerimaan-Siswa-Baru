 <?php 

 session_start();

 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 	echo "<center> silahkan login dahulu untuk mengakses modul<br>
 	<a href='../../index.php'><b>LOGIN</b></a></center>";

 }else{

 	include"../../../lib/koneksi.php";
 	include"../../../lib/config.php";

 	$nama=$_POST['nama'];
 	$isi=$_POST['isi'];


    $querySimpan= mysqli_query($koneksi,"INSERT INTO pengumuman (nama_pengumuman,isi) VALUES ('$nama','$isi')");
    if($querySimpan){
			echo "<script>alert('Data Berhasil Disimpan '); window.location='$admin_url'+'adminweb.php?module=pengumuman';</script>";
 	}else{
 		echo "<script>alert('Gagal menyimpan data '); window.location='$admin_url'+'adminweb.php?module=tambah_pengumuman';</script>";
 	}

 	
 }

 ?>