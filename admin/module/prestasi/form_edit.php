<?php 
  $kd = $_GET['kd_prestasi'];
  $query=mysqli_query($koneksi,"SELECT * FROM prestasi WHERE id_prestasi='$kd'");
  while ($data=mysqli_fetch_array($query)) {
    $kd = $data['id_prestasi'];
    $nama = $data['nama_prestasi'];
    $deskripsi = $data['deskripsi'];
    $foto = $data['foto'];
 ?>
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Ubah</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="adminweb.php?module=prestasi">Prestasi</a></li>
                    <li class="breadcrumb-item active">Ubah</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card card-body">
                <h3 class="box-title m-b-0">Form Ubah Prestasi</h3>
                <p class="text-muted m-b-30 font-13"> Digunakan untuk mengubah data prestasi sekolah </p>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form action="module/prestasi/aksi_edit.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="kd" value="<?php echo $kd; ?>">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Masukkan nama prestasi..." value="<?php echo $nama; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Deskripsi</label>
                                <textarea class="form-control" style="height: 200px;" name="deskripsi"><?php echo $deskripsi; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <img src="upload/<?php echo $data['foto']; ?>" width="50px"  height="50px" alt="<?php echo $data['foto']; ?>"/>
                                <input type="checkbox" name="ubah_foto" value="true"> Centang jika ingin mengubah foto<br>
                                <input type="file" class="form-control" id="exampleInputFile" aria-describedby="fileHelp" name="foto" >
                            </div>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Simpan</button>
                            <button type="reset" class="btn btn-inverse waves-effect waves-light">Batal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<?php } ?>