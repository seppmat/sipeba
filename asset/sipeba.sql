-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 09:11 AM
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
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `atasan` enum('TRI HARYADI','ZUBER KERTAPATI','ESNI FRIDAWATI','RUSMAN AYADI','MUHAMMAD NAZLI','IDRIS','MUHAMMAD PANJI') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `formulir`
--

INSERT INTO `formulir` (`nomor`, `nama_barang`, `jenis_barang`, `serial_number`, `nomor_handphone`, `tujuan_peminjaman`, `tanggal_pinjam`, `tanggal_kembali`, `atasan`) VALUES
(8, 'Barang B', '', 'BTM/111/111/111/2023', '0808080808', 'Unknown', '2023-01-01', '2023-01-01', 'RUSMAN AYADI'),
(19, 'Barang D', '', 'BTM/SMK5/2023/0001', '0878300306', 'Unknown', '2023-02-07', '0000-00-00', 'IDRIS'),
(20, 'adaadafafaf', '', 'afafafafaf', 'fafafafafa', 'fafafafa', '2023-01-11', '2023-01-26', 'RUSMAN AYADI'),
(21, 'afafa', 'Peralatan Sistem Informasi', 'fafafa', 'fafafafaf', 'afafafafa', '2023-01-19', '2023-01-18', 'TRI HARYADI'),
(22, 'afafaf', '', 'afafaf', 'afafafaf', 'afafafaf', '2023-01-27', '2023-01-11', 'IDRIS'),
(23, 'afafa', 'Peralatan Sistem Informasi', 'afaf', 'afafaf', 'fafafa', '2023-01-11', '2023-01-19', 'MUHAMMAD PANJI'),
(24, 'afafa', 'Peralatan Operasional', 'fafafaf', 'fafafa', 'afafafafa', '2023-01-12', '2023-01-18', 'ESNI FRIDAWATI');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `level` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `npp` int(10) NOT NULL,
  `bidang` enum('DUKUNGAN BISNIS','DUKUNGAN OPERASI DAN PENJUALAN','INSPEKSI TEKNIK','INSPEKSI UMUM','PENGUJIAN DAN KONSULTASI') NOT NULL,
  `password` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`level`, `email`, `username`, `npp`, `bidang`, `password`) VALUES
('admin', 'admin', 'admin', 0, 'DUKUNGAN BISNIS', 'admin'),
('', 'user8@gmail.com', 'User8', 1, '', 'user8'),
('', 'user7@gmail.com', 'User7', 12, '', 'user7'),
('', 'user6@gmail.com', 'User6', 123, 'DUKUNGAN BISNIS', 'user6'),
('', 'user5@gmail.com', 'User5', 123456, 'DUKUNGAN BISNIS', 'user5'),
('', 'user4@gmail.com', 'User4', 1234567, 'DUKUNGAN BISNIS', 'user4'),
('', 'user3@gmail.com', 'User3', 12345678, 'DUKUNGAN BISNIS', 'user3'),
('', 'user2@gmail.com', 'User2', 123456780, 'DUKUNGAN BISNIS', 'user2'),
('', 'user1@gmail.com', 'Ferdy Sambo', 123456789, 'DUKUNGAN BISNIS', 'user1');

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
  ADD PRIMARY KEY (`npp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formulir`
--
ALTER TABLE `formulir`
  MODIFY `nomor` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `npp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
