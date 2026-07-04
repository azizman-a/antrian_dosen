-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jul 2026 pada 11.32
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antrian_dosen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian`
--

CREATE TABLE `antrian` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keperluan` varchar(200) NOT NULL,
  `priority` int(11) NOT NULL,
  `status` enum('menunggu','dipanggil','selesai') DEFAULT 'menunggu',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `antrian`
--

INSERT INTO `antrian` (`id`, `nama`, `keperluan`, `priority`, `status`, `created_at`) VALUES
(1, 'aziz', 'kepentingan', 1, 'selesai', '2026-07-03 17:02:56'),
(2, 'divqi', 'sidang skirpsi', 1, 'selesai', '2026-07-03 17:03:01'),
(3, 'salman', 'bimbingan dosen', 2, 'selesai', '2026-07-03 17:03:05'),
(4, 'lukman', 'perizinan', 2, 'selesai', '2026-07-03 17:03:09'),
(5, 'bilal', 'konsultasi', 1, 'selesai', '2026-07-03 17:03:14'),
(6, 'aziz', 'kepentingan', 1, 'selesai', '2026-07-03 17:04:01'),
(7, 'aziz', 'sidang skirpsi', 1, 'selesai', '2026-07-03 17:04:06'),
(8, 'salman', 'bimbingan dosen', 2, 'selesai', '2026-07-03 17:04:12'),
(9, 'lukman', 'perizinan', 2, 'selesai', '2026-07-03 17:04:17'),
(10, 'bilal', 'konsultasi', 2, 'selesai', '2026-07-03 17:04:21'),
(11, 'aziz', 'kepentingan', 1, 'selesai', '2026-07-04 09:02:51'),
(12, 'salman', 'sidang skirpsi', 1, 'selesai', '2026-07-04 09:02:58');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
