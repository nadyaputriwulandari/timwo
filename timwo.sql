-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jul 2021 pada 06.25
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

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
-- Struktur dari tabel `book`
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
-- Dumping data untuk tabel `book`
--

INSERT INTO `book` (`id_booking`, `kategori`, `nama_vendor`, `tanggal`, `dp`, `pelunasan`) VALUES
(1, 'foto ', 'abcfoto', '13/12/2021', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `catering`
--

CREATE TABLE `catering` (
  `id_catering` int(11) NOT NULL,
  `paket` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `catering`
--

INSERT INTO `catering` (`id_catering`, `paket`, `harga`, `foto`) VALUES
(2, 'SILVER', 'Rp 24.500.000', ''),
(3, 'GOLD', 'Rp 29.500.000', ''),
(4, ' ah', '10000', ''),
(5, 'fgert', '1000089', ''),
(6, 's', 'wwee', 'catering_diamond.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dekorasi`
--

CREATE TABLE `dekorasi` (
  `id_dekorasi` int(11) NOT NULL,
  `paket` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `dekorasi`
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
-- Struktur dari tabel `fg`
--

CREATE TABLE `fg` (
  `id_fg` int(11) NOT NULL,
  `paket` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `fg`
--

INSERT INTO `fg` (`id_fg`, `paket`, `harga`, `foto`) VALUES
(1, 'SILVER', 'Rp 2.000.000', ''),
(2, 'GOLD', 'Rp 4.000.000', ''),
(3, 'DIAMOND', 'Rp 7.000.000', ''),
(4, 'BRONZETYU', '1000089', 'fg_diamond.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_vendor`
--

CREATE TABLE `kategori_vendor` (
  `kode_unik` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori_vendor`
--

INSERT INTO `kategori_vendor` (`kode_unik`, `kategori`, `status`) VALUES
('CTR', 'Catering', 'verifikasi'),
('DKR', 'Dekorasi', 'verifikasi'),
('FTG', 'Fotographer', 'verifikasi'),
('MC', 'MC', 'verifikasi'),
('MUA', 'MUA', 'verifikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mc`
--

CREATE TABLE `mc` (
  `id_mc` int(11) NOT NULL,
  `paket` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `mc`
--

INSERT INTO `mc` (`id_mc`, `paket`, `harga`, `foto`) VALUES
(1, 'AKAD', 'Rp 500.000', ''),
(2, 'RESEPSI', 'Rp 1.000.000', ''),
(3, 'AKAD & RESEPSI', 'Rp 1.500.000', ''),
(4, 'ak', '12345', 'mc_diamond.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mua`
--

CREATE TABLE `mua` (
  `id_mua` int(11) NOT NULL,
  `paket` varchar(200) NOT NULL,
  `harga` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(11) NOT NULL,
  `jumlah` int(1) NOT NULL,
  `ulasan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `rating`
--

INSERT INTO `rating` (`id_rating`, `jumlah`, `ulasan`) VALUES
(1, 4, 'good');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_paket`
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
-- Dumping data untuk tabel `tb_paket`
--

INSERT INTO `tb_paket` (`id_paket`, `id_vendor`, `paket`, `harga`, `deskripsi`, `foto`, `status_paket`) VALUES
(1, 'VND1', 'Gold', 20000000, 'Paket Mewah', 'no-image-jpg', 0),
(2, 'VND1', 'Silver', 15000000, 'Paket Sederhana', 'no-image-jpg', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_vendor`
--

CREATE TABLE `tb_vendor` (
  `kode_vendor` varchar(256) NOT NULL,
  `nama_vendor` varchar(256) NOT NULL,
  `no_telp_vendor` varchar(13) NOT NULL,
  `alamat_vendor` text NOT NULL,
  `kategori_vendor` varchar(100) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_vendor`
--

INSERT INTO `tb_vendor` (`kode_vendor`, `nama_vendor`, `no_telp_vendor`, `alamat_vendor`, `kategori_vendor`, `status`) VALUES
('VND1', 'Musikawa', '0822654123123', 'Jl. Riau', 'CTR', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` enum('admin','customer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(3, 'nadya', '1234', 'admin'),
(4, 'annisa', '1234', 'admin'),
(5, 'cus', 'cus', 'customer'),
(6, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indeks untuk tabel `catering`
--
ALTER TABLE `catering`
  ADD PRIMARY KEY (`id_catering`);

--
-- Indeks untuk tabel `dekorasi`
--
ALTER TABLE `dekorasi`
  ADD PRIMARY KEY (`id_dekorasi`);

--
-- Indeks untuk tabel `fg`
--
ALTER TABLE `fg`
  ADD PRIMARY KEY (`id_fg`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `kategori_vendor`
--
ALTER TABLE `kategori_vendor`
  ADD PRIMARY KEY (`kode_unik`);

--
-- Indeks untuk tabel `mc`
--
ALTER TABLE `mc`
  ADD PRIMARY KEY (`id_mc`);

--
-- Indeks untuk tabel `mua`
--
ALTER TABLE `mua`
  ADD PRIMARY KEY (`id_mua`);

--
-- Indeks untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`);

--
-- Indeks untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `tb_vendor`
--
ALTER TABLE `tb_vendor`
  ADD PRIMARY KEY (`kode_vendor`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `book`
--
ALTER TABLE `book`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `catering`
--
ALTER TABLE `catering`
  MODIFY `id_catering` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `dekorasi`
--
ALTER TABLE `dekorasi`
  MODIFY `id_dekorasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `fg`
--
ALTER TABLE `fg`
  MODIFY `id_fg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `mc`
--
ALTER TABLE `mc`
  MODIFY `id_mc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `mua`
--
ALTER TABLE `mua`
  MODIFY `id_mua` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
