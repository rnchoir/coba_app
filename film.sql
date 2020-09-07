-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jul 2020 pada 23.48
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `film`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `film` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `kursi` int(11) DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id`, `film`, `user`, `kursi`, `harga`, `status`, `updated_at`) VALUES
(17, 3, 1, NULL, 3, 1, '2020-07-26 18:23:26'),
(18, 3, 1, NULL, 3, 1, '2020-07-26 16:54:33'),
(19, 4, 1, NULL, 4, 1, '2020-07-26 20:04:25'),
(20, 4, 3, NULL, 4, NULL, NULL),
(21, 4, 1, NULL, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `film`
--

CREATE TABLE `film` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul_film` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_film` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reting` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal_rilis` date NOT NULL,
  `jadwal_tayang` date NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiket` int(11) DEFAULT NULL,
  `harga_tiket` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`id`, `judul_film`, `deskripsi_film`, `kategori`, `reting`, `jadwal_rilis`, `jadwal_tayang`, `foto`, `tiket`, `harga_tiket`, `created_at`, `updated_at`) VALUES
(3, 'Milea: Suara dari Dilan', 'Tidak ada kisah yang lebih Indah dari kisah cinta di SMA.Sama halnya dengan kisah cinta Dilan dan Milea.Dari yang awalnya benci hingga saling mencintai. Dari yang awalnya manis hingga menjadi rumit.Menjelang reuni akbar,Dilan memutuskan untuk menceritakan', 'Romance', '95%', '2020-02-13', '2020-02-20', 'download (19).jpg', 20, '15000.00', '2020-07-13 02:25:58', '2020-07-13 02:25:58'),
(4, 'Exit', 'Action disaster dari produser THE BATTLESHIP ISLAND “EXIT” bercerita tentang Yong-nam (CHO Jung-seok) salah satu pemanjat tebing terbaik di perguruan tingginya namun tidak memiliki banyak keberuntungan di tempat lain setelah lulus. Setelah gagal mendapatk', 'Action', '94%', '2019-08-21', '2019-08-28', 'images (1).jpg', 0, '15000.00', '2020-07-12 12:27:15', '2020-07-12 12:27:15'),
(5, 'Kamen Rider Reiwa: The First Generation', '12 tahun silam, peristiwa Daybreak Town mengubah dunia dan mendorong kemajuan yang mengarah pada pengembangan kecerdasan buatan', 'Action', '95%', '2020-05-28', '2020-06-04', 'download.jpg', 10, '15000.00', '2020-07-13 02:26:05', '2020-07-13 02:26:05'),
(7, 'Kamen Rider Reiwa: The First Generation 1', 'ggfgfjhgjhghgghghjgjgjj', 'Comedy', '95%', '2020-07-07', '2020-07-27', 'download (17).jpg', NULL, NULL, '2020-07-26 20:24:33', '2020-07-26 20:24:33'),
(8, 'Kamen Rider Reiwa: The First Generation', 'jhjhjhkjhkhkjhjhjhkjhkjhkjhkjhkjhhjhkhk', 'Comedy', 'kpkpkpk', '2020-07-14', '2020-07-14', 'download (17).jpg', NULL, NULL, '2020-07-26 20:30:21', '2020-07-26 20:30:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Comedy'),
(2, 'Action'),
(3, 'Romance');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kursi`
--

CREATE TABLE `kursi` (
  `id` int(11) NOT NULL,
  `kursi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kursi`
--

INSERT INTO `kursi` (`id`, `kursi`) VALUES
(1, '1A'),
(2, '2A'),
(3, '3A'),
(4, '4A'),
(5, '5A'),
(6, '6A'),
(7, '1B'),
(8, '2B'),
(9, '3B'),
(10, '4B'),
(11, '5B'),
(12, '6B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_05_01_144803_create_user_table', 1),
(2, '2020_05_01_145222_create_film_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 2),
(4, '2020_06_13_100510_create_users_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rule` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `rule`, `created_at`, `updated_at`) VALUES
(1, 'ahmad', 'ahmad@gmail.com', NULL, '$2y$10$d11tBnsm1ZwFYim7p19xX.ERJ9EfNefte6tTFkx5eX0o3NFc5subm', NULL, 1, '2020-07-11 23:20:53', '2020-07-11 23:20:53'),
(2, 'rahman', 'rahman@gmail.com', NULL, '$2y$10$d11tBnsm1ZwFYim7p19xX.ERJ9EfNefte6tTFkx5eX0o3NFc5subm', NULL, 0, NULL, NULL),
(3, 'test', 'test@gmail.com', NULL, '$2y$10$PZLmv2fQSJ1J4MQvGuFZGOXkjbn5pkDJclJtPbFrF7XPx18EstPhW', NULL, 0, '2020-07-12 22:03:47', '2020-07-12 22:03:47'),
(4, 'test1', 'test1@gmail.com', NULL, '$2y$10$fRypGsa7/AaOVgx7X4MHKOxQpFasY1lVrO6d6EHY..jsiO.XxAmMO', NULL, 0, '2020-07-12 22:05:33', '2020-07-12 22:05:33'),
(6, 'ahmad choirul', 'test2@gmail.com', NULL, '$2y$10$cWosm1FdcDdC3W83J8BqgOlDgbUo24OFsQB/B5a0ZzBSXWgd1I6gK', NULL, 0, '2020-07-26 13:48:49', '2020-07-26 13:48:49'),
(9, 'ahmad choirul', 'test4@gmail.com', NULL, '$2y$10$wayuBIJV1eAUO3qqiqwSQ.U3ezjLt.DA47ZiChGKfFCPQyCuhtaKm', NULL, 0, '2020-07-26 13:56:55', '2020-07-26 13:56:55');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kursi` (`kursi`);

--
-- Indeks untuk tabel `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `kursi`
--
ALTER TABLE `kursi`
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
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `user_email_unique` (`email`);

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
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `film`
--
ALTER TABLE `film`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kursi`
--
ALTER TABLE `kursi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
