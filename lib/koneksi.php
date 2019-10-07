<?php 
//medefinisikan koneksi ke database
$server = "localhost";
$username = "root";
$password = "";
$database = "db_psb_toboali";
//membuat koneksi
$koneksi = mysqli_connect($server,$username,$password) or die ("koneksi gagal");
mysqli_select_db($koneksi,$database) or die ("database tidak bisa di buka atau digunakan");
 ?>