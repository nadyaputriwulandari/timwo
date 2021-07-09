-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2021 at 06:35 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
  `nama_vendor` varchar(100) NOT NULL,
  `email` varchar(256) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_pembayaran` datetime NOT NULL,
  `tgl_expired` datetime NOT NULL,
  `dp` int(11) NOT NULL,
  `pelunasan` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id_booking`, `nama_vendor`, `email`, `no_hp`, `alamat`, `tgl_pembayaran`, `tgl_expired`, `dp`, `pelunasan`, `status`) VALUES
(4, ' 5', 'asd@gmail', '082276853382', 'Jalan batu sari, RT 1 RW 1. gang. Samping kantor desa buahbatu kost bapak hj sulaiman desa Buahbatu\r\nBojongsoang', '2021-07-08 10:23:16', '2021-07-09 10:23:16', 0, 0, 0),
(5, ' 5', 'andrahafizhsb03@gmail.com', '082276853382', 'Jalan batu sari, RT 1 RW 1. gang. Samping kantor desa buahbatu kost bapak hj sulaiman desa Buahbatu\r\nBojongsoang', '2021-07-08 10:23:30', '2021-07-09 10:23:30', 0, 0, 0),
(6, ' 5', 'asd@gmail', '082276853382', 'Jalan batu sari, RT 1 RW 1. gang. Samping kantor desa buahbatu kost bapak hj sulaiman desa Buahbatu\r\nBojongsoang', '2021-07-08 10:24:47', '2021-07-09 10:24:47', 0, 0, 0),
(7, ' 5', 'fitrah18ti@mahasiswa.pcr.ac.id', '082386492086', 'Jalan Tuanku Tambusai', '2021-07-08 10:36:51', '2021-07-09 10:36:51', 0, 0, 0);

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

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `gambar`, `kategori`) VALUES
(2, 'foto1.jpeg', 'MUA'),
(3, 'foto2.jpg', 'MUA'),
(4, 'foto3.jpg', 'MUA'),
(5, 'catering_diamond.png', 'CTR'),
(6, 'catering_gold.png', 'CTR'),
(7, 'fg_diamond.png', 'FTG'),
(8, 'catering_silver.png', 'CTR'),
(9, 'catering.jpg', 'CTR'),
(10, 'diamond.png', 'DKR'),
(11, 'fg_gold.png', 'FTG'),
(12, 'foto4.jpg', 'MUA'),
(13, 'foto5.jpg', 'FTG'),
(14, 'foto6.jpeg', 'DKR'),
(15, 'foto7.jpg', 'DKR'),
(16, 'foto8.jpg', 'FTG'),
(17, 'fotografer.jpg', 'FTG'),
(18, 'fotografer.png', 'FTG'),
(20, 'mc_gold.png', 'MC'),
(21, 'mc_silver.png', 'MC'),
(22, 'mua_diamond.png', 'MUA'),
(23, 'mua_silver.png', 'MUA'),
(24, 'pengantin.jpg', 'FTG');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_vendor`
--

CREATE TABLE `kategori_vendor` (
  `kode_unik` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori_vendor`
--

INSERT INTO `kategori_vendor` (`kode_unik`, `kategori`, `status`) VALUES
('CTR', 'Catering', 'verifikasi'),
('DKR', 'Dekorasi', 'verifikasi'),
('FTG', 'Fotographer', 'verifikasi'),
('MC', 'MC', 'verifikasi'),
('MUA', 'MUA', 'verifikasi');

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
-- Table structure for table `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id_paket` int(11) NOT NULL,
  `id_vendor` varchar(100) NOT NULL,
  `paket` varchar(256) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(256) NOT NULL,
  `status_paket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_paket`
--

