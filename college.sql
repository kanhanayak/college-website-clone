-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 03:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `clg_stud`
--

CREATE TABLE `clg_stud` (
  `id` int(16) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clg_stud`
--

INSERT INTO `clg_stud` (`id`, `name`, `username`, `email`, `password`, `phone`) VALUES
(1, 'gyana', 'gyanaranjan sahoo', 'nayakkanha060@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', '9078329272'),
(2, 'kanha ', 'kanha nayak', 'nayak@gmail.com', '202cb962ac59075b964b07152d234b70', '9078329272'),
(3, 'sonali don', 'sonali swain', 'nayakkanha@gmail.com', '1ce927f875864094e3906a4a0b5ece68', '8594829319'),
(4, 'rohit ', 'rohit samal', 'rohit@gmail.com', '22ac3c5a5bf0b520d281c122d1490650', '8594829319'),
(5, 'gyana', 'gyanaranjan sahoo', 'nayakkanha060@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', '9078329272'),
(6, 'gyana', 'gyanaranjan sahoo', 'nayakkanha060@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', '9078329272'),
(7, 'gyana', 'gyanaranjan sahoo', 'nayakkanha060@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', '9078329272'),
(8, 'gyana', 'gyanaranjan sahoo', 'nayakkanha060@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', '9078329272'),
(9, 'gyana', 'gyanaranjan sahoo', 'nayakkanha060@gmail.com', '202cb962ac59075b964b07152d234b70', '9078329272');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clg_stud`
--
ALTER TABLE `clg_stud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clg_stud`
--
ALTER TABLE `clg_stud`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
