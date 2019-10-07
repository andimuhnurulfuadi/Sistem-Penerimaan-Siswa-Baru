<?php include("header.php"); ?>
        <section class="section breadcrumb-modern context-dark parallax-container" data-parallax-img="images/backgrounds/bg-header.jpg">
            <div class="parallax-content section-30 section-sm-70">
                <div class="shell">
                    <h2 class="veil reveal-sm-block">Data Diri Siswa</h2>
                    <div class="offset-sm-top-35">
                        <ul class="list-inline list-inline-lg list-inline-dashed p">
                            <li><a href="index.php">Beranda</a></li>
                            <li>Biodata</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="section novi-background bg-cover section-70 section-md-114 bg-default">
            <div class="shell">
                <h2 class="text-bold">Data Diri Siswa</h2>
                <hr class="divider bg-madison">
                <div class="offset-top-30 offset-md-top-30">
                    <p>Jika Terdapat kesalahan saat memasukkan data diri siswa, silahkan lakukan perubahan melalui halaman ini.</p>
                </div>
                <form class="rd-mailform text-left psb-registration" data-form-output="form-output-global" data-form-type="contact" method="" action="">
                    <h3 class="text-bold offset-top-30 offset-md-top-30">A. Data Pendaftar</h3>
                    <hr class="divider bg-madison hr-md-left-0">
                    <div class="range range-65 range-xs-center ">
                        <div class="cell-md-6 text-md-left">
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-no-ijazah">No Ijazah</label>
                                </div>
                                <div class="cell-md-6 text-md-left">
                                    <input class="form-control form-validation-inside" id="psb-no-ijazah" type="text" name="psb-no-ijazah" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-password">Password</label>
                                </div>
                                <div class="cell-md-6 text-md-left">
                                    <input class="form-control form-validation-inside" id="psb-password" type="password" name="psb-password" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-nama-lengkap">Nama Lengkap</label>
                                </div>
                                <div class="cell-md-6 text-md-left">
                                    <input class="form-control form-validation-inside" id="psb-nama-lengkap" type="text" name="psb-nama-lengkap" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2">Jenis Kelamin</label>
                                </div>
                                <div class="cell-md-6 text-md-left">
                                    <select>
                                        <option value="">Laki-Laki</option>
                                        <option value="">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-alamat-siswa">Alamat Siswa</label>
                                </div>
                                <div class="cell-md-8 text-md-left">   
                                    <textarea class="form-control form-validation-inside" id="-psb-alamat-siswa" name="psb-alamat-siswa" data-constraints="@Required" style="height: 120px"></textarea>
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-tempat-lahir">Tempat Lahir</label>
                                </div>
                                <div class="cell-md-6 text-md-left">
                                    <input class="form-control form-validation-inside" id="psb-tempat-lahir" type="text" name="psb-tempat-lahir" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-tanggal-lahir">Tanggal Lahir</label>
                                </div>
                                <div class="cell-md-6 text-md-left">
                                    <input type="text" class="datepicker form-control" placeholder="mm/dd/yyyy" aria-label="mm/dd/yyyy" aria-describedby="basic-addon2">
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-no-hp">Nomor HP</label>
                                </div>
                                <div class="cell-md-6 text-md-left">
                                    <input class="form-control form-validation-inside" id="psb-no-hp" type="text" name="psb-no-hp" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-agama">Agama</label>
                                </div>
                                <div class="cell-md-6 text-md-left">
                                    <select>
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
                                    <label class="form-label2" for="psb-nama-ortu">Nama Orang Tua</label>
                                </div>
                                <div class="cell-md-6 text-md-left">
                                    <input class="form-control form-validation-inside" id="psb-nama-ortu" type="text" name="psb-nama-ortu" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-alamat-ortu">Alamat Orang Tua</label>
                                </div>
                                <div class="cell-md-8 text-md-left">
                                    <textarea class="form-control form-validation-inside" id="-psb-alamat-ortu" name="psb-alamat-ortu" data-constraints="@Required" style="height: 120px"></textarea>
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-pekerjaan-ortu">Pekerjaan Orang Tua</label>
                                </div>
                                <div class="cell-md-6 text-md-left">
                                    <input class="form-control form-validation-inside" id="psb-pekerjaan-ortu" type="text" name="psb-pekerjaan-ortu" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-nama-wali">Nama Wali</label>
                                </div>
                                <div class="cell-md-6 text-md-left">
                                    <input class="form-control form-validation-inside" id="psb-nama-wali" type="text" name="psb-nama-wali" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-alamat-wali">Alamat Wali</label>
                                </div>
                                <div class="cell-md-8 text-md-left">
                                    <textarea class="form-control form-validation-inside" id="-psb-alamat-wali" name="psb-alamat-wali" data-constraints="@Required" style="height: 120px"></textarea>
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-sekolah-asal">Sekolah Asal</label>
                                </div>
                                <div class="cell-md-6 text-md-left">
                                    <input class="form-control form-validation-inside" id="psb-sekolah-asal" type="text" name="psb-sekolah-asal" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-alamat-sekolah-asal">Alamat Sekolah Asal</label>
                                </div>
                                <div class="cell-md-8 text-md-left">   
                                    <textarea class="form-control form-validation-inside" id="-psb-alamat-sekolah-asal" name="psb-alamat-sekolah-asal" data-constraints="@Required" style="height: 120px"></textarea>
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
                                    <input class="form-control form-validation-inside" id="psb-nilai-indo" type="number" name="psb-nilai-indo" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-nilai-ipa">IPA</label>
                                </div>
                                <div class="cell-md-4 text-md-left">
                                    <input class="form-control form-validation-inside" id="psb-nilai-ipa" type="number" name="psb-nilai-ipa" data-constraints="@Required">
                                </div>
                            </div>
                        </div>
                        <div class="cell-md-6 text-md-left">
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-nilai-matik">Matematika</label>
                                </div>
                                <div class="cell-md-4 text-md-left">
                                    <input class="form-control form-validation-inside" id="psb-nilai-matik" type="number" name="psb-nilai-matik" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="form-group range">
                                <div class="cell-md-4 text-md-left">
                                    <label class="form-label2" for="psb-nilai-prestasi">Prestasi</label>
                                </div>
                                <div class="cell-md-4 text-md-left">
                                    <input class="form-control form-validation-inside" id="psb-nilai-prestasi" type="number" name="psb-nilai-prestasi" data-constraints="@Required">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-warning offset-top-30 offset-md-top-30">Silahkan cek kembali data Anda sebelum menekan tombol <strong>SIMPAN</strong></div>
                    <div class="text-center offset-top-30 offset-md-top-30"><button class="btn btn-primary" type="submit">SIMPAN</button>
                </form>
            </div>
        </section>
       
        <?php include("footer.php"); ?> 
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