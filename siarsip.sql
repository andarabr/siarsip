-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2018 at 06:34 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

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
  `id_siswa` int(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `penghasilan` varchar(30) NOT NULL,
  `keterangan` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ayah`
--

INSERT INTO `tb_ayah` (`id_ayah`, `id_siswa`, `nama`, `pekerjaan`, `penghasilan`, `keterangan`) VALUES
(1, 124214, 'dsfhldsf', 'dsfsdf', 'Rp. 0 s/d Rp. 500.000,-', 'Sudah Meninggal');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ibu`
--

CREATE TABLE `tb_ibu` (
  `id_ibu` int(11) NOT NULL,
  `id_siswa` int(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `penghasilan` varchar(30) NOT NULL,
  `keterangan` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ibu`
--

INSERT INTO `tb_ibu` (`id_ibu`, `id_siswa`, `nama`, `pekerjaan`, `penghasilan`, `keterangan`) VALUES
(1, 124214, 'dsfsdf', 'sdfdsfs', 'Rp. 0 s/d Rp. 500.000,-', 'Sudah Meninggal');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ketr`
--

CREATE TABLE `tb_ketr` (
  `id_siswa` int(15) NOT NULL,
  `th_masuk` year(4) NOT NULL,
  `asal_sekolah` varchar(30) NOT NULL,
  `kelas` varchar(12) NOT NULL,
  `kelas_masuk` varchar(12) NOT NULL,
  `kabupaten` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ketr`
--

INSERT INTO `tb_ketr` (`id_siswa`, `th_masuk`, `asal_sekolah`, `kelas`, `kelas_masuk`, `kabupaten`) VALUES
(124214, 1901, 'sdfsd', 'dsfdsf', 'dsfdsfsd', 'Bengkulu Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nis` varchar(12) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `ttl` date NOT NULL,
  `alamat_ortu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nama`, `nis`, `jk`, `tempat_lahir`, `ttl`, `alamat_ortu`) VALUES
(124214, 'ksflhd', '421341', 'Laki-laki', 'dsfds', '2018-12-31', 'dsfsdfdsf ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_struktur`
--

CREATE TABLE `tb_struktur` (
  `id` int(11) NOT NULL,
  `kepsek` varchar(40) NOT NULL,
  `wakil_kurikulum` varchar(40) NOT NULL,
  `bk` varchar(40) NOT NULL,
  `staff` text NOT NULL,
  `pustakawan` varchar(40) NOT NULL,
  `guru_bidang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_struktur`
--

INSERT INTO `tb_struktur` (`id`, `kepsek`, `wakil_kurikulum`, `bk`, `staff`, `pustakawan`, `guru_bidang`) VALUES
(1, 'Drs. Boko Susilo, M.Si', 'Ernawati, S.T., M.Cs', 'Kurnia Anggraini, S.T., M.T', '    Yudi Setiawan S.T., M.Eng    ', 'Ferzha Putra Utama S.T., M.Eng', '    Aan Erlansari S.T., M.Eng \r\n');

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
-- Indexes for table `tb_ketr`
--
ALTER TABLE `tb_ketr`
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_struktur`
--
ALTER TABLE `tb_struktur`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_ayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_ibu`
--
ALTER TABLE `tb_ibu`
  MODIFY `id_ibu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_struktur`
--
ALTER TABLE `tb_struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- Constraints for table `tb_ketr`
--
ALTER TABLE `tb_ketr`
  ADD CONSTRAINT `tb_ketr_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
