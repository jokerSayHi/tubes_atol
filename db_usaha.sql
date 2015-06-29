-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2015 at 07:02 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_usaha`
--
CREATE DATABASE IF NOT EXISTS `db_usaha` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_usaha`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `nip` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(51) NOT NULL,
  `user` varchar(51) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(51) NOT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`nip`),
  UNIQUE KEY `email_admin` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nip`, `nama`, `user`, `password`, `email`, `no_telp`) VALUES
(2, 'admin', 'admin', '$2y$10$fnFk9E7YFIROJkKdInfJPOKt.E5akDxf9KpFc865VTtJGImMUMn4G', 'email@admin.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE IF NOT EXISTS `kecamatan` (
  `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kecamatan` varchar(41) NOT NULL,
  `kode_pos` int(6) NOT NULL,
  PRIMARY KEY (`id_kecamatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`, `kode_pos`) VALUES
(1, 'Batujajar', 40561),
(2, 'Cikalong Wetan', 40556),
(3, 'Cihampelas', 40562),
(4, 'Cililin', 40562),
(5, 'Cipatat', 40554),
(6, 'Cipeundeuy', 40558),
(7, 'Cipongkor', 40564),
(8, 'Cisarua', 40551),
(9, 'Gununghalu', 40565),
(10, 'Ngamprah', 40552),
(11, 'Padalarang', 40553),
(12, 'Parongpong', 40559),
(13, 'Rongga', 40566),
(14, 'Sindakerta', 40563),
(15, 'Lembang', 40391),
(16, 'Saguling', 40561);

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE IF NOT EXISTS `kelurahan` (
  `id_kelurahan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelurahan` varchar(41) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  PRIMARY KEY (`id_kelurahan`),
  KEY `fk_kecamatan` (`id_kecamatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=166 ;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id_kelurahan`, `nama_kelurahan`, `id_kecamatan`) VALUES
(1, 'Batujajar Barat', 1),
(2, 'Batujajar Timur', 1),
(3, 'Cangkorah', 1),
(4, 'Galanggang', 1),
(5, 'Giriasih', 1),
(6, 'Pangauban', 1),
(7, 'Selacau', 1),
(8, 'Cikalong', 2),
(9, 'Cipada', 2),
(10, 'Ciptagumati', 2),
(11, 'Cisomang Barat', 2),
(12, 'Ganjarsari', 2),
(13, 'Kanangasari', 2),
(14, 'Mandalamukti', 2),
(15, 'Mandalasari', 2),
(16, 'Mekarjaya', 2),
(17, 'Puteran', 2),
(18, 'Rende', 2),
(19, 'Tenjolaut', 2),
(20, 'Wangunjaya', 2),
(21, 'Cihampelas', 3),
(22, 'Cipatik', 3),
(23, 'Citapen', 3),
(24, 'Mekarjaya', 3),
(25, 'Mekarmukti', 3),
(26, 'Pataruman', 3),
(27, 'Singajaya', 3),
(28, 'Situwangi', 3),
(29, 'Tanjungjaya', 3),
(30, 'Tanjungwangi', 3),
(31, 'Batulayang', 4),
(32, 'Bongas', 4),
(33, 'Budiharja', 4),
(34, 'Cililin', 4),
(35, 'Karanganyar', 4),
(36, 'Karangtanjung', 4),
(37, 'Karyamukti', 4),
(38, 'Kidangpananjung', 4),
(39, 'Mukapayung', 4),
(40, 'Nanggerang', 4),
(41, 'Rancapanggung', 4),
(42, 'Cipatat', 5),
(43, 'Ciptaharja', 5),
(44, 'Cirawamekar', 5),
(45, 'Citatah', 5),
(46, 'Gunungmasigit', 5),
(47, 'Kertamukti', 5),
(48, 'Mandalasari', 5),
(49, 'Mandalawangi', 5),
(50, 'Nyalindung', 5),
(51, 'Rajamandala Kulon', 5),
(52, 'Sarimukti', 5),
(53, 'Sumurbandung', 5),
(54, 'Bojongmekar', 6),
(55, 'Ciharashas', 6),
(56, 'Cipeundeuy', 6),
(57, 'Ciroyom', 6),
(58, 'Jatimekar', 6),
(59, 'Margalaksana', 6),
(60, 'Margaluyu', 6),
(61, 'Nanggeleng', 6),
(62, 'Nyenang', 6),
(63, 'Sirnagalih', 6),
(64, 'Sirnaraja', 6),
(65, 'Sukahaji', 6),
(66, 'Baranangsiang', 7),
(67, 'Cibenda', 7),
(68, 'Cicangkang Hilir', 7),
(69, 'Cijambu', 7),
(70, 'Cijenuk', 7),
(71, 'Cintaasih', 7),
(72, 'Citalem', 7),
(73, 'Girimukti', 7),
(74, 'Karangsari', 7),
(75, 'Mekarsari', 7),
(76, 'Neglasari', 7),
(77, 'Sarinagen', 7),
(78, 'Sirnagalih', 7),
(79, 'Sukamulya', 7),
(80, 'Cipada', 8),
(81, 'Jambudipa', 8),
(82, 'Kertawangi', 8),
(83, 'Padaasih', 8),
(84, 'Pasirhalang', 8),
(85, 'Pasirlangu', 8),
(86, 'Sadangmekar', 8),
(87, 'Tugumukti', 8),
(88, 'Bunijaya', 9),
(89, 'Celak', 9),
(90, 'Cilangari', 9),
(91, 'Gununghalu', 9),
(92, 'Sindangjaya', 9),
(93, 'Sirnajaya', 9),
(94, 'Sukasari', 9),
(95, 'Tamanjaya', 9),
(96, 'Wargasaluyu', 9),
(97, 'Bojongkoneng', 10),
(98, 'Cilame', 10),
(99, 'Cimanggu', 10),
(100, 'Cimareme', 10),
(101, 'Gadobangkong', 10),
(102, 'Margajaya', 10),
(103, 'Mekarsari', 10),
(104, 'Ngamprah', 10),
(105, 'Pakuhaji', 10),
(106, 'Sukatani', 10),
(107, 'Tanimulya', 10),
(108, 'Cempakamekar', 11),
(109, 'Ciburuy', 11),
(110, 'Cimerang', 11),
(111, 'Cipeundeuy', 11),
(112, 'Jayamekar', 11),
(113, 'Kertajaya', 11),
(114, 'Kertamulya', 11),
(115, 'Laksanamekar', 11),
(116, 'Padalarang', 11),
(117, 'Tagogapu', 11),
(118, 'Cigugur Girang', 12),
(119, 'Cihanjuang Rahayu', 12),
(120, 'Cihanjuang', 12),
(121, 'Cihideung', 12),
(122, 'Ciwaruga', 12),
(123, 'Karyawangi', 12),
(124, 'Sariwangi', 12),
(125, 'Bojong', 13),
(126, 'Bojongsalam', 13),
(127, 'Cibedug', 13),
(128, 'Cibitung', 13),
(129, 'Cicadas', 13),
(130, 'Cinengah', 13),
(131, 'Sukamanah', 13),
(132, 'Sukaresmi', 13),
(133, 'Buninagara', 14),
(134, 'Cicangkang Girang', 14),
(135, 'Cikadu', 14),
(136, 'Cintakarya', 14),
(137, 'Mekarwangi', 14),
(138, 'Pasirpogor', 14),
(139, 'Puncaksari', 14),
(140, 'Ranca Senggang', 14),
(141, 'Sindangkerta', 14),
(142, 'Wangunsari', 14),
(143, 'Weninggalih', 14),
(144, 'Cibodas', 15),
(145, 'Cibogo', 15),
(146, 'Cikahuripan', 15),
(147, 'Cikidang', 15),
(148, 'Cikole', 15),
(149, 'Gudangkahuripan', 15),
(150, 'Jayagiri', 15),
(151, 'Kayuambon', 15),
(152, 'Langensari', 15),
(153, 'Lembang', 15),
(154, 'Mekarwangi', 15),
(155, 'Pagerwangi', 15),
(156, 'Sukajaya', 15),
(157, 'Suntenjaya', 15),
(158, 'Wangunharja', 15),
(159, 'Wangunsari', 15),
(160, 'Saguling', 16),
(161, 'Jati', 16),
(162, 'Girimukti', 16),
(163, 'Cipangeran', 16),
(164, 'Cikande', 16),
(165, 'Bojonghaleuang', 16);

-- --------------------------------------------------------

--
-- Table structure for table `password_reminders`
--

CREATE TABLE IF NOT EXISTS `password_reminders` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_reminders_email_index` (`email`),
  KEY `password_reminders_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sektor`
