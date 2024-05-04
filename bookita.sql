-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 04, 2024 at 05:14 AM
-- Server version: 8.0.28
-- PHP Version: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookita`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukus`
--

CREATE TABLE `bukus` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinopsis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bukus`
--

INSERT INTO `bukus` (`id`, `user_id`, `judul`, `nama`, `kategori`, `sinopsis`, `isi`, `gambar`, `published_at`, `created_at`, `updated_at`) VALUES
(15, 2, 'Adventure Of Winton Almundarisna', 'Winton Admin', 'cerpen', 'Mengisahkan perjalanan seorang mahasiswa UNINDRA bernama Winton Almundarisna dalam menempuh perjalanannya mencari pedang legendaris di Pulau Tiki', 'Pada suatu hari, Winton Almundarisna melewati sebuah lembah naga, kemudian dia masuk kedalam gua yang amat besar. Winton berfikir bahwa naga tersebut pasti tertidur di dalam gua ini, namun perlahan pintu gua mulai tertutup, ternyata Winton sejak awal bukan masuk kedalam gua, melainkan masuk ke dalam mulut naga.', 'cerdas-1714363788.jpg', NULL, '2024-04-28 21:09:48', '2024-04-28 21:09:48'),
(16, 2, 'Kucing Peramal', 'Winton Admin', 'novel', 'Mengisahkan tentang kucing yang bisa menggunakan sihir, namun belum banyak manusia yang mengetahuinya, suatu hari rahasia tersebut terbongkar, bagaimanakah nasib kucing penyihir tersebut?', 'Di sebuah desa kecil di kaki Gunung Agung, tinggallah seorang gadis bernama Risa. Sejak kecil, Risa memiliki bakat melukis yang luar biasa. Lukisan-lukisannya penuh dengan warna warna cerah dan imajinasi yang liar. Namun, Risa selalu merasa ragu dengan kemampuannya. Ia tak yakin apakah bisa menjadi seniman profesional. Suatu hari, saat Risa sedang melukis di tepi sawah, seekor kucing liar berbulu oren mendekatinya. Kucing itu duduk di pangkuan Risa dan menatapnya dengan mata kuning keemasan yang penuh misteri. Risa merasa ada keanehan pada kucing itu. Seolah-olah kucing itu bisa membaca pikirannya. Sejak saat itu, kucing oren itu selalu muncul di sekitar Risa. Kadang di teras rumah, saat Risa melukis, bahkan saat Risa mengikuti pameran seni. Tingkah laku kucing itu pun aneh. Ia sering duduk di depan lukisan Risa, seolah-olah sedang menilainya. Risa yang penasaran mulai memperhatikan tingkah laku kucing itu. Ia perhatikan saat kucing itu duduk di depan lukisan abstrak, Risa mendapatkan ide baru untuk melukis dengan gaya yang lebih berani. Saat kucing itu menggosokkan kepalanya pada lukisan realis, Risa terinspirasi untuk melukis potret orang-orang di desanya dengan lebih detail. Risa pun mulai mengikuti \"saran\" dari si kucing oren. Ia mencoba melukis dengan berbagai gaya dan tema baru. Hasilnya, lukisan-lukisan Risa menjadi lebih menarik dan penuh makna. Lukisan-lukisannya pun mulai dihargai oleh para pencinta seni. Berita tentang bakat Risa menyebar ke seluruh pelosok Bali. Banyak galeri seni yang ingin memamerkan lukisannya. Risa pun menjadi seniman terkenal yang karyanya digemari banyak orang. Risa tak pernah lupa dengan jasa si kucing oren. Ia mencarinya ke seluruh desa, namun kucing itu tak pernah terlihat lagi. Risa percaya bahwa kucing itu adalah malaikat pelindungnya, utusan dari alam semesta yang membantunya menemukan bakat dan jalan hidupnya. Risa selalu bersyukur atas kehadiran kucing oren itu dalam hidupnya, dan kisahnya menjadi legenda di desa itu tentang \"Kucing Peramal\" yang membawa keberuntungan.&nbsp;', 'kucing-peramal-1714625050.jpg', NULL, '2024-05-01 21:44:10', '2024-05-01 21:44:10'),
(17, 2, 'Brewok Man', 'Winton Admin', 'cerpen', 'Kisah om-om brewokan yang menjadi raja geng jalanan di kota Mumbay', 'Pada suatu hari, om Badru dari kota Mumbay sedang berjalan-jalan, kemudian dia bertemu dengan penjahat yang sedang mencuri tas seorang nenek-nenek, lalu dengan jiwa pahlawannya, om Badru pun segera menangkap pencuri tersebut, yang ternyata pencurinya adalah adiknya sendiri.', 'brewok-1714660024.png', NULL, '2024-05-02 07:27:04', '2024-05-02 07:27:04'),
(22, 2, 'axd', '', 'ensiklopedia', 'axd', 'axd', 'hasil1-1714723900.PNG', NULL, '2024-05-03 01:06:14', '2024-05-03 01:11:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_13_023258_create_bukus_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'winton@gmail.com', 'wintonalmundarisna@gmail.com', NULL, '$2y$12$DzsILS6S2tRY/6p73JFkSuk7NAnU6/0eHPou5gP/o0L5p5I6Z5yXG', NULL, '2024-04-10 23:11:49', '2024-04-10 23:11:49'),
(2, 'Winton Admin', 'winton@gmail.com', NULL, '$2y$12$gmCaM5w3pl0XbGtEpDX8Yuq0WswPi0fiK1.GrLp7CsUX.NiPNoMmW', NULL, '2024-04-12 19:20:32', '2024-04-12 19:20:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bukus_judul_unique` (`judul`),
  ADD UNIQUE KEY `bukus_gambar_unique` (`gambar`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
