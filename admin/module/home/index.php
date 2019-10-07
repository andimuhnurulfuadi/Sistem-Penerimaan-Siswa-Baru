<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Home</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active"></li>
                </ol>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30"> <img src="assets/images/users/admin.png" class="img-circle" width="150" />
                        <h4 class="card-title m-t-10"><?php echo $pecah['nama']; ?></h4>
                        <h6 class="card-subtitle">Admin SMP 1 Toboali</h6>
                    </center>
                </div>
                <div>
                    <hr> </div>
                <div class="card-body"> 
                    <small class="text-muted">Username</small>
                    <h6><?php echo $pecah['username']; ?></h6> 
                    <small class="text-muted p-t-30 db">Password</small>
                    <h6><?php echo $pecah['password']; ?></h6> 
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card card-body">
                <h3 class="box-title m-b-0">Form Ubah data admin</h3>
                <p class="text-muted m-b-30 font-13"> Digunakan untuk mengubah data admin </p>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form action="module/home/aksi_edit.php" method="POST">
                            <input type="hidden" name="kd" value="<?php echo $pecah['id_admin'] ?>">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" value="<?php echo $pecah['nama'] ?>" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" name="username" class="form-control" id="exampleInputEmail1" value="<?php echo $pecah['username'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" value="<?php echo $pecah['password'] ?>">
                            </div>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Simpan</button>
                            <button type="reset" class="btn btn-inverse waves-effect waves-light">Batal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->