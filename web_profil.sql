-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 06:59 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_profil`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(100) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(100) NOT NULL,
  `foto` text NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `foto`, `judul`, `deskripsi`) VALUES
(16, 'jumat bersih 2.jpg', 'shkjsjh', ',shkjs'),
(17, '1.Tbhn. Gerakan Sholat Dhuha Berjamaah.JPG', 'sholat dhuha', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, quod ipsam eligendi. Nam molestias temporibus non dolore quidem impedit fuga omnis, iusto cum dignissimos, eum sit quas, eius neque provident!'),
(18, 'agustusan 4.jpg', 'Lomba paduan suara', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, quod ipsam eligendi. Nam molestias temporibus non dolore quidem impedit fuga omnis, iusto cum dignissimos, eum sit quas, eius neque provident!'),
(20, 'silat.jpg', 'Juara Pencak Silat Di Semarang', 'SMA Muhammadiyah 4 kendal Berhasil Mendapatkan Juara 1 Dalam Perlombaan Pencak Silat Di Semarang  '),
(21, 'nas.png', 'Belajar dari Covid-19', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, quod ipsam eligendi. Nam molestias temporibus non dolore quidem impedit fuga omnis, iusto cum dignissimos, eum sit quas, eius neque provident!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. At, quod ipsam eligendi. Nam molestias temporibus non dolore quidem impedit fuga omnis, iusto cum dignissimos, eum sit quas, eius neque provident!');

-- --------------------------------------------------------

--
-- Table structure for table `ekstra`
--

CREATE TABLE `ekstra` (
  `id_ekstra` int(11) NOT NULL,
  `nama_ekstra` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ekstra`
--

INSERT INTO `ekstra` (`id_ekstra`, `nama_ekstra`) VALUES
(3, 'Hizbul Wathan'),
(4, 'Tapak Suci Putra Muhammadiyah (TSPM)'),
(5, 'Basket'),
(6, 'Futsal'),
(7, 'Paduan Suara'),
(8, 'Tilawah'),
(9, 'Patroli Keamanan Sekolah (PKS)'),
(10, 'Paskibraka');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(100) NOT NULL,
  `foto` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `foto`, `deskripsi`) VALUES
(2, 'bengkel.jpg', 'Bengkel Motor'),
(3, 'bio.jpg', 'Laboratorium Biologi'),
(4, 'lab.jpg', 'Laboratorium Komputer'),
(5, 'kantin.jpg', 'Kantin Sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(100) NOT NULL,
  `foto` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `foto`, `deskripsi`) VALUES
(13, 'jumat bersih 4.jpg', 'q'),
(14, 'Bagi takjil ipm.jpg', 'kjgjgjhghg'),
(15, 'Bagi takjil ipm-2.jpg', 'bagi takjil'),
(16, 'satu.png', 'Gedung muhpat'),
(17, 'festival band.jpg', 'Festifal Band'),
(18, 'outbond siswa 1.jpg', 'Outbond Siswa'),
(19, 'staf.JPG', 'Guru & Staf Muhpat'),
(20, '10.Siswa Kelas XII IPS.JPG', 'dasgb'),
(21, '8.hal.2. Latihan Dasar Kepemimpinan Ranting IPM SMA Muh.4 Kendal.JPG', 'sadfvgbdh'),
(22, '11.tbhn. Lomba 17 Agustus 2017 Yel-yel antar kelas.JPG', 'adgdr');

-- --------------------------------------------------------

--
-- Table structure for table `ipm`
--

