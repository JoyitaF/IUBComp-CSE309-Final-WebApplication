-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2023 at 09:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `black_and_white`
--

CREATE TABLE `black_and_white` (
  `id` int(7) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `datum` datetime NOT NULL,
  `image_desc` text NOT NULL,
  `vote_count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `black_and_white`
--

INSERT INTO `black_and_white` (`id`, `image_url`, `fullName`, `email`, `datum`, `image_desc`, `vote_count`) VALUES
(1800000, 'uploads/1800000.jpg', 'John Smith', 'johnsmith@email.com', '2023-08-16 18:56:15', 'iPhone 13 Pro Max', 0),
(1808392, 'uploads/1808392.jpg', 'Jane Doe', 'janedoe@email.com', '2023-08-16 18:02:58', 'Canon', 1),
(1900000, 'uploads/1900000.jpg', 'John Doe', 'johndo@email.com', '2023-08-16 18:54:33', 'Sony', 1),
(1911041, 'uploads/1911041.jpg', 'Joyita Faruk', 'joyitafaruk@gmail.com', '2023-08-16 17:56:33', 'Sony', 1),
(1930391, 'uploads/1930391.jpg', 'SK Sadia Tasnim Elma', '1930391@iub.edu.bd', '2023-08-16 17:58:44', 'Nikon', 1),
(2000000, 'uploads/2000000.jpg', 'Mary Sue', 'mary@email.com', '2023-08-16 18:56:52', 'Nikon', 0);

-- --------------------------------------------------------

--
-- Table structure for table `black_and_white_votes`
--

CREATE TABLE `black_and_white_votes` (
  `id` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `user_ip` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `black_and_white_votes`
--

INSERT INTO `black_and_white_votes` (`id`, `image_id`, `user_ip`) VALUES
(17, NULL, '127.0.0.1'),
(18, NULL, '127.0.0.1'),
(19, NULL, '127.0.0.1'),
(20, NULL, '127.0.0.1'),
(26, 1808392, '127.0.0.1'),
(28, 1900000, '127.0.0.1'),
(29, 1911041, '127.0.0.1'),
(30, 1930391, '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `vote_count` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_url`, `vote_count`) VALUES
(1, 'uploads/1.png', 1),
(2, 'uploads/2.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `street`
--

CREATE TABLE `street` (
  `id` int(7) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `datum` datetime NOT NULL,
  `image_desc` text NOT NULL,
  `vote_count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `street`
--

INSERT INTO `street` (`id`, `image_url`, `fullName`, `email`, `datum`, `image_desc`, `vote_count`) VALUES
(1811111, 'uploads/1811111.jpg', 'Jane Smith', 'janesmith@email.com', '2023-08-17 06:37:34', 'Canon 80D', 1),
(1999999, 'uploads/1999999.jpg', 'Emily Smith', 'emily@email.com', '2023-08-17 06:48:10', 'Nikon', 2),
(2020202, 'uploads/2020202.jpg', 'Ashley Benson', 'ashley@email.com', '2023-08-17 06:46:36', 'Sony Alpha 7c', 2),
(2100000, 'uploads/2100000.jpg', 'Joy Ahsan', 'joy@email.com', '2023-08-17 06:40:09', 'Canon 70D', 1),
(2121212, 'uploads/2121212.jpg', 'Aaron Smith', 'aaron@email.com', '2023-08-17 06:44:31', 'Sony A6000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `street_votes`
--

CREATE TABLE `street_votes` (
  `id` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `user_ip` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `street_votes`
--

INSERT INTO `street_votes` (`id`, `image_id`, `user_ip`) VALUES
(1, 1999999, '127.0.0.1'),
(2, 1811111, '127.0.0.1'),
(3, 1999999, '::1'),
(4, 2020202, '::1'),
(5, 2121212, '127.0.0.1'),
(6, 2100000, '127.0.0.1'),
(7, 2020202, '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `user_votes`
--

CREATE TABLE `user_votes` (
  `id` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `user_ip` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `black_and_white`
--
ALTER TABLE `black_and_white`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `black_and_white_votes`
--
ALTER TABLE `black_and_white_votes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_id` (`image_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `street`
--
ALTER TABLE `street`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `street_votes`
--
ALTER TABLE `street_votes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_id` (`image_id`);

--
-- Indexes for table `user_votes`
--
ALTER TABLE `user_votes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_id` (`image_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `black_and_white_votes`
--
ALTER TABLE `black_and_white_votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `street_votes`
--
ALTER TABLE `street_votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_votes`
--
ALTER TABLE `user_votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `black_and_white_votes`
--
ALTER TABLE `black_and_white_votes`
  ADD CONSTRAINT `black_and_white_votes_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `black_and_white` (`id`);

--
-- Constraints for table `street_votes`
--
ALTER TABLE `street_votes`
  ADD CONSTRAINT `street_votes_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `street` (`id`);

--
-- Constraints for table `user_votes`
--
ALTER TABLE `user_votes`
  ADD CONSTRAINT `user_votes_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
