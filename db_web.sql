-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2021 pada 08.07
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_login`
--

CREATE TABLE `akun_login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `NIP` int(50) NOT NULL,
  `jenis_akun` int(5) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun_login`
--

INSERT INTO `akun_login` (`username`, `password`, `NIP`, `jenis_akun`, `nama_pegawai`) VALUES
('admin', 'admin', 11122, 1, 'Muhammad Ali'),
('rosi', '1234', 11133, 2, 'Rosi Riyantoro'),
('jibril', '12345', 11134, 1, 'muhammad jibril'),
('admin1', '123456', 123456, 1, 'Bambang Gentolet'),
('nalendro', '1234', 1111223, 2, 'Nalendro el salvado');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `No` int(20) NOT NULL,
  `NIP` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomor_STR` int(20) NOT NULL,
  `akhir_STR` date NOT NULL,
  `file_scan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pegawai`
--

INSERT INTO `data_pegawai` (`No`, `NIP`, `nama`, `nomor_STR`, `akhir_STR`, `file_scan`) VALUES
(3, 1111223, 'Nalendro el salvado', 493793, '2025-01-10', 'License premium.txt');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `No` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
