<section class="section breadcrumb-modern context-dark parallax-container" data-parallax-img="asset/images/backgrounds/bg-header.jpg">
    <div class="parallax-content section-30 section-sm-70">
        <div class="shell">
            <h2 class="veil reveal-sm-block">Galeri</h2>
            <div class="offset-sm-top-35">
                <ul class="list-inline list-inline-lg list-inline-dashed p">
                    <li><a href="index.php?module=home">Beranda</a></li>
                    <li>Galeri</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section novi-background bg-cover section-70 section-md-114 bg-default">
    <div class="shell">
        <h2>Galeri Sekolah</h2>
        <hr class="divider bg-madison">
        <div class="offset-top-60">
            <div class="range range-30 range-xs-center" data-lightgallery="group">
                <?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM galeri");
                    while ($data=mysqli_fetch_array($query)) {
                ?>
                <div class="cell-xs-10 cell-sm-6 cell-md-4">
                    <figure class="thumbnail-classic thumbnail-md">
                        <div class="thumbnail-classic-img-wrap"><img src="admin/upload/<?php echo $data['gambar']; ?>" alt="" style="width: 370px; height: 310px;"> </div>
                        <figcaption class="thumbnail-classic-caption text-center">
                            <div>
                                <h4 class="thumbnail-classic-title"><?php echo $data['nama_galeri']; ?></h4>
                            </div>
                            <hr class="divider divider-sm">
                            <div class="offset-top-20 veil reveal-lg-block"><a class="thumbnail-classic-link icon novi-icon icon-xxs fa-search-plus" href="admin/upload/<?php echo $data['gambar']; ?>" data-lightgallery="item"><img src="admin/upload/<?php echo $data['gambar']; ?>" alt="" width="370" height="370"></a></div>
                        </figcaption>
                    </figure>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
</section>