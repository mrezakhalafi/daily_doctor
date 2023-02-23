-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Des 2019 pada 18.49
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daily_doctor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_antrian`
--

CREATE TABLE `tb_antrian` (
  `id` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `antrian` int(11) NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_antrian`
--

INSERT INTO `tb_antrian` (`id`, `id_dokter`, `id_pasien`, `antrian`, `keluhan`, `tanggal`, `status`) VALUES
(1, 1, 1, 1, 'Saya sakit kepala dok', '2019-12-24', 3),
(2, 2, 1, 1, 'Saya pilek dok', '2019-12-24', 0),
(3, 3, 1, 1, 'Hehe', '2019-12-24', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `spesialis` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dokter`
--

INSERT INTO `tb_dokter` (`id`, `nama`, `username`, `email`, `password`, `jk`, `spesialis`, `alamat`, `foto`, `rating`, `role`) VALUES
(1, 'Dr. Steven Reeves', 'steven', 'steven@gmail.com', '$2y$10$C7.bgzJPl3R6kz0.IJnfm.DjsosCL9K02WO2eMdy7lKAu7Ftf6kDe', 'Laki-Laki', 'Dokter Umum', 'Jl.Cipinang Elok II Blok.AA No.10', 'wawan_suprapto.jpg', 5, 1),
(2, 'Dr. Leonardo Halasantua', 'leonardo', 'leonardo@gmail.com', '$2y$10$C7.bgzJPl3R6kz0.IJnfm.DjsosCL9K02WO2eMdy7lKAu7Ftf6kDe', 'Laki-Laki', 'Dokter Umum', 'Tambun, Bekasi Timur', 'steven_reeves.jpg', 5, 1),
(3, 'Dr. Alexander Wawo', 'alex', 'alexander@gmail.com', '$2y$10$C7.bgzJPl3R6kz0.IJnfm.DjsosCL9K02WO2eMdy7lKAu7Ftf6kDe', 'Laki-Laki', 'Dokter Umum', 'Tipar Cakung JL. Cendrawasih no.6', 'budi.jpg', 5, 1),
(4, 'Dr. Xavier', 'xavier', 'xavier@gmail.com', '$2y$10$C7.bgzJPl3R6kz0.IJnfm.DjsosCL9K02WO2eMdy7lKAu7Ftf6kDe', 'Perempuan', 'Dokter Umum', 'Griya Harapan Permai D3 no.1', 'grace_valentine.jpg', 5, 1),
(5, 'Dr. Ai', 'ai', 'ai@gmail.com', '$2y$10$C7.bgzJPl3R6kz0.IJnfm.DjsosCL9K02WO2eMdy7lKAu7Ftf6kDe', 'Perempuan', 'Dokter Umum', 'Jakarta Pusat', 'Sekarlita_indriani.jpeg', 5, 1),
(6, 'Dr. Nobi Nobita', 'nobita', 'nobita@gmail.com', '$2y$10$C7.bgzJPl3R6kz0.IJnfm.DjsosCL9K02WO2eMdy7lKAu7Ftf6kDe', 'Laki-Laki', 'Dokter Umum', 'Tokyo, Jepang', 'nobita.jpg', 5, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kritik`
--

CREATE TABLE `tb_kritik` (
  `id` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `umur` int(11) NOT NULL,
  `kritik` varchar(255) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kritik`
--

INSERT INTO `tb_kritik` (`id`, `id_pasien`, `umur`, `kritik`, `id_dokter`, `rating`) VALUES
(6, 1, 21, 'Gila nih', 1, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `role` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `jk`, `tgl_lahir`, `email`, `alamat`, `role`) VALUES
(1, 'M Reza Khalafi', 'mrezakhalafi', '$2y$10$C7.bgzJPl3R6kz0.IJnfm.DjsosCL9K02WO2eMdy7lKAu7Ftf6kDe', 'Laki-Laki', '1998-06-23', 'mrezakhalafi@yahoo.com', 'Jl.Cipinang Elok 1 Blok.C No.13', 2),
(6, 'Alya Quinta', 'AlyaQuinta', '$2y$10$C7.bgzJPl3R6kz0.IJnfm.DjsosCL9K02WO2eMdy7lKAu7Ftf6kDe', 'Perempuan', '1998-05-08', 'alya@gmail.com', 'Jakarta', 2),
(7, 'Yansen', 'Yansen', '$2y$10$LOu3j0jkePNKYdpD987qKOIKCNRf2t6Y8TMRL.PKiR8MrvviElVbm', 'Laki-Laki', '1990-01-01', 'yansen@gmail.com', 'bekasi', 2),
(8, 'Sonia Lassmayda', 'sonia', '$2y$10$xSONPfSUkrr2BJroNXgN.e4I4o1PcpCSxkUVWVru7ooNrg/9/KYDC', 'Perempuan', '1998-10-05', 'sonia@gmail.com', 'jln. kemana', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_antrian`
--
ALTER TABLE `tb_antrian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kritik`
--
ALTER TABLE `tb_kritik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_antrian`
--
ALTER TABLE `tb_antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_dokter`
--
ALTER TABLE `tb_dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_kritik`
--
ALTER TABLE `tb_kritik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
