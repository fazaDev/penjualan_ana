-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jan 2020 pada 19.34
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_8020170094`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `id` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `harga_jual` int(20) NOT NULL,
  `stok` int(10) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`id`, `nama`, `kategori`, `satuan`, `harga_jual`, `stok`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'sequi', '2', 'et', 59521, 5, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:28', '2020-01-19 18:29:28'),
(2, 'velit', '2', 'natus', 9139, 1, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:28', '2020-01-19 18:29:28'),
(3, 'facilis', '1', 'dolores', 39557, 2, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:28', '2020-01-19 18:29:28'),
(4, 'natus', '1', 'sit', 5668, 8, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:28', '2020-01-19 18:29:28'),
(5, 'iste', '1', 'alias', 95837, 7, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:28', '2020-01-19 18:29:28'),
(6, 'voluptas', '2', 'velit', 28469, 9, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:28', '2020-01-19 18:29:28'),
(7, 'laudantium', '1', 'ut', 59885, 8, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:28', '2020-01-19 18:29:28'),
(8, 'illum', '1', 'recusandae', 86366, 9, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:28', '2020-01-19 18:29:28'),
(9, 'ex', '2', 'dolor', 81312, 6, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:28', '2020-01-19 18:29:28'),
(10, 'a', '1', 'unde', 26258, 6, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:29', '2020-01-19 18:29:29'),
(11, 'consequuntur', '1', 'reiciendis', 13996, 0, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:29', '2020-01-19 18:29:29'),
(12, 'harum', '1', 'eos', 27372, 2, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:29', '2020-01-19 18:29:29'),
(13, 'odio', '1', 'nihil', 21654, 5, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:29', '2020-01-19 18:29:29'),
(14, 'ut', '2', 'corporis', 11894, 2, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:29', '2020-01-19 18:29:29'),
(15, 'voluptatem', '1', 'deserunt', 53257, 9, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:29', '2020-01-19 18:29:29'),
(16, 'ut', '2', 'iure', 21013, 5, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:29', '2020-01-19 18:29:29'),
(17, 'eum', '1', 'aut', 18978, 2, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:29', '2020-01-19 18:29:29'),
(18, 'sed', '2', 'qui', 87186, 6, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:29', '2020-01-19 18:29:29'),
(19, 'est', '2', 'eos', 62760, 1, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:29', '2020-01-19 18:29:29'),
(20, 'ut', '2', 'autem', 96904, 1, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:29', '2020-01-19 18:29:29'),
(21, 'asperiores', '2', 'temporibus', 14959, 1, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:29', '2020-01-19 18:29:29'),
(22, 'aut', '2', 'quia', 30734, 4, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:29', '2020-01-19 18:29:29'),
(23, 'sint', '2', 'tenetur', 42554, 8, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:29', '2020-01-19 18:29:29'),
(24, 'omnis', '2', 'totam', 46611, 7, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:29', '2020-01-19 18:29:29'),
(25, 'ut', '1', 'asperiores', 7014, 6, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:29', '2020-01-19 18:29:29'),
(26, 'repellendus', '2', 'in', 26246, 5, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:29', '2020-01-19 18:29:29'),
(27, 'non', '1', 'sed', 78111, 0, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:29', '2020-01-19 18:29:29'),
(28, 'ut', '1', 'maxime', 51538, 2, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:29', '2020-01-19 18:29:29'),
(29, 'dolor', '2', 'harum', 70987, 0, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:29', '2020-01-19 18:29:29'),
(30, 'quibusdam', '2', 'qui', 7716, 9, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:29', '2020-01-19 18:29:29'),
(31, 'assumenda', '1', 'est', 69318, 8, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:29', '2020-01-19 18:29:29'),
(32, 'expedita', '1', 'nobis', 62902, 4, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:29', '2020-01-19 18:29:29'),
(33, 'ea', '2', 'quod', 16890, 3, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:30', '2020-01-19 18:29:30'),
(34, 'rem', '2', 'eum', 12979, 7, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:30', '2020-01-19 18:29:30'),
(35, 'molestiae', '1', 'quis', 35315, 7, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:30', '2020-01-19 18:29:30'),
(36, 'modi', '2', 'mollitia', 59694, 7, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:30', '2020-01-19 18:29:30'),
(37, 'molestiae', '1', 'et', 38619, 6, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:30', '2020-01-19 18:29:30'),
(38, 'odio', '2', 'est', 3371, 8, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:30', '2020-01-19 18:29:30'),
(39, 'ex', '1', 'laboriosam', 91570, 9, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:30', '2020-01-19 18:29:30'),
(40, 'consequatur', '1', 'molestiae', 19017, 9, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:30', '2020-01-19 18:29:30'),
(41, 'aliquam', '2', 'eaque', 55282, 9, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:30', '2020-01-19 18:29:30'),
(42, 'corrupti', '1', 'aut', 86077, 1, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:30', '2020-01-19 18:29:30'),
(43, 'nemo', '1', 'tempora', 23122, 5, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:30', '2020-01-19 18:29:30'),
(44, 'nemo', '1', 'molestiae', 68758, 1, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:30', '2020-01-19 18:29:30'),
(45, 'vero', '2', 'eveniet', 28735, 7, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:30', '2020-01-19 18:29:30'),
(46, 'officiis', '1', 'rerum', 26650, 1, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:30', '2020-01-19 18:29:30'),
(47, 'minima', '2', 'asperiores', 19954, 9, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:30', '2020-01-19 18:29:30'),
(48, 'ex', '1', 'qui', 29902, 1, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:30', '2020-01-19 18:29:30'),
(49, 'aspernatur', '1', 'aut', 8538, 5, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:30', '2020-01-19 18:29:30'),
(50, 'magnam', '1', 'temporibus', 82808, 1, 'public/gambar/zgNgYMg22BAPEm4GNFqhiPB2U0aRBW24eNcmuyCt.jpeg', '2020-01-19 18:29:30', '2020-01-19 18:29:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukus`
--

