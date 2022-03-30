-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2021 at 09:52 AM
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
  `photo_activity` varchar(1000) NOT NULL,
  `offscreen_time` varchar(1000) NOT NULL,
  `metal_wellbeing` varchar(1000) NOT NULL,
  `steps_count` varchar(1000) NOT NULL,
  `steps_image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `name`, `today_date`, `fibrerich_food`, `porteinrich_food`, `watercontent_food`, `seasonal_fruits`, `water_litres`, `morning_evening_sunlight`, `activity_name`, `activity_points`, `photo_activity`, `offscreen_time`, `metal_wellbeing`, `steps_count`, `steps_image`) VALUES
(136, 'menakar273@gmail.com', 'Menaka R', '2021-11-22', 'fibrerich-food/OFFER-MAILER-NOV-18_09.png', 'porteinrich-food/OFFER-MAILER-NOV-18_05.png', 'watercontent-food/OFFER-MAILER-NOV-18_05.png', 'seasonalfruits-food/OFFER-MAILER-NOV-18_06.png', '50 points', 'morning-evening/OFFER-MAILER-NOV-18_08.png', 'zumba', '75', 'activity-photo/OFFER-MAILER-NOV-18_08.png', '70 points', '120 points', '153', 'steps-count/OFFER-MAILER-NOV-18_05.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
