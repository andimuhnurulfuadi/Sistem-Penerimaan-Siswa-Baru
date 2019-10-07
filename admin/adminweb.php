<?php 
session_start();

  if(empty($_SESSION['namauser'])AND empty($_SESSION['passuser'])){
   header('location:index.php');
  }else{


  $user = $_SESSION['namauser'];
  $pass = $_SESSION['passuser'];

  include "../lib/koneksi.php";
  include "../lib/config.php";

  $query = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$user' AND password='$pass'");
  $pecah= mysqli_fetch_array($query);  

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>PSB - Admin</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Morris CSS -->
    <link href="assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/dist/css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="assets/dist/css/pages/dashboard1.css" rel="stylesheet">
</head>

<body class="skin-blue fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Sistem SMP 1 Toboali</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/logo.png" width="40px"  height="40px" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="assets/images/logo.png" width="40px"  height="40px" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <span class="hidden-xs"><span class="font-bold">SMP</span>Toboali</span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-sm-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- User Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/admin.png" alt="user" class=""> <span class="hidden-md-down"><?php echo $pecah['nama']; ?><i class="fa fa-angle-down"></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <!-- text-->
                                <a href="adminweb.php?module=home" class="dropdown-item"><i class="ti-user"></i> Profil</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="logout.php" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                                <!-- text-->
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End User Profile -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="assets/images/users/admin.png" alt="user-img" class="img-circle"><span class="hide-menu"><?php echo $pecah['nama']; ?></span></a>
                        </li>
                        <li class="nav-small-cap">--- Master</li>
                        <li> <a class="waves-effect waves-dark" href="adminweb.php?module=home"><i class="icon-speedometer"></i><span class="hide-menu">Home</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="adminweb.php?module=profil"><i class="fa  fa-home"></i><span class="hide-menu">Profil Sekolah</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="adminweb.php?module=fasilitas"><i class="fa fa-inbox"></i><span class="hide-menu">Fasilitas</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="adminweb.php?module=galeri"><i class="fa fa-image"></i><span class="hide-menu">Galeri</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="adminweb.php?module=prestasi"><i class="fa fa-trophy"></i><span class="hide-menu">Prestasi</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="adminweb.php?module=pengumuman"><i class="fa  fa-bell-o"></i><span class="hide-menu">Pengumuman</span></a></li>
                        <li class="nav-small-cap">--- PSB</li>
                        <li> <a class="waves-effect waves-dark" href="adminweb.php?module=pendaftar"><i class="fa  fa-users"></i><span class="hide-menu">Data Pendaftar</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="adminweb.php?module=laporan"><i class="fa fa-file-text"></i><span class="hide-menu">Laporan</span></a></li>
                        <li class="nav-small-cap">--- Logout</li>
                        <li> <a class="waves-effect waves-dark" href="logout.php" aria-expanded="false"><i class="fa fa-sign-out text-danger"></i><span class="hide-menu">Logout</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <?php 
                if ($_GET['module']=='home') {
                    include("module/home/index.php");
                }else if($_GET['module']=='profil'){ //profil
                    include("module/profil/index.php");
                }else if($_GET['module']=='tambah_profil'){
                    include("module/profil/form_tambah.php");
                }else if($_GET['module']=='edit_profil'){
                    include("module/profil/form_edit.php");

                }else if($_GET['module']=='fasilitas'){ //fasilitas
                    include("module/fasilitas/index.php");
                }else if($_GET['module']=='tambah_fasilitas'){
                    include("module/fasilitas/form_tambah.php");
                }else if($_GET['module']=='edit_fasilitas'){
                    include("module/fasilitas/form_edit.php");

                }else if($_GET['module']=='galeri'){ //galeri
                    include("module/galeri/index.php");
                }else if($_GET['module']=='tambah_galeri'){
                    include("module/galeri/form_tambah.php");
                }else if($_GET['module']=='edit_galeri'){
                    include("module/galeri/form_edit.php");

                }else if($_GET['module']=='prestasi'){ //prestasi
                    include("module/prestasi/index.php");
                }else if($_GET['module']=='tambah_prestasi'){
                    include("module/prestasi/form_tambah.php");
                }else if($_GET['module']=='edit_prestasi'){
                    include("module/prestasi/form_edit.php");

                }else if($_GET['module']=='pengumuman'){ //pengumuman
                    include("module/pengumuman/index.php");
                }else if($_GET['module']=='tambah_pengumuman'){
                    include("module/pengumuman/form_tambah.php");
                }else if($_GET['module']=='edit_pengumuman'){
                    include("module/pengumuman/form_edit.php");

                }else if($_GET['module']=='pendaftar'){ //pendaftar
                    include("module/pendaftar/index.php");
                }else if($_GET['module']=='tambah_pendaftar'){
                    include("module/pendaftar/form_tambah.php");
                }else if($_GET['module']=='edit_pendaftar'){
                    include("module/pendaftar/form_edit.php");
                }else if($_GET['module']=='detail_pendaftar'){
                    include("module/pendaftar/form_detail.php");

                }else if($_GET['module']=='seleksi'){ //seleksi
                    include("module/pendaftar/form_seleksi.php");

                }else if($_GET['module']=='laporan'){ //laporan
                    include("module/pendaftar/laporan.php");

                }else{
                    include("module/home/index.php");
                }
             ?>
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2019 SMP 1 Toboali
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="assets/node_modules/popper/popper.min.js"></script>
    <script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="assets/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="assets/dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="assets/node_modules/raphael/raphael-min.js"></script>
    <script src="assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Popup message jquery -->
    <script src="assets/node_modules/toast-master/js/jquery.toast.js"></script>
    <!-- Chart JS -->
    <script src="assets/dist/js/dashboard1.js"></script>
    <script src="dist/js/pages/jasny-bootstrap.js"></script>
    <!-- This is data table -->
    <script src="assets/node_modules/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
</body>
</html>
<?php } ?>