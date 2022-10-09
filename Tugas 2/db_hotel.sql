-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Okt 2022 pada 21.22
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pelanggan`
--

CREATE TABLE `data_pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jenis` varchar(20) DEFAULT NULL,
  `nomer` int(11) DEFAULT NULL,
  `biaya` bigint(20) DEFAULT NULL,
  `lama_inap` int(11) DEFAULT NULL,
  `total` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pelanggan`
--

INSERT INTO `data_pelanggan` (`id`, `nama`, `alamat`, `tanggal`, `jenis`, `nomer`, `biaya`, `lama_inap`, `total`) VALUES
(2, 'Bagas Aji', 'pondok Kelapa', '2022-10-08', 'Standard', 15, 450000, 5, 2250000),
(4, 'Dani', 'Jatibening', '2022-10-08', 'Deluxe', 12, 600000, 1, 600000),
(6, 'Udin Petot', 'Cakung', '2022-10-24', 'Deluxe', 15, 600000, 3, 1800000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
