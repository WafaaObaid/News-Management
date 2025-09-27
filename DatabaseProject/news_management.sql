-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2025 at 04:35 PM
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
-- Database: `news_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `category_kind` enum('Sport','Policy','Economical','Other') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_kind`) VALUES
(1, 'Gaza city', 'Policy'),
(2, 'football', 'Sport'),
(3, 'fashion', 'Other'),
(4, 'Basketball', 'Sport'),
(5, 'London news', 'Economical');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `category_name`, `content`, `user_id`, `image`, `deleted`) VALUES
(1, 'Ronaldo', 'football', 'Cristiano Ronaldo hit the target to help Al Nassr down reigning champions Al Ittihad and open up a three-point gap at the top of the Saudi Pro League.\r\n\r\nBoth sides came into the game with perfect records after three matches, but it was Ronaldo and company who stretched their 100 percent run into a fourth as they left King Abdullah Sports City with a 2-0 win.\r\n\r\nFormer Liverpool and Bayern Munich forward Sadio Mané opened the scoring in the ninth minute, hanging back in space at the far post and hammering home a volley after a tidy run and cross from Kingsley Coman.', 11, 'uploads/1758983305_ronaldo.jpg', 1),
(7, 'Israel kills dozens of Palestinians as Gaza war dr', 'Gaza city', 'More than 50 Palestinians have been killed in relentless Israeli attacks throughout the Gaza Strip, including a deadly strike that killed 11 family members.\r\nIsraeli Prime Minister Benjamin Netanyahu delivers a defiant speech at the UN General Assembly, attempting to justify his country’s genocide in Gaza while pledging to “finish the job”.', 12, 'uploads/1758983244_gaza.jpeg', 0),
(8, 'British attitudes to EU migrants can be shifted by', 'London news', 'A profile of a migrant NHS worker that taps into values of duty and hard work produces a 20-point swing in positivity towards EU immigration among British voters, according to a Cambridge psychology experiment.', 13, 'uploads/1758983292_cambridge.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`) VALUES
(1, 'ahmad', 'ahmad@gmail.com', '$2y$10$DAJQLZhdAeNV2/SXOqS8reAEsiWuOeIqrXpTzDpUZMJ', ''),
(2, 'alaa', 'alaa@gmail.com', '$2y$10$ORoDPgfzejwgKm1kaYl7FuPUYHkDB8ycpNSIfvXXRLm', 'Female'),
(3, 'wafaa', 'wafaa@gmail.com', '$2y$10$o733xCS90kOJ3X10Y1oWmOyLywg2bg8VsJSkceuRcra', 'Female'),
(4, 'hala', 'hala@gmail.com', '$2y$10$aF5iV.8ywLeAjWk8s63BJO4/p/525CdyYZS9oulL5lj', 'Female'),
(5, 'omar', 'omar@gmail.com', '$2y$10$3AtpNm4JvkVXNhmOcYb9a.fEWoB59M0LCXH92yEBYLP', 'Male'),
(6, 'mona', 'mona@gmail.com', 'mona123', 'Female'),
(8, 'sami', 'sami@gmail.com', '$2y$10$.Z8BG89y0fF54.sUB2ROEunJBj6lBp9avDifTKs0ncC', 'Male'),
(9, 'tala', 'tala@gmail.com', '$2y$10$Zfg/gk.2cYvrF9JLqxxuC.K8LjK0f.RkFhO1ijujfQPcpwvj6X1uW', 'Female'),
(10, 'nada', 'nada@gmail.com', '$2y$10$iwF.JT5jxsSLbaWb7X.NQejs46uyJfPuSdMqtgnvZnqfatjC0a8vy', 'Female'),
(11, 'sara', 'sara@gmail.com', '$2y$10$UIUsge/LeFk./vAolyWZzuBM2FzFsssVUlbiIG0iL7y0ZVLQTrI0q', 'Female'),
(12, 'wessam', 'wessam@gmail.com', '$2y$10$Luvn9exaHVovuecPrtWdJuHxKl1w9LnLpkN2FwC3pI8chy.tTYmla', 'Male'),
(13, 'mena', 'mena@gmail.com', '$2y$10$HRN7N.zNY0VteiWjCmuumegPYinh3K1VeBl4gMdbg71437NG9D8x.', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_category_name` (`category_name`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_name` (`category_name`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`category_name`) REFERENCES `category` (`category_name`),
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
