-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2022 at 06:21 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indagatrix`
--

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `id` int(11) NOT NULL,
  `display_name` varchar(50) NOT NULL,
  `about_me` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`id`, `display_name`, `about_me`) VALUES
(1, 'Real_User_1', 'I\'m definitely a real user and not a simple test case for display purposes.'),
(2, 'Real_User_2', 'I am also definitely a real person and not a simple display for test and showcase purposes!'),
(3, 'Real_User_3', 'Real (for real). '),
(4, 'Real_User_5', '....'),
(5, 'Real_User_5', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'testaccount1', '30cd8f28759494fba7ad5414065c0264360693748550dd054c66823fbd304fe6'),
(2, 'testaccount2', '51d309e113dad5c9a98f050a7cc48f2077b327b7c016881ad28a18403c379950'),
(3, 'testaccount3', '3247393f1dc92f68723db3153feedf5e10caff04ef427c8c156e61eefc930658'),
(4, 'testaccount4', '4da581b2eec6749f0a7aab44761167136b449afdd3d6ea2c257d97323465bb92'),
(5, 'testaccount5', '29da711052f194bd12d82817e2506c2ba7fd23d987bbb1229b5b5d60f88a285a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
