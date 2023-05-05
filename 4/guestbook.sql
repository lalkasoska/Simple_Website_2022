-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 05:17 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guestbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

CREATE TABLE `guestbook` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guestbook`
--

INSERT INTO `guestbook` (`id`, `name`, `text`, `date`) VALUES
(1, 'Вятскин Дмитрий БПИ21-02', 'Это гостевая книга с использованием MySQL', '2022-11-17 15:26:09'),
(2, 'Вятскин Дмитрий БПИ21-02', '2', '2022-11-17 15:26:17'),
(3, 'Вятскин Дмитрий БПИ21-02', '3', '2022-11-17 15:26:18'),
(4, 'Вятскин Дмитрий БПИ21-02', '4', '2022-11-17 15:26:18'),
(5, 'Вятскин Дмитрий БПИ21-02', '5', '2022-11-17 15:53:13'),
(6, 'Вятскин Дмитрий БПИ21-02', '6', '2022-11-17 15:53:31'),
(7, 'Вятскин Дмитрий БПИ21-02', '7', '2022-11-17 15:53:32'),
(8, 'Вятскин Дмитрий БПИ21-02', '8', '2022-11-17 15:53:33'),
(9, 'Вятскин Дмитрий БПИ21-02', '9', '2022-11-17 15:53:34'),
(10, 'Вятскин Дмитрий БПИ21-02', '10', '2022-11-17 15:53:36'),
(11, 'Вятскин Дмитрий БПИ21-02', '11', '2022-11-17 15:53:37'),
(12, 'Вятскин Дмитрий БПИ21-02', '12', '2022-11-17 16:04:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guestbook`
--
ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guestbook`
--
ALTER TABLE `guestbook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
