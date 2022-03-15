-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2021 pada 10.35
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp_pertanian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelembapan_tanah`
--

CREATE TABLE `kelembapan_tanah` (
  `id` int(11) NOT NULL,
  `siraman_air` varchar(128) NOT NULL,
  `nilai_eksas` varchar(128) NOT NULL,
  `nilai_perkiraan` varchar(128) NOT NULL,
  `galat` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelembapan_tanah`
--

INSERT INTO `kelembapan_tanah` (`id`, `siraman_air`, `nilai_eksas`, `nilai_perkiraan`, `galat`) VALUES
(3, '0', '8', '6', '25.0'),
(4, '10', '10', '8', '20.0'),
(5, '20', '14', '13', '7.1'),
(6, '30', '17', '19', '11.8'),
(7, '40', '23', '24', '4.3'),
(8, '50', '29', '30', '3.4'),
(9, '60', '36', '38', '5.6'),
(10, '70', '47', '49', '4.3'),
(11, '80', '54', '57', '5.6'),
(12, '90', '62', '65', '4.8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petani`
--

CREATE TABLE `petani` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `no_tlp` int(30) NOT NULL,
  `email` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petani`
--

INSERT INTO `petani` (`id`, `nama`, `no_tlp`, `email`, `username`, `password`) VALUES
(1, 'rudi sitohang', 822888838, 'rudi12@gmail.com', 'rudi sitohang', '123'),
(2, 'rifki suhanda', 2147483647, 'rifki12@gmail.com', 'rifki suhanda', '122');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suhu`
--

CREATE TABLE `suhu` (
  `id` int(11) NOT NULL,
  `suhu` varchar(128) NOT NULL,
  `hasil_akhir_alat_penulis` varchar(128) NOT NULL,
  `hasil_akhir_alat_pembanding` varchar(128) NOT NULL,
  `error` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suhu`
--

INSERT INTO `suhu` (`id`, `suhu`, `hasil_akhir_alat_penulis`, `hasil_akhir_alat_pembanding`, `error`) VALUES
(4, 'Suhu Rendah', '22.81', '22.6', '0.9'),
(5, 'Suhu Sedang', '27.07 ', '22.56', '1.8'),
(6, 'suhu tinggi', '43.09', '43.59', '1.1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `gambar`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'wendy turnip', 'ccesit6@gmail.com', 'user.png', '$2y$10$JDJuL4N1Jr3Gfcz1bpgQv.phGtKFalfzV/C5XaPIP7hI85Cv6QNrS', 1, 1, 1619269858),
(4, 'juhjinturnip', 'juhjin12@gmail.com', 'admin.jpg', '$2y$10$RNGh/KcOFoyWHy1KG5DrK.VdgJ7pDyfmvS.yuh3DOvWlCopqyOdZC', 2, 1, 1620048434);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(5, 2, 3),
(6, 1, 4),
(7, 2, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'menu\r\n'),
(4, 'charts\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'Admin', 'fas fa-fw fa-tachometer-alt\r\n', 1),
(2, 2, 'my profile', 'user', 'fas fa-users', 1),
(3, 3, 'temperatur suhu', 'menu\r\n', 'fas fa-thermometer-full', 1),
(4, 1, 'role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(5, 3, 'kelembapan tanah', 'menu/kelembapan\r\n', 'fas fa-fw fa-thermometer-empty', 1),
(6, 4, 'charts temperatur', 'charts', 'far fa-fw fa-chart-bar', 1),
(7, 4, 'charts kelembapan tanah', 'charts_kelembapan', 'fas fa-fw fa-chart-bar', 1),
(8, 2, 'change password', 'user/changepassword', 'fas fa-fw fa-key', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelembapan_tanah`
--
ALTER TABLE `kelembapan_tanah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `petani`
--
ALTER TABLE `petani`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suhu`
--
ALTER TABLE `suhu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kelembapan_tanah`
--
ALTER TABLE `kelembapan_tanah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `petani`
--
ALTER TABLE `petani`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `suhu`
--
ALTER TABLE `suhu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
