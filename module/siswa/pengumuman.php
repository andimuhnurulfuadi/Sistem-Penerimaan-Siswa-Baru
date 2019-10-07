<section class="section breadcrumb-modern context-dark parallax-container" data-parallax-img="asset/images/backgrounds/bg-header.jpg">
    <div class="parallax-content section-30 section-sm-70">
        <div class="shell">
            <h2 class="veil reveal-sm-block">Pengumuman</h2>
            <div class="offset-sm-top-35">
                <ul class="list-inline list-inline-lg list-inline-dashed p">
                    <li><a href="index.php?module=home">Beranda</a></li>
                    <li>Pengumuman</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section novi-background bg-cover section-70 section-md-114 bg-catskill">
    <div class="shell isotope-wrap">
        <h2 class="text-bold">Pengumuman Untuk Mahasiswa Baru</h2>
        <hr class="divider bg-madison">
        <div class="row range-30 isotope offset-top-60 text-left">
            <ul>
            <?php 
                
                $no=1;    
                $query = mysqli_query($koneksi,"SELECT * FROM pengumuman");
                while ($data=mysqli_fetch_array($query)) {
             ?>
                <li><a href="index.php?module=detail_pengumuman&kd_pengumuman=<?php echo$data['id_pengumuman']; ?>"><h5><?php echo $data['nama_pengumuman']; ?></h5></a></li>
            <?php } ?>
            </ul>
        </div>
    </div>
</section>