INSERT INTO `tb_paket` (`id_paket`, `id_vendor`, `paket`, `harga`, `deskripsi`, `foto`, `status_paket`) VALUES
(1, 'VND1', 'Gold', 20000000, 'Paket Mewah', 'silver.png', 0),
(2, 'VND1', 'Silver', 15000000, 'Paket Sederhana', 'foto4.jpg', 0),
(3, 'VND2', 'Diamond', 40000000, 'Paket sangat mewah dadadada', 'diamond.png', 0),
(4, 'VND3', '500 orang', 23000000, 'Paket menyediakan jumlah tamu 500 orang', 'catering_diamond.png', 0),
(5, 'VND4', 'Diamond', 7000000, 'Paket meliputi akad dan resepsi', 'fg_diamond.png', 0),
(6, 'VND5', 'Akad Nikah', 500000, 'Paket MC Akad Nikah berlangsung 1-2 jam', 'mc_gold.png', 0),
(7, 'VND6', 'Akad dan Resepsi', 3000000, 'Paket meliputi make up acara akad dan resepsi serta kedua orang tua mempelai', 'foto1.jpeg', 0),
(8, 'VND7', 'Akad Resepsi Platinum', 5000000, 'Paket ini meliputi makeup pengantin 2 hari kerja dan orang tua kedua mempelai', 'foto5.jpg', 0),
(9, '', 'Exclusive', 10000000, 'Foto meliputi acara akad,  acara adat dan resepsi pengantin, selama 2 hari kerja dengan hasil album foto books dan album keluarga', 'IMG_20200119_001305.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_pesan` int(11) NOT NULL,
  `id_booking` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_acara` datetime NOT NULL,
  `status_pesanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id_pesan`, `id_booking`, `id_paket`, `harga`, `jumlah`, `tgl_acara`, `status_pesanan`) VALUES
(1, 6, 1, 20000000, 1, '2021-07-10 00:00:00', 0),
(2, 7, 2, 15000000, 1, '2021-07-29 00:00:00', 0),
(3, 7, 5, 7000000, 1, '2021-07-29 00:00:00', 0),
(4, 7, 6, 500000, 1, '2021-07-29 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_vendor`
--

CREATE TABLE `tb_vendor` (
  `kode_vendor` varchar(256) NOT NULL,
  `nama_vendor` varchar(256) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_telp_vendor` varchar(13) NOT NULL,
  `alamat_vendor` text NOT NULL,
  `kategori_vendor` varchar(100) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_vendor`
--

INSERT INTO `tb_vendor` (`kode_vendor`, `nama_vendor`, `password`, `no_telp_vendor`, `alamat_vendor`, `kategori_vendor`, `status`) VALUES
('VND1', 'Musikawa', '1234', '0822654123123', 'Jl. Riau', 'DKR', 0),
('VND2', 'Royal Wedding', '', '0765444354', 'Jl. Malaysia', 'DKR', 0),
('VND3', 'Pagi Sore Catering', '', '07658889899', 'Jl. Sudirman', 'CTR', 0),
('VND4', 'Maghligai Foto', '', '089876754344', 'Jl. Diponegoro', 'FTG', 0),
('VND5', 'Raga Queen', '', '082345665543', 'Jl. Durian', 'MC', 0),
('VND6', 'Tya Sherliana', '', '081988906543', 'Jl. Tuanku Tambusai', 'MUA', 0),
('VND7', 'Zakiya', '1234', '08999775543', 'Jl. Kenangan', 'MUA', 0),
('VND8', 'Kantana', '1234', '096554343455', 'Jl. Haji Salim', 'FTG', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` enum('customer','admin') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `alamat`, `no_hp`) VALUES
(5, 'cus', 'cus', 'customer', '', 0),
(6, 'admin', 'admin', 'admin', '', 0),
(7, 'fitrah', '1234', 'customer', '', 0),
(9, 'nisek', '$2y$10$nGzzRJnwAI47o0AJJ5tgq.W', 'customer', '', 0),
(10, 'nadya', '$2y$10$Wfol7HBb8BJqaD8/HxYLr.R', 'customer', 'Jl. Leton', 2147483647);

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
-- Indexes for table `kategori_vendor`
--
ALTER TABLE `kategori_vendor`
  ADD PRIMARY KEY (`kode_unik`);

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
-- Indexes for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tb_vendor`
--
ALTER TABLE `tb_vendor`
  ADD PRIMARY KEY (`kode_vendor`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
-- AUTO_INCREMENT for table `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
