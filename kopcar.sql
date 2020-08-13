-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Agu 2020 pada 07.31
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kopcar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bagian`
--

CREATE TABLE `bagian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nm_bagian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bagian`
--

INSERT INTO `bagian` (`id`, `nm_bagian`, `created_at`, `updated_at`) VALUES
(2, 'Sekretaris besar', '2020-08-11 22:47:59', '2020-08-11 22:52:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_pinjaman`
--

CREATE TABLE `jenis_pinjaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nm_pinjaman` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bunga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenis_pinjaman`
--

INSERT INTO `jenis_pinjaman` (`id`, `nm_pinjaman`, `bunga`, `created_at`, `updated_at`) VALUES
(2, 'Pinjaman keren', '50%', '2020-08-11 04:29:34', '2020-08-11 04:29:34'),
(3, 'Pinjaman bagus', '20%', '2020-08-11 04:29:50', '2020-08-11 04:30:34'),
(4, 'Pinjaman kasar', '90%', '2020-08-11 04:30:10', '2020-08-11 04:30:10'),
(5, 'pinjaman terjangkau sekali', '0%', '2020-08-11 04:30:59', '2020-08-11 04:30:59'),
(6, 'Pinjaman murah', '40%', '2020-08-11 04:31:34', '2020-08-11 04:31:34'),
(7, 'Simpanan berjangka', '20%', '2020-08-12 04:53:07', '2020-08-12 04:53:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_simpanan`
--

CREATE TABLE `jenis_simpanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nm_simpanan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bunga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenis_simpanan`
--

