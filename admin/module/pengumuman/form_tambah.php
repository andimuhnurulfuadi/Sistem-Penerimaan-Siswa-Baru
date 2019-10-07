<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Tambah</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="adminweb.php?module=pengumuman">Pengumuman</a></li>
                    <li class="breadcrumb-item active">Tambah</li>
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
                <h3 class="box-title m-b-0">Form Tambah Pengumuman</h3>
                <p class="text-muted m-b-30 font-13"> Digunakan untuk menambahkan data pengumuman sekolah </p>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form action="module/pengumuman/aksi_tambah.php" method="POST" enctype="multipart/form-data">                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Pengumuman</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Masukkan nama pengumuman..." >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Isi Pengumuman</label>
                                <textarea class="form-control" style="height: 200px;" name="isi"></textarea>
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