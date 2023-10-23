-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 19, 2023 at 01:56 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogsjt`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(25) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `mail` varchar(40) NOT NULL,
  `mdp` varchar(255) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `mail`, `mdp`) VALUES
(1, 'Galcenor', 'lenny@gmail.com', '$2y$10$4hguhb1eGyUvk6BdL0SVCO9h8NKwSDf9Sjv0kcoeyLKx4vuv3fL8m'),
(2, 'a', 'lm@gmail.com', '$2y$10$WUXJxfaSfA.F3HboE51xauj9W4By1uI7GsQ0OcHg9oH6ECzzaNceS'),
(3, 'dada', 'dsqdqs@dada.com', '$2y$10$tEZ2gQ//UGC7JoIGSD/q4OkZuuhEV5YQPLm4tJgrP5QEVNeIhobku'),
(4, 'GalcyAz', 'lenny@gmail.com', '$2y$10$2v3AJR7P5JjzWQR37xrX2uylo1A2avfXvyX9gueKMfL5tqJZ/fdOG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
