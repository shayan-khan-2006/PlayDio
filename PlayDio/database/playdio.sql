-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 09:54 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `playdio`
--

-- --------------------------------------------------------

--
-- Table structure for table `channels`
--

CREATE TABLE `channels` (
  `c_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `c_title` varchar(255) NOT NULL,
  `c_description` text DEFAULT NULL,
  `c_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `c_profile` varchar(500) DEFAULT NULL,
  `c_subscribers` int(11) DEFAULT 0,
  `c_videos` int(11) DEFAULT 0,
  `c_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_fname` varchar(100) NOT NULL,
  `u_lname` varchar(100) NOT NULL,
  `u_username` varchar(100) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_password` varchar(100) NOT NULL,
  `u_img` varchar(500) NOT NULL,
  `u_location` varchar(100) NOT NULL,
  `u_age` int(11) NOT NULL,
  `u_dob` date NOT NULL,
  `u_added` date NOT NULL,
  `u_phone` int(11) NOT NULL,
  `u_terms` varchar(100) NOT NULL,
  `u_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_fname`, `u_lname`, `u_username`, `u_email`, `u_password`, `u_img`, `u_location`, `u_age`, `u_dob`, `u_added`, `u_phone`, `u_terms`, `u_status`) VALUES
(1, 'Shayan', 'Khan', 'shayan_khan10', 'shayan@gmail.com', '123', '1678640284085.jpg', 'Pakistan', 16, '2023-06-14', '2023-06-14', 123456789, '', 'active'),
(2, 'Imran', 'Khan', 'imran_khan10', 'imrankhan@gmail.com', 'imran', 'ik.jpg', 'Pakistan', 70, '2023-06-16', '2023-06-15', 125125125, '', ''),
(3, 'Ali', 'Khan', 'ali_khan1', 'ali@gmail.com', 'ali123', 'download (2) - Copy.jfif', 'Pakistan', 25, '2023-06-27', '2023-06-27', 123456789, '', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_email` (`u_email`),
  ADD UNIQUE KEY `u_username` (`u_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `channels`
--
ALTER TABLE `channels`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `channels`
--
ALTER TABLE `channels`
  ADD CONSTRAINT `channels_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
