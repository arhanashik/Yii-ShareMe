-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2018 at 01:23 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_share_me`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `privacy` varchar(20) NOT NULL,
  `share_with` varchar(500) NOT NULL,
  `post` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`id`, `user_id`, `user_type`, `privacy`, `share_with`, `post`, `image`, `date`) VALUES
(9, 1, 'admin', 'agents only', '', 'MY Profile Picture.', '1520410118aaa.jpg', '2018-03-07 08:08:38'),
(10, 1, 'admin', 'custom', '2', 'Only for A', '1520415366pic.jpg', '2018-03-07 09:36:06'),
(11, 2, 'agent', 'private', '', 'aaaaa', '1520415688tiger.jpg', '2018-03-07 09:41:28'),
(14, 5, 'client', 'clients only', '', 'My private post', '1520492944tiger.jpg', '2018-03-08 07:09:04'),
(15, 3, 'client', 'public', '', 'My public post', '1520493923pic2.jpg', '2018-03-08 07:25:23'),
(16, 2, 'agent', 'custom', '3', 'Pritam will see this', '1520494099pic.jpg', '2018-03-08 07:28:19'),
(17, 5, 'client', 'custom', '2', 'Only sifu will see that', '1520502960pic.jpg', '2018-03-08 09:56:00'),
(18, 7, 'agent', 'public', '', 'My Clients will see this', '1520508567pic2.jpg', '2018-03-08 11:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(16) DEFAULT NULL,
  `user_type` varchar(10) DEFAULT NULL,
  `boss` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `email`, `password`, `user_type`, `boss`) VALUES
(1, 'Arhan Ashik', 'admin@gmail.com', 'admin', 'admin', ''),
(2, 'Sifu', 'agent1@gmail.com', 'agent1', 'agent', ''),
(3, 'Pritam', 'client1@gmail.com', 'client1', 'client', '7'),
(5, 'Rujel', 'client2@gmail.com', 'client2', 'client', '2'),
(7, 'Shawki', 'agent2@gmail.com', 'agent2', 'agent', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
