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
                    <li class="breadcrumb-item"><a href="adminweb.php?module=pendaftar">Pendaftaran</a></li>
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
                <h3 class="box-title m-b-0">Form Tambah Pendaftaran</h3>
                <p class="text-muted m-b-30 font-13"> Digunakan untuk menambahkan siswa yang ingin mendaftar </p>
                <h3>Biodata Diri</h3>
                <form action="module/pendaftar/aksi_tambah.php" method="POST" enctype="multipart/form-data">     
                <div class="row">
                    <div class="col-sm-6 col-xs-6">         
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Pendaftaran</label>
                            <?php 
                                $tgl= date('d/m/Y');
                             ?>
                            <input type="text" name="tgl" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo $tgl; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama </label>
                            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jenis Kelamin</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio1" name="jenkel" class="custom-control-input" value="L" checked>
                                <label class="custom-control-label" for="customRadio1">Laki - Laki</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="jenkel" class="custom-control-input" value="P">
                                <label class="custom-control-label" for="customRadio2">Perempuan</label>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <textarea class="form-control" style="height: 200px;" name="alamatsiswa"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tempat Lahir</label>
                            <input type="text" name="tempatlahir" class="form-control" id="exampleInputEmail1" placeholder="" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal lahir</label>
                            <input type="date" name="tgllahir" class="form-control" id="exampleInputEmail1" placeholder="" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Agama</label>
                            <select class="form-control" id="inlineFormCustomSelect" name="agama">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Kong Hu Cu">Kong Hu Cu</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6">

                        <div class="form-group">
                            <label for="exampleInputEmail1">No. Telepon</label>
                            <input type="text" name="telepon" class="form-control" id="exampleInputEmail1" placeholder="" >
                        </div>               
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Orang Tua / Wali</label>
                            <input type="text" name="namaortu" class="form-control" id="exampleInputEmail1" placeholder="" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pekerjaan Orang Tua / Wali</label>
                            <input type="text" name="pekerjaanortu" class="form-control" id="exampleInputEmail1" placeholder="" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat Orang Tua / Wali</label>
                            <textarea class="form-control" style="height: 200px;" name="alamatortu"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">No. Ijazah</label>
                            <input type="text" name="noijazah" class="form-control" id="exampleInputEmail1" placeholder="" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="Password" name="password" class="form-control" id="exampleInputEmail1" placeholder="" >
                        </div>
                    </div>
                </div>
                <hr>
                <h3>Nilai NEM</h3>
                <div class="row">
                    <div class="col-sm-6 col-xs-6">         
                        <div class="form-group">
                            <label for="exampleInputEmail1">Bahasa Indonesia </label>
                            <input type="text" name="bindo" class="form-control" id="exampleInputEmail1" placeholder="" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Matematika</label>
                            <input type="text" name="mtk" class="form-control" id="exampleInputEmail1" placeholder="" >
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6">               
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ilmu Pengetahuan Alam (IPA)</label>
                            <input type="text" name="ipa" class="form-control" id="exampleInputEmail1" placeholder="" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Prestasi</label>
                            <input type="text" name="prestasi" class="form-control" id="exampleInputEmail1" placeholder="" >
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Simpan</button>
            </form>
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