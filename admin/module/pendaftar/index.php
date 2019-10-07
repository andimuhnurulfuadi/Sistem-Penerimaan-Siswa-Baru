<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Data Pendaftar</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Data Pendaftar</a></li>
                    <li class="breadcrumb-item active"></li>
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
        <div class="col-lg-4">
            <div class="card">
            <div class="card-body">
            <div class="col-lg-12">
            <h5 class="card-title">Seleksi Siswa</h5>
            <h6 class="card-subtitle">Masukkan jumlah quota siswa yang akan diterima</h6>     
            <form action="adminweb.php?module=seleksi" method="POST">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" name="jumlah">
                <div class="input-group-append">
                    <button class="btn btn-info" type="submit">Seleksi</button>
                </div>
            </div>
            </form>
            </div>        
            </div>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Pendaftar Sekolah</h4>
                    <h6 class="card-subtitle">Berisi data pendaftar dari SMP 1 Toboali</h6>
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Siswa</th>
                                    <th>Jenis Kelamin (L/P)</th>
                                    <th>No Telepon</th>
                                    <th>No Ijazah</th>
                                    <th>Total Nilai</th>
                                    <th>Status</th>
                                    <th style="width:110px">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no=1;
                                    $query=mysqli_query($koneksi,"SELECT * FROM pendaftaran p JOIN siswa s ON p.id_siswa=s.id_siswa JOIN nilai n ON n.id_siswa=s.id_siswa ORDER BY total_nilai DESC");
                                    while ($data=mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['jenis_kelamin']; ?></td>
                                    <td><?php echo $data['hp']; ?></td>
                                    <td><?php echo $data['no_ijazah']; ?></td>
                                    <td><?php echo $data['total_nilai']; ?></td>
                                    <td><?php echo $data['status_daftar']; ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="adminweb.php?module=detail_pendaftar&kd_pendaftar=<?php echo $data['id_daftar']; ?>" class="btn btn-success"><i class="fa fa-id-card-o "></i></a>
                                            <a href="<?php echo $admin_url;  ?>module/pendaftar/aksi_hapus.php?kd_pendaftar=<?php echo $data['id_daftar']; ?>" onClick="return confirm('Anda Yakin ingin menghapus data ini ?');" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php $no++; }?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7"><a href="adminweb.php?module=tambah_pendaftar" class="btn btn-info">Tambah</a></td>
                                </tr>
                            </tfoot>
                        </table>
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