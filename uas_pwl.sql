-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 02:31 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_pwl`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `userName` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role_id` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`userName`, `password`, `id`, `name`, `role_id`) VALUES
('admin', '$2y$10$2/S6AXIG/2cjKjRO8qC0P.IaUxl0obeXdpgbYl5hkH1lP4uc8Y8sS', 1, 'admin', 1),
('user', '$2y$10$2/S6AXIG/2cjKjRO8qC0P.IaUxl0obeXdpgbYl5hkH1lP4uc8Y8sS', 2, 'user', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_invoice`
--

INSERT INTO `tbl_invoice` (`id`, `nama`, `tgl_pesan`, `batas_bayar`) VALUES
(4, 'Ferry Fakhruddin', '2021-01-05 00:46:48', '2021-01-05 00:56:48'),
(5, 'Rahadhian', '2021-01-05 01:48:43', '2021-01-05 01:58:43'),
(6, 'Ferry Fakhruddin Samodera Budiyanto', '2021-01-05 09:00:49', '2021-01-05 09:10:49'),
(8, 'Budi', '2021-01-05 11:09:37', '2021-01-05 11:19:37'),
(9, 'Rahadhian Aji Pamungkas', '2021-01-05 11:26:27', '2021-01-05 11:36:27'),
(10, 'Budi Duwi', '2021-01-05 13:11:50', '2021-01-05 13:21:50'),
(11, 'Ferry Fakhruddin', '2021-01-05 13:49:25', '2021-01-05 13:59:25'),
(12, 'Rahadhian Aji Pamungkas', '2021-01-05 15:10:41', '2021-01-05 15:20:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesanan`
--

CREATE TABLE `tbl_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `idProduk` int(11) NOT NULL,
  `namaProduk` varchar(225) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `hargaProduk` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pesanan`
--

INSERT INTO `tbl_pesanan` (`id`, `id_invoice`, `idProduk`, `namaProduk`, `jumlah`, `hargaProduk`, `pilihan`) VALUES
(1, 2, 1, 'Nasi Goreng', 1, 9000, ''),
(2, 2, 3, 'Mie Goreng Pedas', 1, 10000, ''),
(3, 2, 6, 'Nasi Goreng Seafood', 1, 15000, ''),
(4, 3, 1, 'Nasi Goreng', 1, 9000, ''),
(5, 3, 2, 'Nasi Ayam', 1, 13000, ''),
(6, 4, 1, 'Nasi Goreng', 1, 9000, ''),
(7, 4, 2, 'Nasi Ayam', 1, 13000, ''),
(8, 5, 1, 'Nasi Goreng', 2, 9000, ''),
(9, 5, 2, 'Nasi Ayam', 1, 13000, ''),
(10, 6, 3, 'Mie Goreng Pedas', 1, 10000, ''),
(11, 6, 4, 'Mie Goreng Manis', 1, 10000, ''),
(12, 6, 10, 'Mie Pedas Manis Hotplate', 1, 12000, ''),
(13, 7, 3, 'Mie Goreng Pedas', 2, 10000, ''),
(14, 8, 9, 'Nasi Goreng Hotplate', 1, 10000, ''),
(15, 8, 11, 'Es Teh', 1, 2000, ''),
(16, 9, 1, 'Nasi Goreng', 1, 9000, ''),
(17, 9, 3, 'Mie Goreng Pedas', 1, 10000, ''),
(18, 9, 11, 'Es Teh', 1, 2000, ''),
(19, 9, 10, 'Mie Pedas Manis Hotplate', 1, 12000, ''),
(20, 10, 2, 'Nasi Ayam', 1, 13000, ''),
(21, 10, 11, 'Es Teh', 1, 2000, ''),
(22, 10, 10, 'Mie Pedas Manis Hotplate', 1, 12000, ''),
(23, 11, 4, 'Mie Goreng Manis', 1, 10000, ''),
(24, 11, 12, 'Teh Hangat', 1, 2500, ''),
(25, 12, 2, 'Nasi Ayam', 1, 13000, ''),
(26, 12, 4, 'Mie Goreng Manis', 1, 10000, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `idProduk` int(50) NOT NULL,
  `jenis` varchar(225) NOT NULL,
  `namaProduk` varchar(150) NOT NULL,
  `hargaProduk` int(10) NOT NULL,
  `gambarProduk` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`idProduk`, `jenis`, `namaProduk`, `hargaProduk`, `gambarProduk`) VALUES
(1, 'Menu Biasa', 'Nasi Goreng', 9000, 'nasi goreng biasa.jpg'),
(2, 'Menu Biasa', 'Nasi Ayam', 13000, 'nasi ayam.jpg'),
(3, 'Menu Biasa', 'Mie Goreng Pedas', 10000, 'mie goreng.jpg'),
(4, 'Menu Biasa', 'Mie Goreng Manis', 10000, 'mie goreng manis.jpg'),
(6, 'Menu Biasa', 'Nasi Goreng Seafood', 15000, 'nasi goreng seafood1.jpg'),
(9, 'Menu Hotplate', 'Nasi Goreng Hotplate', 15000, 'nasi goreng hotplate.jpg'),
(10, 'Menu Hotplate', 'Mie Pedas Manis Hotplate', 12000, 'mie hotplate.jpg'),
(11, 'Menu Dingin', 'Es Teh', 2000, 'es teh.jpg'),
(12, 'Menu Panas', 'Teh Hangat', 2500, 'teh_anget.jpg'),
(13, 'Menu Hotplate', 'Hotplate Daging Sapi ', 18000, 'daging_hotplate2.jpg'),
(14, 'Menu Panas', 'Jeruk Hangat', 3000, 'jeruk.jpg'),
(22, 'Menu Panas', 'Kopi Hitam', 3000, 'kopi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`idProduk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `idProduk` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
