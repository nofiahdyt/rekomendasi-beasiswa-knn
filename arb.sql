-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Nov 2022 pada 12.19
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(10, '2014_10_12_000000_create_users_table', 1),
(19, '2014_10_12_100000_create_password_resets_table', 2),
(20, '2019_08_19_000000_create_failed_jobs_table', 2),
(21, '2022_10_20_092238_create_tb_mahasiswa_table', 2),
(22, '2022_10_20_092259_create_tb_mk_table', 2),
(23, '2022_10_20_092320_create_tb_nilai_table', 2),
(24, '2022_10_20_092347_create_tb_rekomendasi_table', 2),
(25, '2022_10_20_092407_create_tb_training_table', 2),
(26, '2022_11_15_081619_create_tb_testing_table', 2),
(27, '2022_11_17_103835_create_tb_kuota_table', 2);

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
-- Struktur dari tabel `tb_kuota`
--

CREATE TABLE `tb_kuota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_beasiswa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kuota` int(11) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `syarat` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npm` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_perkawinan` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipk` double NOT NULL,
  `penghasilan` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id`, `created_at`, `updated_at`, `nama`, `npm`, `alamat`, `jk`, `tgl_lahir`, `tempat_lahir`, `semester`, `status_perkawinan`, `ipk`, `penghasilan`, `email`) VALUES
(7, '2022-11-22 21:55:12', '2022-11-22 21:55:12', 'Dea Auliyana', '1918001', 'jshvb', 'Perempuan', '2022-11-09', 'Dasan Pungkang', '5', 'Sudah', 2.9, 23000000, 'jagad@emonev.com'),
(8, '2022-11-22 22:45:23', '2022-11-22 22:45:23', 'Citasu Rental Kamera', '1918001', 'Malang', 'Perempuan', '2022-11-18', 'malang', '3', 'Sudah', 2.1, 2000000, 'admin@gmail.com'),
(9, '2022-11-23 00:08:27', '2022-11-23 00:08:27', 'Nofiaaa', '1', 'malang', 'Perempuan', '2022-11-21', 'malang', '9', 'Sudah', 1.5, 400000000, 'jagad@emonev.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mk`
--

CREATE TABLE `tb_mk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_mk` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_mk`
--

INSERT INTO `tb_mk` (`id`, `created_at`, `updated_at`, `nama_mk`, `prodi`, `sks`) VALUES
(1, '2022-11-20 08:57:43', '2022-11-20 08:57:43', 'PAI', 'MPI', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_mk` int(11) NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `nilai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_nilai`
--

INSERT INTO `tb_nilai` (`id`, `created_at`, `updated_at`, `id_mk`, `id_mhs`, `nilai`) VALUES
(1, '2022-11-20 09:29:29', '2022-11-20 09:30:13', 1, 3, '90');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekomendasi`
--

CREATE TABLE `tb_rekomendasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_mhs` int(11) NOT NULL,
  `ipk` double NOT NULL,
  `smt` int(11) NOT NULL,
  `penghasilan` int(11) NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_testing`
--

CREATE TABLE `tb_testing` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipk` double NOT NULL,
  `smt` int(11) NOT NULL,
  `penghasilan` int(11) NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_testing`
--

INSERT INTO `tb_testing` (`id`, `created_at`, `updated_at`, `nama`, `ipk`, `smt`, `penghasilan`, `status`, `label`) VALUES
(1, '2022-11-23 02:27:50', '2022-11-23 02:27:50', 'Nofiaaa', 1, 1, 1, 'Sudah', 'Y'),
(2, '2022-11-23 21:56:31', '2022-11-23 21:56:31', 'Dea Auliyana', 3, 1, 500000, 'Sudah', 'Y'),
(3, '2022-11-23 21:57:54', '2022-11-23 21:57:54', 'Citasu Rental Kamera Lombok', 2, 7, 30000000, 'Sudah', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_training`
--

CREATE TABLE `tb_training` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipk` double NOT NULL,
  `smt` int(11) NOT NULL,
  `penghasilan` int(11) NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasil` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_training`
--

INSERT INTO `tb_training` (`id`, `created_at`, `updated_at`, `nama`, `ipk`, `smt`, `penghasilan`, `status`, `label`, `hasil`) VALUES
(8, '2022-11-22 21:55:12', '2022-11-23 00:31:19', 'Dea Auliyana', 1, 3, 1, '1', '4.4721359549996', 'lulus'),
(9, '2022-11-22 22:45:23', '2022-11-23 00:31:19', 'Citasu Rental Kamera', 1, 4, 4, '1', '3.1622776601684', 'lulus'),
(10, '2022-11-23 00:08:27', '2022-11-23 00:31:19', 'Nofiaaa', 1, 1, 1, '1', '5.2915026221292', 'lulus');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nofia', 'admin@gmail.com', NULL, '$2y$10$D789QRctSwF8l999oVqe1eGZrGuof8VdSo79dGpq47OhsActu4kZi', 'FkGayeUqCG3JzXDDjg2f8DiR9fHhtwoU81p7jbkzeVZZ4zuOESY9Bx1l0ZPy', '2022-11-15 03:26:02', '2022-11-15 03:26:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indeks untuk tabel `tb_kuota`
--
ALTER TABLE `tb_kuota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mk`
--
ALTER TABLE `tb_mk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_rekomendasi`
--
ALTER TABLE `tb_rekomendasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_testing`
--
ALTER TABLE `tb_testing`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_training`
--
ALTER TABLE `tb_training`
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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tb_kuota`
--
ALTER TABLE `tb_kuota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_mk`
--
ALTER TABLE `tb_mk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_rekomendasi`
--
ALTER TABLE `tb_rekomendasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_testing`
--
ALTER TABLE `tb_testing`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_training`
--
ALTER TABLE `tb_training`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
