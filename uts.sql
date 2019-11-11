-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Nov 2019 pada 22.47
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `jkl`
--
CREATE TABLE `jkl` (
`id` int(5)
,`nim` varchar(20)
,`nama_mhs` varchar(50)
,`jk` varchar(5)
,`alamat` varchar(50)
,`no_hp` varchar(12)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id` int(5) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `no_hp_lama` varchar(12) NOT NULL,
  `no_hp_baru` varchar(12) NOT NULL,
  `tgl_diubah` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id`, `nim`, `no_hp_lama`, `no_hp_baru`, `tgl_diubah`) VALUES
(0, '171250000433', '085889076652', '085889078890', '2019-11-10 13:09:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(5) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `jk` varchar(5) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama_mhs`, `jk`, `alamat`, `no_hp`) VALUES
(1235, '151230000234', 'indra sakti', 'L', 'kecapi ngesong', '089764089124'),
(2077, '171250000433', 'han jisung', 'L', 'jepara', '085889078890'),
(2768, '161240000456', 'alinda citra dewi', 'P', 'kecapi ngesong ', '087890126789'),
(5086, '171250000677', 'changbin', 'L', 'tahunan', '082567123556'),
(6789, '161240000698', 'lee felix', 'L', 'korea selatan', '087893108973');

--
-- Trigger `mahasiswa`
--
DELIMITER $$
CREATE TRIGGER `kontak` AFTER UPDATE ON `mahasiswa` FOR EACH ROW BEGIN
insert into log
set nim=old.nim,
no_hp_baru=new.no_hp,
no_hp_lama=old.no_hp,
tgl_diubah=NOW();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur untuk view `jkl`
--
DROP TABLE IF EXISTS `jkl`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `jkl`  AS  select `mahasiswa`.`id` AS `id`,`mahasiswa`.`nim` AS `nim`,`mahasiswa`.`nama_mhs` AS `nama_mhs`,`mahasiswa`.`jk` AS `jk`,`mahasiswa`.`alamat` AS `alamat`,`mahasiswa`.`no_hp` AS `no_hp` from `mahasiswa` where (`mahasiswa`.`jk` = 'L') ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
