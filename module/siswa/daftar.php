<section class="section breadcrumb-modern context-dark parallax-container" data-parallax-img="asset/images/backgrounds/bg-header.jpg">
            <div class="parallax-content section-30 section-sm-70">
                <div class="shell">
                    <h2 class="veil reveal-sm-block">Daftar</h2>
                    <div class="offset-sm-top-35">
                        <ul class="list-inline list-inline-lg list-inline-dashed p">
                            <li><a href="index.php">Beranda</a></li>
                            <li>Daftar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="section novi-background bg-cover section-70 section-md-114 bg-default">
            <div class="shell">
                <h2 class="text-bold">Daftar</h2>
                <hr class="divider bg-madison">
                <div class="offset-top-30 offset-md-top-30">
                    <p>Silahkan melakukan pendaftaran untuk menjadi calon siswa baru di SMP 1 TOBOALI</p>
                </div>
                <form class=""  method="POST" action="module/siswa/aksi_daftar.php">
                    <h3 class="text-bold offset-top-30 offset-md-top-30">A. Data Pendaftar</h3>
                    <hr class="divider bg-madison hr-md-left-0">
                    <div class="range range-65 range-xs-center ">
                        <div class="cell-md-6 text-md-left">
                            <?php 
                                $tgl= date('d/m/Y');
                            ?>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-nama-lengkap">Tanggal Pendaftaran</label>
                                </div>
                                <div class="cell-md-6 text-md-left">
                                    <input class="form-control form-validation-inside" type="text" name="tgl" value="<?php echo $tgl; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-nama-lengkap">Nama Lengkap</label>
                                </div>
                                <div class="cell-md-6 text-md-left">
                                    <input class="form-control form-validation-inside" id="psb-nama-lengkap" type="text" name="nama" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2">Jenis Kelamin</label>
                                </div>
                                <div class="cell-md-6 text-md-left">
                                    <select name="jenkel">
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-alamat-siswa">Alamat Siswa</label>
                                </div>
                                <div class="cell-md-8 text-md-left">   
                                    <textarea class="form-control form-validation-inside" id="-psb-alamat-siswa" name="alamatsiswa" data-constraints="@Required" style="height: 120px"></textarea>
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-tempat-lahir">Tempat Lahir</label>
                                </div>
                                <div class="cell-md-6 text-md-left">
                                    <input class="form-control form-validation-inside" id="psb-tempat-lahir" type="text" name="tempatlahir" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-tanggal-lahir">Tanggal Lahir</label>
                                </div>
                                <div class="cell-md-6 text-md-left">
                                    <input type="text" class="datepicker form-control" placeholder="dd/mm/yyyy" aria-label="dd/mm/yyyy" aria-describedby="basic-addon2" name="tgllahir">
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-agama">Agama</label>
                                </div>
                                <div class="cell-md-6 text-md-left">
                                    <select name="agama">
                                        <option value='islam'>Islam</option>
                                        <option value='kristen'>Kristen</option>
                                        <option value='katholik'>Katholik</option>
                                        <option value='hindu'>Hindu</option>
                                        <option value='kristen'>Budha</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="cell-md-6 text-md-left">
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-no-hp">Nomor HP</label>
                                </div>
                                <div class="cell-md-6 text-md-left">
                                    <input class="form-control form-validation-inside" id="psb-no-hp" type="text" name="telepon" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-nama-ortu">Nama Orang Tua</label>
                                </div>
                                <div class="cell-md-6 text-md-left">
                                    <input class="form-control form-validation-inside" id="psb-nama-ortu" type="text" name="namaortu" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-alamat-ortu">Alamat Orang Tua / Wali</label>
                                </div>
                                <div class="cell-md-8 text-md-left">
                                    <textarea class="form-control form-validation-inside" id="-psb-alamat-ortu" name="alamatortu" data-constraints="@Required" style="height: 120px"></textarea>
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-pekerjaan-ortu">Pekerjaan Orang Tua / Wali</label>
                                </div>
                                <div class="cell-md-6 text-md-left">
                                    <input class="form-control form-validation-inside" id="psb-pekerjaan-ortu" type="text" name="pekerjaanortu" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-no-ijazah">No Ijazah</label>
                                </div>
                                <div class="cell-md-6 text-md-left">
                                    <input class="form-control form-validation-inside" id="psb-no-ijazah" type="text" name="noijazah" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-nama-lengkap">Username</label>
                                </div>
                                <div class="cell-md-6 text-md-left">
                                    <input class="form-control form-validation-inside" id="psb-username" type="text" name="username" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-password">Password</label>
                                </div>
                                <div class="cell-md-6 text-md-left">
                                    <input class="form-control"  type="password" name="password" data-constraints="@Required">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-bold offset-top-30 offset-md-top-30">B. Nilai Pendaftar</h3>
                    <hr class="divider bg-madison hr-md-left-0">
                    <div class="range range-65 range-xs-center ">
                        <div class="cell-md-6 text-md-left">
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-nilai-indo">Bahasa Indonesia</label>
                                </div>
                                <div class="cell-md-4 text-md-left">
                                    <input class="form-control form-validation-inside" id="psb-nilai-indo" type="number" name="indo" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-nilai-ipa">IPA</label>
                                </div>
                                <div class="cell-md-4 text-md-left">
                                    <input class="form-control form-validation-inside" id="psb-nilai-ipa" type="number" name="ipa" data-constraints="@Required">
                                </div>
                            </div>
                        </div>
                        <div class="cell-md-6 text-md-left">
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-nilai-matik">Matematika</label>
                                </div>
                                <div class="cell-md-4 text-md-left">
                                    <input class="form-control form-validation-inside" id="psb-nilai-matik" type="number" name="mtk" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-nilai-prestasi">Prestasi</label>
                                </div>
                                <div class="cell-md-4 text-md-left">
                                    <input class="form-control form-validation-inside" id="psb-nilai-prestasi" type="number" name="prestasi" data-constraints="@Required">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-warning offset-top-30 offset-md-top-30">Silahkan cek kembali data Anda sebelum menekan tombol <strong>DAFTAR</strong></div>
                    <div class="text-center offset-top-30 offset-md-top-30"><button class="btn btn-primary" type="submit">DAFTAR</button>
                </form>
            </div>
        </section>
        
       