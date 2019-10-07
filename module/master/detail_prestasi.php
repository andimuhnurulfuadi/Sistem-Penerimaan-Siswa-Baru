<section class="section breadcrumb-modern context-dark parallax-container" data-parallax-img="images/backgrounds/bg-header.jpg">
    <div class="parallax-content section-30 section-sm-70">
        <div class="shell">
            <h2 class="veil reveal-sm-block">Detail Prestasi</h2>
            <div class="offset-sm-top-35">
                <ul class="list-inline list-inline-lg list-inline-dashed p">
                    <li><a href="index.php?module=home">Beranda</a></li>
                    <li><a href="index.php?module=prestasi">Prestasi</a></li>
                    <li>Detail Prestasi </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div id="fb-root"></div>
<?php 
$kd = $_GET['kd_prestasi'];
$query = mysqli_query($koneksi,"SELECT * FROM prestasi WHERE id_prestasi='$kd'");
while ($data=mysqli_fetch_array($query)) {
?>
    <section class="section novi-background bg-cover section-70 section-md-114 bg-default">
        <div class="shell">
            <div class="range range-50 range-xs-center">
                <div class="cell-sm-8 cell-md-8 text-md-left">
                    <h3 class="text-bold"> <?php echo $data['nama_prestasi']; ?> </h3>
                    <hr class="divider bg-madison hr-md-left-0">
                    <div class="offset-top-30">
                        <div class="offset-top-30">
                            <p><?php echo $data['deskripsi']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="cell-xs-8 cell-md-4 text-left">
                    <img class="img-responsive" src="admin/upload/<?php echo $data['foto']; ?>" width="770" height="500" alt="">
                </div>
            </div>
        </div>
    </section>
    <?php } ?>