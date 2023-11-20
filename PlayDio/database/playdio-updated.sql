-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 05:38 AM
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

--
-- Dumping data for table `channels`
--

INSERT INTO `channels` (`c_id`, `user_id`, `c_title`, `c_description`, `c_added`, `c_profile`, `c_subscribers`, `c_videos`, `c_status`) VALUES
(11, 2, 'channel 1', 'this is testing channel', '2023-07-01 12:33:54', 'u.png', 2, 0, 'active'),
(12, 3, 'Channel2', 'this is testing channel', '2023-07-02 12:37:00', 'man-n.jpg', 1, 0, 'active'),
(13, 3, 'Channel3', 'this is testing channel', '2023-07-02 12:38:58', 'man-n.jpg', 0, 0, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `sub_id` int(11) NOT NULL,
  `channel_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subscription_date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`sub_id`, `channel_id`, `user_id`, `subscription_date`) VALUES
(6, 11, 3, '2023-07-02'),
(7, 12, 3, '2023-07-02'),
(8, 11, 2, '2023-07-05');

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

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `v_id` int(11) NOT NULL,
  `channel_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `v_title` varchar(255) NOT NULL,
  `v_description` text DEFAULT NULL,
  `v_file_path` varchar(255) NOT NULL,
  `v_added_t` varchar(100) NOT NULL,
  `v_added_d` varchar(100) NOT NULL,
  `v_thumbnail` varchar(255) DEFAULT NULL,
  `v_keyword` varchar(500) DEFAULT NULL,
  `v_views` int(11) DEFAULT 0,
  `v_likes` int(11) DEFAULT 0,
  `v_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`v_id`, `channel_id`, `user_id`, `v_title`, `v_description`, `v_file_path`, `v_added_t`, `v_added_d`, `v_thumbnail`, `v_keyword`, `v_views`, `v_likes`, `v_status`) VALUES
(5, 11, 2, 'this is first video', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi qui natus aliquam beatae,  vel possimus quis adipisci deserunt, commodi esse autem culpa? Ducimus porro voluptatum   praesentium culpa expedita. Reiciendis, error?', 'video.mp4', '05:08:27', '2023-07-01', 'thumbnail1.png', '#htmlcss', 3, 0, 'active'),
(6, 11, 2, 'this is second video', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi qui natus aliquam beatae,  vel possimus quis adipisci deserunt, commodi esse autem culpa? Ducimus porro voluptatum   praesentium culpa expedita. Reiciendis, error?', 'video.mp4', '05:14:25', '2023-07-01', 'thumbnail2.png', '#htmlcss, #js', 8, 0, 'active'),
(7, 11, 2, 'this is second video', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi qui natus aliquam beatae,  vel possimus quis adipisci deserunt, commodi esse autem culpa? Ducimus porro voluptatum   praesentium culpa expedita. Reiciendis, error?', 'video2.mp4', '02:11:24', '2023-07-02', 'thumbnail6.png', '#htmlcss, #js', 46, 0, 'active'),
(8, 12, 3, 'Rotating Earth video in space || earth is rotating in space', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi qui natus aliquam beatae,  vel possimus quis adipisci deserunt, commodi esse autem culpa? Ducimus porro voluptatum   praesentium culpa expedita. Reiciendis, error?', 'video3.mp4', '02:44:20', '2023-07-02', 'thumbnail7.png', '#rotatingearth , #space , #earth', 11, 0, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `views_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `views_a_time` varchar(50) DEFAULT NULL,
  `views_a_date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`views_id`, `video_id`, `user_id`, `views_a_time`, `views_a_date`) VALUES
(1, 7, 3, '15:02:16', '2023-07-02');

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
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `channel_id` (`channel_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_email` (`u_email`),
  ADD UNIQUE KEY `u_username` (`u_username`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`v_id`),
  ADD KEY `channel_id` (`channel_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`views_id`),
  ADD KEY `video_id` (`video_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `channels`
--
ALTER TABLE `channels`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `views_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `channels`
--
ALTER TABLE `channels`
  ADD CONSTRAINT `channels_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`u_id`);

--
-- Constraints for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD CONSTRAINT `subscribers_ibfk_1` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`c_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subscribers_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE;

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_ibfk_1` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`c_id`),
  ADD CONSTRAINT `videos_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`u_id`);

--
-- Constraints for table `views`
--
ALTER TABLE `views`
  ADD CONSTRAINT `views_ibfk_1` FOREIGN KEY (`video_id`) REFERENCES `videos` (`v_id`),
  ADD CONSTRAINT `views_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
