<?php 
  $user = $_SESSION['usersiswa'];
  $pass = $_SESSION['passsiswa'];
  $query=mysqli_query($koneksi,"SELECT * FROM siswa s JOIN nilai n ON s.id_siswa=n.id_siswa JOIN pendaftaran p ON p.id_siswa=s.id_siswa WHERE s.username='$user' AND s.password='$pass'");
  while ($data=mysqli_fetch_array($query)) {
    
    $tgl=$data['tgl_daftar'];
    $nama=$data['nama'];
    $jenkel=$data['jenis_kelamin'];
    $alamatsiswa=$data['alamat_siswa'];
    $tempatlahir=$data['tempat_lahir'];
    $tgllahir=$data['tgl_lahir'];
    $agama=$data['agama'];
    $telepon=$data['hp'];
    $namaorangtua=$data['nama_ortu'];
    $pekerjaanorangtua=$data['pekerjaan'];
    $alamatorangtua=$data['alamat_ortu'];
    $noijazah=$data['no_ijazah'];
    $username=$data['username'];
    $password=$data['password'];
    $bindo=$data['nilai_indo'];
    $mtk=$data['nilai_mtk'];
    $ipa=$data['nilai_ipa'];
    $prestasi=$data['nilai_prestasi'];
    $total=$data['total_nilai'];
    $status=$data['status_daftar'];

 ?>
<section class="section breadcrumb-modern context-dark parallax-container" data-parallax-img="asset/images/backgrounds/bg-header.jpg">
    <div class="parallax-content section-30 section-sm-70">
        <div class="shell">
            <h2 class="veil reveal-sm-block">Biodata</h2>
            <div class="offset-sm-top-35">
                <ul class="list-inline list-inline-lg list-inline-dashed p">
                    <li><a href="index.php?module=home">Beranda</a></li>
                    <li>Biodata</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section novi-background bg-cover section-70 section-md-114 bg-default">
    <div class="shell">
        <h2 class="text-bold">Biodata Calon Siswa</h2>
        <hr class="divider bg-madison">
        <div class="offset-top-30 offset-md-top-30">
        </div>
        <form class="rd-mailform text-left psb-registration"  method="POST" action="module/siswa/aksi_edit.php">
            <h3 class="text-bold offset-top-30 offset-md-top-30">A. Data Diri</h3>
            <hr class="divider bg-madison hr-md-left-0">
            <div class="range range-65 range-xs-center ">
                <div class="cell-md-6 text-md-left">
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
                            <input class="form-control form-validation-inside" id="psb-nama-lengkap" type="text" name="nama" data-constraints="@Required" value="<?php echo $nama; ?>">
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
                            <textarea class="form-control form-validation-inside" id="-psb-alamat-siswa" name="alamatsiswa" data-constraints="@Required" style="height: 120px"><?php echo $alamatsiswa; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group range">
                        <div class="cell-md-4 text-md-left">
                            <label class="form-label2" for="psb-tempat-lahir">Tempat Lahir</label>
                        </div>
                        <div class="cell-md-6 text-md-left">
                            <input class="form-control form-validation-inside" id="psb-tempat-lahir" type="text" name="tempatlahir" data-constraints="@Required" value="<?php echo $tempatlahir; ?>">
                        </div>
                    </div>
                    <div class="form-group range">
                        <div class="cell-md-4 text-md-left">
                            <label class="form-label2" for="psb-tanggal-lahir">Tanggal Lahir</label>
                        </div>
                        <div class="cell-md-6 text-md-left">
                            <input type="text" class="datepicker form-control" placeholder="dd/mm/yyyy" aria-label="dd/mm/yyyy" aria-describedby="basic-addon2" name="tgllahir" value="<?php echo $tgllahir; ?>">
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
                            <input class="form-control form-validation-inside" id="psb-no-hp" type="text" name="telepon" data-constraints="@Required" value="<?php echo $telepon; ?>">
                        </div>
                    </div>
                    <div class="form-group range">
                        <div class="cell-md-4 text-md-left">
                            <label class="form-label2" for="psb-nama-ortu">Nama Orang Tua</label>
                        </div>
                        <div class="cell-md-6 text-md-left">
                            <input class="form-control form-validation-inside" id="psb-nama-ortu" type="text" name="namaortu" data-constraints="@Required" value="<?php echo $namaorangtua; ?>">
                        </div>
                    </div>
                    <div class="form-group range">
                        <div class="cell-md-4 text-md-left">
                            <label class="form-label2" for="psb-alamat-ortu">Alamat Orang Tua / Wali</label>
                        </div>
                        <div class="cell-md-8 text-md-left">
                            <textarea class="form-control form-validation-inside" id="-psb-alamat-ortu" name="alamatortu" data-constraints="@Required" style="height: 120px"><?php echo $alamatorangtua; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group range">
                        <div class="cell-md-4 text-md-left">
                            <label class="form-label2" for="psb-pekerjaan-ortu">Pekerjaan Orang Tua / Wali</label>
                        </div>
                        <div class="cell-md-6 text-md-left">
                            <input class="form-control form-validation-inside" id="psb-pekerjaan-ortu" type="text" name="pekerjaanortu" data-constraints="@Required" value="<?php echo $pekerjaanorangtua; ?>">
                        </div>
                    </div>
                    <div class="form-group range">
                        <div class="cell-md-4 text-md-left">
                            <label class="form-label2" for="psb-no-ijazah">No Ijazah</label>
                        </div>
                        <div class="cell-md-6 text-md-left">
                            <input class="form-control form-validation-inside" id="psb-no-ijazah" type="text" name="noijazah" data-constraints="@Required" value="<?php echo $noijazah; ?>">
                        </div>
                    </div>
                    <div class="form-group range">
                        <div class="cell-md-4 text-md-left">
                            <label class="form-label2" for="psb-nama-lengkap">Username</label>
                        </div>
                        <div class="cell-md-6 text-md-left">
                            <input class="form-control form-validation-inside" id="psb-username" type="text" name="username" data-constraints="@Required" value="<?php echo $username; ?>">
                        </div>
                    </div>
                    <div class="form-group range">
                        <div class="cell-md-4 text-md-left">
                            <label class="form-label2" for="psb-password">Password</label>
                        </div>
                        <div class="cell-md-6 text-md-left">
                            <input class="form-control form-validation-inside" id="psb-password" type="password" name="password" data-constraints="@Required" value="<?php echo $password; ?>">
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="text-bold offset-top-30 offset-md-top-30">B. Nilai </h3>
            <hr class="divider bg-madison hr-md-left-0">
            <div class="range range-65 range-xs-center ">
                <div class="cell-md-6 text-md-left">
                    <div class="form-group range">
                        <div class="cell-md-4 text-md-left">
                            <label class="form-label2" for="psb-nilai-indo">Bahasa Indonesia</label>
                        </div>
                        <div class="cell-md-4 text-md-left">
                            <input class="form-control form-validation-inside" id="psb-nilai-indo" type="number" name="indo" data-constraints="@Required" value="<?php echo $bindo; ?>">
                        </div>
                    </div>
                    <div class="form-group range">
                        <div class="cell-md-4 text-md-left">
                            <label class="form-label2" for="psb-nilai-ipa">IPA</label>
                        </div>
                        <div class="cell-md-4 text-md-left">
                            <input class="form-control form-validation-inside" id="psb-nilai-ipa" type="number" name="ipa" data-constraints="@Required" value="<?php echo $ipa; ?>">
                        </div>
                    </div>
                </div>
                <div class="cell-md-6 text-md-left">
                    <div class="form-group range">
                        <div class="cell-md-4 text-md-left">
                            <label class="form-label2" for="psb-nilai-matik">Matematika</label>
                        </div>
                        <div class="cell-md-4 text-md-left">
                            <input class="form-control form-validation-inside" id="psb-nilai-matik" type="number" name="mtk" data-constraints="@Required" value="<?php echo $mtk; ?>">
                        </div>
                    </div>
                    <div class="form-group range">
                        <div class="cell-md-4 text-md-left">
                            <label class="form-label2" for="psb-nilai-prestasi">Prestasi</label>
                        </div>
                        <div class="cell-md-4 text-md-left">
                            <input class="form-control form-validation-inside" id="psb-nilai-prestasi" type="number" name="prestasi" data-constraints="@Required" value="<?php echo $prestasi; ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="alert alert-warning offset-top-30 offset-md-top-30">Silahkan cek kembali data Anda sebelum menekan tombol <strong>Simpan</strong></div>
            <div class="text-center offset-top-30 offset-md-top-30"><button class="btn btn-primary" type="submit">Simpan</button>
            </form>
        </div>
    </section>
<?php } ?>
    
    