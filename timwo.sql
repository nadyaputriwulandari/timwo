-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 05, 2021 at 04:36 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timwo`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id_booking` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `nama_vendor` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `dp` int(11) NOT NULL,
  `pelunasan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id_booking`, `kategori`, `nama_vendor`, `tanggal`, `dp`, `pelunasan`) VALUES
(1, 'foto ', 'abcfoto', '13/12/2021', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `catering`
--

CREATE TABLE `catering` (
  `id_catering` int(11) NOT NULL,
  `paket` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `catering`
--

INSERT INTO `catering` (`id_catering`, `paket`, `harga`, `foto`) VALUES
(2, 'SILVER', 'Rp 24.500.000', ''),
(3, 'GOLD', 'Rp 29.500.000', ''),
(4, ' ah', '10000', ''),
(5, 'fgert', '1000089', ''),
(6, 's', 'wwee', 'catering_diamond.png');

-- --------------------------------------------------------

--
-- Table structure for table `dekorasi`
--

CREATE TABLE `dekorasi` (
  `id_dekorasi` int(11) NOT NULL,
  `paket` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dekorasi`
--

INSERT INTO `dekorasi` (`id_dekorasi`, `paket`, `harga`, `foto`, `keterangan`) VALUES
(1, 'SILVER', 'Rp 10.000.000 ', '', ''),
(2, 'GOLD', 'Rp 20.000.000', '', 'yui'),
(4, 's', 'sbd', '00fc9ca6-fd82-498e-93af-79f301ddd4b5.JPG', 'cbcvk'),
(5, 's', 'sbd', '00fc9ca6-fd82-498e-93af-79f301ddd4b5.JPG', 'cbcvk'),
(6, 'Silver', 'Rp. 30000000', 'foto4.jpg', 'abcdefghijk'),
(7, ' ah', '1000089', 'diamond.png', 'fhffj'),
(8, ' ah', '1000089', 'diamond.png', 'fhffj');

-- --------------------------------------------------------

--
-- Table structure for table `fg`
--

CREATE TABLE `fg` (
  `id_fg` int(11) NOT NULL,
  `paket` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fg`
--

INSERT INTO `fg` (`id_fg`, `paket`, `harga`, `foto`) VALUES
(1, 'SILVER', 'Rp 2.000.000', ''),
(2, 'GOLD', 'Rp 4.000.000', ''),
(3, 'DIAMOND', 'Rp 7.000.000', ''),
(4, 'BRONZETYU', '1000089', 'fg_diamond.png');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mc`
--

CREATE TABLE `mc` (
  `id_mc` int(11) NOT NULL,
  `paket` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mc`
--

INSERT INTO `mc` (`id_mc`, `paket`, `harga`, `foto`) VALUES
(1, 'AKAD', 'Rp 500.000', ''),
(2, 'RESEPSI', 'Rp 1.000.000', ''),
(3, 'AKAD & RESEPSI', 'Rp 1.500.000', ''),
(4, 'ak', '12345', 'mc_diamond.png');

-- --------------------------------------------------------

--
-- Table structure for table `mua`
--

CREATE TABLE `mua` (
  `id_mua` int(11) NOT NULL,
  `paket` varchar(200) NOT NULL,
  `harga` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(11) NOT NULL,
  `jumlah` int(1) NOT NULL,
  `ulasan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id_rating`, `jumlah`, `ulasan`) VALUES
(1, 4, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` enum('admin','customer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(3, 'nadya', '1234', 'admin'),
(4, 'annisa', '1234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id_vendor` int(11) NOT NULL,
  `nama_vendor` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `verifikasi` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id_vendor`, `nama_vendor`, `kategori`, `alamat`, `telephone`, `foto`, `harga`, `verifikasi`, `status`) VALUES
(1, 'ABC Fotographer', 'Fotographer', 'jl ', '12345678', 'ui.png', '20000000', '', 'verifikasi'),
(2, 'xd', 'dsd', 'dd', 'dwd', 'wwdd', 'dwdd', '', 'verifikasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `catering`
--
ALTER TABLE `catering`
  ADD PRIMARY KEY (`id_catering`);

--
-- Indexes for table `dekorasi`
--
ALTER TABLE `dekorasi`
  ADD PRIMARY KEY (`id_dekorasi`);

--
-- Indexes for table `fg`
--
ALTER TABLE `fg`
  ADD PRIMARY KEY (`id_fg`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `mc`
--
ALTER TABLE `mc`
  ADD PRIMARY KEY (`id_mc`);

--
-- Indexes for table `mua`
--
ALTER TABLE `mua`
  ADD PRIMARY KEY (`id_mua`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id_vendor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catering`
--
ALTER TABLE `catering`
  MODIFY `id_catering` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dekorasi`
--
ALTER TABLE `dekorasi`
  MODIFY `id_dekorasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fg`
--
ALTER TABLE `fg`
  MODIFY `id_fg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mc`
--
ALTER TABLE `mc`
  MODIFY `id_mc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mua`
--
ALTER TABLE `mua`
  MODIFY `id_mua` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id_vendor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
