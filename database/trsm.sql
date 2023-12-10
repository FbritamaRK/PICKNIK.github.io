-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Des 2023 pada 03.54
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trsm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `harg`
--

CREATE TABLE `harg` (
  `id` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `harg`
--

INSERT INTO `harg` (`id`, `harga`) VALUES
('1', '20.000.000'),
('2', '15.000.000\r\n'),
('3', '27.000.000\r\n'),
('4', '17.000.000\r\n'),
('5', '30.000.000\r\n'),
('6', '20.000.000\r\n'),
('7', '40.000.000\r\n'),
('8', '10.000.000\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wst`
--

CREATE TABLE `wst` (
  `id` varchar(255) NOT NULL,
  `wsta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `wst`
--

INSERT INTO `wst` (`id`, `wsta`) VALUES
('1', 'TAMAN NASIONAL BUNAKEN'),
('2', 'GILI TRAWANGAN'),
('3', 'RAJA AMPAT'),
('4', 'NUSA PENIDA'),
('5', 'TAMAN NASIONAL PULAU KOMODO'),
('6', 'TAMAN NASIONAL BALURAN'),
('7', 'WAE REBO'),
('8', 'TAMAN NASIONAL GUNUNG BROMO');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `harg`
--
ALTER TABLE `harg`
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `wst`
--
ALTER TABLE `wst`
  ADD PRIMARY KEY (`id`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `harg`
--
ALTER TABLE `harg`
  ADD CONSTRAINT `id` FOREIGN KEY (`id`) REFERENCES `wst` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
