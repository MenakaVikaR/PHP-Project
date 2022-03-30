-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 03:32 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kyarefitting_aa_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `leaderboard`
--

CREATE TABLE `leaderboard` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `sum_of_total` varchar(1000) NOT NULL,
  `average_of_total` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaderboard`
--

INSERT INTO `leaderboard` (`id`, `name`, `sum_of_total`, `average_of_total`) VALUES
(1, 'Madhavan Sankara Subramanian', '', ''),
(2, 'Uma Maheswari', '', ''),
(3, 'Siddharth  Ganapathy', '', ''),
(4, 'Akshaya Rajan', '', ''),
(5, 'Manoj Moorthy', '', ''),
(6, 'Subhalakshmi', '', ''),
(7, 'Sridhar K', '', ''),
(8, 'Abrar Sultana', '', ''),
(9, 'Karthika S Prem', '', ''),
(10, 'Saravanan k', '', ''),
(11, 'Dhamodharan  M', '', ''),
(12, 'Kavinraj Santhi Ilangovan', '', ''),
(13, 'Anusha Tennyson', '', ''),
(14, 'Porchelvan S', '', ''),
(15, 'Udaya Arun', '', ''),
(16, 'Lalitha Rashmi P', '', ''),
(17, 'Anjali S', '', ''),
(18, 'Hari Prasad B.K', '', ''),
(19, 'Yuvaraj Dhanaraju', '', ''),
(20, 'Ashwin S', '', ''),
(21, 'Uma Maheswari', '', ''),
(22, 'Yashaswini Balasubramanyam', '', ''),
(23, 'Menaka Raja', '', ''),
(24, 'Anunita ashni', '', ''),
(25, 'Prasanth Anandhan', '', ''),
(26, 'Srinandhini Manickam', '', ''),
(27, 'Kaliyarasi', '', ''),
(28, 'Ananth Raguram', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `today_date` varchar(1000) NOT NULL,
  `fibrerich_food` varchar(1000) NOT NULL,
  `porteinrich_food` varchar(1000) NOT NULL,
  `watercontent_food` varchar(1000) NOT NULL,
  `seasonal_fruits` varchar(1000) NOT NULL,
  `water_litres` varchar(1000) NOT NULL,
  `morning_evening_sunlight` varchar(1000) NOT NULL,
  `activity_name` varchar(1000) NOT NULL,
  `activity_points` varchar(1000) NOT NULL,
  `activity_photos` varchar(1000) NOT NULL,
  `offscreen_time` varchar(1000) NOT NULL,
  `metal_wellbeing` varchar(1000) NOT NULL,
  `steps_count` varchar(1000) NOT NULL,
  `stepscount_photo` varchar(1000) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `name`, `today_date`, `fibrerich_food`, `porteinrich_food`, `watercontent_food`, `seasonal_fruits`, `water_litres`, `morning_evening_sunlight`, `activity_name`, `activity_points`, `activity_photos`, `offscreen_time`, `metal_wellbeing`, `steps_count`, `stepscount_photo`, `total`) VALUES
(345, '', 'Menaka Raja', '2021-11-26', '0', 'porteinrich-food/OFFER-MAILER-NOV-18_01.png', 'watercontent-food/OFFER-MAILER-NOV-18_04.png', 'seasonalfruits-food/OFFER-MAILER-NOV-18_08.png', '50', 'morning-evening/OFFER-MAILER-NOV-18_09.png', 'zumba', '95', 'activity-photo/OFFER-MAILER-NOV-18_08.png', '25', '120', '897', 'steps-count/OFFER-MAILER-NOV-18_05.png', '272.47'),
(346, '', 'Lalitha Rashmi P', '2021-11-25', '0', '0', 'watercontent-food/OFFER-MAILER-NOV-18_09.png', '0', '0', '0', 'zumba', '95', 'activity-photo/OFFER-MAILER-NOV-18_08.png', '70', '0', '987', '0', '118.37'),
(347, '', 'Uma Maheswari', '2021-11-26', '0', '0', 'watercontent-food/OFFER-MAILER-NOV-18_09.png', '0', '50', '0', 'zumba', '0', '0', '50', '120', '789', '0', '237.89');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leaderboard`
--
ALTER TABLE `leaderboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=348;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
