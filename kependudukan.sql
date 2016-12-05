-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2016 at 11:06 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kependudukan`
--

-- --------------------------------------------------------

--
-- Table structure for table `catatan`
--

CREATE TABLE IF NOT EXISTS `catatan` (
  `id_catatan` int(11) NOT NULL,
  `nama_catatan` varchar(500) NOT NULL,
  `keterangan_catatan` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catatan`
--

INSERT INTO `catatan` (`id_catatan`, `nama_catatan`, `keterangan_catatan`) VALUES
(1, 'Warga masuk dusun dengan identitas dari warga sukabumi adalah warga yang sedang demo', 'Warga masuk dusun dengan identitas dari warga sukabumi itu terpelajar lho'),
(3, 'ddada', 'sdadasdad'),
(6, 'ddadasd', 'adsdads'),
(7, 'dasdad', 'sdadasd'),
(8, 'adasdasda', ''),
(9, 'dasdasdsa', '');

-- --------------------------------------------------------

--
-- Table structure for table `kematian`
--

CREATE TABLE IF NOT EXISTS `kematian` (
  `id_kematian` int(11) NOT NULL,
  `nama_lengkap` char(200) NOT NULL,
  `jenis_kelamin` char(10) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` char(100) NOT NULL,
  `tanggal_meninggal` date NOT NULL,
  `tempat_meninggal` char(100) NOT NULL,
  `umur_meninggal` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kematian`
--

INSERT INTO `kematian` (`id_kematian`, `nama_lengkap`, `jenis_kelamin`, `tanggal_lahir`, `tempat_lahir`, `tanggal_meninggal`, `tempat_meninggal`, `umur_meninggal`) VALUES
(2, 'Tarti', 'Perempuan', '2006-11-04', 'Padasan', '2016-11-10', 'Paraksari', -10),
(3, 'Tukidi', 'Laki-Laki', '2016-12-13', 'New york', '2016-12-01', 'Kamar', 0);

-- --------------------------------------------------------

--
-- Table structure for table `raskin`
--

CREATE TABLE IF NOT EXISTS `raskin` (
  `id_penerima` int(11) NOT NULL,
  `nama_kepala_keluarga` char(200) NOT NULL,
  `status_bayar` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raskin`
--

INSERT INTO `raskin` (`id_penerima`, `nama_kepala_keluarga`, `status_bayar`) VALUES
(1, 'Sirwanto', 'Belum Membayar'),
(2, 'Iswoko', 'Belum Membayar'),
(3, 'Aan Marwanto', 'Belum Membayar'),
(4, 'Harjo Sumarto', 'Sudah Membayar'),
(5, 'Widodo Iting', 'Sudah Membayar'),
(6, 'Ngatijan', 'Pilih Status Bayar');

-- --------------------------------------------------------

--
-- Table structure for table `umum`
--

CREATE TABLE IF NOT EXISTS `umum` (
  `id_umum` int(11) NOT NULL,
  `nama_lengkap` char(200) NOT NULL,
  `nomor_induk_kependudukan` varchar(200) NOT NULL,
  `jenis_kelamin` char(50) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` char(100) NOT NULL,
  `jenjang_pendidikan` varchar(10) NOT NULL,
  `pekerjaan` char(200) NOT NULL,
  `nama_kepala_keluarga` char(200) NOT NULL,
  `status_perkawinan` char(50) NOT NULL,
  `hubungan_dalam_keluarga` char(200) NOT NULL,
  `kewarnegaraan` char(20) NOT NULL,
  `nomor_paspor_kitap` varchar(200) NOT NULL,
  `nama_ayah` char(200) NOT NULL,
  `nama_ibu` char(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `umum`
--

INSERT INTO `umum` (`id_umum`, `nama_lengkap`, `nomor_induk_kependudukan`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `jenjang_pendidikan`, `pekerjaan`, `nama_kepala_keluarga`, `status_perkawinan`, `hubungan_dalam_keluarga`, `kewarnegaraan`, `nomor_paspor_kitap`, `nama_ayah`, `nama_ibu`) VALUES
(1, 'Suharjo', '123456789', 'Laki-Laki', 'Sleman', '2016-12-03', 'Islam', 'S1', 'Swasta', 'Suharjo', 'Menikah', 'Kepala Keluarga', 'WNI', '987654321', 'Sadilan Notoutomo', 'Pariyem Notoutomo'),
(3, 'Agustin Ernawati', '123456789', 'Perempuan', 'Solo', '2016-12-02', 'Islam', 'SMA', 'Ibu Rumah Tangga', 'Suharjo', 'Menikah', 'Istri', 'WNI', '56789', 'Agustin', 'Sumiati');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `username` char(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`id_catatan`);

--
-- Indexes for table `kematian`
--
ALTER TABLE `kematian`
  ADD PRIMARY KEY (`id_kematian`);

--
-- Indexes for table `raskin`
--
ALTER TABLE `raskin`
  ADD PRIMARY KEY (`id_penerima`);

--
-- Indexes for table `umum`
--
ALTER TABLE `umum`
  ADD PRIMARY KEY (`id_umum`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catatan`
--
ALTER TABLE `catatan`
  MODIFY `id_catatan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `kematian`
--
ALTER TABLE `kematian`
  MODIFY `id_kematian` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `raskin`
--
ALTER TABLE `raskin`
  MODIFY `id_penerima` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `umum`
--
ALTER TABLE `umum`
  MODIFY `id_umum` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
