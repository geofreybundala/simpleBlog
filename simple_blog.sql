-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2019 at 02:59 PM
-- Server version: 5.7.26-0ubuntu0.19.04.1
-- PHP Version: 7.3.6-1+ubuntu19.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(191) NOT NULL,
  `comment` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `comment`) VALUES
(1, 51, 'sdjhfasdjkjhdklaj'),
(2, 51, 'Nemo sint nesciunt'),
(3, 51, 'Rerum enim perferend new '),
(4, 51, 'new comment'),
(5, 51, 'new comment'),
(6, 51, 'new comment'),
(7, 52, 'hey there'),
(8, 52, 'hey there'),
(9, 52, 'hellow team'),
(10, 52, 'hellow team'),
(11, 52, 'hellow team'),
(12, 52, 'hellow team'),
(13, 50, 'hellow'),
(14, 50, 'hellow'),
(15, 50, 'hellow'),
(16, 50, 'Voluptas nostrum non'),
(17, 50, 'Porro vero sint dol'),
(18, 52, 'Fuga Et quod amet ');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `creation` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `image`, `creation`) VALUES
(49, 'Veritatis eos quo i', 'Vitae dolorum adipis', 'assets/images/black_rain_2-wallpaper-1366x768.jpg', 'Thursday 20 June 2019'),
(50, 'Voluptatem adipisci', 'Labore dolorem aut d', 'assets/images/a_single_green_tree_surrounded_by_dead_trees-wallpaper-1366x768.jpg', 'Thursday 20 June 2019'),
(51, 'Saepe ullam eligendi', 'Id in corporis expli', 'assets/images/colorful_waves-wallpaper-1366x768.jpg', 'Thursday 20 June 2019'),
(52, 'Sapiente excepteur s', 'Non dolorum doloremq', 'assets/images/bing_baby_turtle-wallpaper-1366x768.jpg', 'Thursday 20 June 2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
