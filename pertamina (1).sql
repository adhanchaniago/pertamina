-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2018 pada 22.26
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
  `direktur` varchar(100) DEFAULT NULL,
  `sekretaris` varchar(100) DEFAULT NULL,
  `HSSE` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontraktor`
--

INSERT INTO `kontraktor` (`id`, `nama`, `jenis`, `direktur`, `sekretaris`, `HSSE`) VALUES
(1, 'SAYA', 'asd', 'zaki', 'Aku', 'Arie Yoga'),
(2, 'internasional', 'penting', 'yuranda', 'Asus', 'asasasa'),
(3, 'Bongkae', 'Penting', 'zaki', 'Yuranda', 'papapa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `katagori` enum('pekerja','pengawas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `katagori`) VALUES
(1, 'yuranda', 'pengawas'),
(2, 'zaki', 'pengawas'),
(3, 'anda', 'pekerja');

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
(3, '001/np/20231', 'asdasd', 'asa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan_final`
--

CREATE TABLE `pekerjaan_final` (
  `id` int(11) NOT NULL,
  `id_pekerjaan` varchar(100) DEFAULT NULL,
  `pegawai` varchar(100) NOT NULL,
  `pengawas` varchar(100) DEFAULT NULL,
  `tanggal` varchar(100) DEFAULT NULL,
  `id_kontraktor` varchar(100) DEFAULT NULL,
  `plan_target` varchar(100) DEFAULT NULL,
  `actual_target` varchar(100) DEFAULT NULL,
  `jam_mulai` varchar(100) DEFAULT NULL,
  `jam_selesai` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pekerjaan_final`
--
ALTER TABLE `pekerjaan_final`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
