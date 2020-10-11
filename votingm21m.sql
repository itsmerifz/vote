-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Sep 2020 pada 07.58
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
-- Database: `votingm21m`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapemilihan`
--

CREATE TABLE `datapemilihan` (
  `idpemilihan` int(5) NOT NULL,
  `tipe` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `idpemilih` varchar(9) COLLATE latin1_general_ci DEFAULT NULL,
  `idkandidat` varchar(2) COLLATE latin1_general_ci NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `datapemilihan`
--

INSERT INTO `datapemilihan` (`idpemilihan`, `tipe`, `idpemilih`, `idkandidat`, `waktu`) VALUES
(1, 'Siswa', '1', '2', '2017-06-10 11:02:42'),
(2, 'Guru', '009', '1', '2017-06-10 20:58:43'),
(3, 'Siswa', '2', '2', '2017-06-12 03:47:33'),
(4, 'Guru', '161701002', '2', '2017-06-12 03:51:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kandidat`
--

CREATE TABLE `kandidat` (
  `idkandidat` int(2) NOT NULL,
  `username` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nokandidat` varchar(2) COLLATE latin1_general_ci NOT NULL,
  `jumlahsuara` varchar(4) COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  `visi` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `misi` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','T') COLLATE latin1_general_ci NOT NULL DEFAULT 'T',
  `foto` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `kandidat`
--

INSERT INTO `kandidat` (`idkandidat`, `username`, `password`, `nama`, `nokandidat`, `jumlahsuara`, `visi`, `misi`, `aktif`, `foto`) VALUES
(1, 'kandidat1', '8f23e4acba1b7f45423b930e7cfadbd0', 'Tuan dan Puan', '2', '2', 'Mejadikan sekolah ini sebagai sekolah SMA Favorit karena OSIS-nya', '<ol><li>Tahun ini harus haji semua pengurus OSISnya</li><li>\r\nMenjadikan bla..bla...</li><li>\r\njadinya hahahaha</li><li>\r\napa yah</li><li>\r\nbukan deh</li></ol>', 'Y', '411.jpg'),
(2, 'muhidin', 'c0f6e70583525a8a265e19de06d6bff8', 'Muhidin', '1', '4', 'Menjadikan sebagai OSIS terbaik sekota Depok', '<ol><li>Membuat pengajian rutin</li><li>\nMengundang pembicara kaliber nasional per 3 bulan ke acara OSIS</li><li>lain-lain</li></ol>', 'Y', 'AllahWithUs.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kandidat2`
--

CREATE TABLE `kandidat2` (
  `idkandidat2` int(2) NOT NULL,
  `username` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nokandidat2` varchar(2) COLLATE latin1_general_ci NOT NULL,
  `jumlahsuara2` varchar(4) COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  `visi` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `misi` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','T') COLLATE latin1_general_ci NOT NULL DEFAULT 'T',
  `foto` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `kandidat2`
--

INSERT INTO `kandidat2` (`idkandidat2`, `username`, `password`, `nama`, `nokandidat2`, `jumlahsuara2`, `visi`, `misi`, `aktif`, `foto`) VALUES
(1, 'kandidat1', '8f23e4acba1b7f45423b930e7cfadbd0', 'Tuan dan Puan', '2', '2', 'Mejadikan sekolah ini sebagai sekolah SMA Favorit karena OSIS-nya', '<ol><li>Tahun ini harus haji semua pengurus OSISnya</li><li>\r\nMenjadikan bla..bla...</li><li>\r\njadinya hahahaha</li><li>\r\napa yah</li><li>\r\nbukan deh</li></ol>', 'Y', '411.jpg'),
(2, 'muhidin', 'c0f6e70583525a8a265e19de06d6bff8', 'Muhidin', '1', '4', 'Menjadikan sebagai OSIS terbaik sekota Depok', '<ol><li>Membuat pengajian rutin</li><li>\nMengundang pembicara kaliber nasional per 3 bulan ke acara OSIS</li><li>lain-lain</li></ol>', 'Y', 'AllahWithUs.jpg'),
(3, 'a', '0cc175b9c0f1b6a831c399e269772661', 'A', '3', '0', 'a', 'a', 'T', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `idkelas` int(2) NOT NULL,
  `kelas` varchar(30) CHARACTER SET latin1 NOT NULL,
  `jumlah` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`idkelas`, `kelas`, `jumlah`) VALUES
(1, 'X MIPA ', 40),
(8, 'XI MIPA 2', 39);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilih`
--

CREATE TABLE `pemilih` (
  `nis` varchar(16) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `tempatlahir` varchar(30) NOT NULL,
  `tanggallahir` date NOT NULL,
  `idkelas` varchar(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `aktif` enum('Y','T') NOT NULL DEFAULT 'T',
  `memilih` varchar(1) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemilih`
--

INSERT INTO `pemilih` (`nis`, `username`, `password`, `nama`, `jk`, `tempatlahir`, `tanggallahir`, `idkelas`, `email`, `hp`, `aktif`, `memilih`, `foto`) VALUES
('1', 'asepp', 'c4ca4238a0b923820dcc509a6f75849b', 'Naufal Mumtaz Ramadhan', 'L', 'Jepara', '2001-12-06', '8', 'naufal.mr@gmail.com', '0822', 'Y', '', 'admin.jpg'),
('123', '123', 'b42935f6ae1e4c4190b6457f11496645', 'Agus', 'L', '', '2001-07-17', '1', '', '', 'Y', '', ''),
('2', 'humam', '6f99cd6a204c61990e0abbe993988efe', 'Humam Al Labib', 'L', 'Jepara', '2003-12-30', '1', 'humam.alabib@gmail.com', '0812', 'Y', '', 'WorkshopDepicta2017.jpg'),
('3', 'bita', 'e2a00a6481b4654ff0e35325780a0d10', 'Nailah Fauziyyah Tsabitah Az Zahra', 'P', 'Depok', '2009-05-11', '1', 'nailah.fauziyyah@gmail.com', '000', 'Y', '', '170320152325.jpg'),
('7209', 'azkklk', 'c4ca4238a0b923820dcc509a6f75849b', 'Muhammad Arief', 'L', 'Manado', '2001-07-17', '8', '', '', 'Y', '', 'admin.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `idpengguna` int(2) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hakakses` varchar(15) NOT NULL,
  `aktif` enum('Y','T') NOT NULL DEFAULT 'T',
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`idpengguna`, `username`, `password`, `nama`, `jabatan`, `hp`, `email`, `hakakses`, `aktif`, `foto`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin Web E-Voting', 'Admin', '082259211590', 'azkklk@gmail.com', 'Admin', 'Y', 'admin.jpg'),
(15, 'admin2', '21232f297a57a5a743894a0e4a801fc3', 'Admin Web E-Voting', 'Admin', '', '', 'Admin', 'Y', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datapemilihan`
--
ALTER TABLE `datapemilihan`
  ADD PRIMARY KEY (`idpemilihan`);

--
-- Indeks untuk tabel `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`idkandidat`);

--
-- Indeks untuk tabel `kandidat2`
--
ALTER TABLE `kandidat2`
  ADD PRIMARY KEY (`idkandidat2`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`idkelas`);

--
-- Indeks untuk tabel `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `pengguna` (`username`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idpengguna`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datapemilihan`
--
ALTER TABLE `datapemilihan`
  MODIFY `idpemilihan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `idkandidat` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kandidat2`
--
ALTER TABLE `kandidat2`
  MODIFY `idkandidat2` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `idkelas` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `idpengguna` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