--

CREATE TABLE IF NOT EXISTS `sektor` (
  `id_sektor` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sektor` varchar(51) NOT NULL,
  PRIMARY KEY (`id_sektor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `sektor`
--

INSERT INTO `sektor` (`id_sektor`, `nama_sektor`) VALUES
(1, 'Arsitektur'),
(2, 'Desain'),
(3, 'Fashion'),
(4, 'Film dan Fotografi'),
(5, 'Kuliner'),
(6, 'Layanan Komputer dan Piranti Lunak'),
(7, 'Musik'),
(8, 'Pasar Barang Seni'),
(9, 'Penerbitan dan Percetakan'),
(10, 'Periklanan'),
(11, 'Kerajinan'),
(12, 'Permainan Interaktif'),
(13, 'Riset dan Pengembangan'),
(14, 'Seni Pertunjukan'),
(15, 'Televisi dan Radio');

-- --------------------------------------------------------

--
-- Table structure for table `usaha`
--

CREATE TABLE IF NOT EXISTS `usaha` (
  `id_usaha` int(11) NOT NULL AUTO_INCREMENT,
  `nama_usaha` varchar(101) NOT NULL,
  `produk_utama` varchar(51) NOT NULL,
  `alamat_usaha` varchar(101) NOT NULL,
  `deskripsi` text NOT NULL,
  `telp_usaha` varchar(15) NOT NULL,
  `skala_usaha` enum('Mikro','Kecil','Menengah') DEFAULT 'Mikro',
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `gambar_satu` varchar(255) DEFAULT NULL,
  `gambar_dua` varchar(255) DEFAULT NULL,
  `gambar_tiga` varchar(255) DEFAULT NULL,
  `gambar_empat` varchar(255) DEFAULT NULL,
  `gambar_lima` varchar(255) DEFAULT NULL,
  `status_aktif` enum('Y','T') NOT NULL DEFAULT 'Y',
  `id_kelurahan` int(11) NOT NULL,
  `id_sektor` int(11) NOT NULL,
  `nik` varchar(31) NOT NULL,
  PRIMARY KEY (`id_usaha`),
  KEY `fk_users` (`nik`),
  KEY `fk_sektor` (`id_sektor`),
  KEY `fk_kelurahan` (`id_kelurahan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `usaha`
--

INSERT INTO `usaha` (`id_usaha`, `nama_usaha`, `produk_utama`, `alamat_usaha`, `deskripsi`, `telp_usaha`, `skala_usaha`, `latitude`, `longitude`, `gambar_satu`, `gambar_dua`, `gambar_tiga`, `gambar_empat`, `gambar_lima`, `status_aktif`, `id_kelurahan`, `id_sektor`, `nik`) VALUES
(1, 'RestoBro', 'Cousine', 'Cimahi', 'Ini adalah restoran milik Pak Broto', '6644193', 'Menengah', -6.883403, 107.53889, '1123_1.jpg', '1123_2.jpg', '1123_3.jpg', '1123_4.jpg', '1123_5.jpg', 'Y', 107, 5, '123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `nik` varchar(31) NOT NULL,
  `nama` varchar(51) NOT NULL,
  `email` varchar(51) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(101) NOT NULL,
  `tempat_lahir` varchar(31) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `foto_ktp` varchar(255) NOT NULL,
  `status_aktif` enum('Y','T') NOT NULL DEFAULT 'T',
  `nip` int(11) NOT NULL,
  PRIMARY KEY (`nik`),
  UNIQUE KEY `email` (`email`),
  KEY `fk_admin` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nik`, `nama`, `email`, `password`, `alamat`, `tempat_lahir`, `tgl_lahir`, `no_telp`, `foto_ktp`, `status_aktif`, `nip`) VALUES
('123', 'Alfons Azhari Santoso', 'alfons@gmail.com', '$2y$10$JkFH6Qwug2XVwZ7YwLW8Qe1HD03iSX/WKbgX0ziUcx070PA/d6SFO', 'Bandung', 'Bandung', '1994-02-15', '089625648975', 'foto_123.jpg', 'Y', 2),
('335', 'Muhammad Rivki', 'rivki@gmail.com', '$2y$10$BjSc.S8LcXfikKQ2V3xflehfvSJ8pkZJCPWD3JU2Os671KTCYY1w.', 'Bandung', 'Cirebon', '1994-06-03', '085696322545', 'foto_335.jpg', 'Y', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD CONSTRAINT `fk_kecamatan` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id_kecamatan`);

--
-- Constraints for table `usaha`
--
ALTER TABLE `usaha`
  ADD CONSTRAINT `fk_kelurahan` FOREIGN KEY (`id_kelurahan`) REFERENCES `kelurahan` (`id_kelurahan`),
  ADD CONSTRAINT `fk_sektor` FOREIGN KEY (`id_sektor`) REFERENCES `sektor` (`id_sektor`),
  ADD CONSTRAINT `fk_users` FOREIGN KEY (`nik`) REFERENCES `users` (`nik`),
  ADD CONSTRAINT `usaha_ibfk_1` FOREIGN KEY (`id_kelurahan`) REFERENCES `kelurahan` (`id_kelurahan`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_admin` FOREIGN KEY (`nip`) REFERENCES `admin` (`nip`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
