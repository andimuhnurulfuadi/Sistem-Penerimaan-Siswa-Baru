<section class="section breadcrumb-modern context-dark parallax-container" data-parallax-img="asset/images/backgrounds/bg-header.jpg">
    <div class="parallax-content section-30 section-sm-70">
        <div class="shell">
            <h2 class="veil reveal-sm-block">Prestasi</h2>
            <div class="offset-sm-top-35">
                <ul class="list-inline list-inline-lg list-inline-dashed p">
                    <li><a href="index.php?module=home">Beranda</a></li>
                    <li>Prestasi</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section novi-background bg-cover section-70 section-md-114 bg-catskill">
    <div class="shell isotope-wrap">
        <h2 class="text-bold">Prestasi Sekolah Kami</h2>
        <hr class="divider bg-madison">
        <div class="row range-30 isotope offset-top-60 text-left">
            <?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM prestasi");
                    while ($data=mysqli_fetch_array($query)) {
             ?>
            <div class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                <article class="post-course">
                    <a href="index.php?module=detail_prestasi&kd_prestasi=<?php echo$data['id_prestasi']; ?>">
                        <img class="img-responsive" style="height:300px; width:370px;" src="admin/upload/<?php echo $data['foto']; ?>" alt="<?php echo $data['foto']; ?>">
                    </a>
                    <div class="post-news-body">
                        <h6><a href="index.php?module=detail_prestasi&kd_prestasi=<?php echo$data['id_prestasi']; ?>"><?php echo $data['nama_prestasi']; ?></a></h6>
                        <a href="index.php?module=detail_prestasi&kd_prestasi=<?php echo$data['id_prestasi']; ?>" title="Selengkapnya" ><div class="post-course-meta offset-top-20"><span class="text-middle text-black">Selengkapnya</span><span class="icon inset-left-10 novi-icon icon-xs text-middle text-madison mdi-arrow-right mdi"></span></div></a>
                    </div>
                </article>
            </div>
            <?php } ?>
        </div>
    </div>
</section>