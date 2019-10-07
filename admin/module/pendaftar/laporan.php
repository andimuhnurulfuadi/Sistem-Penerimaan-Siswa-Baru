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
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Data Pendaftar Sekolah</h4>
                    <h6 class="card-subtitle">Berisi data pendaftar dari SMP 1 Toboali</h6>
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Siswa</th>
                                    <th>Jenis Kelamin (L/P)</th>
                                    <th>Total Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no=1;
                                    $query=mysqli_query($koneksi,"SELECT * FROM pendaftaran p JOIN siswa s ON p.id_siswa=s.id_siswa JOIN nilai n ON n.id_siswa=s.id_siswa WHERE p.status_daftar='lulus' ORDER BY total_nilai DESC");
                                    while ($data=mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['jenis_kelamin']; ?></td>
                                    <td><?php echo $data['total_nilai']; ?></td>
                                </tr>
                                <?php $no++; }?>
                            </tbody>
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