CREATE TABLE `ipm` (
  `id_ipm` int(100) NOT NULL,
  `foto` text NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ipm`
--

INSERT INTO `ipm` (`id_ipm`, `foto`, `judul`, `deskripsi`) VALUES
(1, '2. HAL.2  Pembelajaran Out School Mapel PPKn Ke DPRD KAB.Kendal.JPG', 'wrlnv', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt repellendus cupiditate obcaecati, at officia, fugit, qui, modi aliquid explicabo officiis harum sit voluptates. Dolor nam recusandae, tempore accusamus ab inventore!');

-- --------------------------------------------------------

--
-- Table structure for table `misi`
--

CREATE TABLE `misi` (
  `id_misi` int(100) NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `misi`
--

INSERT INTO `misi` (`id_misi`, `misi`) VALUES
(1, 'Menyelenggarakan proses pembelajaran sesuai dengan kurikulum nasional dengan baik '),
(4, 'Menyelenggarakan proses pembelajaran kurikulum ciri khusus perguruan Muhammadiyah dengan baik'),
(5, 'Menyelenggarakan kegiatan sholat dhuha, sholat dzuhur sholat ashar berjamaahdan tahfidz qur’an juz 28, 29 dan 30.'),
(6, 'Menyelenggarakan proses pembelajaran lifeskill (terpadu) dengan baik '),
(7, 'Mewujudkan warga sekolah  yang professional, inovatif, kreatif  dan kompetitif yang berbasis teknologi informasi.'),
(8, 'Membekali peserta didik dengan bahasa internasional (bahasa inggris dan bahasa arab)'),
(9, 'Membangun jaringan kerja yang harmonis dengan orang tua, masyarakat,, dudi, perguruan tinggi dan pemerintah ');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `foto` text NOT NULL,
  `judul_pengumuman` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `foto`, `judul_pengumuman`, `deskripsi`) VALUES
(4, 'Visi_Misi_Muhpat.png', 'PPDB 2020/2021 Telah diBuka!!!', 'Silahkan Daftarkan diri Anda Untuk Bersekolah di Sma Muhammadiyah 4 Kendal'),
(8, 'agustusan 4.jpg', 'gc', 'rtyuioooooooooooooooooooooooooooooolkjhgfyuihgf'),
(9, 'lab.jpg', 'dfghjgkhjldfd', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi laudantium deserunt culpa libero explicabo modi cum consequuntur alias nisi, quas commodi vero, aliquid unde quidem eum distinctio, totam est sint?'),
(10, 'beritaagustusan 3.jpg', 'upacara', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi laudantium deserunt culpa libero explicabo modi cum consequuntur alias nisi, quas commodi vero, aliquid unde quidem eum distinctio, totam est sint?'),
(11, 'nogambar', 'safdhhn', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi laudantium deserunt culpa libero explicabo modi cum consequuntur alias nisi, quas commodi vero, aliquid unde quidem eum distinctio, totam est sint?');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `foto` text NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `foto`, `judul`, `deskripsi`) VALUES
(5, 'man.jpg', 'Juara 1 Lomba Pencak Silat Di MAN', 'SMA Muhammadiyah 4 kendal Berhasil Mendapatkan Juara 1 Dalam Perlombaan Di MAN Kendal 2019  '),
(7, 'Porseni.jpg', 'Juara 1 Lomba Porseni 2019', 'SMA Muhammadiyah 4 kendal Berhasil Mendapatkan Juara 1 Dalam Perlombaan Porseni Tingkat Kabupaten 2019  '),
(8, 'silat.jpg', 'Juara Pencak Silat Di Semarang', 'SMA Muhammadiyah 4 Juara Pencak Silat Di Semarang '),
(9, 'popda.jpg', 'Popda 2018', 'SMA Muhpat Juara Popda 2019');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(100) NOT NULL,
  `link` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `link`) VALUES
(9, 'https://www.youtube.com/embed/tr_mZiUASwQ'),
(10, 'https://www.youtube.com/embed/sJDNjRfSEjo'),
(11, 'https://www.youtube.com/embed/atqZBSoRSoU'),
(12, 'https://www.youtube.com/embed/TbcC3C-JPW8'),
(13, 'https://www.youtube.com/embed/QFJ5t_SghkI');

-- --------------------------------------------------------

--
-- Table structure for table `visi`
--

CREATE TABLE `visi` (
  `id_visi` int(100) NOT NULL,
  `visi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visi`
--

INSERT INTO `visi` (`id_visi`, `visi`) VALUES
(2, 'Menjadi sekolah menengah terpadu yang mampu mencetak peserta didik yang beriman, bertaqwa, berilmu, berprestasi, berbudaya dan berwawasan global. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `ekstra`
--
ALTER TABLE `ekstra`
  ADD PRIMARY KEY (`id_ekstra`);

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
-- Indexes for table `ipm`
--
ALTER TABLE `ipm`
  ADD PRIMARY KEY (`id_ipm`);

--
-- Indexes for table `misi`
--
ALTER TABLE `misi`
  ADD PRIMARY KEY (`id_misi`);

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
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- Indexes for table `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id_visi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ekstra`
--
ALTER TABLE `ekstra`
  MODIFY `id_ekstra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ipm`
--
ALTER TABLE `ipm`
  MODIFY `id_ipm` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `misi`
--
ALTER TABLE `misi`
  MODIFY `id_misi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `visi`
--
ALTER TABLE `visi`
  MODIFY `id_visi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
