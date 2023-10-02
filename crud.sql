-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2023 at 10:40 PM
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
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `type` varchar(10) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`) VALUES
(1, 'hamza', 'hamza@gmail.com', 'hamza123', 'admin'),
(2, 'samim', 'samim@gmail.com', 'kabul123', 'user'),
(3, 'ayaz', 'ayaz@gmail.com', 'ayaz', 'admin'),
(4, 'elyas', 'elyas@gmail.com', 'afghan123', 'admin'),
(5, 'haleem', 'hallem32@gmail.com', '12345', 'user'),
(6, 'wahid', 'wahid@gmail.com', 'asdf123', 'admin'),
(7, 'shafi', 'shafi23@gmail.com', 'shafi!@#$', 'user'),
(8, 'omer', 'omer@gmail.com', 'omer32', 'admin'),
(16, 'my', 'my@gmail.com', 'bf103a46109df367a7de72d38435dd', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users_image`
--

CREATE TABLE `users_image` (
  `id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_image`
--

INSERT INTO `users_image` (`id`, `image`, `title`, `description`) VALUES
(1, '6518e3ca9bc334.00743595.jpg', 'First Post', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint harum recusandae provident praesentium. Nostrum, quae dolor laudantium voluptatibus soluta natus ea delectus cum omnis asperiores numquam quidem maiores similique ad.'),
(2, '6518e741ca6939.34258838.jpg', 'Second Post', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint harum recusandae provident praesentium. Nostrum, quae dolor laudantium voluptatibus soluta natus ea delectus cum omnis asperiores numquam quidem maiores similique ad.'),
(3, '6518e784e2ab86.03307314.jpg', 'New Post', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint harum recusandae provident praesentium. Nostrum, quae dolor laudantium voluptatibus soluta natus ea delectus cum omnis asperiores numquam quidem maiores similique ad.'),
(4, '6518e7f901c277.21329555.jpg', 'Damy', ' ipsum dolor sit, amet consectetur adipisicing elit. Sint harum recusandae provident praesentium. Nostrum, quae dolor laudantium voluptatibus soluta natus ea delectus cum omnis asperiores numquam quidem maiores similique ad.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_image`
--
ALTER TABLE `users_image`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users_image`
--
ALTER TABLE `users_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
