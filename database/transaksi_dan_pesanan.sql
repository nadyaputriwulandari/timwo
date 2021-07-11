-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jul 2021 pada 13.31
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
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_pesan` int(11) NOT NULL,
  `order_id` varchar(20) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_acara` datetime NOT NULL,
  `status_pesanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id_pesan`, `order_id`, `id_paket`, `harga`, `jumlah`, `tgl_acara`, `status_pesanan`) VALUES
(7, '2014944399', 1, 20000000, 1, '2021-07-28 00:00:00', 0),
(8, '2014944399', 2, 15000000, 1, '2021-07-21 00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `order_id` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `gross_amount` int(13) NOT NULL,
  `payment_type` varchar(15) NOT NULL,
  `transaction_time` int(11) NOT NULL,
  `bank` varchar(10) NOT NULL,
  `va_numbers` varchar(30) NOT NULL,
  `pdf_url` text NOT NULL,
  `status_code` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`order_id`, `id_user`, `gross_amount`, `payment_type`, `transaction_time`, `bank`, `va_numbers`, `pdf_url`, `status_code`) VALUES
('2014944399', 5, 35000000, 'bank_transfer', 1626020646, 'bca', 'bca', 'https://app.sandbox.midtrans.com/snap/v1/transactions/b0f43e05-a383-4a19-9981-82c9bf120be7/pdf', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
