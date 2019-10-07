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
 	$ubah = $_POST['ubah_foto'];
 	$deskripsi=$_POST['deskripsi'];
 	$foto=$_FILES['foto']['name'];
 	$foto_temp=$_FILES['foto']['tmp_name'];
 	$foto_size=$_FILES['foto']['size'];
 	$foto_type=$_FILES['foto']['type'];
 	$folder = "../../upload/";

 	print_r($ubah);
 	if (isset($_POST['ubah_foto'])) {
 		if ($foto_type =='image/jpg' OR $foto_type =='image/png' OR $foto_type =='image/jpeg') {
	 		if ($foto_size < 1024000 ) {
			    move_uploaded_file($foto_temp, $folder . $foto);
			    $queryEdit= mysqli_query($koneksi,"UPDATE prestasi SET nama_prestasi='$nama', deskripsi='$deskripsi', foto='$foto' WHERE id_prestasi='$id'");
			 	if($queryEdit){
			 		echo "<script>alert('Data Berhasil diubah '); window.location='$admin_url'+'adminweb.php?module=prestasi';</script>";
			 	}else{
			 		echo "<script>alert('Gagal mengubah data '); window.location='$admin_url'+'adminweb.php?module=edit_prestasi&kd_prestasi='+'$id';</script>";
			 	}
	 		}else{
		    	echo "<script>alert('Gagal menyimpan data, ukuran foto/gambar lebih dari 1MB '); window.location='$admin_url'+'adminweb.php?module=tambah_prestasi';</script>";
			}
		}else{
		    echo "<script>alert('Gagal menyimpan data, Tipe foto bukan jpg/png '); window.location='$admin_url'+'adminweb.php?module=tambah_prestasi';</script>";
		}
 	}else{
 		$queryEdit= mysqli_query($koneksi,"UPDATE prestasi SET nama_prestasi='$nama', deskripsi='$deskripsi' WHERE id_prestasi='$id'");
	 	if($queryEdit){
	 		echo "<script>alert('Data Berhasil diubah '); window.location='$admin_url'+'adminweb.php?module=prestasi';</script>";
	 	}else{
	 		echo "<script>alert('Gagal mengubah data '); window.location='$admin_url'+'adminweb.php?module=edit_prestasi&kd_prestasi='+'$id';</script>";
	 	}
 	}

 }

 ?>