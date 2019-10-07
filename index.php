<?php 
        include "lib/koneksi.php";
        include "lib/config.php";

        session_start();
 ?>
<!DOCTYPE html>
<html class="wide wow-animation scrollTo" lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template">
    <meta name="date" content="Dec 26">
    <link rel="icon" href="asset/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="asset/css/fontspsb.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/novi.css">
    <link rel="stylesheet" href="asset/css/custom.css">
</head>

<body>
    <div class="page-loader">
        <div class="page-loader-body"><span class="cssload-loader"><span class="cssload-loader-inner"></span></span></div>
    </div>
    <div class="page text-center">
        <header class="page-head">
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar novi-background rd-navbar-center" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="220px" data-xl-stick-up-offset="220px" data-xxl-stick-up-offset="220px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-inner">
                        <div class="rd-navbar-panel"><button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                            <h4 class="panel-title">SMP 1 TOBOALI</h4><button class="rd-navbar-top-panel-toggle" data-rd-navbar-toggle=".rd-navbar-top-panel"><span></span></button>
                            <div class="rd-navbar-top-panel">
                                <div class="shell">
                                    <div class="range range-10 range-md-center range-md-middle range-lg-around">
                                        
                                        <div class="cell-md-3 ">
                                            <div class="rd-navbar-brand"><a class="reveal-inline-block" href="index.php"><img src="asset/images/logo.png" alt="" width="100"></a></div>
                                        </div>
                                        <div class="cell-md-6">
                                            <div class="inset-md-left-50">
                                                <div class="unit unit-horizontal unit-top unit-spacing-xs text-left">
                                                    <div class="unit-left"><span class="icon novi-icon mdi mdi-map-marker text-middle"></span></div>
                                                    <div class="unit-body"><a href="#">Jl. Jenderal Sudirman No. 8 Toboali, TOBOALI, Kec. Toboali, Kab. Bangka Selatan Prov. Kepulauan Bangka Belitung</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rd-navbar-menu-wrap clearfix">
                            <div class="rd-navbar-nav-wrap">
                                <div class="rd-navbar-mobile-scroll">
                                    <div class="rd-navbar-mobile-header-wrap">
                                        <div class="rd-navbar-mobile-brand"><a href="index.php"><img src="asset/images/logo.png" alt="" width="80"></a></div>
                                    </div>
                                    <ul class="rd-navbar-nav">
                                        <li><a href="index.php?module=home">Beranda</a></li>
                                        <li class="rd-navbar--has-dropdown rd-navbar-submenu "><a href="#">Profil</a>
                                            <ul class="rd-navbar-dropdown rd-navbar-open-right" style="">
                                                <li><a href="index.php?module=sejarah">Sejarah</a></li>
                                                <li><a href="index.php?module=visi_misi">Visi & Misi</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index.php?module=prestasi">Prestasi</a></li>
                                        <li><a href="index.php?module=fasilitas">Fasilitas</a></li>
                                        <li><a href="index.php?module=galeri">Galeri</a></li>
                                        <?php if(empty($_SESSION['usersiswa'])AND empty($_SESSION['passsiswa'])){ ?>
                                        <li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="#">PSB</a>
                                            <ul class="rd-navbar-dropdown rd-navbar-open-right" style="">
                                                <li><a href="index.php?module=daftar">Daftar</a></li>
                                                <li><a href="index.php?module=login">Masuk</a></li>
                                            </ul>
                                        </li>
                                        <?php }else{ ?>
                                        <!-- Jika Siswa Login -->
                                        <li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="#">Calon Siswa</a>
                                            <ul class="rd-navbar-dropdown rd-navbar-open-right" style="">
                                                <li><a href="index.php?module=biodata">Biodata</a></li>
                                                <li><a href="index.php?module=pengumuman">Pengumuman</a></li>
                                                <li><a href="index.php?module=logout">Keluar</a></li>
                                            </ul>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <?php 
            if ($_GET['module']=='home') {
                include "module/master/index.php";
            }else if ($_GET['module']=='sejarah') {
                include "module/master/sejarah.php";
            }else if ($_GET['module']=='visi_misi') {
                include "module/master/visi_misi.php";
            }else if ($_GET['module']=='prestasi') {
                include "module/master/prestasi.php";
            }else if ($_GET['module']=='detail_prestasi') {
                include "module/master/detail_prestasi.php";
            }else if ($_GET['module']=='fasilitas') {
                include "module/master/fasilitas.php";
            }else if ($_GET['module']=='detail_fasilitas') {
                include "module/master/detail_fasilitas.php";
            }else if ($_GET['module']=='galeri') {
                include "module/master/galeri.php";
            }else if ($_GET['module']=='daftar') {
                include "module/siswa/daftar.php";
            }else if ($_GET['module']=='login') {
                include "module/siswa/login.php";
            }else if ($_GET['module']=='biodata') {
                include "module/siswa/biodata.php";
            }else if ($_GET['module']=='pengumuman') {
                include "module/siswa/pengumuman.php";
            }else if ($_GET['module']=='detail_pengumuman') {
                include "module/siswa/detail_pengumuman.php";
            }else if ($_GET['module']=='logout') {
                include "module/siswa/logout.php";
            }else{
                echo "<script>window.location='$base_url'+'index.php?module=home';</script>";
                include "module/master/index.php";
            }
         ?>


        <footer class="section page-footer">
            <div class="novi-background bg-cover bg-default">
                <div class="shell-wide">
                    <div class="hr bg-gray-light"></div>
                </div>
                <div class="section-60">
                    <div class="shell">
                        <div class="range range-50 range-lg-justify range-xs-center">
                            <div class="cell-md-3 cell-lg-3"><a class="reveal-inline-block" href="index.php"><img src="asset/images/logo.png" alt=""></a>
                            </div>
                            <div class="cell-xs-10 cell-md-5 cell-lg-4 text-lg-left">
                                <h6 class="text-bold">Hubungi Kami</h6>
                                <div class="text-subline"></div>
                                <div class="offset-top-30">
                                    <ul class="list-unstyled contact-info list">
                                        <li>
                                            <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                                                <div class="unit-left"><span class="icon novi-icon mdi mdi-phone text-middle icon-xs text-madison"></span></div>
                                                <div class="unit-body"><a class="text-dark" href="tel:#">1-800-1234-567</a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                                                <div class="unit-left"><span class="icon novi-icon mdi mdi-map-marker text-middle icon-xs text-madison"></span></div>
                                                <div class="unit-body text-left"><a class="text-dark" href="#">Jl. Jenderal Sudirman No. 8 Toboali, TOBOALI, Kec. Toboali, Kab. Bangka Selatan Prov. Kepulauan Bangka Belitung</a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                                                <div class="unit-left"><span class="icon novi-icon mdi mdi-email-open text-middle icon-xs text-madison"></span></div>
                                                <div class="unit-body"><a href="mailto:#">info@demolink.org</a></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-5 bg-madison context-dark novi-background">
                    <div class="shell text-md-left">
                        <p class="">© <span class="copyright-year">2019</span> SMP 1 TOBOALI All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="asset/js/core.min.js"></script>
    <script src="asset/js/script.js"></script>
     <script src="js/datepicker/datepicker.min.js" type="text/javascript"></script>
        <link href="js/datepicker/datepicker.min.css" rel="stylesheet" type="text/css" />
        <script>
            $('.datepicker').datepicker({
                changeMonth: true,
                changeYear: true,
                minDate: "-20Y", 
                maxDate: "+1M +10D"
            });
        </script>
</body>

</html>