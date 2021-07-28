-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jun 2021 pada 05.24
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pptk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_anggota`
--

CREATE TABLE `t_anggota` (
  `id_anggota` int(11) NOT NULL,
  `nm_anggota` varchar(255) NOT NULL,
  `tim` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_anggota`
--

INSERT INTO `t_anggota` (`id_anggota`, `nm_anggota`, `tim`, `level`, `username`, `password`) VALUES
(4, 'Nur Akhwan', 'Back End', 'Ketua Tim', '123', '202cb962ac59075b964b07152d234b70'),
(5, 'Anggun', 'Back End', 'Anggota', 'esdtrt', '422aad3e6c0280512a1255ec329715a6'),
(13, 'widi', '-', 'Ketua Project', 'widi', 'd9b1d7db4cd6e70935368a1efb10e377'),
(14, 'eko', '-', 'Admin', 'eko', '202cb962ac59075b964b07152d234b70'),
(15, 'nama anggota tes coba', 'Front End', 'Anggota', 'tes', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_detail_project`
--

CREATE TABLE `t_detail_project` (
  `id_detail_project` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `pekerjaan` varchar(225) NOT NULL,
  `tim` varchar(50) NOT NULL,
  `progres` varchar(50) NOT NULL,
  `id_anggota` int(11) DEFAULT NULL,
  `tgl_kerja` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_detail_project`
--

INSERT INTO `t_detail_project` (`id_detail_project`, `id_project`, `pekerjaan`, `tim`, `progres`, `id_anggota`, `tgl_kerja`) VALUES
(25, 5, 'Membuat database pajak', 'Back End', 'Proses', NULL, NULL),
(26, 5, 'membuat tampilan depan', 'Front End', 'Proses', NULL, NULL),
(27, 5, 'membuat menu utama', 'Back End', 'Proses', NULL, NULL),
(28, 5, 'membuat tampilan login', 'Front End', 'Proses', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_project`
--

CREATE TABLE `t_project` (
  `id_project` int(11) NOT NULL,
  `nm_project` varchar(225) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_deadline` date NOT NULL,
  `doc_sdlc` tinyint(1) DEFAULT NULL,
  `status_project` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_project`
--

INSERT INTO `t_project` (`id_project`, `nm_project`, `tgl_mulai`, `tgl_deadline`, `doc_sdlc`, `status_project`) VALUES
(5, 'PAJAK-KU', '2021-06-19', '2021-07-21', NULL, 'Proses');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_anggota`
--
ALTER TABLE `t_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `t_detail_project`
--
ALTER TABLE `t_detail_project`
  ADD PRIMARY KEY (`id_detail_project`);

--
-- Indeks untuk tabel `t_project`
--
ALTER TABLE `t_project`
  ADD PRIMARY KEY (`id_project`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_anggota`
--
ALTER TABLE `t_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `t_detail_project`
--
ALTER TABLE `t_detail_project`
  MODIFY `id_detail_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `t_project`
--
ALTER TABLE `t_project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
