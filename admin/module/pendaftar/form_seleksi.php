<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Hasil Seleksi</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="adminweb.php?module=pendaftar">Data Pendaftar</a></li>
                    <li class="breadcrumb-item active">Hasil Seleksi</li>
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
                    <h4 class="card-title">Hasil Seleksi Calon Siswa</h4>
                    <h6 class="card-subtitle">Berisi daftar siswa yang lolos masuk SMP 1 Toboali</h6>
                    <div class="table-responsive m-t-40">
                        <form action="module/pendaftar/aksi_seleksi.php" method="POST">
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
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $jumlah = $_POST['jumlah'];
                                    $no=1;
                                    $query=mysqli_query($koneksi,"SELECT * FROM pendaftaran p JOIN siswa s ON p.id_siswa=s.id_siswa JOIN nilai n ON n.id_siswa=s.id_siswa ORDER BY total_nilai DESC LIMIT $jumlah ");
                                    while ($data=mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <input type="hidden" name="kd[]" value="<?php echo $data['id_siswa'] ?>">
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['jenis_kelamin']; ?></td>
                                    <td><?php echo $data['hp']; ?></td>
                                    <td><?php echo $data['no_ijazah']; ?></td>
                                    <td><?php echo $data['total_nilai']; ?></td>
                                    <td><?php echo $data['status_daftar']; ?></td>
                                </tr>
                                <?php $no++; }?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7"><button type="submit" class="btn btn-info">Simpan</button></td>
                                </tr>
                            </tfoot>
                        </table>
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