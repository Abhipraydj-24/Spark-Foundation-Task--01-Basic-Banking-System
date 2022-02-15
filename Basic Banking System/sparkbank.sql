-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2022 at 07:27 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparkbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(255) NOT NULL,
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `id`, `email`, `subject`, `message`) VALUES
('', 1, '', '', 'thank u'),
('', 2, '', '', 'I have to transfer money from my account but showing u have insufficient bank balance .'),
('abhipray', 3, 'abhiprayjawanjal@24gmail.com', 'abc', 'sfsdfgdf'),
('abhipray', 4, 'abhiprayjawanjal@24gmail.com', 'abc', 'sfsdfgdf');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sender` varchar(40) NOT NULL,
  `receiver` varchar(40) NOT NULL,
  `balance` int(11) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sender`, `receiver`, `balance`, `datetime`) VALUES
('john', 'will', 100000, '2022-01-02 21:27:16'),
('judy', 'john', 200000, '2022-01-02 21:31:56'),
('maureen', 'will', 1, '2022-01-02 21:34:41'),
('penny', 'john', 100000, '2022-01-02 21:35:49'),
('maureen', 'judy', 400, '2022-02-04 09:15:26'),
('will', 'penny', 5000, '2022-02-13 14:59:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(101, 'will', 'will@test.com', 295000),
(102, 'maureen', 'maureen@test.com', 299600),
(103, 'penny', 'penny@test.com', 305000),
(104, 'judy', 'judy@test.com', 300400),
(105, 'john', 'john@test.com', 300000),
(106, 'don', 'don@test.com', 500565),
(108, 'Jack', 'jack@gmail.com', 70000),
(109, 'Tony', 'tony@gmail.com', 80000),
(110, 'Bruce', 'bruce@gmail.com', 90000),
(107, 'Goku', 'goku@gmail.com', 6000),
(111, 'Kevin', 'kevin@gmail.com', 12000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
