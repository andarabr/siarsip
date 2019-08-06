-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 01:35 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siarsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_ayah`
--

CREATE TABLE `tb_ayah` (
  `id_ayah` int(11) NOT NULL,
  `id_siswa` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ttl` date NOT NULL,
  `agama` varchar(15) NOT NULL,
  `pend_terakhir` varchar(6) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `penghasilan` int(12) NOT NULL,
  `hidup` varchar(14) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ayah`
--

INSERT INTO `tb_ayah` (`id_ayah`, `id_siswa`, `nama`, `ttl`, `agama`, `pend_terakhir`, `pekerjaan`, `penghasilan`, `hidup`, `telp`, `alamat`) VALUES
(12, 'C0C012012', 'Morty De La Juan', '0000-00-00', 'Islam', 'SLTA', 'Wiraswasta', 10000000, 'Masih hidu', '081271484136', ' Ontario Canada');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ibu`
--

CREATE TABLE `tb_ibu` (
  `id_ibu` int(11) NOT NULL,
  `id_siswa` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ttl` date NOT NULL,
  `agama` varchar(15) NOT NULL,
  `pend_terakhir` varchar(6) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `penghasilan` int(10) NOT NULL,
  `hidup` varchar(14) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ibu`
--

INSERT INTO `tb_ibu` (`id_ibu`, `id_siswa`, `nama`, `ttl`, `agama`, `pend_terakhir`, `pekerjaan`, `penghasilan`, `hidup`, `telp`, `alamat`) VALUES
(10, 'C0C012012', 'Summer Smith', '1986-06-25', 'Protestan', 'S1', 'Ibu Rumah Tangg', 1000000, 'Masih hidu', '081271484136', ' Ontario Canada');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `ttl` date NOT NULL,
  `agama` varchar(15) NOT NULL,
  `kewarganegaraan` varchar(6) NOT NULL,
  `anak_ke` int(2) NOT NULL,
  `js_kandung` int(2) NOT NULL,
  `js_tiri` int(2) NOT NULL,
  `status` varchar(11) NOT NULL,
  `bb` int(3) NOT NULL,
  `tb` int(3) NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `alamat` text NOT NULL,
  `tinggal` varchar(30) NOT NULL,
  `jarak` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nama`, `jk`, `ttl`, `agama`, `kewarganegaraan`, `anak_ke`, `js_kandung`, `js_tiri`, `status`, `bb`, `tb`, `gol_darah`, `alamat`, `tinggal`, `jarak`) VALUES
('C0C012012', 'Rick Sanchez', 'Laki-laki', '1996-07-18', 'Islam', 'WNA', 2, 2, 1, '', 60, 170, 'O', ' Kandang Limun', 'Kos', 12),
('G1A014034', 'Breygas Andara', 'Laki-laki', '1994-06-30', 'Islam', 'WNI', 1, 1, 1, '', 50, 160, 'A', '  gang idaman', 'kos', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_wali`
--

CREATE TABLE `tb_wali` (
  `id_wali` int(11) NOT NULL,
  `id_siswa` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ttl` date NOT NULL,
  `agama` varchar(15) NOT NULL,
  `pend_terakhir` varchar(6) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `penghasilan` int(10) NOT NULL,
  `hidup` varchar(14) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admina', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_ayah`
--
ALTER TABLE `tb_ayah`
  ADD PRIMARY KEY (`id_ayah`) USING BTREE,
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_ibu`
--
ALTER TABLE `tb_ibu`
  ADD PRIMARY KEY (`id_ibu`) USING BTREE,
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_wali`
--
ALTER TABLE `tb_wali`
  ADD PRIMARY KEY (`id_wali`) USING BTREE,
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_ayah`
--
ALTER TABLE `tb_ayah`
  MODIFY `id_ayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_ibu`
--
ALTER TABLE `tb_ibu`
  MODIFY `id_ibu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_wali`
--
ALTER TABLE `tb_wali`
  MODIFY `id_wali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_ayah`
--
ALTER TABLE `tb_ayah`
  ADD CONSTRAINT `tb_ayah_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_ibu`
--
ALTER TABLE `tb_ibu`
  ADD CONSTRAINT `tb_ibu_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_wali`
--
ALTER TABLE `tb_wali`
  ADD CONSTRAINT `tb_wali_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
