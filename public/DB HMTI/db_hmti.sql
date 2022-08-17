-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2022 at 02:47 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hmti`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Study Club', 'study-club', '2022-08-17 18:16:11', '2022-08-17 18:16:11'),
(2, 'Family Gathering', 'family-gathering', '2022-08-17 18:16:11', '2022-08-17 18:16:11'),
(3, 'Rapat', 'rapat', '2022-08-17 18:16:11', '2022-08-17 18:16:11'),
(4, 'Seminar', 'seminar', '2022-08-17 18:16:11', '2022-08-17 18:16:11'),
(5, 'Workshop', 'workshop', '2022-08-17 18:16:11', '2022-08-17 18:16:11'),
(6, 'Podcast', 'podcast', '2022-08-17 18:50:06', '2022-08-17 18:50:06');

-- --------------------------------------------------------

--
-- Table structure for table `divisis`
--

CREATE TABLE `divisis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisis`
--

INSERT INTO `divisis` (`id`, `name`, `slug`, `image`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Inti', 'inti', NULL, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, unde?', '2022-08-17 18:16:11', '2022-08-17 18:16:11'),
(2, 'Litbang', 'litbang', NULL, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, unde?', '2022-08-17 18:16:11', '2022-08-17 18:16:11'),
(3, 'Program', 'program', NULL, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, unde?', '2022-08-17 18:16:11', '2022-08-17 18:16:11'),
(4, 'Humas', 'humas', NULL, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, unde?', '2022-08-17 18:16:11', '2022-08-17 18:16:11'),
(5, 'Media', 'media', NULL, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, unde?', '2022-08-17 18:16:11', '2022-08-17 18:16:11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_05_085803_create_posts_table', 1),
(6, '2022_08_08_131441_create_categories_table', 1),
(7, '2022_08_15_054903_create_strukturs_table', 1),
(8, '2022_08_15_094646_create_divisis_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `link`, `slug`, `image`, `excerpt`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'Rapat Musyawarah Bersama', 'https://www.youtube.com/embed/uehf5EplrUs', 'rapat-musyawarah-bersama', 'post-images/B8QfR5GOGp5moeHdqD4KawItB1BNxKZxpNlr6d8Y.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sed. Facere ab atque molestiae fuga ipsam. Aut, quam suscipit, perspiciatis nobis, neque dicta et dolorum cum nam sint sed quidem. Totam...', '<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sed. Facere ab atque molestiae fuga ipsam. Aut, quam suscipit, perspiciatis nobis, neque dicta et dolorum cum nam sint sed quidem. Totam accusantium nisi, minima velit commodi eos esse doloribus tempora! Hic architecto temporibus iste illum, molestiae, explicabo quaerat quae eius officia asperiores provident repudiandae. Laboriosam adipisci velit a asperiores officiis, quo nobis beatae modi voluptatibus distinctio&nbsp;</div><div>&nbsp;</div><div>dolore doloremque, unde architecto? Eveniet tenetur aliquam sit, ullam in asperiores excepturi, pariatur repellat est accusamus qui quia laudantium? Illo omnis perspiciatis fuga fugiat odio voluptatibus perferendis? Nulla temporibus sed ea quaerat reiciendis nihil? Nulla, eum quis rerum doloribus laudantium labore ratione aliquam soluta numquam repudiandae,&nbsp;</div><div>&nbsp;</div><div>voluptatem repellendus dolore voluptatum! Tenetur dolor exercitationem delectus in, amet nemo obcaecati debitis labore reiciendis molestias qui ut omnis natus dolorem nam fugiat doloremque alias! Culpa asperiores non corporis, temporibus eveniet numquam dignissimos, ea, sequi accusamus tempora aliquam!</div><div>&nbsp;</div>', NULL, '2022-08-17 18:27:59', '2022-08-17 18:30:28'),
(2, 6, 1, 'PODCAST SEPUTAR INFORMATIKA \"MENULIS ADALAH JALAN NINJAKU\"', 'https://www.youtube.com/embed/ckpBCtCYdQA', 'podcast-seputar-informatika-\"menulis-adalah-jalan-ninjaku\"', 'post-images/DwX7IOh3FkPGFxd898i8JBrsffn05EbwiGXHReRw.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sed. Facere ab atque molestiae fuga ipsam. Aut, quam suscipit, perspiciatis nobis, neque dicta et dolorum cum nam sint sed quidem. Totam...', '<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sed. Facere ab atque molestiae fuga ipsam. Aut, quam suscipit, perspiciatis nobis, neque dicta et dolorum cum nam sint sed quidem. Totam accusantium nisi, minima velit commodi eos esse doloribus tempora! Hic architecto temporibus iste illum, molestiae, explicabo quaerat quae eius officia asperiores provident repudiandae. Laboriosam adipisci velit a asperiores officiis, quo nobis beatae modi voluptatibus distinctio&nbsp;</div><div>&nbsp;</div><div>dolore doloremque, unde architecto? Eveniet tenetur aliquam sit, ullam in asperiores excepturi, pariatur repellat est accusamus qui quia laudantium? Illo omnis perspiciatis fuga fugiat odio voluptatibus perferendis? Nulla temporibus sed ea quaerat reiciendis nihil? Nulla, eum quis rerum doloribus laudantium labore ratione aliquam soluta numquam repudiandae,&nbsp;</div><div>&nbsp;</div><div>voluptatem repellendus dolore voluptatum! Tenetur dolor exercitationem delectus in, amet nemo obcaecati debitis labore reiciendis molestias qui ut omnis natus dolorem nam fugiat doloremque alias! Culpa asperiores non corporis, temporibus eveniet numquam dignissimos, ea, sequi accusamus tempora aliquam!</div><div>&nbsp;</div>', NULL, '2022-08-17 18:52:55', '2022-08-17 18:57:43');

-- --------------------------------------------------------

--
-- Table structure for table `strukturs`
--

CREATE TABLE `strukturs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `strukturs`
--

