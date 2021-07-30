-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jul 2021 pada 09.32
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lkpjku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_detail_rekomendasi`
--

CREATE TABLE `t_detail_rekomendasi` (
  `id_detail_rekomendasi` int(11) NOT NULL,
  `id_rekomendasi` int(11) NOT NULL,
  `id_opd` int(11) NOT NULL,
  `tanggapan` text DEFAULT NULL,
  `persetujuan` varchar(15) DEFAULT NULL,
  `alasan_ditolak` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_detail_rekomendasi`
--

INSERT INTO `t_detail_rekomendasi` (`id_detail_rekomendasi`, `id_rekomendasi`, `id_opd`, `tanggapan`, `persetujuan`, `alasan_ditolak`) VALUES
(2, 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_opd`
--

CREATE TABLE `t_opd` (
  `id_opd` int(11) NOT NULL,
  `nm_opd` varchar(225) NOT NULL,
  `almt_opd` varchar(225) NOT NULL,
  `telp_opd` varchar(15) NOT NULL,
  `email_opd` varchar(50) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_opd`
--

INSERT INTO `t_opd` (`id_opd`, `nm_opd`, `almt_opd`, `telp_opd`, `email_opd`, `username`, `password`, `level`) VALUES
(1, 'tes1', 'Kulon Progo', '085', 'e@', 'as', '202cb962ac59075b964b07152d234b70', 2),
(3, 'dinas pariwisata', 'kulon', '809', 'wew', 'wr', 'd81f9c1be2e08964bf9f24b15f0e4900', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_rekomendasi`
--

CREATE TABLE `t_rekomendasi` (
  `id_rekomendasi` int(11) NOT NULL,
  `id_opd` int(11) NOT NULL,
  `rekomendasi` text NOT NULL,
  `asal_rekomendasi` varchar(15) DEFAULT NULL,
  `tgl_rekomendasi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_rekomendasi`
--

INSERT INTO `t_rekomendasi` (`id_rekomendasi`, `id_opd`, `rekomendasi`, `asal_rekomendasi`, `tgl_rekomendasi`) VALUES
(20, 1, 'dfg', 'Fraksi', '2021-07-30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_detail_rekomendasi`
--
ALTER TABLE `t_detail_rekomendasi`
  ADD PRIMARY KEY (`id_detail_rekomendasi`);

--
-- Indeks untuk tabel `t_opd`
--
ALTER TABLE `t_opd`
  ADD PRIMARY KEY (`id_opd`);

--
-- Indeks untuk tabel `t_rekomendasi`
--
ALTER TABLE `t_rekomendasi`
  ADD PRIMARY KEY (`id_rekomendasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_detail_rekomendasi`
--
ALTER TABLE `t_detail_rekomendasi`
  MODIFY `id_detail_rekomendasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `t_opd`
--
ALTER TABLE `t_opd`
  MODIFY `id_opd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `t_rekomendasi`
--
ALTER TABLE `t_rekomendasi`
  MODIFY `id_rekomendasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
