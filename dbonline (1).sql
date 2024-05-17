-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Bulan Mei 2024 pada 05.55
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbonline`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbldsn`
--

CREATE TABLE `tbldsn` (
  `nip` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nohp` int(20) NOT NULL,
  `matkul` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbldsn`
--

INSERT INTO `tbldsn` (`nip`, `nama`, `email`, `alamat`, `nohp`, `matkul`) VALUES
(220023, 'Ratih', 'Ratih@gmail.com', 'Padang', 8967543, 'fisika'),
(220064, 'Bayu', 'Bayu@gmail.com', 'Marelan', 8527655, 'Program');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblmhsw`
--

CREATE TABLE `tblmhsw` (
  `nim` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblmhsw`
--

INSERT INTO `tblmhsw` (`nim`, `name`, `address`, `prodi`, `age`) VALUES
(1234569, 'Irsan Alwie Sinaga', 'Medan Polonia', 'Sistem Informasi selected', 23);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbldsn`
--
ALTER TABLE `tbldsn`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `tblmhsw`
--
ALTER TABLE `tblmhsw`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
