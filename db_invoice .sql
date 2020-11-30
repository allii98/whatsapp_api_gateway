-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Nov 2020 pada 07.28
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_invoice`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbuser`
--

CREATE TABLE `tbuser` (
  `user_id` int(5) NOT NULL,
  `user_nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `user_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbuser`
--

INSERT INTO `tbuser` (`user_id`, `user_nama`, `username`, `user_pass`) VALUES
(1, 'alli', 'ali123', '$2a$08$R2VKGsuK4BsQ1Nwu0gCbLO5dzqhK6XpnH6qHzbLJyoj9u/glqPWQy'),
(4, 'Amad', 'amad', '$2a$08$5BuwOD61Jzd5cwnWNNpQCOtKGspXq8U5/2pYf2UkbUmJIC/j3MrZC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bank`
--

CREATE TABLE `tb_bank` (
  `id_bank` int(10) NOT NULL,
  `jumlah_transfer` int(20) NOT NULL,
  `komisi` int(20) NOT NULL,
  `biaya_pengiriman` varchar(30) NOT NULL,
  `biaya_koresponden` varchar(30) NOT NULL,
  `sub_total` int(20) NOT NULL,
  `kurs` int(20) NOT NULL,
  `total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nonpengirm`
--

CREATE TABLE `tb_nonpengirm` (
  `id_nonpengirim` int(20) NOT NULL,
  `nama_nonpengirim` varchar(30) NOT NULL,
  `alamat_nonpengirim` text NOT NULL,
  `id_number` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penerima`
--

CREATE TABLE `tb_penerima` (
  `id_penerima` int(10) NOT NULL,
  `jenis_penerima` enum('perorangan','perusahaan','pemerintah','') NOT NULL,
  `status_penduduk` enum('penduduk','bukan penduduk','','') NOT NULL,
  `nama_penerima` varchar(30) NOT NULL,
  `no_rek` varchar(30) NOT NULL,
  `bank` varchar(2) NOT NULL,
  `alamat` text NOT NULL,
  `no_identitas` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengirim`
--

CREATE TABLE `tb_pengirim` (
  `id_pengirim` int(10) NOT NULL,
  `user_nama` varchar(30) NOT NULL,
  `id_number` int(10) NOT NULL,
  `informasi_pengirim` varchar(30) NOT NULL,
  `status_penduduk` varchar(30) NOT NULL,
  `nama_pengirim` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `metode_transaksi` varchar(40) NOT NULL,
  `jumlah_storan` varchar(20) NOT NULL,
  `terbilang` varchar(20) NOT NULL,
  `sumber_dana` varchar(20) NOT NULL,
  `biaya_transaksi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `transaksi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `tb_bank`
--
ALTER TABLE `tb_bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indeks untuk tabel `tb_nonpengirm`
--
ALTER TABLE `tb_nonpengirm`
  ADD PRIMARY KEY (`id_nonpengirim`);

--
-- Indeks untuk tabel `tb_penerima`
--
ALTER TABLE `tb_penerima`
  ADD PRIMARY KEY (`id_penerima`);

--
-- Indeks untuk tabel `tb_pengirim`
--
ALTER TABLE `tb_pengirim`
  ADD PRIMARY KEY (`id_pengirim`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_bank`
--
ALTER TABLE `tb_bank`
  MODIFY `id_bank` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_nonpengirm`
--
ALTER TABLE `tb_nonpengirm`
  MODIFY `id_nonpengirim` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_penerima`
--
ALTER TABLE `tb_penerima`
  MODIFY `id_penerima` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pengirim`
--
ALTER TABLE `tb_pengirim`
  MODIFY `id_pengirim` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