INSERT INTO `strukturs` (`id`, `name`, `slug`, `jabatan`, `divisi_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Alif Sahputra', 'alif-sahputra', 'Ketua HMTI 2022-2023', 1, 'post-images/9BApE1mxg4UOG2Mir8seyamWiiDn29BLlxuvh6L1.jpg', '2022-08-17 18:16:11', '2022-08-17 19:41:41'),
(2, 'Panji Priantono Putra', 'panji-priantono-putra', 'Wakil Ketua HMTI 2022-2023', 1, 'post-images/r51QYTJpuFzKSdYGucmGzATMq2eyiMXq32moTQRq.jpg', '2022-08-17 19:38:48', '2022-08-17 19:38:48'),
(3, 'Agung Pradana Putra', 'agung-pradana-putra', 'Sekretaris Jendral 2022-2023', 1, 'post-images/k93JGoKh8EKp7g6wh4wgN9THEtNpRDD8OFslUdZF.jpg', '2022-08-17 19:39:24', '2022-08-17 19:39:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'program', 'program', 'program@gmail.com', NULL, '$2y$10$g0dASnQ8MXwUlLhH1sP.pOIxnzoYq3WZBM8SyTbWw6/kzo.B9Od7W', 0, NULL, '2022-08-17 18:16:11', '2022-08-17 18:16:11'),
(2, 'HMTI', 'HMTI', 'hmti@uis.ac.id', NULL, '$2y$10$V0O9Qp2CC5V4UxWgoL4pAuaGTS/7t1JWS1D7K10FAQFn2WJOrMsb.', 0, NULL, '2022-08-17 18:16:11', '2022-08-17 18:16:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `divisis`
--
ALTER TABLE `divisis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `divisis_slug_unique` (`slug`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `strukturs`
--
ALTER TABLE `strukturs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `strukturs_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `divisis`
--
ALTER TABLE `divisis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `strukturs`
--
ALTER TABLE `strukturs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