CREATE TABLE `bukus` (
  `id` int(25) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bukus`
--

INSERT INTO `bukus` (`id`, `judul`, `tahun_terbit`, `pengarang`, `created_at`, `updated_at`) VALUES
(1, 'The Lost Symbol', 2009, 'Dan Brown', '2020-01-19 03:16:36', '2020-01-19 03:16:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama_barang`, `created_at`, `updated_at`) VALUES
(1, 'Makanan', '2020-01-19 03:17:19', '2020-01-19 03:17:19'),
(2, 'Alat Tulis Kantor', '2020-01-19 18:01:21', '2020-01-19 18:01:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggans`
--

CREATE TABLE `pelanggans` (
  `id` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggans`
--

INSERT INTO `pelanggans` (`id`, `nama`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Ana', 'Mayang Mangurai', '2020-01-12 15:49:00', '2020-01-12 15:50:27'),
(2, 'Jeno', 'Seoul', '2020-01-12 15:50:16', '2020-01-12 15:50:16'),
(3, 'ENDI ISWANTO', 'lorong penggadaian mayang mangurai jambi no 25 B', '2020-01-19 16:16:58', '2020-01-19 16:16:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelians`
--

CREATE TABLE `pembelians` (
  `id` int(20) NOT NULL,
  `barang_id` int(20) NOT NULL,
  `nama_pemasok` varchar(255) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `harga` int(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelians`
--

INSERT INTO `pembelians` (`id`, `barang_id`, `nama_pemasok`, `jumlah`, `harga`, `created_at`, `updated_at`) VALUES
(1, 1, 'Xiaojun', 2, 5000, '2020-01-12 16:51:13', '2020-01-12 16:51:13'),
(2, 1, 'Xiaojun', 12, 5000, '2020-01-19 17:23:15', '2020-01-19 17:23:15'),
(3, 2, 'wers', 22, 5000, '2020-01-19 17:23:45', '2020-01-19 17:23:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualans`
--

CREATE TABLE `penjualans` (
  `id` int(20) NOT NULL,
  `pelanggan_id` int(20) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjualans`
--

INSERT INTO `penjualans` (`id`, `pelanggan_id`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lunas', '2020-01-12 16:54:30', '2020-01-12 16:54:30'),
(2, 2, 'Lunas', '2020-01-12 16:55:24', '2020-01-12 16:55:24'),
(3, 1, 'Lunas', '2020-01-16 17:00:32', '2020-01-12 17:00:32'),
(4, 2, 'Lunas', '2020-01-19 22:37:59', '2020-01-19 22:37:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan_details`
--

CREATE TABLE `penjualan_details` (
  `id` int(20) NOT NULL,
  `penjualan_id` int(20) NOT NULL,
  `barang_id` int(20) NOT NULL,
  `harga` int(20) NOT NULL,
  `jumlah` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjualan_details`
--

INSERT INTO `penjualan_details` (`id`, `penjualan_id`, `barang_id`, `harga`, `jumlah`) VALUES
(1, 1, 1, 5000, 2),
(4, 3, 1, 5000, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ana', 'triyaa04@gmail.com', '$2y$10$.R0QcRi/RqO5Gzy5h2dQje9mv55FJ0zrvx5uYp59vhlqbNaOkZTdC', NULL, '2020-01-12 08:21:01', '2020-01-12 08:21:01'),
(2, 'Triya Apriana', 'triyaapriana04@gmail.com', '$2y$10$/t/rWdTdt8FrRXSUZbzb1O5p3xsnqcenuw.FqEbbDz.BnTSTN.IxS', 'IVWA423XNzQW9FFq8PVO2VoKKtl59R4eKMzgxdHkO86vFViz3G7Ape0HIdMz', '2020-01-18 19:09:56', '2020-01-18 19:09:56'),
(3, 'Endi Iswanto', 'endy.lasax@gmail.com', '$2y$10$DxCsdSmykKoPqbPdOfdRkepWNd/aBnrPsz6VITJf53p3i5ohi3q/e', NULL, '2020-01-19 11:00:21', '2020-01-19 11:00:21');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembelians`
--
ALTER TABLE `pembelians`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penjualans`
--
ALTER TABLE `penjualans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penjualan_details`
--
ALTER TABLE `penjualan_details`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pelanggans`
--
ALTER TABLE `pelanggans`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pembelians`
--
ALTER TABLE `pembelians`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `penjualans`
--
ALTER TABLE `penjualans`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `penjualan_details`
--
ALTER TABLE `penjualan_details`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
