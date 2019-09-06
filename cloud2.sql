-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 06, 2019 at 01:22 AM
-- Server version: 5.7.26-0ubuntu0.18.04.1-log
-- PHP Version: 7.3.6-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloud2`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(4, 'admin', '$2y$13$6Xm0QvZ633itnmyoyoAHh.qikkaYpQdnMVUZV8AaG5.lsloEysxUq', 'user'),
(5, 'v', 'v', 'user'),
(11, 'rrrrrrrrrrrrr', '$2y$13$0kUE09BKtcF2WWnZHq77BuB4340OUPV3g/0PigSAUQaGxD5/LaVum', 'user'),
(14, 'admin5555', '$2y$13$.le6g5Vbi1UBy7q60H/KKO47msexnTpnWZ5HQeCCWO/2.ilJTwyru', 'user'),
(18, 'dfsdfsddddddddddddddd', '$2y$13$9axS4KsHjWmnev4kpUHp6.SVyFqkYCBVBK/kf/KxmSO8hmTMDQ1sW', 'user'),
(19, 'eeeeeeeeeeeee', '$2y$13$qURuMuwoQtZ2DyAmjVWGXOMhxIamwMPHCFqqGHnmI7vRopF7vswDu', 'user'),
(20, 'dddddddddddddd', '$2y$13$ZzjZpQwjV7GTs0dcGhSpKeqObA0D5DvxbctQRn1XewV6xg0iE7Yxm', 'user'),
(22, 'qwerty', '$2y$13$57ZncXkN0GuFOstJgQ0fGegfqymcrhRwVPHr/GEp.bf9XxDI/E2d.', 'user'),
(23, 'c', '$2y$13$4OTlxKm4ZdOSJsk2eNSolOjm0xDdngYAq2L732/DcAHvif2XCQJdu', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
