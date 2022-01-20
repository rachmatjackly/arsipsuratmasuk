-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 29, 2021 at 12:02 PM
-- Server version: 10.3.31-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `un539zr2_db_arsipsuratmasuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `nm_pengumuman` varchar(15) NOT NULL,
  `tg_pengumuman` date NOT NULL,
  `judul_pengumuman` text NOT NULL,
  `jk_pengumuman` varchar(15) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `isi_pengumuman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`nm_pengumuman`, `tg_pengumuman`, `judul_pengumuman`, `jk_pengumuman`, `id_user`, `isi_pengumuman`) VALUES
('1', '2021-10-27', 'Pemberitahuan tentang Cuti Akademik', 'Akademik', '1', 'Diberitahukan kepada seluruh mahasiswa Universitas Gunadarma tentang ketentuan Cuti Akademik yang mulai berlaku pada tahun ajaran 2016/2017 sebagai berikut :\r\n\r\n1. Cuti akademik hanya dapat diberikan kepada mahasiswa yang telah mengikuti kegiatan akademik sekurang-kurangnya 2 (dua) semester.\r\n2. Cuti akademik diberikan sebanyak-banyaknya untuk jangka waktu 2 (dua) semester, baik berurutan maupun tidak.\r\n3. Biaya administrasi cuti akademik sebesar Rp. 500.000,- (Lima Ratus Ribu Rupiah).\r\n\r\nDemikian pemberitahuan ini. Harap diperhatikan.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_keluar`
--

CREATE TABLE `tb_surat_keluar` (
  `nm_sr_luar` varchar(15) NOT NULL,
  `tg_sr_luar_bt` date NOT NULL,
  `tg_sr_luar_lk` date NOT NULL,
  `perihal_luar` varchar(30) NOT NULL,
  `judul_luar` varchar(30) NOT NULL,
  `jk_luar` varchar(15) NOT NULL,
  `pembuat_sr_luar` varchar(30) NOT NULL,
  `penerima_sr_luar` varchar(30) NOT NULL,
  `dok_luar` text NOT NULL,
  `id_user` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_surat_keluar`
--

INSERT INTO `tb_surat_keluar` (`nm_sr_luar`, `tg_sr_luar_bt`, `tg_sr_luar_lk`, `perihal_luar`, `judul_luar`, `jk_luar`, `pembuat_sr_luar`, `penerima_sr_luar`, `dok_luar`, `id_user`) VALUES
('2', '2021-12-09', '2021-12-09', 'Akademik', 'Daftar Cuti', '1', '1', '1', '', '12117298');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_masuk`
--

CREATE TABLE `tb_surat_masuk` (
  `nm_sr_masuk` varchar(15) NOT NULL,
  `tg_sr_masuk` date NOT NULL,
  `tg_sr_masuk_dt` date NOT NULL,
  `perihal_masuk` varchar(30) NOT NULL,
  `judul_masuk` varchar(30) NOT NULL,
  `pengirim_masuk` varchar(30) NOT NULL,
  `jk_masuk` varchar(15) NOT NULL,
  `penerima_masuk` varchar(30) NOT NULL,
  `dok_msk` text NOT NULL,
  `id_user` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_surat_masuk`
--

INSERT INTO `tb_surat_masuk` (`nm_sr_masuk`, `tg_sr_masuk`, `tg_sr_masuk_dt`, `perihal_masuk`, `judul_masuk`, `pengirim_masuk`, `jk_masuk`, `penerima_masuk`, `dok_msk`, `id_user`) VALUES
('1', '2021-12-09', '2021-12-09', 'Akademik', 'Cuti Akademik', 'Admin', 'Akademik', 'Admin', '', '12117298');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(15) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `no.hp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `foto_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `no.hp`, `email`, `alamat`, `username`, `password`, `foto_user`) VALUES
('admin', 'admin', '0', 'admin', 'admin', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`nm_pengumuman`);

--
-- Indexes for table `tb_surat_keluar`
--
ALTER TABLE `tb_surat_keluar`
  ADD PRIMARY KEY (`nm_sr_luar`);

--
-- Indexes for table `tb_surat_masuk`
--
ALTER TABLE `tb_surat_masuk`
  ADD PRIMARY KEY (`nm_sr_masuk`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
