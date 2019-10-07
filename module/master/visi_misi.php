<section class="section breadcrumb-modern context-dark parallax-container" data-parallax-img="asset/images/backgrounds/bg-header.jpg">
    <div class="parallax-content section-30 section-sm-70">
        <div class="shell">
            <h2 class="veil reveal-sm-block">Visi dan Misi</h2>
            <div class="offset-sm-top-35">
                <ul class="list-inline list-inline-lg list-inline-dashed p">
                    <li><a href="index.php?module=home">Beranda</a></li>
                    <li>Visi dan Misi</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section novi-background bg-cover section-70 section-md-114 bg-default">
    <div class="shell">
        <div class="range range-50">
            <div class="cell-sm-4 cell-sm-push-2 text-sm-left">
                <h2 class="text-bold">VISI</h2>
                <hr class="divider bg-madison hr-sm-left-0">
                <div class="offset-top-30 offset-sm-top-30">
                    <?php 
                        $query = mysqli_query($koneksi,"SELECT * FROM sekolah WHERE judul='visi'");
                        while ($data=mysqli_fetch_array($query)) {
                            echo "<p>".$data['deskripsi']."</p>";
                        }
                     ?>
                </div>
            </div>
            <div class="cell-sm-8 cell-sm-push-1 text-sm-left">
                <h2 class="text-bold">MISI</h2>
                <hr class="divider bg-madison hr-sm-left-0">
                <div class="offset-top-30 offset-sm-top-30">
                    <?php 
                        $query = mysqli_query($koneksi,"SELECT * FROM sekolah WHERE judul='misi'");
                        while ($data=mysqli_fetch_array($query)) {
                            echo "<p>".$data['deskripsi']."</p>";
                        }
                     ?>
                </div>
            </div>
        </div>
    </div>
</section>