 <?php 

 session_start();

 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 	echo "<center> silahkan login dahulu untuk mengakses modul<br>
 	<a href='../../index.php'><b>LOGIN</b></a></center>";

 }else{

 	include"../../../lib/koneksi.php";
 	include"../../../lib/config.php";

 	$nama=$_POST['nama'];
 	$deskripsi=$_POST['deskripsi'];
 	$foto=$_FILES['foto']['name'];
 	$foto_temp=$_FILES['foto']['tmp_name'];
 	$foto_size=$_FILES['foto']['size'];
 	$foto_type=$_FILES['foto']['type'];
 	$folder = "../../upload/";

 	print_r($_FILES['foto']);
 	if ($foto_type =='image/jpg' OR $foto_type =='image/png' OR $foto_type =='image/jpeg') {
 		if ($foto_size < 1024000 ) {
 			
		    move_uploaded_file($foto_temp, $folder . $foto);
		    $querySimpan= mysqli_query($koneksi,"INSERT INTO fasilitas (nama_fasilitas,deskripsi,foto) VALUES ('$nama','$deskripsi','$foto')");
		    if($querySimpan){
	 			echo "<script>alert('Data Berhasil Disimpan '); window.location='$admin_url'+'adminweb.php?module=fasilitas';</script>";
		 	}else{
		 		echo "<script>alert('Gagal menyimpan data '); window.location='$admin_url'+'adminweb.php?module=tambah_fasilitas';</script>";
		 	}

 		}else{
	    	echo "<script>alert('Gagal menyimpan data, ukuran foto/gambar lebih dari 1MB '); window.location='$admin_url'+'adminweb.php?module=tambah_fasilitas';</script>";
		}
	}else{
	    echo "<script>alert('Gagal menyimpan data, Tipe foto bukan jpg/png '); window.location='$admin_url'+'adminweb.php?module=tambah_fasilitas';</script>";
	}

 	
 }

 ?>