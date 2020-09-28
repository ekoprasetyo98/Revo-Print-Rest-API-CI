-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Sep 2020 pada 10.54
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `revodb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) NOT NULL,
  `nama_kategori` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'stiker'),
(2, 'stiker2'),
(4, 'cetak kilat'),
(6, 'Cetak MMT'),
(7, 'Cetak MMT'),
(8, 'Cetak MMT'),
(14, 'aaa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(100) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `harga` varchar(200) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `gambar1` text NOT NULL,
  `gambar2` text NOT NULL,
  `gambar3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `kategori_id`, `nama`, `harga`, `deskripsi`, `keterangan`, `jenis`, `gambar1`, `gambar2`, `gambar3`) VALUES
(2, 0, 'bblasblasb', 'lanslans', 'nlsanslnasl', 'ksaksj', '', '', '', ''),
(3, 1, 'stiker3', '13.000', 'blabala', 'kajaksj', 'askksjkasjaks', 'brosur1.png', 'brosur1.png', 'brosur1.png'),
(5, 0, 'stiker3', 'jhsjahjahs', 'jashjahs', 'ajhsjahs', 'blalala', '', '', ''),
(6, 2, 'MMTt', 'dsdsd', 'blablab', 'keterautngan', 'blablaut', '', '', ''),
(7, 2, 'MMTt2', 'dsdsd', 'blablab', 'keterautngan', 'blablaut', '', '', ''),
(8, 2, 'MMT5', 'dsdsd', 'blablab', 'keterautngan', 'blablaut', '', '', ''),
(9, 2, 'MMT6', 'dsdsd', 'blablab', 'keterautngan', 'blablaut', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
