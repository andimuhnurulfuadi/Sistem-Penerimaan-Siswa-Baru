-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2019 at 05:20 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_psb_toboali`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'Andi Muhammad Nurulfuadi', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `nama_galeri` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `nama_galeri`, `gambar`) VALUES
(2, 'Upacara', 'smp4.jpg'),
(3, 'Lab Komputer', 'smp2.jpg'),
(4, 'UNBK', 'smp3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nilai_indo` double NOT NULL,
  `nilai_ipa` double NOT NULL,
  `nilai_mtk` double NOT NULL,
  `nilai_prestasi` double NOT NULL,
  `total_nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_siswa`, `nilai_indo`, `nilai_ipa`, `nilai_mtk`, `nilai_prestasi`, `total_nilai`) VALUES
(4, 4, 90, 90, 90, 90, 360),
(5, 5, 10, 10, 10, 10, 40),
(6, 6, 50, 50, 50, 50, 200),
(7, 7, 30, 30, 30, 30, 120),
(8, 8, 80, 80, 80, 80, 320),
(9, 9, 5, 5, 5, 10, 25),
(10, 10, 5, 5, 5, 5, 20);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_daftar` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tgl_daftar` varchar(50) NOT NULL,
  `status_daftar` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_daftar`, `id_siswa`, `tgl_daftar`, `status_daftar`) VALUES
(4, 4, '0000-00-00', 'belum lulus'),
(5, 5, '0000-00-00', 'belum lulu'),
(6, 6, '', 'belum lulus'),
(7, 7, '05/10/2019', 'belum lulu'),
(8, 8, '05/10/2019', 'belum lulus'),
(9, 9, '05/10/2019', 'belum lulus'),
(10, 10, '05/10/2019', 'belum lulus');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `nama_pengumuman` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `nama_pengumuman`, `isi`) VALUES
(2, 'syarat pendaftaran calon siswa', 'asdasdasd'),
(3, 'daftar peserta  yang lulusas', 'dasdasdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `nama_prestasi` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `nama_prestasi`, `deskripsi`, `foto`) VALUES
(2, 'Melukis', 'Juara 2 melukis tingkat sekolah', 'melukis.png'),
(3, 'Tenis Meja', 'Juara satu tenis meja tingkat kabupaten', 'tenismeja.jpg'),
(4, 'Catur', 'Juara satu catur tingkat sekolah', 'catur.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `judul`, `deskripsi`) VALUES
(4, 'Visi ', '\"Menuju Sekolah Masa Depan di Era Teknologi dan Globalisasi Berwawasan Lingkungan serta Berdaya Saing Berlandaskan Iman dan Takwa\"'),
(5, 'Misi', '1.  Mutu lulusan yang mampu berkiprah dalam lingkungan masyarakatnya.<br />\r\n2. Keunggulan dalam prestasi akademik dan non akademik.<br />\r\n3. Kelengkapan perangkat kurikulum dan pengembangannya.<br />\r\n4. Kualitas proses pembelajaransesuai SNP.<br />\r\n5. Pendidik dan tenaga pendidik yang berkualitas.<br />\r\n6. Kelengkapan sarana dan prasarana pendidikan.<br />\r\n7. Pelaksanaan manajemen berbasis sekolah.<br />\r\n8. Penggalangan pembiayaan pendidikan dari berbagai sumber.<br />\r\n9. Kualitas sistem penilaian sesuai SNP.<br />\r\n10. Lingkungan yang memotivasi dan mendukung pembelajaran.<br />\r\n11. Peningkatan keimanan dan pengamalannya.'),
(6, 'Sejarah', 'SMP Negeri 1 Toboali terletak di jalan Jenderal Sudirman Toboali, Bangka Selatan. Terbentuknya pada bulan Juli 1959, namun Sknya baru keluar dan berjalan secara sah pada 5 Februari 1960. Hal ini berdasarkan data-data SMP Negeri 1 yang ada di Dinas Pendidikan Kabupaten Bangka Selatan. Mulai beroperasi secara lancar sesudah SK tersebut pada bulan Juli 1960 di awal tahun ajaran baru. SMP Negeri 1 Toboali ini merupakan peralihan dari SMP Bhakti menjadi SMP Negeri 1 Toboali pada tahun  1959. SMP Negeri 1 Toboali ini juga merupakan SMP Negeri yang pertama di Bangka Selatan. Kepala Sekolah yang pertama adalah Bapak Usman Samin.');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `alamat_siswa` text NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `hp` char(13) NOT NULL,
  `nama_ortu` varchar(100) NOT NULL,
  `alamat_ortu` text NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `no_ijazah` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama`, `jenis_kelamin`, `alamat_siswa`, `tempat_lahir`, `tgl_lahir`, `agama`, `hp`, `nama_ortu`, `alamat_ortu`, `pekerjaan`, `no_ijazah`, `username`, `password`) VALUES
(4, 'A muh nurul', 'L', 'kalubibing', 'sulawesi', '0000-00-00', 'islam', '081123321234', 'asdas', 'malaysia', 'eksekutif', '0987654321', 'nurul', 'password'),
(5, 'julaiha', 'P', 'kampang', 'jawa timur', '0000-00-00', 'kristen', '123123123123', 'fafa', 'cengkareng', 'pns', '111111111111', 'jule', 'password'),
(6, 'eee', 'P', 'awaweawaw', 'bangka', '17/17/1997', 'katholik', '000000000', 'asdas', 'asdasddasdasd', 'tentara', '098765432112', 'eee', 'password'),
(7, 'fuckasdasds', 'P', 'asdasdasdasdasdasdasd', 'bangka bang', '', 'islam', '123123123321', 'werew', 'asdawdasdawdawdqawd', 'eksekutif', '098765432113', 'admin', 'password'),
(8, 'eeeaszd', 'L', 'asdasdasd', 'asdasd', '17/07/1998', 'islam', '121212', 'fafa', 'asdfsd', 'asd', '123123123', 'zsdasd', 'password'),
(9, 'saya orang', 'L', 'jalan kenangan', 'bangka bangla', '17/07/1991', 'islam', '082212212212', 'fawa', 'walakngsiasng', 'pns', '11111111112', 'user123', 'password'),
(10, 'asdasdasdasd', 'L', 'asdasdasd', 'asdasdasd', '', 'islam', '123123123123', 'asdasdasd', 'asddfgdfgdfs', 'asdgdfgsd', '123142234', 'as', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_daftar`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`);

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
