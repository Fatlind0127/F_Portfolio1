-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2023 at 01:51 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eduflex`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `firstName` varchar(30) DEFAULT NULL,
  `lastName` varchar(30) DEFAULT NULL,
  `password` char(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `course` varchar(30) DEFAULT NULL,
  `roli` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstName`, `lastName`, `password`, `email`, `birthday`, `gender`, `course`, `roli`) VALUES
(8, 'malsori', 'Arifi1', '698d51a19d8a121ce581499d7b7016', 'mali@gmail.com', '0000-00-00', 'Mashkull', 'Physics', 0),
(10, 'malsor', 'Arifi', '4297f44b13955235245b2497399d7a93', 'malsorarifi@gmail.com', '2023-09-02', 'Femer', 'Math', 2),
(11, 'arianit', 'tershnjaku', '4297f44b13955235245b2497399d7a93', 'arianit@gmail.com', '2023-09-01', 'Femer', 'Math', 0),
(12, 'lis', 'arifi', '4297f44b13955235245b2497399d7a93', 'lisarifi@gmail.com', '2023-09-04', 'Femer', 'Math', 1),
(13, 'profi', 'profi', '4297f44b13955235245b2497399d7a93', 'profi@gmail.com', '2023-09-07', 'Femer', 'Math', 0),
(100, 'tarik', 'ajvazi', '123123', 'tarik@gmail.com', '0000-00-00', 'Mashkull', 'Biology', 0);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `fileName` varchar(50) DEFAULT NULL,
  `fileUpload` varchar(50) DEFAULT NULL,
  `fileDescription` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `fileName`, `fileUpload`, `fileDescription`) VALUES
(1, 'foto', 'chlorine.jpg', 'klor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
