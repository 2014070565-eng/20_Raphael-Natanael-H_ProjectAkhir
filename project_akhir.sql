-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2025 at 02:46 AM
-- Server version: 8.0.43
-- PHP Version: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_akhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud_fitness`
--

CREATE TABLE `crud_fitness` (
  `id` int NOT NULL,
  `nama_alat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `kode_alat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_dibuat` date NOT NULL,
  `jumlah_alat` int NOT NULL,
  `secbaru` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `asal_alat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crud_fitness`
--

INSERT INTO `crud_fitness` (`id`, `nama_alat`, `kode_alat`, `tanggal_dibuat`, `jumlah_alat`, `secbaru`, `asal_alat`) VALUES
(7, 'treadmill', 'JOJOWELEK123', '2025-11-03', 3, 'Baru', 'Darmo '),
(11, 'crawlbars', 'M12378', '2025-11-20', 36, 'Baru', 'papua'),
(12, 'Barbels', 'MB23', '2025-11-27', 15, 'Baru', 'Sulawesi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `nama_lengkap`, `tanggal_lahir`) VALUES
(1, NULL, NULL, '$2y$10$VsqWe3w/0og/wbAkdCTtF.SOwkDtAINabYjIFtMJJPSfafFrQhm7W', 'admin', NULL),
(2, NULL, NULL, '$2y$10$RXryUtyIHQa.glbEQRJqo.x80tWB4x6lH27wPaf//VkAlwV1WcCfe', 'sofi', NULL),
(3, NULL, NULL, '$2y$10$JJ/1awoIXD.V2/QQgyxNyexyaz8aW52wimFoAs4WXPn7L9KZLK/mm', 'sofi', NULL),
(4, NULL, NULL, '$2y$10$mkS7v9EqltUs574wyvZxROTuS310ORInHbWfuneNNrLBC2qmFAzxq', 'haha', NULL),
(5, NULL, NULL, '$2y$10$ItiImcnLbS0Zu.jBkSB0VuQzo18A7QQa3iHtOUYMVi8nzuluN4kba', 'bamsut', '2025-11-05'),
(6, NULL, NULL, '$2y$10$g6dEuKuH6j73kYd6Ypk9fOWJmjyolLbIRZtAdJJS4FFNKrdtAEkBi', 'bamsut', '2001-12-29'),
(9, NULL, NULL, '$2y$10$y9CI83KRi9qd2HXPfslD4usa9trTFguy.VEdIDNwn0iVV7BUS6Blq', 'sofi', '2025-11-01'),
(10, NULL, NULL, '$2y$10$QcrFACxL0iIFH1.I3BfvHOvSt1oH4ennh7cCjvg7ny8lXnSQa4aKK', 'yoho', '2025-11-06'),
(11, 'joshhanan416@gmail.com', NULL, '$2y$10$YspEWhpt/6tBS/AljcFMsOTj3e9bUvId0gp1RxsqQsqHK9NWt03oW', 'ppp', '2025-06-17'),
(14, 'hahaah@gmail.com', NULL, '$2y$10$d44McfYXA.DvvN82UzPXoO4rm5m0SDvIk1Puul7OP1/jqPrST./zm', 'bamsut', '2025-10-29'),
(15, 'hahaaha@gmail.com', NULL, '$2y$10$j8NKFXtZBmJiXFkskea4AehvHeYzvTBQzoWo2H6eNlWosHJ/abH5i', 'bamsut', '2025-10-29'),
(16, 'ppp', NULL, '$2y$10$m5S6gvedftZhuNUKg5Tsg.DlpiYwPeoDvUHgiLT9jkIeKqVE6/oJS', 'bamsut', '2025-11-06'),
(17, 'hahaahaaa@gmail.com', NULL, '$2y$10$lF6aq6mXguasI7EFniXx4.UpEHu12EbCeWh83TmWhAdA9o0skIK2y', 'bamsut', '2025-10-29'),
(18, 'minjang@gmail.com', NULL, '$2y$10$.fp5nE1ocPLJ9FQ3OSsTnucw5H9R6Eb4W2cbdA6awtI5OR/MgJbya', 'mintjiang', '2025-11-06'),
(19, 'pepel@gmail.com', NULL, '$2y$10$d/xuetHY2l.f38wYGQq6xuaTkJ66NWWPJP0p/OlZJ9p64zawREqKe', 'pepel', '2025-11-13'),
(20, '77@gmail.com', NULL, '$2y$10$TtD63.iwHwoMTVMMjQSv6uQ/zAbNIWWu68Szxar/sqTJNBHYRZZ6G', '77', '2025-11-04'),
(21, 'helo07@gmail.com', NULL, '$2y$10$Ah8QQDIp76png0uIv/CfiOIyVA12nEe/qC2dslVnfoY3daAgKwnQi', 'Raph', '2025-11-05'),
(24, 'helo007@gmail.com', '12', '$2y$10$ed4O56YHRTGoeh8SeHgnhO.qdwH8O5UUunp4w/cXdSZ4ci9R7uixq', 'yoho', '2025-11-05'),
(25, 'jonathan@gmail.com', 'Jojo', '$2y$10$ViCCMGKrmgiHXdgtQd9lbuYu2QxlDww6ZySWlA9s3bc4VNS7gGjvS', 'Jonathan Wijaya Oei', '2025-11-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud_fitness`
--
ALTER TABLE `crud_fitness`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud_fitness`
--
ALTER TABLE `crud_fitness`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
