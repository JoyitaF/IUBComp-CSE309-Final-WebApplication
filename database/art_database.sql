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
-- Database: `art_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `free`
--

CREATE TABLE `free` (
  `id` int(7) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `datum` datetime NOT NULL,
  `image_desc` text NOT NULL,
  `vote_count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `free`
--

INSERT INTO `free` (`id`, `image_url`, `fullName`, `email`, `datum`, `image_desc`, `vote_count`) VALUES
(1231231, 'uploads/1231231.jpg', 'Joyita Faruk', 'jf@gmail.com', '2023-09-02 00:58:08', 'Digital', 1),
(2021986, 'uploads/2021986.jpg', 'Sumaya', 'sumaya@iub.edu.bd', '2023-08-17 07:12:46', 'Acrylic on Canvas', 1),
(2200000, 'uploads/2200000.jpg', 'Eren Yeager', 'eren@email.com', '2023-08-17 07:10:14', 'Oil on Canvas', 0);

-- --------------------------------------------------------

--
-- Table structure for table `free_votes`
--

CREATE TABLE `free_votes` (
  `id` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `user_ip` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `free_votes`
--

INSERT INTO `free_votes` (`id`, `image_id`, `user_ip`) VALUES
(1, 2021986, '127.0.0.1'),
(2, 1231231, '127.0.0.1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `free`
--
ALTER TABLE `free`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `free_votes`
--
ALTER TABLE `free_votes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_id` (`image_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `free_votes`
--
ALTER TABLE `free_votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `free_votes`
--
ALTER TABLE `free_votes`
  ADD CONSTRAINT `free_votes_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `free` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
