-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2022 at 01:58 AM
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
(1, 'Study Club', 'study-club', '2022-11-09 12:55:28', '2022-11-09 12:55:28'),
(2, 'Family Gathering', 'family-gathering', '2022-11-09 12:55:28', '2022-11-09 12:55:28'),
(3, 'Rapat', 'rapat', '2022-11-09 12:55:28', '2022-11-09 12:55:28'),
(4, 'Seminar', 'seminar', '2022-11-09 12:55:28', '2022-11-09 12:55:28'),
(5, 'Workshop', 'workshop', '2022-11-09 12:55:28', '2022-11-09 12:55:28');

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
(1, 'Inti', 'inti', NULL, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, unde?', '2022-11-09 12:55:28', '2022-11-09 12:55:28'),
(2, 'Litbang', 'litbang', 'post-images/SBhQNSlEP3XsqOUnC7RWQ2t8fzXchbn1Y9yoeemm.jpg', '<div>Divisi Litbang adalah Devisi Penelitian dan Pengembangan. Dimana Tugas dan perananya adalah fokus pada pengembangan Softskill dan Hardskill di bidang teknik informatika baik dalam Internal mahasiswa Prodi Teknik Informatika.&nbsp;</div>', '2022-11-09 12:55:28', '2022-11-09 13:06:04'),
(3, 'Program', 'program', 'post-images/oLAOgvR9Zlu28F0YdeJUag13w7zdSXNRWuujHg7a.jpg', '<div>divisi program adalah divisi yang menyokong perkembangan infrastruktur organisasi dengan memanfaatkan teknologi digital agar mempermudah dalam mengelola rancangan kegiatan</div>', '2022-11-09 12:55:28', '2022-11-09 13:06:40'),
(4, 'Humas', 'humas', 'post-images/NujBizXhnoXn0K6XabbvGsLn3DXEYrZQ3VyM2F4j.jpg', '<div>Program kerja devisi humas yaitu HMTI berbagi, HMTI bersama, Fun Day HMTI dan familly gathering HMTI, Menjalin kerjasama dengan perusahaan dan antar kampus.</div>', '2022-11-09 12:55:28', '2022-11-09 13:06:53'),
(5, 'Media', 'media', 'post-images/cLDd2niWpyChBj9mNVKc3bFyZZZtAkIkEzoxcFGb.jpg', '<div>Divisi yang mempunyai tujuan untuk menghimpun, mengolah dan mempublikasikan informasi mengenai dunia Teknik Informatika dan menjadi wadah bagi mahasiswa Teknik Informatika Universitas Ibnu Sina yang mempunyai minat di bidang multimedia Terutama dalam lingkup HMTI.</div>', '2022-11-09 12:55:28', '2022-11-09 13:07:06');

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
(14, 3, 2, 'Serah Terima Jabatan Ketua HMTI 2022-2023', 'uehf5EplrUs', 'serah-terima-jabatan-ketua-hmti-2022-2023', 'post-images/EXIbloXPw35XPMBAdz0zM2Z3NxEHlOlXYx0CnhMG.jpg', 'Nostrum velit voluptas sit exercitationem. Ut aliquam aliquam vel deleniti. Quia quae unde cupiditate officia quaerat.Corporis sit qui quam dignissimos. Tempora consequuntur consequatur sit laudantium...', '<div>Nostrum velit voluptas sit exercitationem. Ut aliquam aliquam vel deleniti. Quia quae unde cupiditate officia quaerat.<br><br></div><div>Corporis sit qui quam dignissimos. Tempora consequuntur consequatur sit laudantium vel ut praesentium consequatur. Laudantium expedita voluptatem ut vel ab temporibus. Et ratione et atque omnis impedit quas est deserunt.<br><br></div><div>Quia voluptas quis autem quia. Nisi et accusamus quia aperiam nemo laboriosam. Quis expedita laboriosam ratione quos qui in modi temporibus.<br><br></div><div>Quibusdam optio impedit suscipit eos. Ea necessitatibus recusandae molestias tempore minus deserunt. Sit impedit quia debitis earum.<br><br></div><div>Dolores consequatur minus nobis blanditiis ipsum. Dignissimos possimus omnis repudiandae qui expedita tenetur.<br><br></div><div>Tenetur inventore est ut hic qui eos. Numquam et mollitia non similique quia ex ut. Tempora dolore totam rerum placeat id deleniti.<br><br></div><div>Magnam dicta accusamus aut quas voluptatum aperiam. Est quaerat cum dolor minima alias aut. Impedit voluptas voluptate praesentium dolores incidunt deserunt ducimus. Expedita maiores a et et.<br><br></div><div>Sed eaque non explicabo harum unde. Quis cupiditate sint voluptatem recusandae omnis illum. Est assumenda quasi ut laudantium illum. Harum deleniti sunt fugiat voluptatum.<br><br></div><div>Delectus enim repudiandae et maxime repellat. Nesciunt sit autem nesciunt culpa beatae aut reiciendis enim.<br><br></div><div>Et quos quibusdam quae delectus eos quis porro id. Ducimus est dolore quo qui molestiae omnis velit necessitatibus. Dolorem harum ut repudiandae quia.<br><br></div><div>Beatae consequatur est beatae exercitationem voluptas dolores. Earum ut laborum sed occaecati. Voluptatem quos et dicta ut voluptatem sapiente voluptates. Ea id at aut delectus sunt similique repudiandae.<br><br></div><div>Facere molestiae error quia. Consequatur quis id magnam aut autem et. Dolores necessitatibus rerum est sint saepe fugiat deserunt.<br><br></div><div>Aut perspiciatis ut id fuga nobis deleniti. Sed atque quibusdam repellendus dolor sed maiores. Rem rerum omnis et et a est.<br><br></div><div>Natus vero aut dolor commodi. Molestias iure et minima. Nemo magnam autem dolor assumenda dolor voluptatem. Impedit perspiciatis ea qui architecto.<br><br></div><div>Officiis accusamus sequi iusto sit veritatis vero. Excepturi beatae et et quidem perferendis fugit vel. Ut dolorem natus dolore id. Non pariatur est illum qui dolorem qui aliquam iusto.<br><br></div><div>Minus repellendus officia et repellat ea sed non. Quis aperiam reprehenderit consequuntur accusantium. Earum aut sed nisi sit ut rerum a.<br><br></div>', NULL, '2022-08-03 12:55:28', '2022-11-09 18:13:14'),
(20, 3, 2, 'Study Club Series 4', '-', 'study-club-series-4', 'post-images/9TJ3Ft7VuWng3i7Xzjge1w5y4Iq4wpMGrncN1SPN.jpg', 'Placeat qui necessitatibus dicta autem. Rerum aut consequuntur quaerat impedit quis quae quam occaecati. Ea laboriosam sit nisi quam natus iusto tempora. Autem quas corrupti est earum.Consequuntur qui...', '<div>Placeat qui necessitatibus dicta autem. Rerum aut consequuntur quaerat impedit quis quae quam occaecati. Ea laboriosam sit nisi quam natus iusto tempora. Autem quas corrupti est earum.<br><br></div><div>Consequuntur qui id quis et. Blanditiis quae vero et illo nihil. Consequatur odio blanditiis expedita voluptatibus. Nostrum natus ut sit excepturi et saepe ea.<br><br></div><div>Dolor voluptatem blanditiis facilis reprehenderit et ut quidem. Facilis recusandae ut et deleniti modi est. Illum et et qui est mollitia rem corporis vero.<br><br></div><div>Ipsum adipisci nam iure temporibus fuga. Dolores magni fugiat quaerat qui laudantium ea. Cumque corporis illo dolor sequi. Tempore inventore deserunt necessitatibus consequuntur.<br><br></div><div>Cumque alias officia perspiciatis assumenda et aut pariatur. Quas in id ratione fugit repellat libero. Sed laboriosam eligendi velit sunt repudiandae saepe. Voluptatem sint consequuntur et enim ab corrupti vitae. Nam fugit et excepturi et neque voluptas error.<br><br></div><div>Porro aut praesentium occaecati inventore. Molestias et non voluptates sint. Vitae dolores eveniet qui tempore.<br><br></div><div>A minima excepturi omnis quia sit aliquam fugiat ut. Ad atque labore occaecati cumque beatae rerum. Error ut esse laudantium quae qui sapiente voluptas. Autem saepe repellendus cupiditate.<br><br></div><div>Amet quia adipisci nostrum sit sit. Ut illum maiores velit eligendi consequatur perspiciatis asperiores. Repudiandae aut est ea velit.<br><br></div><div>Nesciunt suscipit aut velit totam fugiat. Similique qui quasi doloribus quas voluptatem est. Aspernatur veniam quis ipsam voluptas commodi saepe. Soluta dignissimos dolorum in occaecati error dolor velit.<br><br></div><div>Quas ducimus a voluptates ullam molestiae qui. Quibusdam incidunt ex molestiae maiores eum debitis enim. Quidem nobis totam dolor quo iure autem vero. Sit quam consequatur excepturi maiores voluptas incidunt consectetur aut.<br><br></div>', NULL, '2022-10-16 12:55:28', '2022-11-09 18:27:22'),
(21, 2, 2, 'Rapat Umum', 'sed-distinctio-enim-esse-excepturi-non-est-fugit', 'rapat-umum', 'post-images/WjUdc3qHYhU9Q7LbKtOxGaAHf8NrsM4arzhE1ATf.jpg', 'Odit ut omnis suscipit ut natus libero illo aliquam. Voluptatem vero placeat excepturi aut ea voluptatem ipsa expedita. Autem voluptatem quos ut vero et nesciunt. Ut ratione voluptates mollitia veniam...', '<div>Odit ut omnis suscipit ut natus libero illo aliquam. Voluptatem vero placeat excepturi aut ea voluptatem ipsa expedita. Autem voluptatem quos ut vero et nesciunt. Ut ratione voluptates mollitia veniam quidem distinctio non.<br><br></div><div>Molestiae non eum nihil eaque. Consequatur tempore occaecati et. Nesciunt maiores esse adipisci totam fugiat et architecto. Sunt reiciendis quam nesciunt vero dolorem tempora recusandae.<br><br></div><div>Officiis totam pariatur quo dolores dolores quo. Sit quo facere soluta voluptates. Veniam asperiores distinctio est earum.<br><br></div><div>Harum veritatis corporis qui iure sed itaque rem. Voluptatem ab sint reiciendis est non fugiat et. Dolor numquam voluptatem minus laudantium sed qui. Asperiores qui enim repellendus beatae et.<br><br></div><div>Et ducimus maxime optio qui accusamus fuga. Porro debitis modi harum similique et voluptas qui qui. Aut suscipit est voluptas. Iusto explicabo odit praesentium deleniti.<br><br></div><div>Enim eligendi quas iure eveniet. Voluptates eligendi dolores aut vitae. Voluptatem veniam aut velit iusto sed. Neque corrupti laudantium ab provident odio.<br><br></div><div>Et quod sequi ratione necessitatibus incidunt. Sed repudiandae voluptatem ut amet aut. Optio numquam id facilis est alias iusto ratione.<br><br></div><div>Tempora ducimus nihil illum fuga molestiae dolore ipsa. Qui rem exercitationem ullam deserunt esse. Amet quos officia quis architecto.<br><br></div><div>Et ab est blanditiis voluptate voluptate. Consequuntur tempore est cumque. Voluptatem et eum quis consequatur odio. Quidem autem et veniam harum excepturi rerum quis.<br><br></div><div>Quia omnis repudiandae facilis. Qui nemo adipisci blanditiis aut odit earum nesciunt. Quasi sed quia repellendus accusantium porro. Quisquam id cupiditate in voluptatem.<br><br></div><div>Assumenda quisquam quas est eveniet voluptates. Qui itaque explicabo nobis ducimus dolore.<br><br></div><div>Omnis facere deleniti non eaque enim. Ut et architecto ut corrupti. Suscipit tenetur qui porro ut nisi eligendi omnis. Laborum voluptatem non dolore optio necessitatibus in praesentium laborum.<br><br></div><div>Nisi voluptatem est voluptas voluptatibus ipsum et et. Eveniet ipsam aut porro et. Consequatur nihil inventore quas inventore et praesentium tempore.<br><br></div><div>Itaque nostrum rerum molestiae iusto praesentium et ut. Nemo aliquam eum totam quasi rerum officiis. Laborum harum omnis libero alias aspernatur.<br><br></div><div>Nihil itaque fugiat non ratione veniam modi perferendis. Tempora corporis reiciendis dolor aut quae omnis harum. Quos non a nam et. Et quia fugiat omnis ratione. Numquam voluptates nostrum sequi qui ea.<br><br></div><div>Omnis impedit libero suscipit ut voluptatem quisquam est. Eum ut sit asperiores officia doloribus. Alias molestiae maiores in pariatur.<br><br></div><div>Quasi at iste quasi beatae provident quidem rem aut. Aut eius et non est esse mollitia. Commodi inventore et sit aspernatur deleniti quasi animi. Id sed quia quidem.<br><br></div><div>Veniam qui quasi non. Beatae omnis exercitationem consequatur. Consectetur deserunt praesentium cupiditate quas.<br><br></div><div>Inventore iusto ducimus ut deserunt esse nulla dolorum. Voluptatibus voluptatem ut at. Tempora quos vel repellendus praesentium.<br><br></div><div>Doloremque sunt vel molestiae omnis. Laboriosam sunt blanditiis fugiat voluptas architecto fuga iure et. Similique consequatur eum dolor.<br><br></div>', NULL, '2022-10-02 12:55:28', '2022-11-09 18:30:43'),
(22, 3, 2, 'Walk In Interview', '-', 'walk-in-interview', 'post-images/W6BgV3clEMl5X9ifN3CBZ5sn1JCnZDI6H2oSgsVu.jpg', 'Alias provident expedita veritatis et aut. Itaque expedita esse iste dignissimos. Ab fuga quam nostrum dolores suscipit aperiam asperiores.Aut accusamus aut eum vel qui quaerat culpa. Qui neque ea ut...', '<div>Alias provident expedita veritatis et aut. Itaque expedita esse iste dignissimos. Ab fuga quam nostrum dolores suscipit aperiam asperiores.<br><br></div><div>Aut accusamus aut eum vel qui quaerat culpa. Qui neque ea ut voluptates voluptas. Et dolores natus aut hic et fugiat quo. Harum nisi est inventore assumenda. Quia non deleniti voluptatem deleniti quaerat.<br><br></div><div>Molestiae ipsa quisquam alias illo. Est sed sed fugiat iusto blanditiis sit. Omnis autem totam maxime nemo quaerat omnis. Cum deleniti accusamus saepe aperiam aut.<br><br></div><div>Ut ut velit repudiandae ducimus est. Omnis vel maiores minus corrupti. Id ipsa quis accusantium rem nihil. Ea nostrum nobis est quo ut.<br><br></div><div>Sit aspernatur dolorum ea voluptatibus officiis expedita hic explicabo. Quo excepturi et nisi qui veniam.<br><br></div><div>Molestias ab ea atque vitae tempora autem. Aspernatur recusandae earum velit velit laudantium. Labore nihil ratione possimus enim blanditiis.<br><br></div><div>Harum sit dolorem non vero ut similique. Non doloribus dolorem minus officia perspiciatis soluta. Praesentium ea fugit ut aut aliquam consequatur suscipit. Sed voluptatem ducimus voluptatem. Sed et adipisci quis consequatur numquam non ducimus qui.<br><br></div><div>Et sed corporis aliquam tempora nemo. Et consectetur voluptatem quis tempora. Numquam voluptas quaerat praesentium cumque veritatis. Temporibus enim ut labore quos.<br><br></div><div>Qui commodi necessitatibus harum non laudantium. Cum facere perferendis eius fugit ipsa quibusdam ex qui.<br><br></div><div>Provident ipsum sed vitae. Qui fuga omnis provident.<br><br></div><div>Occaecati eaque nihil exercitationem in rem. Consequatur quos quis soluta voluptates dolorem unde. Tempora soluta ea quo.<br><br></div><div>Ut dolorem laborum non vitae. Et molestiae voluptatibus at. Ducimus voluptates cumque atque.<br><br></div><div>Autem quasi autem consequuntur. Sint itaque et iure velit modi sit praesentium. Quia porro at consequatur facere impedit.<br><br></div><div>Repellendus nihil ducimus earum. Esse quo quis sit excepturi. Odit quas ex velit fuga odit.<br><br></div>', NULL, '2022-09-25 12:55:28', '2022-11-09 18:33:00'),
(24, 3, 2, 'Musyawarah Besar', '-', 'musyawarah-besar', 'post-images/9FzqazgBfGzyqQYpUGw08SItcpxC3opexNwJwEtl.jpg', 'Magnam eos non et quibusdam. Quidem assumenda laborum eius minus in. A natus impedit iusto fuga. Deleniti dignissimos itaque iure ut inventore.Et incidunt a eveniet aut quisquam eius tempora ipsa. Dol...', '<div>Magnam eos non et quibusdam. Quidem assumenda laborum eius minus in. A natus impedit iusto fuga. Deleniti dignissimos itaque iure ut inventore.<br><br></div><div>Et incidunt a eveniet aut quisquam eius tempora ipsa. Dolor quo et mollitia inventore suscipit nihil velit. Temporibus amet saepe sunt quae quibusdam error dolorem voluptas.<br><br></div><div>Quis illo omnis non doloribus. Provident inventore pariatur in repudiandae ut. Cum aut quisquam adipisci sed itaque enim enim.<br><br></div><div>Eum sint libero possimus consequatur ea. Asperiores tempore porro et qui quis voluptas. Dolor qui illum qui alias et maiores. Saepe et modi culpa voluptatem neque fugiat vel. Vel rerum reprehenderit corrupti vitae quia.<br><br></div><div>Nulla qui debitis placeat tempora culpa. Et atque cupiditate soluta vitae reprehenderit. Sint dolorem odit reprehenderit minima cumque et nesciunt. Voluptatem iure saepe quas et.<br><br></div><div>Illum tempore nulla rerum adipisci est. Quis esse quos sit. Quod animi sit temporibus. Ratione ea labore facere ex.<br><br></div><div>Unde facere et ipsam fugit est eius ducimus. Corporis harum et et eum expedita alias minus.<br><br></div><div>Voluptatem asperiores ut consequuntur blanditiis occaecati odit placeat. Voluptas quia animi iure atque odio quis. Repellendus blanditiis dolorem eligendi in quis.<br><br></div><div>Ab quam atque rerum illum est. Odit voluptas impedit non necessitatibus saepe rem. Est similique quod molestiae. Praesentium perferendis ullam in.<br><br></div><div>Culpa et officiis voluptatem et corporis aut. Nulla dolores ducimus animi est est voluptatem. Quibusdam dolorem facere cupiditate reprehenderit facilis ut.<br><br></div><div>Id sint amet dolore nihil fugiat provident facilis. Earum dignissimos iste ut ipsa autem. Cum vel vitae minus suscipit.<br><br></div>', NULL, '2022-08-03 12:55:28', '2022-11-09 18:40:27');

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
(1, 'Alif Sahputra', 'alif-sahputra', 'Ketua HMTI 2022-2023', 1, 'post-images/mofzWtenJL4cUj1iKZTkd2qOVsEd0kPobOoayago.jpg', '2022-11-09 12:55:28', '2022-11-09 13:43:31'),
(2, 'Panji Priantono P', 'panji-priantono-p', 'Wakil Ketua HMTI 2022-2023', 1, 'post-images/tdHeR5o4YI1N5KcdEAqQXGPu6PALjXHHvSJypcxR.jpg', '2022-11-09 13:19:13', '2022-11-09 13:19:13'),
(3, 'Agung Pradana', 'agung-pradana', 'Sekretaris Jendral 2022-2023', 1, 'post-images/Ra8uYMDGGpp9ruj1HNgEwdHSMe6M7SO8VnzaGe7Q.jpg', '2022-11-09 13:30:12', '2022-11-09 13:30:12'),
(4, 'Paput Tri Cahyono', 'paput-tri-cahyono', 'Sekretaris I 2022-2023', 1, 'post-images/lyGk5hOz0OovCniMwn480rRzyLl44M1J3aAdSTHt.jpg', '2022-11-09 13:32:43', '2022-11-09 13:32:43'),
(5, 'Nurhikmah', 'nurhikmah', 'Sekretaris II 2022-2023', 1, 'post-images/nmTZBJwf2U7ktqnMTch6k5c98WKL1VQMu46nvXxD.jpg', '2022-11-09 13:39:37', '2022-11-09 13:39:37'),
(6, 'Nadilla Hayattunnupus', 'nadilla-hayattunnupus', 'Bendahara I 2022-2023', 1, 'post-images/BKZMfBll7oiOkCTLnNAQfdwdxCe0sl2WIn91pMz9.jpg', '2022-11-09 13:40:41', '2022-11-09 13:40:41'),
(7, 'Afifah Indah S', 'afifah-indah-s', 'Bendahara II 2022-2023', 1, 'post-images/ECtyokb3sdJjpLCVFCS4qWPVyZnHbwZR7EZYsgia.jpg', '2022-11-09 13:41:26', '2022-11-09 13:41:26'),
(8, 'Ilham Nur', 'ilham-nur', 'Koordinator Litbang 2022-2023', 1, 'post-images/GRCOKVyrtQbNojjZXP05o6piVvlAO805ciFopEs8.jpg', '2022-11-09 13:44:49', '2022-11-09 13:44:49'),
(9, 'Zery Aldi', 'zery-aldi', 'Koordinator Program 2022-2023', 1, 'post-images/ZfFfKa9pLcPWzs3y5J6UA0gxvg3C1dAF76Hw4m9G.jpg', '2022-11-09 13:45:16', '2022-11-09 13:45:16'),
(10, 'ILHAM ZULHIDA P', 'ilham-zulhida-p', 'Koordinator Media 2022-2023', 1, 'post-images/3V91r9s0BI7HFdeGZj3LKfBEXeoAlBX5I9UoAU4f.jpg', '2022-11-09 13:45:57', '2022-11-09 13:45:57'),
(11, 'Frisca Yunita Ash', 'frisca-yunita-ash', 'Koordinator Humas 2022-2023', 1, 'post-images/DJqFQN7WXrHUHycxp9nvUpoJwU5BTSA8gMsSNwtc.jpg', '2022-11-09 13:46:42', '2022-11-09 17:17:46'),
(12, 'Ilham Nur', 'ilham-nur-', 'Koordinator Litbang 2022-2023', 2, 'post-images/Pe6AxHIZ2B9KIG3Pf7JDdtmYjsnvYnNSrctH4eCl.jpg', '2022-11-09 14:08:56', '2022-11-09 14:11:36'),
(13, 'zery aldi', 'zery-aldi-', 'Koordinator Program 2022-2023', 3, 'post-images/7pXP3AetpukoMsXVMxlJnsqBgUuBJvfuwp2tcyah.jpg', '2022-11-09 14:10:28', '2022-11-09 14:10:28'),
(14, 'Frisca Yunita Ash', 'frisca-yunita-ash-', 'Koordinator Humas 2022-2023', 4, 'post-images/Fe3JKVZ1ESamp4NGXfSpENbkwx0XjpDYqRueWYDJ.jpg', '2022-11-09 14:11:12', '2022-11-09 14:11:59'),
(15, 'Ilham Zulhida P', 'ilham-zulhida-p-', 'Koordinator Media 2022-2023', 5, 'post-images/6FdGzHWDPjU8XFOIbFkNMsqjDy2sVCajPtGlvcW9.jpg', '2022-11-09 14:12:43', '2022-11-09 14:12:43'),
(16, 'Ijay Lesmana', 'ijay-lesmana', 'Anggota Program 2022-2023', 3, 'post-images/1BFjzo4p0hLToZOnX7y83LUKawTUtioDdq6l3hWP.jpg', '2022-11-09 14:17:49', '2022-11-09 14:17:49'),
(17, 'Doni Rifai D', 'doni-rifai-d', 'Anggota Program 2022-2023', 3, 'post-images/N4wqFaSoDhl7TmpTwUe0P2RGmmcr6baSE6jBzPvw.jpg', '2022-11-09 14:18:34', '2022-11-09 14:18:34'),
(18, 'Aaw Nurtiyara', 'aaw-nurtiyara', 'Anggota Program 2022-2023', 3, 'post-images/Nu8EFHJZEhsnki7fiGnBQ52dTFVmFULCRUtwiENt.jpg', '2022-11-09 14:19:05', '2022-11-09 14:19:05'),
(19, 'Selvia Sondania', 'selvia-sondania', 'Anggota Program 2022-2023', 3, 'post-images/63LPmD2CzLXCyDQHqVGKda3UC7ktlgcQqLqmvICp.jpg', '2022-11-09 14:19:34', '2022-11-09 14:19:34'),
(20, 'Shara Sesphana', 'shara-sesphana', 'Anggota Program 2022-2023', 3, 'post-images/zJClkgunwxnxH0T1QJ4KsGGOJvRBulYET3JZdvFs.jpg', '2022-11-09 14:28:33', '2022-11-09 14:28:33'),
(21, 'Habibi', 'habibi', 'Anggota Litbang 2022-2023', 2, 'post-images/gCpQwxbP6v9i7v9zSAndJk516xY20b4SUIVZUVQN.jpg', '2022-11-09 17:33:22', '2022-11-09 17:33:22'),
(22, 'Choirul Anam', 'choirul-anam', 'Anggota Litbang 2022-2023', 2, 'post-images/zSJTfaz16Byg1p5P0swAJoCSsEjH0s5M142F7kQM.jpg', '2022-11-09 17:33:51', '2022-11-09 17:33:51'),
(23, 'Andre Jeremi G', 'andre-jeremi-g', 'Anggota Litbang 2022-2023', 2, 'post-images/mRW3SxfaFq9qwCAw0f0qW8rPyUqedYtcpH5KJgN3.jpg', '2022-11-09 17:34:22', '2022-11-09 17:34:22'),
(24, 'Novi Widiana Putri', 'novi-widiana-putri', 'Anggota Humas 2022-2023', 4, 'post-images/6MA1ZGk3USrbieeDVyxie1C3LB35s5uASDez5Sc7.jpg', '2022-11-09 17:41:43', '2022-11-09 17:41:43'),
(25, 'Azharye Putri A', 'azharye-putri-a', 'Anggota Humas 2022-2023', 4, 'post-images/AOszOem8qXhI5tRsZJgL4RIsdUzEEOjNuE1J0cmd.jpg', '2022-11-09 17:42:23', '2022-11-09 17:42:23'),
(26, 'Muhammad Fadli', 'muhammad-fadli', 'Anggota Humas 2022-2023', 4, 'post-images/KuWHZHPfwAWoABNEZuIGxTOUwQLIXN4ftz1AP83h.jpg', '2022-11-09 17:42:56', '2022-11-09 17:42:56'),
(27, 'Fathur Rohman', 'fathur-rohman', 'Anggota Humas 2022-2023', 4, 'post-images/A7C4rFP3bOQ8Tf592g5mHcSZRfBVRuu0312WMrrR.jpg', '2022-11-09 17:43:23', '2022-11-09 17:43:23'),
(28, 'William Boli T', 'william-boli-t', 'Anggota Humas 2022-2023', 4, 'post-images/PCmpxdGwNubbTH4dQboXMjqYuVE8sk45TQ8rJi2W.jpg', '2022-11-09 17:43:54', '2022-11-09 17:43:54'),
(29, 'Tiara Aziza Ramadhani', 'tiara-aziza-ramadhani', 'Anggota Media 2022-2023', 5, 'post-images/iOLAP0XBRt0iKz0qNzKpb4ZQp1F8TAtUiudNWjCi.jpg', '2022-11-09 17:56:37', '2022-11-09 17:56:37'),
(30, 'Elvi Nuryani', 'elvi-nuryani', 'Anggota Media 2022-2023', 5, 'post-images/yKkloQs0qZdGT0PvouByzpW8F3pfvCEBgA3ptlXQ.jpg', '2022-11-09 17:57:05', '2022-11-09 17:57:05'),
(31, 'Ode Okta Maulana', 'ode-okta-maulana', 'Anggota Media 2022-2023', 5, 'post-images/0eDcjyNpN4DR9xI0lLye2I3IELrbVwT3gDrsB92B.jpg', '2022-11-09 17:57:43', '2022-11-09 17:57:43'),
(32, 'Ramadhan Pratama Putra', 'ramadhan-pratama-putra', 'Anggota Media 2022-2023', 5, 'post-images/bT98D0SNZSDir3omPMN5RkwAIVOHlCNaKrqDnRcJ.jpg', '2022-11-09 17:58:12', '2022-11-09 17:58:12'),
(33, 'Aldi Ancessa', 'aldi-ancessa', 'Anggota Media 2022-2023', 5, 'post-images/oFa9zAtBMfIRLQ9fA7msHcpHhixPkYMrOlsy7PW0.jpg', '2022-11-09 17:58:49', '2022-11-09 17:58:49'),
(34, 'Habib Armanda', 'habib-armanda', 'Anggota Media 2022-2023', 5, 'post-images/AUqBNd7EUTT7xq8vn7IcUq2kZ7L1pNX8awLdAck3.jpg', '2022-11-09 17:59:38', '2022-11-09 17:59:38'),
(35, 'Yuandio Pratama', 'yuandio-pratama', 'Anggota Media 2022-2023', 5, 'post-images/Oiton8B3a9a47WTya4L3w4D3EBZoYLZF3UqWN7wE.jpg', '2022-11-09 17:59:58', '2022-11-09 17:59:58'),
(36, 'Abdussalam', 'abdussalam', 'Anggota Media 2022-2023', 5, 'post-images/ZHIzHWxMV7jDMZdA3OZeA92Ydi4BcKQ4fI7F5QeW.jpg', '2022-11-09 18:00:23', '2022-11-09 18:00:23'),
(37, 'Muhammad Amin', 'muhammad-amin', 'Anggota Media 2022-2023', 5, 'post-images/rZ5MpUm38j1AxI5oQOVymlxwPLIitftlNrmM3CyD.jpg', '2022-11-09 18:00:46', '2022-11-09 18:00:46'),
(38, 'Windy Gustiawan', 'windy-gustiawan', 'Anggota Media 2022-2023', 5, 'post-images/0NYJJqvsCLnBCjuxDjPkIVKTWvIksfSsxUrUbIRG.jpg', '2022-11-09 18:01:11', '2022-11-09 18:01:11');

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
(1, 'program', 'program', 'program@gmail.com', NULL, '$2y$10$2nTEsbLuIjY8QgyjDrJbxOMhOPP/Ea6S/4CzAIqGzA5WH1IkuQa9y', 0, NULL, '2022-11-09 12:55:28', '2022-11-09 12:55:28'),
(2, 'HMTI', 'HMTI', 'hmti@uis.ac.id', NULL, '$2y$10$Ofhdy9UsAUvrsh.POQdibOzyL0FjbMU7R0h3As4F.ch/A3X3Zyn4K', 0, NULL, '2022-11-09 12:55:28', '2022-11-09 12:55:28');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