INSERT INTO `jenis_simpanan` (`id`, `nm_simpanan`, `bunga`, `created_at`, `updated_at`) VALUES
(3, 'Simpanan besar', '20%', '2020-08-11 22:15:15', '2020-08-11 22:15:15'),
(4, 'Simpanan lonte', '40%', '2020-08-11 22:18:58', '2020-08-11 22:18:58');

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
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2020_08_05_152336_create_jenis_pinjamen_table', 1),
(8, '2020_08_05_152403_create_nasabahs_table', 1),
(9, '2020_08_05_152436_create_jenis_simpanans_table', 1),
(10, '2020_08_11_053733_create_simpanans_table', 2),
(11, '2020_08_11_055201_create_pinjamen_table', 3),
(12, '2020_08_11_063802_create_simpanan_transaksis_table', 4),
(13, '2020_08_11_064807_create_pinjaman_setorans_table', 5),
(14, '2020_08_11_070815_create_bagians_table', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nasabah`
--

CREATE TABLE `nasabah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nm_nasabah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_kawin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pasangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_pekerjaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nasabah`
--

INSERT INTO `nasabah` (`id`, `nm_nasabah`, `kelamin`, `agama`, `tanggal_lahir`, `tempat_lahir`, `alamat`, `no_telepon`, `foto`, `status_kawin`, `nama_pasangan`, `jenis_pekerjaan`, `created_at`, `updated_at`) VALUES
(2, 'Ricky', 'laki-laki', 'Kristen', '2020-08-11', 'Batam', 'Medan', '0892423', 'assets/covers/1vPieotQx8HdJrIUG0Q4X8xXyDJAElrcR4FdQxKr.jpeg', 'Menikah', 'si cantik', 'Sekretaris', '2020-08-11 18:49:44', '2020-08-11 18:49:44');

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
-- Struktur dari tabel `pinjaman`
--

CREATE TABLE `pinjaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl_pinjaman` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_pinjaman_id` bigint(20) UNSIGNED NOT NULL,
  `nasabah_id` bigint(20) UNSIGNED NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lama_pinjaman` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `besar_pinjaman` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angsuran_pokok` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angsuran_bunga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bunga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `administrasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pinjaman`
--

INSERT INTO `pinjaman` (`id`, `tgl_pinjaman`, `jenis_pinjaman_id`, `nasabah_id`, `keterangan`, `lama_pinjaman`, `besar_pinjaman`, `angsuran_pokok`, `angsuran_bunga`, `bunga`, `administrasi`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(2, '2020-08-13', 3, 2, 'mantap', '2 hari', 'Rp. 50.000,-', 'Rp. 30.000,-', 'Rp. 20.000,-', '3%', 'Rp. 1000,-', 'Dibayar', 1, '2020-08-12 08:26:41', '2020-08-12 08:26:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjaman_setoran`
--

CREATE TABLE `pinjaman_setoran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl_setoran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinjaman_id` bigint(20) UNSIGNED NOT NULL,
  `setoran_pokok` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `setoran_bunga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `denda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pinjaman_setoran`
--

INSERT INTO `pinjaman_setoran` (`id`, `tgl_setoran`, `pinjaman_id`, `setoran_pokok`, `setoran_bunga`, `denda`, `user_id`, `created_at`, `updated_at`) VALUES
(2, '2020-08-11', 2, 'Rp. 40.000,-', 'Rp. 30.000,-', 'Rp. 2.000,-', 1, '2020-08-12 18:20:49', '2020-08-12 18:34:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpanan`
--

CREATE TABLE `simpanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl_simpanan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nasabah_id` bigint(20) UNSIGNED NOT NULL,
  `jenis_simpanan_id` bigint(20) UNSIGNED NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `simpanan`
--

INSERT INTO `simpanan` (`id`, `tgl_simpanan`, `nasabah_id`, `jenis_simpanan_id`, `keterangan`, `user_id`, `created_at`, `updated_at`) VALUES
(2, '2020-08-12', 2, 3, 'Bagus sangat', 1, '2020-08-12 19:47:27', '2020-08-12 19:58:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpanan_transaksi`
--

CREATE TABLE `simpanan_transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl_transaksi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `simpanan_id` bigint(20) UNSIGNED NOT NULL,
  `debit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kredit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelamin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `no_telepon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `bagian_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `nip`, `kelamin`, `agama`, `tanggal_lahir`, `tempat_lahir`, `alamat`, `no_telepon`, `foto`, `level`, `bagian_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Febri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'febri@gmail.com', NULL, '$2y$10$V.kaMzjwR/gErNWdssFoGewfYc9byq65NeAeCkOrQhDj3zTobrAfG', NULL, '2020-08-12 04:30:03', '2020-08-12 04:30:03');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bagian`
--
ALTER TABLE `bagian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_pinjaman`
--
ALTER TABLE `jenis_pinjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_simpanan`
--
ALTER TABLE `jenis_simpanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nasabah`
--
ALTER TABLE `nasabah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pinjaman_jenis_pinjaman_id_foreign` (`jenis_pinjaman_id`),
  ADD KEY `pinjaman_nasabah_id_foreign` (`nasabah_id`),
  ADD KEY `pinjaman_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `pinjaman_setoran`
--
ALTER TABLE `pinjaman_setoran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pinjaman_setoran_pinjaman_id_foreign` (`pinjaman_id`),
  ADD KEY `pinjaman_setoran_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `simpanan`
--
ALTER TABLE `simpanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `simpanan_nasabah_id_foreign` (`nasabah_id`),
  ADD KEY `simpanan_jenis_simpanan_id_foreign` (`jenis_simpanan_id`),
  ADD KEY `simpanan_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `simpanan_transaksi`
--
ALTER TABLE `simpanan_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `simpanan_transaksi_simpanan_id_foreign` (`simpanan_id`),
  ADD KEY `simpanan_transaksi_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `bagian_id` (`bagian_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bagian`
--
ALTER TABLE `bagian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jenis_pinjaman`
--
ALTER TABLE `jenis_pinjaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `jenis_simpanan`
--
ALTER TABLE `jenis_simpanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `nasabah`
--
ALTER TABLE `nasabah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pinjaman`
--
ALTER TABLE `pinjaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pinjaman_setoran`
--
ALTER TABLE `pinjaman_setoran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `simpanan`
--
ALTER TABLE `simpanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `simpanan_transaksi`
--
ALTER TABLE `simpanan_transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD CONSTRAINT `pinjaman_jenis_pinjaman_id_foreign` FOREIGN KEY (`jenis_pinjaman_id`) REFERENCES `jenis_pinjaman` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pinjaman_nasabah_id_foreign` FOREIGN KEY (`nasabah_id`) REFERENCES `nasabah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pinjaman_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pinjaman_setoran`
--
ALTER TABLE `pinjaman_setoran`
  ADD CONSTRAINT `pinjaman_setoran_pinjaman_id_foreign` FOREIGN KEY (`pinjaman_id`) REFERENCES `pinjaman` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pinjaman_setoran_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `simpanan`
--
ALTER TABLE `simpanan`
  ADD CONSTRAINT `simpanan_jenis_simpanan_id_foreign` FOREIGN KEY (`jenis_simpanan_id`) REFERENCES `jenis_simpanan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `simpanan_nasabah_id_foreign` FOREIGN KEY (`nasabah_id`) REFERENCES `nasabah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `simpanan_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `simpanan_transaksi`
--
ALTER TABLE `simpanan_transaksi`
  ADD CONSTRAINT `simpanan_transaksi_simpanan_id_foreign` FOREIGN KEY (`simpanan_id`) REFERENCES `simpanan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `simpanan_transaksi_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`bagian_id`) REFERENCES `bagian` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
