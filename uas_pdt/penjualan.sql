-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jul 2021 pada 15.13
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_login`
--

CREATE TABLE `daftar_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_login`
--

INSERT INTO `daftar_login` (`id`, `username`, `password`, `level`) VALUES
(2, 'admin', 'admin', 'admin'),
(3, 'user', 'user', 'user'),
(4, 'user', 'user', ''),
(5, 'dhani', 'dhani', 'user'),
(6, 'dhani', 'dhani', 'dhani'),
(7, 'satri', 'satria', 'user'),
(8, 'satria', 'satria', 'user'),
(9, 'aku', 'aku', 'user'),
(10, 'saya', 'saya', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perma`
--

CREATE TABLE `perma` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kelamin` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `perpanjang` int(100) NOT NULL,
  `ibu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perma`
--

INSERT INTO `perma` (`id`, `nama`, `alamat`, `kelamin`, `pekerjaan`, `jenis`, `perpanjang`, `ibu`) VALUES
(8, 'Wahyu Hamdani', 'Yogyakarta', '', 'Mahasiswa', 'Gold', 5, 'Hamsinah'),
(9, 'Dhani Hamdani', 'Nabire', '', 'Mahasiswa', 'Silver', 2, 'Lala');

-- --------------------------------------------------------

--
-- Struktur dari tabel `semen`
--

CREATE TABLE `semen` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kelamin` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `perpanjang` int(100) NOT NULL,
  `ibu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_login`
--
ALTER TABLE `daftar_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perma`
--
ALTER TABLE `perma`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `semen`
--
ALTER TABLE `semen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_login`
--
ALTER TABLE `daftar_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `perma`
--
ALTER TABLE `perma`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `semen`
--
ALTER TABLE `semen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
