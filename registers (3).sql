-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2024 at 02:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imageupload`
--

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `name`, `image_path`, `created_at`, `updated_at`) VALUES
(14, 'Farid', 'uploads/jtxvRxEEdif5kBKwc4dc4VPlVwi1o8uKIU4riNdL.jpg,uploads/A9h8zcIMjiQTXAeDNwI3A0Ecr4CUyi1m3Xw8Laqd.jpg,uploads/QiE9ea0ypOFW7WdN3YQNaQG5SItNqEcFalm0n3Rw.jpg,uploads/TTcx3aNNaRTAcwQ4IHhtpq59tP3OLueh8V6XGCLg.jpg', '2024-11-05 23:25:49', '2024-11-05 23:25:49'),
(17, 'iuyfd', 'uploads/r9DmXYALbokeLh0VA3oBkBCjC0Lw5hr4KPnMq6AY.jpg,uploads/kybMvCYTOypDVmggcAngLecAmGcXDF5Cv8VlOc3J.jpg,uploads/2kL426nN4Ksj45aA7c2EtBycgCxjPfJUGBtS52FI.jpg,uploads/8tYpCBe7hKU4JV803ri2fa4iOOdhiOFF1yyRA6x7.jpg', '2024-11-06 04:08:22', '2024-11-06 04:08:22'),
(24, 'abc', '', '2024-11-06 05:19:23', '2024-11-06 07:19:55'),
(25, 'Farid', 'uploads/Nv9dnu4chfA69g1wf3JgsglU9opYzOQQSG2aTYEQ.jpg,uploads/WEVZNGvGEB4532ObQ2ceZu1s4KwXTCME9RqjZavF.jpg', '2024-11-06 07:20:46', '2024-11-06 07:22:12'),
(26, 'Faridluhar', 'uploads/yTD605JAc91bZ4p9bC5w3IIHG0FuujEm0fJUnERX.jpg,uploads/zPPtOCuXrAWzYoEpnxwarWeXB2fym2yLN641vtw5.jpg', '2024-11-06 07:23:38', '2024-11-06 07:25:19'),
(27, 'Farid', 'uploads/VIlOP14DBDhHgbKKVrZ5fZcohH0vvU3lPs3ADqhS.jpg,uploads/wtbwN96AjWp4RStNobaXG1efFGI3VfktGJCVEDsw.jpg,uploads/xVWexTJEghoBOGZ6LnDkeuNIgFQza6D93Z3K3YyJ.jpg,uploads/pIy5ZeeK2BHa9ib63DgSC8in7m9OHLCPTndK649K.jpg', '2024-11-06 07:26:12', '2024-11-06 07:26:12'),
(28, 'abc', 'uploads/ISbPLctNb73cYm3cDlsQZNC1h3aEn7DTg50N5H5A.jpg,uploads/h92Dgr33LL7dyozIKavvEwujyIrQ8OnuS0yATjWN.jpg', '2024-11-06 07:27:06', '2024-11-06 07:27:34'),
(29, 'abcd', '', '2024-11-06 07:31:39', '2024-11-06 07:33:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
