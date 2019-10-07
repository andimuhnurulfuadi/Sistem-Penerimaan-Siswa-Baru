<?php 
  $kd = $_GET['kd_pendaftar'];
  $query=mysqli_query($koneksi,"SELECT * FROM siswa s JOIN nilai n ON s.id_siswa=n.id_siswa JOIN pendaftaran p ON p.id_siswa=s.id_siswa WHERE p.id_daftar='$kd'");
  while ($data=mysqli_fetch_array($query)) {
    
    $nama=$data['nama'];
    $jenkel=$data['jenis_kelamin'];
    $alamatsiswa=$data['alamat_siswa'];
    $tempatlahir=$data['tempat_lahir'];
    $tgllahir=$data['tgl_lahir'];
    $agama=$data['agama'];
    $telepon=$data['hp'];
    $namaorangtua=$data['nama_ortu'];
    $pekerjaanorangtua=$data['pekerjaan'];
    $alamatorangtua=$data['alamat_ortu'];
    $noijazah=$data['no_ijazah'];
    $username=$data['username'];
    $password=$data['password'];
    $bindo=$data['nilai_indo'];
    $mtk=$data['nilai_mtk'];
    $ipa=$data['nilai_ipa'];
    $prestasi=$data['nilai_prestasi'];
    $total=$data['total_nilai'];
    $status=$data['status_daftar'];

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
            <h4 class="text-themecolor">Detail</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="adminweb.php?module=pendaftar">Pendaftaran</a></li>
                    <li class="breadcrumb-item active">Detail</li>
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
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30"> <img src="assets/images/users/student.png" class="img-circle" width="150">
                        <h4 class="card-title m-t-10"><?php echo $nama; ?></h4>
                        <h6 class="card-subtitle">Calon Siswa SMP 1 Toboali</h6>
                    </center>
                </div>
                <div>
                    <hr> </div>
                <div class="card-body"> <small class="text-muted">Telepon </small>
                    <h6><?php echo $telepon; ?></h6> <small class="text-muted p-t-30 db">Alamat</small>
                    <h6><?php echo $alamatsiswa; ?></h6><small class="text-muted p-t-30 db">Status</small>
                    <h6><i><?php echo $status; ?></i></h6>
                </div>
                <a href="adminweb.php?module=pendaftar" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs profile-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Data Diri</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Nilai</a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="card-body">
                            <div class="profiletimeline">
                                <h4>Nama                           : <?php echo $nama; ?></h4><hr>
                                <h4>Jenis Kelamin                  : <?php echo $jenkel; ?></h4><hr>
                                <h4>Tempat Lahir dan Tanggal lahir : <?php echo $tempatlahir.",&nbsp;".$tgllahir; ?></h4><hr>
                                <h4>Agama                          : <?php echo $agama; ?></h4><hr>
                                <h4>Alamat                         : <?php echo $alamatsiswa; ?></h4><hr>
                                <h4>Telepon                        : <?php echo $telepon; ?></h4><hr>
                                <h4>Nama Orang Tua / Wali          : <?php echo $namaorangtua; ?></h4><hr>
                                <h4>Pekerjaan                      : <?php echo $pekerjaanorangtua; ?></h4><hr>
                                <h4>Alamat Orang Tua / Wali        : <?php echo $alamatorangtua; ?></h4><hr>
                            </div>
                        </div>
                    </div>
                    <!--second tab-->
                    <div class="tab-pane" id="profile" role="tabpanel">
                        <div class="card-body">
                            <h3>No. Ijazah : <?php echo $noijazah; ?></h3><hr>
                            <h4>Bahasa Indonesia            : <?php echo $bindo; ?></h4><hr>
                            <h4>Matematika                  : <?php echo $mtk; ?></h4><hr>
                            <h4>Ilmu Pengetahuan Alam (IPA) : <?php echo $ipa; ?></h4><hr>
                            <h4>Prestasi                    : <?php echo $prestasi; ?></h4><hr>
                            <h4>Total                       : <?php echo $total; ?></h4><hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Column -->
</div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<?php } ?>