-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2023 at 11:27 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_vonziel_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `editeducations`
--

CREATE TABLE `editeducations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iconEdu` varchar(255) NOT NULL,
  `titleEdu` varchar(255) NOT NULL,
  `nameEdu` varchar(255) NOT NULL,
  `linkEdu` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `editeducations`
--

INSERT INTO `editeducations` (`id`, `iconEdu`, `titleEdu`, `nameEdu`, `linkEdu`, `created_at`, `updated_at`, `user_id`) VALUES
(2, '1686903523.png', 'Web Programming Fundamentals', 'Camp404, 2022', 'https://camp404.com/cert/CCPR229B16151KBVJIY', '2023-06-16 01:18:43', '2023-06-16 01:18:43', 5),
(5, '1686903909.png', 'The Complete Web Developer in 2023 Zero To Mastery', 'Udemy, 2023', 'https://www.udemy.com/certificate/UC-5191dec1-92d3-4e54-a780-6f7e256d5d44/', '2023-06-16 01:25:09', '2023-06-16 01:25:09', 5),
(6, '1686904068.png', '5th Place in the Writing Competition', 'Sinergi Group, 2022', 'https://drive.google.com/file/d/1l8lKwr1nJMoR4VUodNvGMO5MJt2jPsdP/view', '2023-06-16 01:27:48', '2023-06-16 01:27:48', 5);

-- --------------------------------------------------------

--
-- Table structure for table `editprofiles`
--

CREATE TABLE `editprofiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profilePic` varchar(255) DEFAULT NULL,
  `profileName` varchar(255) NOT NULL,
  `profileJob` varchar(255) NOT NULL,
  `profileDesc` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `editprofiles`
--

INSERT INTO `editprofiles` (`id`, `profilePic`, `profileName`, `profileJob`, `profileDesc`, `created_at`, `updated_at`, `user_id`) VALUES
(1, '1686905800.jpg', 'Hello, I am Daniel', 'I am Fullstack Developer', 'Hello, I specialize in crafting customized websites, Android, and iOS applications tailored to your unique requirements. With expertise in a wide range of technologies including HTML, CSS, JavaScript, PHP, and MySQL, I bring your ideas to life. I am proficient in utilizing powerful frameworks such as Laravel, React Native, and ReactJS to deliver seamless and innovative solutions', '2023-06-15 22:38:47', '2023-06-16 01:56:40', 5);

-- --------------------------------------------------------

--
-- Table structure for table `editprojects`
--

CREATE TABLE `editprojects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imageProject` varchar(255) DEFAULT NULL,
  `projectTitle` varchar(255) NOT NULL,
  `projectLink` varchar(255) NOT NULL,
  `projectDesc` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `editprojects`
--

INSERT INTO `editprojects` (`id`, `imageProject`, `projectTitle`, `projectLink`, `projectDesc`, `created_at`, `updated_at`, `user_id`) VALUES
(6, '1686906886.jpg', 'Vonziel Blog', 'http://vonzielblog.com/', 'This project I created a blog and works with the backend. You can try it too! Built with HTML, CSS, and pure PHP to practice CRUD on MySQL databases.', '2023-06-16 02:14:46', '2023-06-16 02:14:46', 5),
(7, '1686907039.jpg', 'lilexz', 'https://lilexz.vercel.app/', 'Made with HTML, CSS, and PHP purely to practice about CRUD in MySQL database. A project inspired by the work of my friend who is a musician who now has thousands of listeners every month as well as to practice responsive web.', '2023-06-16 02:17:19', '2023-06-16 02:17:19', 5),
(8, '1686907103.jpg', 'Frevu Food', 'https://frevu.vercel.app/', 'This is one of my first projects inspired by the theme of healthy food. I still need to learn more about payment gateways.', '2023-06-16 02:18:23', '2023-06-16 02:18:23', 5),
(9, '1686907180.jpg', 'Niel Cube', 'https://cubing-niel.vercel.app/', 'Landing Page about Rubik\'s. It occurred to me to create a website about rubik\'s. Then decided to give it a try.', '2023-06-16 02:19:40', '2023-06-16 02:19:40', 5),
(10, '1686907224.jpg', 'TeddyNiel Bear', 'https://teddynielbear.vercel.app/', 'A website for selling teddy bears. This is my first time building responsive web as a Front-end developer.', '2023-06-16 02:20:24', '2023-06-16 02:20:24', 5);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2023_06_10_025904_create_posts_table', 2),
(11, '2023_06_15_131627_edit__project', 3),
(13, '2023_06_16_052131_profile_descrition', 4),
(16, '2023_06_16_075616_edit_education', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `shortdesc` varchar(255) NOT NULL,
  `textblog` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `created_at`, `updated_at`, `title`, `shortdesc`, `textblog`, `image`, `user_id`) VALUES
(8, '2023-06-12 05:31:34', '2023-06-12 05:31:34', 'Flexing', 'Flexing on another account!', 'asdfasdfasf asdf asdfas fds', '1686573094.jpg', 6),
(11, '2023-06-14 07:57:57', '2023-06-14 07:57:57', 'Formative Assesment', 'Ngerjain summative', 'asdfas asdf', '1686754677.png', 6),
(12, '2023-06-14 08:04:03', '2023-06-14 08:04:03', 'Mollitia maxime offi', 'Qui adipisci blandit', 'Anim iusto velit cor', '1686755043.png', 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Daniel Maheswara Wicaksono', 'danielmw111@gmail.com', NULL, '$2y$10$3HQ17sIcRL1f1aLyZbGr6eQHblGsphsaPAG9r3ufuGmw2fyOyMQfi', NULL, '2023-06-09 05:10:47', '2023-06-09 05:10:47'),
(6, 'Darrel Prayata Wistara', 'darrelpw45@gmail.com', NULL, '$2y$10$eTAtGYCMtQuJMM2JBORPHuMVGBuuLviq3w.jlkz/7iPHwrOlnlJpi', NULL, '2023-06-09 20:21:57', '2023-06-09 20:21:57'),
(7, 'pebagew', 'gefuqywuw@mailinator.com', NULL, '$2y$10$6v.O/w2qL3pnqmBh1SbFsOSDFoHp0C3QmU9V44LSLYZ3.vW72PN4u', NULL, '2023-06-14 08:00:13', '2023-06-14 08:00:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `editeducations`
--
ALTER TABLE `editeducations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `editeducations_user_id_foreign` (`user_id`);

--
-- Indexes for table `editprofiles`
--
ALTER TABLE `editprofiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `editprofiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `editprojects`
--
ALTER TABLE `editprojects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `editprojects_user_id_foreign` (`user_id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `editeducations`
--
ALTER TABLE `editeducations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `editprofiles`
--
ALTER TABLE `editprofiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `editprojects`
--
ALTER TABLE `editprojects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `editeducations`
--
ALTER TABLE `editeducations`
  ADD CONSTRAINT `editeducations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `editprofiles`
--
ALTER TABLE `editprofiles`
  ADD CONSTRAINT `editprofiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `editprojects`
--
ALTER TABLE `editprojects`
  ADD CONSTRAINT `editprojects_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
