<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Galeri</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Galeri</a></li>
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
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Galeri Sekolah</h4>
                    <h6 class="card-subtitle">Berisi data galeri dari SMP 1 Toboali</h6>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Galeri</th>
                                    <th>Foto</th>
                                    <th style="width:110px">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no=1;
                                    $query=mysqli_query($koneksi,"SELECT * FROM galeri");
                                    while ($data=mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $data['nama_galeri']; ?></td>
                                    <td><img src="upload/<?php echo $data['gambar']; ?>" width="100px"  height="100px" alt="<?php echo $data['gambar']; ?>"/></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="adminweb.php?module=edit_galeri&kd_galeri=<?php echo $data['id_galeri']; ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                            <a href="<?php echo $admin_url;  ?>module/galeri/aksi_hapus.php?kd_galeri=<?php echo $data['id_galeri']; ?>" onClick="return confirm('Anda Yakin ingin menghapus data ini ?');" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php $no++; }?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="5"><a href="adminweb.php?module=tambah_galeri" class="btn btn-info">Tambah</a></td>
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