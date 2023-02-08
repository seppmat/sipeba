-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 09:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipeba`
--

-- --------------------------------------------------------

--
-- Table structure for table `formulir`
--

CREATE TABLE `formulir` (
  `nomor` int(200) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jenis_barang` enum('Peralatan Sistem Informasi','Peralatan Operasional') NOT NULL,
  `serial_number` varchar(20) NOT NULL,
  `nomor_handphone` varchar(15) NOT NULL,
  `tujuan_peminjaman` varchar(100) NOT NULL,
  `atasan` enum('TRI HARYADI','ZUBER KERTAPATI','ESNI FRIDAWATI','RUSMAN AYADI','MUHAMMAD NAZLI','IDRIS','MUHAMMAD PANJI') NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `formulir`
--

INSERT INTO `formulir` (`nomor`, `nama_barang`, `jenis_barang`, `serial_number`, `nomor_handphone`, `tujuan_peminjaman`, `atasan`, `tanggal_pinjam`, `tanggal_kembali`) VALUES
(8, 'Barang B', '', 'BTM/111/111/111/2023', '0808080808', 'Unknown', 'RUSMAN AYADI', '2023-01-01', '2023-01-01'),
(19, 'Barang D', '', 'BTM/SMK5/2023/0001', '0878300306', 'Unknown', 'IDRIS', '2023-02-07', '0000-00-00'),
(21, 'afafa', 'Peralatan Sistem Informasi', 'fafafa', 'fafafafaf', 'afafafafa', 'TRI HARYADI', '2023-01-19', '2023-01-18'),
(22, 'afafaf', '', 'afafaf', 'afafafaf', 'afafafaf', 'IDRIS', '2023-01-27', '2023-01-11'),
(23, 'afafa', 'Peralatan Sistem Informasi', 'afaf', 'afafaf', 'fafafa', 'MUHAMMAD PANJI', '2023-01-11', '2023-01-19'),
(24, 'afafa', 'Peralatan Operasional', 'fafafaf', 'fafafa', 'afafafafa', 'ESNI FRIDAWATI', '2023-01-12', '2023-01-18'),
(25, '', '', '', '', '', '', '0000-00-00', '0000-00-00'),
(26, '', '', '', '', '', '', '0000-00-00', '0000-00-00'),
(27, '', '', '', '', '', '', '0000-00-00', '0000-00-00'),
(28, '', '', 'Peralatan Operasiona', '12131', '1421414', '', '0000-00-00', '2023-01-07');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nomor` int(255) NOT NULL,
  `level` enum('Admin','User') NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `npp` varchar(255) NOT NULL,
  `password` varchar(6) NOT NULL,
  `bidang` enum('DUKUNGAN BISNIS','DUKUNGAN OPERASI DAN PENJUALAN','INSPEKSI TEKNIK','INSPEKSI UMUM','PENGUJIAN DAN KONSULTASI') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nomor`, `level`, `email`, `username`, `npp`, `password`, `bidang`) VALUES
(12, '', 'user2@gmail.com', 'User2', '1234567890', 'user2', ''),
(13, 'Admin', 'admin@gmail.com', 'admin', 'admin', 'admin', ''),
(14, '', 'user4@gmail.com', 'user4', '12345678', 'user4', 'DUKUNGAN BISNIS'),
(15, '', 'user12@gmail.com', 'User12', '12313131', 'user12', 'INSPEKSI UMUM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formulir`
--
ALTER TABLE `formulir`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nomor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formulir`
--
ALTER TABLE `formulir`
  MODIFY `nomor` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `nomor` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
