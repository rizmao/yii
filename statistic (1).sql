-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Mar 2022 pada 15.45
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_yii_toko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `statistic`
--

CREATE TABLE `statistic` (
  `id` int(11) NOT NULL,
  `access_time` datetime DEFAULT current_timestamp(),
  `user_ip` varchar(20) DEFAULT NULL,
  `user_host` varchar(50) DEFAULT NULL,
  `path_info` varchar(50) DEFAULT NULL,
  `query_string` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `statistic`
--

INSERT INTO `statistic` (`id`, `access_time`, `user_ip`, `user_host`, `path_info`, `query_string`) VALUES
(1, '2022-03-16 17:50:15', '::1', NULL, '', ''),
(2, '2022-03-16 17:52:21', '::1', NULL, '', ''),
(3, '2022-03-16 17:52:22', '::1', NULL, '', ''),
(4, '2022-03-16 17:52:23', '::1', NULL, '', ''),
(5, '2022-03-16 17:52:26', '::1', NULL, '', 'r=item%2Findex'),
(6, '2022-03-16 17:57:35', '::1', NULL, '', 'r=item%2Findex'),
(7, '2022-03-16 17:57:37', '::1', NULL, '', 'r=item%2Fview&id=1'),
(8, '2022-03-16 18:31:13', '::1', NULL, '', 'r=item%2Findex'),
(9, '2022-03-16 21:09:35', '::1', NULL, '', 'r=item%2Findex');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `statistic`
--
ALTER TABLE `statistic`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `statistic`
--
ALTER TABLE `statistic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
