-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2023 at 06:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uccash`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `message_id` int(10) NOT NULL,
  `message_name` varchar(50) NOT NULL,
  `message_email` varchar(50) NOT NULL,
  `message_subject` varchar(500) NOT NULL,
  `message_content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donation_messages`
--

CREATE TABLE `donation_messages` (
  `donation_id` int(11) NOT NULL,
  `donation_date` varchar(50) NOT NULL,
  `donation_name` varchar(50) NOT NULL,
  `donation_phoneno` varchar(50) NOT NULL,
  `donation_panno` varchar(50) NOT NULL,
  `donation_email` varchar(50) NOT NULL,
  `donation_address1` varchar(50) NOT NULL,
  `donation_address2` varchar(50) NOT NULL,
  `donation_city` varchar(50) NOT NULL,
  `donation_district` varchar(50) NOT NULL,
  `donation_state` varchar(50) NOT NULL,
  `donation_zipcode` varchar(50) NOT NULL,
  `donation_country` varchar(50) NOT NULL,
  `donation_amount` varchar(50) NOT NULL,
  `donation_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`image_id`, `image_name`) VALUES
(15, '20231015080041_img-04.jpeg'),
(16, '20231015080111_img-05.jpeg'),
(17, '20231015080126_img-06.jpeg'),
(18, '20231015080144_img-07.jpeg'),
(21, '20231015080256_img-09.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `admin_id` int(10) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1001, 'testadmin@gmail.com', 'testadmin');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_messages`
--

CREATE TABLE `volunteer_messages` (
  `message_id` int(11) NOT NULL,
  `message_name` varchar(50) NOT NULL,
  `message_email` varchar(50) NOT NULL,
  `message_content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `donation_messages`
--
ALTER TABLE `donation_messages`
  ADD PRIMARY KEY (`donation_id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `volunteer_messages`
--
ALTER TABLE `volunteer_messages`
  ADD PRIMARY KEY (`message_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `message_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donation_messages`
--
ALTER TABLE `donation_messages`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `volunteer_messages`
--
ALTER TABLE `volunteer_messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
