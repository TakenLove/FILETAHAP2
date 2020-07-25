-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Sep 2019 pada 18.01
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gd4_9523_c`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukumanager`
--

CREATE TABLE `bukumanager` (
  `Idd` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `JenisKelamin` int(10) NOT NULL,
  `NomorHandphone` varchar(10) NOT NULL,
  `Pendidikan` int(10) NOT NULL,
  `IPK` int(5) NOT NULL,
  `Cumlaude` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bukumanager`
--

INSERT INTO `bukumanager` (`Idd`, `Name`, `gmail`, `JenisKelamin`, `NomorHandphone`, `Pendidikan`, `IPK`, `Cumlaude`, `Alamat`, `Kota`) VALUES
(6, 'a su', '170709523@students.uajy.ac.id', 0, '124456', 0, 4, '0', 'Jln. Gumulan, Griya Permata Indah, B17, Klaten Ten', 'Klaten');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `name` varchar(192) NOT NULL,
  `email` varchar(192) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `nomorHandphone` varchar(10) NOT NULL,
  `jenisKelamin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `tanggalLahir`, `nomorHandphone`, `jenisKelamin`) VALUES
(53, 'Mariyah', '170709523@students.uajy.ac.id', '2019-09-12', '+628122535', 0),
(59, 'Mariyah', 'qwe@q.q', '2019-09-05', '+628122535', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(192) NOT NULL,
  `Email` varchar(192) NOT NULL,
  `Password` varchar(192) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `Name`, `Email`, `Password`) VALUES
(1, 'qwe', 'qwe@gmail.com', '$2y$10$IvitQM2IgEP5mq5JQb8W/e1C7ZL8crETRWH/SpEt0HPTFd0MNxzQa'),
(2, 'a', 'a@a.a', '$2y$10$d7J19wG0ZAeSZkTb2NICD.pBRg6FCTI/H0b87GNgS6HzZkPjlPDSu'),
(3, 'q', 'q@q.q', '$2y$10$d1aNHpVAGRzNaHMr8KrVAefPGY/Men/ThnNnJDkstTq78L5f95kQC'),
(4, 'we', 'w@w.w', '$2y$10$MsKqke3OFif0Ln9N9evgg.b/bEVQxqGHymQ8/uIlkIpmqogWyMhlK');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bukumanager`
--
ALTER TABLE `bukumanager`
  ADD PRIMARY KEY (`Idd`),
  ADD UNIQUE KEY `gmail` (`gmail`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bukumanager`
--
ALTER TABLE `bukumanager`
  MODIFY `Idd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
