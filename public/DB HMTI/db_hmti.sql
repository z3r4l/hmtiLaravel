-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2022 at 09:01 PM
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
(3, 'Program', 'program', 'post-images/ZGgCuvA8dBRBprwIyMh1h3MfmUW3eN2tdNwc3jv8.jpg', '<div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, unde?</div>', '2022-08-17 18:16:11', '2022-08-18 08:46:11'),
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
(2, 6, 1, 'PODCAST SEPUTAR INFORMATIKA \"MENULIS ADALAH JALAN NINJAKU\"', 'https://www.youtube.com/embed/ckpBCtCYdQA', 'podcast-seputar-informatika-\"menulis-adalah-jalan-ninjaku\"', 'post-images/DwX7IOh3FkPGFxd898i8JBrsffn05EbwiGXHReRw.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sed. Facere ab atque molestiae fuga ipsam. Aut, quam suscipit, perspiciatis nobis, neque dicta et dolorum cum nam sint sed quidem. Totam...', '<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sed. Facere ab atque molestiae fuga ipsam. Aut, quam suscipit, perspiciatis nobis, neque dicta et dolorum cum nam sint sed quidem. Totam accusantium nisi, minima velit commodi eos esse doloribus tempora! Hic architecto temporibus iste illum, molestiae, explicabo quaerat quae eius officia asperiores provident repudiandae. Laboriosam adipisci velit a asperiores officiis, quo nobis beatae modi voluptatibus distinctio&nbsp;</div><div>&nbsp;</div><div>dolore doloremque, unde architecto? Eveniet tenetur aliquam sit, ullam in asperiores excepturi, pariatur repellat est accusamus qui quia laudantium? Illo omnis perspiciatis fuga fugiat odio voluptatibus perferendis? Nulla temporibus sed ea quaerat reiciendis nihil? Nulla, eum quis rerum doloribus laudantium labore ratione aliquam soluta numquam repudiandae,&nbsp;</div><div>&nbsp;</div><div>voluptatem repellendus dolore voluptatum! Tenetur dolor exercitationem delectus in, amet nemo obcaecati debitis labore reiciendis molestias qui ut omnis natus dolorem nam fugiat doloremque alias! Culpa asperiores non corporis, temporibus eveniet numquam dignissimos, ea, sequi accusamus tempora aliquam!</div><div>&nbsp;</div>', NULL, '2022-08-17 18:52:55', '2022-08-17 18:57:43'),
(3, 1, 2, 'Contoh Kegiatan 1', 'https://www.youtube.com/embed/uehf5EplrUs', 'contoh-kegiatan-1', 'post-images/gw4PPmCKbReXKr8k7ISJSx0Ptqzs6UsqSZ9Kjjm4.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit voluptatum libero sit earum minima maxime est modi, laudantium aspernatur qui fugiat corrupti officia corporis consectetur praesentium ni...', '<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit voluptatum libero sit earum minima maxime est modi, laudantium aspernatur qui fugiat corrupti officia corporis consectetur praesentium nihil. Esse veritatis placeat nulla corporis animi deleniti suscipit accusantium magnam repudiandae inventore quae incidunt harum illo nesciunt beatae deserunt delectus&nbsp;</div><div><br></div><div>perspiciatis facere magni consequatur cumque, ipsa rerum quibusdam tempore. Aut ratione autem est optio. Dicta quas, quo repudiandae earum quam cum est nostrum sint beatae&nbsp;</div><div><br></div><div>quibusdam voluptatem voluptates autem nemo unde voluptate pariatur! Doloribus temporibus delectus ipsa officia id, illo consequatur laudantium provident. Nulla, cupiditate. Nisi nostrum cupiditate reiciendis eos repellat, amet deserunt!</div>', NULL, '2022-08-18 13:50:16', '2022-08-18 13:50:16'),
(4, 4, 2, 'contoh kegiatan 2', 'https://www.youtube.com/embed/uehf5EplrUs', 'contoh-kegiatan-2', 'post-images/a6OHUZU5sE8oS8ilLe37TKaouKWccpifg1v0CJ75.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit voluptatum libero sit earum minima maxime est modi, laudantium aspernatur qui fugiat corrupti officia corporis consectetur praesentium ni...', '<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit voluptatum libero sit earum minima maxime est modi, laudantium aspernatur qui fugiat corrupti officia corporis consectetur praesentium nihil. Esse veritatis placeat nulla corporis animi deleniti suscipit accusantium magnam repudiandae inventore quae incidunt harum illo nesciunt beatae deserunt delectus&nbsp;</div><div><br></div><div>perspiciatis facere magni consequatur cumque, ipsa rerum quibusdam tempore. Aut ratione autem est optio. Dicta quas, quo repudiandae earum quam cum est nostrum sint beatae&nbsp;</div><div><br></div><div>quibusdam voluptatem voluptates autem nemo unde voluptate pariatur! Doloribus temporibus delectus ipsa officia id, illo consequatur laudantium provident. Nulla, cupiditate. Nisi nostrum cupiditate reiciendis eos repellat, amet deserunt!</div>', NULL, '2022-08-18 13:50:49', '2022-08-18 13:50:49'),
(5, 5, 2, 'contoh kegiatan 3', 'https://www.youtube.com/embed/uehf5EplrUs', 'contoh-kegiatan-3', 'post-images/Atuiuy6GgfPPmFYl9D39jUvIkx6pMGwIALEsy0ZI.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit voluptatum libero sit earum minima maxime est modi, laudantium aspernatur qui fugiat corrupti officia corporis consectetur praesentium ni...', '<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit voluptatum libero sit earum minima maxime est modi, laudantium aspernatur qui fugiat corrupti officia corporis consectetur praesentium nihil. Esse veritatis placeat nulla corporis animi deleniti suscipit accusantium magnam repudiandae inventore quae incidunt harum illo nesciunt beatae deserunt delectus&nbsp;</div><div><br></div><div>perspiciatis facere magni consequatur cumque, ipsa rerum quibusdam tempore. Aut ratione autem est optio. Dicta quas, quo repudiandae earum quam cum est nostrum sint beatae&nbsp;</div><div><br></div><div>quibusdam voluptatem voluptates autem nemo unde voluptate pariatur! Doloribus temporibus delectus ipsa officia id, illo consequatur laudantium provident. Nulla, cupiditate. Nisi nostrum cupiditate reiciendis eos repellat, amet deserunt!</div>', NULL, '2022-08-18 13:51:25', '2022-08-18 13:51:25');

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
(3, 'Agung Pradana Putra', 'agung-pradana-putra', 'Sekretaris Jendral 2022-2023', 1, 'post-images/k93JGoKh8EKp7g6wh4wgN9THEtNpRDD8OFslUdZF.jpg', '2022-08-17 19:39:24', '2022-08-17 19:39:24'),
(4, 'zery aldi', 'zery-aldi-', 'koordinator program', 3, 'post-images/MBCTScJmWKwDH9YAQQL8UdlhognGjf1NCZOn5ptl.jpg', '2022-08-18 08:48:17', '2022-08-18 12:42:47'),
(5, 'NADILLA HAYATTUNNUPUS', 'nadilla-hayattunnupus', 'Bendahara I HMTI 2022-2023', 1, 'post-images/YjgwQ74lxkQoMtwlc6TL0OgoekJCEBEbtUyiBp4R.jpg', '2022-08-18 12:23:04', '2022-08-18 12:28:39'),
(6, 'Afifah Indah Sulistyowati', 'afifah-indah-sulistyowati', 'bendahara II 2022-2023', 1, 'post-images/Yn5mlePnDcBEGlKcFUNbBgXYJuVqdNxGyftTCv1d.jpg', '2022-08-18 12:28:30', '2022-08-18 12:28:30'),
(7, 'Paput Tri Cahyono', 'paput-tri-cahyono', 'Sekretaris I 2022-2023', 1, 'post-images/ybtwMsTV9T1yNyI7dMtaIdOiyiB1zFeCYRVYrooz.jpg', '2022-08-18 12:29:45', '2022-08-18 12:29:45'),
(8, 'Nurhikmah', 'nurhikmah', 'Sekretaris II 2022-2023', 1, 'post-images/xvMLJCaj50hpFraO6dbzspWtxz0JR8YHMz7qJznR.jpg', '2022-08-18 12:30:29', '2022-08-18 12:30:29'),
(9, 'Ilham Nur', 'ilham-nur', 'Koordinator Litbang 2022-2023', 1, 'post-images/kfmFXG8AnCogJqDxO7MAMjQntIjXU6QJSC0XyM6N.jpg', '2022-08-18 12:37:02', '2022-08-18 12:37:02'),
(10, 'ZERY ALDI', 'zery-aldi', 'koordinator program 2022-2023', 1, 'post-images/PC2urTsL1Ih2fSZNtvyFYwsWR8Gi3rt0XKhxG4ZS.jpg', '2022-08-18 12:37:47', '2022-08-18 12:37:47'),
(11, 'ILHAM ZULHIDA PAMUNGKAS', 'ilham-zulhida-pamungkas', 'Koordinator media 2022-2023', 1, 'post-images/P0BOwSI0nMia8kVOVPjTtKCqjHAhRDbfHbtcoeuM.jpg', '2022-08-18 12:38:30', '2022-08-18 12:38:30'),
(12, 'Frisca Yunita Ashari', 'frisca-yunita-ashari', 'Koordinator Humas 2022-2023', 1, 'post-images/XWKQEgVcVY0QCIBGMKzWtgyoOxnQJGuqtDZ7wcua.jpg', '2022-08-18 12:39:11', '2022-08-18 12:39:11'),
(13, 'Shara Sesphana', 'shara-sesphana', 'anggota program', 3, 'post-images/IUps5FpFkTdRxas7iRl6bcT9iZWxQSUptB2vwdzO.jpg', '2022-08-18 12:44:33', '2022-08-18 12:44:33'),
(14, 'Aaw Nurintiyara', 'aaw-nurintiyara', 'anggota program', 3, 'post-images/ftxDQZaSQDGflAZaMVBo4MYrHiwNagAVG3AGwBLo.jpg', '2022-08-18 12:45:15', '2022-08-18 12:45:15'),
(15, 'Selvia Sondania', 'selvia-sondania', 'anggota program', 3, 'post-images/Qd62dMYSU9dF19K03AhV8A6RfAE9dvcdPF5U3tl8.jpg', '2022-08-18 12:46:01', '2022-08-18 12:46:01'),
(16, 'ijay lesmana', 'ijay-lesmana-', 'anggota program', 3, 'post-images/GA6oejfsbQDNl4NSjjxvkHtDmDvxQ4gPJpEryYDA.jpg', '2022-08-18 12:47:44', '2022-08-18 12:47:44'),
(17, 'Doni Rifai Daulay', 'doni-rifai-daulay', 'anggota program', 3, 'post-images/XCqAYUqlu02m6YNMZilfuDWdNK9hbVWfMDvgUala.jpg', '2022-08-18 12:48:23', '2022-08-18 12:48:23'),
(18, 'Ilham Nur', 'ilham-nur-', 'Koordinator litbang', 2, 'post-images/a8bsjvzxZAc7EGw5tDUuJSW8sy5cF8Wq7bzETbkd.jpg', '2022-08-18 12:49:33', '2022-08-18 12:50:11'),
(19, 'Choirul Anam', 'choirul-anam', 'anggota litbang', 2, 'post-images/pwnzjosz2kOLzjxEetYppl4si73DfOJehDkYhjyL.jpg', '2022-08-18 12:50:42', '2022-08-18 12:50:42'),
(20, 'ANDRE JEREMI GULTOM', 'andre-jeremi-gultom', 'anggota litbang', 2, 'post-images/4bJzvAEk6R59TCZWEqpeEXe1HWywdBMMtpyujrAq.jpg', '2022-08-18 12:51:18', '2022-08-18 12:51:18'),
(21, 'ILHAM ZULHIDA PAMUNGKAS', 'ilham-zulhida-pamungkas-', 'Koordinator media', 5, 'post-images/yOCizHLUHYwgdFtRlkr7jqaUm0I6necY5fDfDnrX.jpg', '2022-08-18 12:53:40', '2022-08-18 12:53:40'),
(22, 'Elvi Nuryani', 'elvi-nuryani', 'anggota media', 5, 'post-images/dOnvS5zcOQ8Ye7XoXdc6WiuY8iZWawmySTk5pmUY.jpg', '2022-08-18 12:55:07', '2022-08-18 12:55:07'),
(23, 'Tiara Aziza Ramadhani', 'tiara-aziza-ramadhani', 'anggota media', 5, 'post-images/8q7tjZm5qapeAapO2fgyv0QJ8wXeVdTCihtFcF1K.jpg', '2022-08-18 12:55:51', '2022-08-18 12:55:51'),
(24, 'Habibi', 'habibi', 'anggota litbang', 2, 'post-images/ENIQJDOVXWjV1WyKSvcGBBcTdsCZc3Rg3ANwvQ0R.jpg', '2022-08-18 12:58:01', '2022-08-18 12:58:01'),
(25, 'Ramadhan Pratama Putra', 'ramadhan-pratama-putra', 'anggota media', 5, 'post-images/2jbVlWP4GLVq21TCxS8wewlE3anFfAkx3HhMOKVs.jpg', '2022-08-18 12:59:31', '2022-08-18 12:59:31'),
(26, 'Windy Gustiawan', 'windy-gustiawan', 'anggota media', 5, 'post-images/YPhFawDbSipPznlny2RB6RZ6lry4DGBM6ZA36QdN.jpg', '2022-08-18 13:00:53', '2022-08-18 13:22:42'),
(27, 'Aldi Ancessa', 'aldi-ancessa', 'anggota media', 5, 'post-images/ZxmdBQDFT4iWuEvn6SwEd9CYktKVNHoQWaTbTx8w.jpg', '2022-08-18 13:01:40', '2022-08-18 13:01:40'),
(28, 'Muhammad Amin', 'muhammad-amin', 'anggota media', 5, 'post-images/arQtPD5vmHZpxvz5De7QoXiL1NfLgtSdAuqLMiwF.jpg', '2022-08-18 13:02:06', '2022-08-18 13:02:06'),
(29, 'Ode Okta Maulana', 'ode-okta-maulana', 'anggota media', 5, 'post-images/kfx10xPR4q3XaaDIjiXDFPNDRAfX44SRjFzVr9E7.jpg', '2022-08-18 13:03:07', '2022-08-18 13:03:07'),
(30, 'Habib Armanda', 'habib-armanda', 'anggota media', 5, 'post-images/99CDSRrSM6ecrvyKepW8m8CNbCA7kekJQEOdO1p1.jpg', '2022-08-18 13:04:04', '2022-08-18 13:04:04'),
(31, 'Abdul Salam', 'abdul-salam', 'anggota media', 5, 'post-images/fqxWG3ZXjoluvc6q5XUI4Wh5aVix5MEkwv8TdSTl.jpg', '2022-08-18 13:04:32', '2022-08-18 13:04:32'),
(32, 'Yuandio pratama', 'yuandio-pratama', 'anggota media', 5, 'post-images/jugXqnwpJl3MtzxPTa3eGRlB3UhcITNB3XC4AHYE.jpg', '2022-08-18 13:06:35', '2022-08-18 13:06:35'),
(33, 'Frisca Yunita Ashari', 'frisca-yunita-ashari-', 'Koordinator humas', 4, 'post-images/gXaHEYDYFSwItGW6LxbUdYjQoaE4pt8lHgmIbp6u.jpg', '2022-08-18 13:16:31', '2022-08-18 13:16:31'),
(34, 'Muhammad Fadli', 'muhammad-fadli', 'anggota humas', 4, 'post-images/tvfkYRlHExX0rc084vGJ1uCtI4HpUdtYG8qbHtci.jpg', '2022-08-18 13:16:56', '2022-08-18 13:16:56'),
(35, 'Azharye Putri Aulia', 'azharye-putri-aulia', 'anggota humas', 4, 'post-images/VYX0x0sVcmtidocbzzWJ4VKhfskeqHw5ZjYOTn1k.jpg', '2022-08-18 13:17:20', '2022-08-18 13:17:20'),
(36, 'Novi Widiana Putri', 'novi-widiana-putri', 'anggota humas', 4, 'post-images/rxCoC1X6df3g1Sv6ohdNBdjlvGyE5TFOQ4E10zHk.jpg', '2022-08-18 13:17:57', '2022-08-18 13:17:57'),
(37, 'Fathur Rohman', 'fathur-rohman', 'anggota humas', 4, 'post-images/5l46GN1Cl8bgBf4Oe8Sm3fpdq5eFj0bPR1PYY57P.jpg', '2022-08-18 13:18:35', '2022-08-18 13:18:35'),
(38, 'William Boli Toby', 'william-boli-toby', 'anggota humas', 4, 'post-images/K8Gn3dwdMn2ku3jy1HftWS0Jwly3ROYRG6rP9MG2.jpg', '2022-08-18 13:18:58', '2022-08-18 13:18:58');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `strukturs`
--
ALTER TABLE `strukturs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
