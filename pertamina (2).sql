-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2018 pada 23.08
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pertamina`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontraktor`
--

CREATE TABLE `kontraktor` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis` varchar(100) DEFAULT NULL,
  `id_pegawai` varchar(100) DEFAULT NULL,
  `direktur` varchar(100) DEFAULT NULL,
  `sekretaris` varchar(100) DEFAULT NULL,
  `HSSE` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontraktor`
--

INSERT INTO `kontraktor` (`id`, `nama`, `jenis`, `id_pegawai`, `direktur`, `sekretaris`, `HSSE`) VALUES
(14, 'internasional', 'penting', '3', 'su', 'Yuranda', 'Arie Yoga'),
(15, 'Cleaning Tangki 9', 'Pengepelan dan Penyemprot Lantai Tangki 9', '7', 'Saya', 'pinda', 'Arie Yoga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(50) NOT NULL,
  `nama_pegawai` varchar(50) DEFAULT NULL,
  `katagori` enum('pekerja','pengawas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `katagori`) VALUES
(1, 'yuranda', 'pengawas'),
(2, 'zaki', 'pengawas'),
(3, 'anda', 'pekerja'),
(4, 'ipan', 'pekerja'),
(5, 'viki', 'pekerja'),
(6, 'pinda', 'pekerja'),
(7, 'mustar', 'pengawas'),
(8, 'afuy', 'pekerja'),
(9, 'arsad', 'pekerja'),
(10, 'angga', 'pekerja'),
(11, 'makrub', 'pekerja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(11) NOT NULL,
  `no_pekerjaan` varchar(100) DEFAULT NULL,
  `nama_pekerjaan` varchar(100) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `no_pekerjaan`, `nama_pekerjaan`, `keterangan`) VALUES
(1, '001/np/2018', 'Monitoring', '-'),
(2, '001/np/2023', 'Monitoring1', 'selalu ada'),
(3, '001/np/20231', 'asdasd', 'asa'),
(4, '08/MPS/IV/2018', 'PT Petra Bangka Indah Tehnik', 'Penyemprot Lantai Menggunakan Pompa PMK 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan_final`
--

CREATE TABLE `pekerjaan_final` (
  `id` int(11) NOT NULL,
  `id_pekerjaan` varchar(100) DEFAULT NULL,
  `id_pegawai` varchar(100) NOT NULL,
  `pengawas` varchar(100) DEFAULT NULL,
  `tanggal` varchar(100) DEFAULT NULL,
  `id_kontraktor` varchar(100) DEFAULT NULL,
  `plan_target` varchar(100) DEFAULT NULL,
  `actual_target` varchar(100) DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `sekarang` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pekerjaan_final`
--

INSERT INTO `pekerjaan_final` (`id`, `id_pekerjaan`, `id_pegawai`, `pengawas`, `tanggal`, `id_kontraktor`, `plan_target`, `actual_target`, `jam_mulai`, `jam_selesai`, `status`, `sekarang`) VALUES
(65, '1', '3,5', '1', '2018-06-10', '14', '40', '70', '11:15:00', '12:15:00', 'closed', '0000-00-00 00:00:00'),
(66, '3', '3,4', '2', '2018-06-09', '14', '50', '30', '11:30:00', '04:15:00', 'closed', '0000-00-00 00:00:00'),
(67, '4', '8,9,10,11', '7', '2018-06-11', '15', '20', '30', '08:15:00', '06:00:00', 'closed', '0000-00-00 00:00:00'),
(68, '4', '11', '7', '2018-06-09', '15', '40', '30', '04:15:00', '04:15:00', 'opened', '0000-00-00 00:00:00'),
(69, '1', '3', '1', '2018-06-09', '14', '20', '70', '13:00:00', '16:05:00', 'opened', '0000-00-00 00:00:00'),
(70, '4', '6,8', '1', '2018-06-30', '15', '20', NULL, '08:20:00', '03:00:00', 'opened', '0000-00-00 00:00:00'),
(71, '4', '10', '1', '2018-06-09', '15', '20', NULL, '23:00:00', '04:05:00', 'opened', '2018-06-08 23:06:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(300) CHARACTER SET utf8 NOT NULL,
  `alamat` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `no_telp` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `level` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `alamat`, `email`, `no_telp`, `photo`, `level`) VALUES
(1, 'administrator', 'admin', '$2y$10$GG3Rj/oMnH5RSMPtq6juFOuQYGP7DeXqasQC4qBHqfHpuoHk7TTUm', NULL, 'admin@admin.com', '082377228970', NULL, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kontraktor`
--
ALTER TABLE `kontraktor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pekerjaan_final`
--
ALTER TABLE `pekerjaan_final`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kontraktor`
--
ALTER TABLE `kontraktor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pekerjaan_final`
--
ALTER TABLE `pekerjaan_final`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
