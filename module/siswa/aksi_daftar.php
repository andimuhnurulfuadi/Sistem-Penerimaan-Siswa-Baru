 <?php 


 	include"../../lib/koneksi.php";
 	include"../../lib/config.php";

 	$tgl=$_POST['tgl'];
 	$nama=$_POST['nama'];
 	$jenkel=$_POST['jenkel'];
 	$alamatsiswa=$_POST['alamatsiswa'];
 	$tempatlahir=$_POST['tempatlahir'];
 	$tgllahir=$_POST['tgllahir'];
 	$agama=$_POST['agama'];
 	$telepon=$_POST['telepon'];
 	$namaorangtua=$_POST['namaortu'];
 	$pekerjaanorangtua=$_POST['pekerjaanortu'];
 	$alamatorangtua=$_POST['alamatortu'];
 	$noijazah=$_POST['noijazah'];
 	$username=$_POST['username'];
 	$password=$_POST['password'];
 	$bindo=$_POST['indo'];
 	$mtk=$_POST['mtk'];
 	$ipa=$_POST['ipa'];
 	$prestasi=$_POST['prestasi'];
 	$total = $bindo + $mtk + $ipa + $prestasi;
 	$status= "belum lulus";

 	$querySimpanSiswa= mysqli_query($koneksi,"INSERT INTO siswa (nama, jenis_kelamin, alamat_siswa, tempat_lahir, tgl_lahir, agama, hp, nama_ortu, alamat_ortu, pekerjaan, no_ijazah, username, password) VALUES ('$nama','$jenkel','$alamatsiswa','$tempatlahir','$tgllahir','$agama','$telepon','$namaorangtua','$alamatorangtua','$pekerjaanorangtua','$noijazah','$username','$password')");
 	if($querySimpanSiswa){
		$query = mysqli_query($koneksi,"SELECT MAX(id_siswa) as kd_siswa FROM siswa");
 		while ( $data=mysqli_fetch_array($query)) {
 		$kdsiswa=$data['kd_siswa'];

 		$querySimpanDaftar= mysqli_query($koneksi,"INSERT INTO pendaftaran (id_siswa,tgl_daftar,status_daftar) VALUES ('$kdsiswa','$tgl','$status')");
 		$querySimpanNilai= mysqli_query($koneksi,"INSERT INTO nilai (id_siswa,nilai_indo,nilai_ipa,nilai_mtk,nilai_prestasi,total_nilai) VALUES ('$kdsiswa','$bindo','$ipa','$mtk','$prestasi','$total')");

	    if($querySimpanDaftar AND $querySimpanNilai){
				echo "<script>alert('Berhasil melakukan pendaftaran'); window.location='$base_url'+'index.php?module=home';</script>";
	 	}else{
	 		echo "<script>alert('Gagal menyimpan data '); window.location='$base_url'+'index.php?module=daftar';</script>";
	 	}
 		}
 	}else{
 		echo "<script>alert('Gagal menyimpan data, data siswa belum lengkap'); window.location='$base_url'+'index.php?module=daftar';</script>";
 	}
 ?>