-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2019 at 03:12 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arkademy`
--

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `region_id` int(5) NOT NULL,
  `address` text NOT NULL,
  `income` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `name`, `region_id`, `address`, `income`, `created_at`, `created_by`) VALUES
(1, 'Aldi', 2, 'dumy', 2000000, '2019-03-02 12:28:35', 1),
(2, 'Indra', 3, 'dumy', 3000000, '2019-03-02 00:00:00', 1),
(3, 'Rian', 2, 'dumy', 4000000, '2019-03-02 00:00:00', 1),
(4, 'Sandi', 2, 'dumy', 2500000, '2019-03-02 00:00:00', 1),
(5, 'Nurdin', 1, 'dumy', 5000000, '2019-03-02 00:00:00', 1),
(6, 'Bimo', 1, 'dumy', 4500000, '2019-03-02 00:00:00', 1),
(7, 'Ayu', 3, 'dumy', 3000000, '2019-03-02 00:00:00', 1),
(8, 'Wenda', 3, 'dumy', 3500000, '2019-03-02 00:00:00', 1),
(9, 'Fahmi', 1, 'dumy', 3500000, '2019-03-02 00:00:00', 1),
(10, 'Hendra', 4, 'dumy', 6000000, '2019-03-02 00:00:00', 1),
(11, 'Levi', 4, 'dumy', 4500000, '2019-03-02 00:00:00', 1),
(12, 'Lingga', 4, 'dumy', 5000000, '2019-03-02 00:00:00', 1),
(13, 'Silvi', 5, 'dumy', 2500000, '2019-03-02 00:00:00', 1),
(14, 'Yuda', 5, 'dumy', 3500000, '2019-03-02 00:00:00', 1),
(15, 'Ali', 5, 'dumy', 4000000, '2019-03-02 00:00:00', 1),
(16, 'Sani', 12, 'dumy', 3000000, '2019-03-02 14:55:06', 1),
(17, 'Asep', 12, 'dumy', 1000000, '2019-03-02 14:55:39', 1),
(18, 'Usep', 14, 'dumy', 100000, '2019-03-02 14:56:17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `name`, `created_at`, `created_by`) VALUES
(1, 'Jakarta', '2019-03-02 00:00:00', 1),
(2, 'Bogor', '2019-03-02 00:00:00', 1),
(3, 'Depok', '2019-03-02 00:00:00', 1),
(4, 'Bekasi', '2019-03-02 00:00:00', 1),
(5, 'Tanggerang', '2019-03-02 00:00:00', 1),
(12, 'Bandung', '2019-03-02 09:22:57', 1),
(14, 'Cianjur', '2019-03-02 09:45:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created_at`) VALUES
(1, 'aldian@gmail.com', '843194675a993b8d44246f923cd156e3', '2019-03-02 10:36:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`),
  ADD KEY `region` (`region_id`),
  ADD KEY `createdby` (`created_by`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created` (`created_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `createdby` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `region` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`);

--
-- Constraints for table `regions`
--
ALTER TABLE `regions`
  ADD CONSTRAINT `created` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
