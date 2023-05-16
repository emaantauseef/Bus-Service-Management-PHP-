-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2023 at 04:53 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket_management`
--

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_29_110415_create_tickets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `departure` date DEFAULT NULL,
  `return` date DEFAULT NULL,
  `from` enum('Faisalabad','Lahore','Islamabad','Rawalpindi','Multan') NOT NULL,
  `to` enum('Gujrawala','Quetta','Peshwar','Kamra','Karachi') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `name`, `contact_no`, `departure`, `return`, `from`, `to`, `created_at`, `updated_at`) VALUES
(5, 'Sean Baumbach J', '9870450685', '2022-05-14', '2022-05-05', 'Faisalabad', 'Gujrawala', NULL, NULL),
(8, 'Prof. Serena Collier I', '2868309467', '2023-04-30', '2023-05-07', 'Rawalpindi', 'Gujrawala', NULL, NULL),
(9, 'Margaret Effertz', '2467329541', '2022-03-08', '2023-08-12', 'Islamabad', 'Kamra', NULL, NULL),
(10, 'Adell Mante II', '2270635378', '2022-04-10', '2022-04-18', 'Multan', 'Kamra', NULL, NULL),
(11, 'Howard Bauch', '5546661707', '2022-05-31', '2024-01-26', 'Faisalabad', 'Peshwar', NULL, NULL),
(12, 'Dr. Isabel Runolfsdottir', '2685850561', '2022-05-21', '2022-05-27', 'Rawalpindi', 'Quetta', NULL, NULL),
(13, 'Vada Jones', '1527941106', '2023-01-28', '2023-10-12', 'Islamabad', 'Kamra', NULL, NULL),
(14, 'Benny Bartoletti', '2902461142', '2022-12-11', '2023-06-14', 'Multan', 'Quetta', NULL, NULL),
(15, 'Prof. Abel Anderson', '2322995431', '2023-09-23', '2023-08-26', 'Rawalpindi', 'Gujrawala', NULL, NULL),
(16, 'Prof. Arianna Torphy', '7643603580', '2022-10-08', '2024-01-10', 'Lahore', 'Kamra', NULL, NULL),
(17, 'Mrs. Lydia Langworth DDS', '2009347969', '2023-05-03', '2023-11-30', 'Islamabad', 'Gujrawala', NULL, NULL),
(18, 'Roman Labadie Jr.', '4059105155', '2023-01-24', '2024-01-01', 'Islamabad', 'Peshwar', NULL, NULL),
(19, 'Hollie Walsh', '9763829736', '2022-05-13', '2023-04-12', 'Faisalabad', 'Kamra', NULL, NULL),
(20, 'Ms. Itzel Schamberger', '8708496441', '2022-04-02', '2022-10-21', 'Lahore', 'Quetta', NULL, NULL),
(21, 'Robert Kessler', '9735866479', '2022-11-10', '2022-02-12', 'Islamabad', 'Peshwar', NULL, NULL),
(22, 'Hailey Smitham', '8482537955', '2022-04-10', '2022-05-06', 'Islamabad', 'Kamra', NULL, NULL),
(23, 'Claudie Smith', '2684686565', '2023-05-24', '2023-09-25', 'Islamabad', 'Peshwar', NULL, NULL),
(24, 'Jerald Luettgen III', '6144295155', '2023-05-16', '2024-01-11', 'Multan', 'Gujrawala', NULL, NULL),
(25, 'Miss Claudine McClure MD', '7813565901', '2023-09-21', '2022-03-13', 'Islamabad', 'Gujrawala', NULL, NULL),
(26, 'Wendy Friesen', '9148362908', '2024-01-22', '2023-04-29', 'Rawalpindi', 'Gujrawala', NULL, NULL),
(27, 'Xavier Emmerich', '1354653208', '2023-12-05', '2022-08-06', 'Multan', 'Quetta', NULL, NULL),
(28, 'Mrs. Geraldine Mayert I', '6619802347', '2022-08-20', '2023-09-19', 'Islamabad', 'Quetta', NULL, NULL),
(29, 'Meta Morissette', '2479232564', '2022-11-23', '2023-08-22', 'Multan', 'Gujrawala', NULL, NULL),
(30, 'Mr. Dustin Schinner MD', '5828396465', '2022-02-11', '2022-04-27', 'Islamabad', 'Quetta', NULL, NULL),
(31, 'Gabrielle Goyette', '2165120368', '2022-06-21', '2023-12-04', 'Faisalabad', 'Karachi', NULL, NULL),
(32, 'Winona McGlynn', '8786995226', '2023-06-18', '2024-01-03', 'Faisalabad', 'Peshwar', NULL, NULL),
(33, 'Reginald Botsford', '6006738833', '2022-05-13', '2022-06-22', 'Islamabad', 'Gujrawala', NULL, NULL),
(34, 'Prof. Levi Farrell MD', '6567114788', '2023-07-23', '2022-03-09', 'Islamabad', 'Quetta', NULL, NULL),
(35, 'Vickie Johnston', '9334581590', '2022-06-11', '2023-09-23', 'Lahore', 'Peshwar', NULL, NULL),
(36, 'Berry Oberbrunner V', '6965882116', '2022-06-11', '2022-03-28', 'Lahore', 'Karachi', NULL, NULL),
(37, 'Dr. Toney Ratke', '6134499836', '2022-11-10', '2022-04-02', 'Rawalpindi', 'Gujrawala', NULL, NULL),
(38, 'Mr. Judson Stokes', '2035723407', '2022-04-20', '2022-04-02', 'Multan', 'Peshwar', NULL, NULL),
(39, 'Kaden Zulauf', '6408570868', '2023-01-19', '2022-09-10', 'Islamabad', 'Kamra', NULL, NULL),
(40, 'Loyal Beer V', '1267227310', '2023-03-11', '2023-06-20', 'Islamabad', 'Kamra', NULL, NULL),
(41, 'Nannie Kessler', '4783815163', '2023-01-27', '2023-01-15', 'Lahore', 'Peshwar', NULL, NULL),
(42, 'Constance Becker Sr.', '8897237829', '2023-09-03', '2023-12-24', 'Multan', 'Gujrawala', NULL, NULL),
(43, 'Krystina Paucek', '4073205758', '2022-05-12', '2023-01-04', 'Lahore', 'Quetta', NULL, NULL),
(44, 'Catalina Sanford', '3397060465', '2022-06-13', '2023-06-29', 'Islamabad', 'Peshwar', NULL, NULL),
(45, 'Jaren Bins', '3116166109', '2022-02-02', '2024-01-17', 'Faisalabad', 'Gujrawala', NULL, NULL),
(46, 'Branson Vandervort', '6937994017', '2023-01-07', '2023-03-28', 'Faisalabad', 'Kamra', NULL, NULL),
(47, 'Mr. Maynard Koelpin', '3977950323', '2022-07-21', '2022-06-11', 'Faisalabad', 'Quetta', NULL, NULL),
(48, 'Teagan Vandervort', '3719852055', '2023-05-08', '2023-10-09', 'Rawalpindi', 'Karachi', NULL, NULL),
(49, 'Orin Bernhard', '2379929712', '2022-10-02', '2022-03-08', 'Islamabad', 'Kamra', NULL, NULL),
(50, 'Prof. Jordi Mayer V', '7693395396', '2023-03-17', '2023-04-11', 'Islamabad', 'Peshwar', NULL, NULL),
(51, 'Mr. Cooper Tremblay', '8902777942', '2023-04-29', '2023-09-25', 'Islamabad', 'Quetta', NULL, NULL),
(52, 'Francisca Jacobi', '2145430046', '2022-05-16', '2022-04-11', 'Multan', 'Kamra', NULL, NULL),
(53, 'Dr. Brandyn Abbott', '4773326664', '2022-08-25', '2022-11-18', 'Multan', 'Peshwar', NULL, NULL),
(54, 'Domenic Collier', '1277320368', '2022-09-24', '2022-10-20', 'Lahore', 'Kamra', NULL, NULL),
(55, 'Macie Gerlach', '9655190004', '2022-02-13', '2023-08-29', 'Faisalabad', 'Karachi', NULL, NULL),
(56, 'Dr. Wade Franecki', '9094867627', '2023-09-07', '2023-07-23', 'Lahore', 'Gujrawala', NULL, NULL),
(57, 'Yessenia Gerhold PhD', '3376289837', '2022-12-18', '2023-08-22', 'Multan', 'Karachi', NULL, NULL),
(58, 'Dayton Bogisich', '9994433777', '2022-04-13', '2023-10-11', 'Islamabad', 'Karachi', NULL, NULL),
(59, 'Laney Ullrich', '2162701351', '2023-09-24', '2022-05-19', 'Islamabad', 'Peshwar', NULL, NULL),
(60, 'Murphy Hodkiewicz', '6422559065', '2024-01-19', '2022-03-21', 'Faisalabad', 'Kamra', NULL, NULL),
(61, 'Clemmie Brakus', '4334537306', '2022-11-25', '2022-06-21', 'Islamabad', 'Karachi', NULL, NULL),
(62, 'Mr. Raymundo Barrows DDS', '3182579425', '2023-01-25', '2022-09-10', 'Lahore', 'Kamra', NULL, NULL),
(63, 'Rosendo Crona', '9389045551', '2023-10-16', '2022-12-08', 'Islamabad', 'Peshwar', NULL, NULL),
(64, 'Mrs. Viva Conroy III', '6036553904', '2023-03-23', '2023-03-11', 'Islamabad', 'Karachi', NULL, NULL),
(65, 'Eino Predovic', '8601208050', '2022-06-09', '2023-05-20', 'Multan', 'Peshwar', NULL, NULL),
(66, 'Mr. Carson Gislason', '3085059156', '2022-07-01', '2023-11-16', 'Lahore', 'Kamra', NULL, NULL),
(67, 'Ova Abshire', '7996482050', '2023-12-28', '2023-07-05', 'Islamabad', 'Peshwar', NULL, NULL),
(68, 'Wiley Legros', '3845220183', '2022-04-02', '2023-02-07', 'Rawalpindi', 'Peshwar', NULL, NULL),
(69, 'Whitney Kling', '5101218712', '2022-06-08', '2023-08-09', 'Multan', 'Karachi', NULL, NULL),
(70, 'Lorine Ziemann DVM', '2097797503', '2022-04-05', '2023-02-20', 'Lahore', 'Karachi', NULL, NULL),
(71, 'Rosalinda McLaughlin', '9592698317', '2022-10-28', '2022-02-21', 'Lahore', 'Quetta', NULL, NULL),
(72, 'Dr. Geraldine Hyatt DDS', '4568104834', '2023-03-19', '2023-03-03', 'Rawalpindi', 'Peshwar', NULL, NULL),
(73, 'Piper Gutmann', '5654402167', '2023-09-21', '2023-01-17', 'Faisalabad', 'Kamra', NULL, NULL),
(74, 'Carolanne Spencer III', '6360938133', '2022-02-27', '2023-09-02', 'Multan', 'Kamra', NULL, NULL),
(75, 'Dr. Lillian Zemlak', '4974619367', '2022-09-01', '2023-09-07', 'Faisalabad', 'Peshwar', NULL, NULL),
(76, 'Aida Cummerata I', '1976397569', '2023-10-07', '2023-04-06', 'Rawalpindi', 'Karachi', NULL, NULL),
(77, 'Destin Gleason', '5843973957', '2022-09-09', '2022-06-06', 'Faisalabad', 'Gujrawala', NULL, NULL),
(78, 'Dr. Olga Lebsack', '6449050083', '2023-10-27', '2022-02-21', 'Lahore', 'Karachi', NULL, NULL),
(79, 'Reta Veum', '1580575941', '2023-09-13', '2022-07-13', 'Multan', 'Kamra', NULL, NULL),
(80, 'Annie Sipes', '1308577156', '2022-07-20', '2023-08-01', 'Lahore', 'Karachi', NULL, NULL),
(81, 'Dr. Kennedy Walker', '6515683046', '2022-02-14', '2022-08-10', 'Multan', 'Karachi', NULL, NULL),
(82, 'Daren Predovic', '5038209115', '2022-04-03', '2023-07-12', 'Faisalabad', 'Kamra', NULL, NULL),
(83, 'Brenda Ziemann', '1222170894', '2023-07-21', '2022-04-04', 'Faisalabad', 'Gujrawala', NULL, NULL),
(84, 'Mr. Fletcher Pacocha DVM', '6589717009', '2022-12-20', '2023-12-15', 'Rawalpindi', 'Quetta', NULL, NULL),
(85, 'Jermey Hessel', '9488882899', '2023-02-03', '2023-12-27', 'Lahore', 'Kamra', NULL, NULL),
(86, 'Mrs. Adella Nikolaus', '1309544001', '2023-10-22', '2022-05-27', 'Islamabad', 'Kamra', NULL, NULL),
(87, 'Geovanni Rodriguez III', '4348762448', '2022-10-05', '2022-02-15', 'Lahore', 'Peshwar', NULL, NULL),
(88, 'Prof. Taya Robel', '7049658058', '2022-10-05', '2024-01-03', 'Islamabad', 'Kamra', NULL, NULL),
(89, 'Kitty Schaefer', '5622711036', '2023-11-10', '2023-08-14', 'Multan', 'Peshwar', NULL, NULL),
(90, 'Marian Crooks', '8118981622', '2023-10-22', '2022-01-31', 'Multan', 'Karachi', NULL, NULL),
(91, 'Lance Stracke III', '9408477540', '2022-03-21', '2023-08-27', 'Islamabad', 'Karachi', NULL, NULL),
(92, 'Elmo Mayer II', '8184840745', '2022-11-14', '2022-07-15', 'Islamabad', 'Karachi', NULL, NULL),
(93, 'Donnie Cartwright', '9665406343', '2023-09-12', '2023-04-02', 'Islamabad', 'Gujrawala', NULL, NULL),
(94, 'Prof. Serena Kshlerin', '3030619695', '2023-10-26', '2023-08-16', 'Islamabad', 'Gujrawala', NULL, NULL),
(95, 'Jakayla Hauck', '4107709869', '2023-09-05', '2023-09-08', 'Islamabad', 'Peshwar', NULL, NULL),
(96, 'Jasmin Runolfsson', '3695293134', '2022-10-24', '2023-08-25', 'Lahore', 'Kamra', NULL, NULL),
(97, 'Fabian Morar', '7025494958', '2022-06-27', '2023-02-04', 'Islamabad', 'Gujrawala', NULL, NULL),
(98, 'Mr. Kelley Cormier', '1194758327', '2024-01-11', '2023-05-03', 'Multan', 'Quetta', NULL, NULL),
(99, 'Dr. Morris Stoltenberg', '8834935013', '2023-10-22', '2023-06-21', 'Faisalabad', 'Kamra', NULL, NULL),
(100, 'Stefanie Witting', '2581879066', '2023-09-08', '2022-10-06', 'Lahore', 'Gujrawala', NULL, NULL),
(101, 'Leanne D', '12345678', '2023-01-11', '2023-01-30', 'Faisalabad', 'Gujrawala', NULL, NULL),
(105, 'Leanne', '12345', '2023-01-01', NULL, 'Faisalabad', 'Gujrawala', NULL, NULL),
(106, 'Zainab Farooq', '123455555', '2023-03-01', '2023-02-02', 'Faisalabad', 'Gujrawala', NULL, NULL);

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
(1, 'zainab', 'zainabfarooq535@gmail.com', NULL, '12345', NULL, NULL, NULL),
(3, 'Leanne Decko', 'lennadocoo535@gmail.com', NULL, '12345', NULL, NULL, NULL),
(4, 'zainab', 'zainabfarooq@gmail.com', NULL, '12345', NULL, NULL, NULL),
(5, '', '', NULL, '', NULL, NULL, NULL),
(7, 'Ana idress', 'anaidress@gmail.com', NULL, '12345', NULL, NULL, NULL),
(8, 'Zainab Farooq', 'zyneefarooq535@gmail.com', NULL, '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL),
(9, 'Leanne Decko', 'Leeco@gmail.com', NULL, '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL),
(11, 'Seana Baumbach J', 'zainabfarooq53@gmail.com', NULL, '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tickets_contact_no_unique` (`contact_no`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
