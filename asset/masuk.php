<?php include("header.php"); ?>
        <section class="section breadcrumb-modern context-dark parallax-container" data-parallax-img="images/backgrounds/bg-header.jpg">
            <div class="parallax-content section-30 section-sm-70">
                <div class="shell">
                    <h2 class="veil reveal-sm-block">Masuk</h2>
                    <div class="offset-sm-top-35">
                        <ul class="list-inline list-inline-lg list-inline-dashed p">
                            <li><a href="index.php">Beranda</a></li>
                            <li>Masuk</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="section novi-background bg-cover section-70 section-md-114 bg-default">
            <div class="shell">
                <div class="range range-65 range-xs-center">
                    <div class="cell-md-4 text-md-left">
                        <h2 class="text-bold">Masuk</h2>
                        <hr class="divider bg-madison hr-md-left-0">
                        <div class="offset-top-30 offset-md-top-30">
                            <p>Silahkan masuk jika Anda sudah pernah mendaftar menjadi siswa baru di webiste kami.</p>
                        </div>
                        <div class="offset-top-30">
                            <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                                <div class="range range-12">
                                    <div class="cell-sm-12">
                                        <div class="form-group"><label class="form-label form-label-outside" for="login-no-ijazah">No Ijazah</label><input class="form-control form-validation-inside" id="login-no-ijazah" type="text" name="no-ijazah" data-constraints="@Required"></div>
                                    </div>
                                    <div class="cell-sm-12">
                                        <div class="form-group"><label class="form-label form-label-outside" for="login-password">Password</label><input class="form-control form-validation-inside" id="login-password" type="password" name="password" data-constraints="@Required"></div>
                                    </div>
                                </div>
                                <div class="text-center text-md-left offset-top-20"><button class="btn btn-primary" type="submit">Masuk</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include("footer.php"); ?>