-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 11, 2024 at 08:46 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `construction`
--

-- --------------------------------------------------------

--
-- Table structure for table `constructions`
--

CREATE TABLE `constructions` (
  `id` int(11) NOT NULL,
  `constructions_img` text DEFAULT NULL,
  `details_info` text DEFAULT NULL,
  `headline` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer_quote_request`
--

CREATE TABLE `customer_quote_request` (
  `customer_quote_request_id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_quote_request`
--

INSERT INTO `customer_quote_request` (`customer_quote_request_id`, `name`, `email`, `phone`, `message`) VALUES
(4, 'krushna', 'admin@admin.com', '7350675645', 'hooooooooo'),
(5, 'FarmHub', 'teacher@teacher.com', '7897654567', 'best company ever'),
(6, 'krushna', 'krushnaghadge01@gmail.com', '7350675645', 'gggg'),
(7, 'krushna', 'krushnaghadge01@gmail.com', '7350675645', 'kkkkkkk'),
(8, 'dada', 'krushnaghadge01@gmail.com', '7350675645', 'kkk'),
(9, 'sdvsfdvfsv', 'briskplus@123', 'svsfvfsa', 'svscv cs ');

-- --------------------------------------------------------

--
-- Table structure for table `quote_info`
--

CREATE TABLE `quote_info` (
  `quote_info_id` int(11) NOT NULL,
  `quote_title` text DEFAULT NULL,
  `quote_desc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quote_info`
--

INSERT INTO `quote_info` (`quote_info_id`, `quote_title`, `quote_desc`) VALUES
(5, 'welcome to the quate ', 'herwree quates presebt'),
(6, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `servicess`
--

CREATE TABLE `servicess` (
  `service_id` int(11) NOT NULL,
  `service_title` text DEFAULT NULL,
  `service_desc` text DEFAULT NULL,
  `service_image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicess`
--

INSERT INTO `servicess` (`service_id`, `service_title`, `service_desc`, `service_image`) VALUES
(11, 'banglow', '  A service is an act or use for which a consumer, firm, or government is willing to pay. Examples include work done by barbers, doctors, lawyers, mechanics, banks, insurance companies, and so on. Public services are those that society as a whole pays for. Wikipedia', '1682049263branding.png');

-- --------------------------------------------------------

--
-- Table structure for table `slider_details`
--

CREATE TABLE `slider_details` (
  `slider_details_id` int(11) NOT NULL,
  `slider_title` varchar(200) DEFAULT NULL,
  `slider_description` text DEFAULT NULL,
  `slider_button_text` varchar(200) DEFAULT NULL,
  `slider_button_link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_details`
--

INSERT INTO `slider_details` (`slider_details_id`, `slider_title`, `slider_description`, `slider_button_text`, `slider_button_link`) VALUES
(4, 'UP Construction', 'best construction ever plese visit aat a time of the month when you want to buy your first home at good location ', 'Visit Page', 'https://www.youtube.com/');

-- --------------------------------------------------------

--
-- Table structure for table `slider_image`
--

CREATE TABLE `slider_image` (
  `Slider_img_id` int(11) NOT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_image`
--

INSERT INTO `slider_image` (`Slider_img_id`, `image`) VALUES
(34, '1682509473images.png');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) NOT NULL,
  `name` text DEFAULT NULL,
  `job` text DEFAULT NULL,
  `review` text DEFAULT NULL,
  `reviever` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `job`, `review`, `reviever`) VALUES
(1, 'krushna', 'softwaredevloper', 'i am working as an fullstack devloper with 2 years expirience as an reactjs & codeignitor devloper', '1707636835krishna pass.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `constructions`
--
ALTER TABLE `constructions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_quote_request`
--
ALTER TABLE `customer_quote_request`
  ADD PRIMARY KEY (`customer_quote_request_id`);

--
-- Indexes for table `quote_info`
--
ALTER TABLE `quote_info`
  ADD PRIMARY KEY (`quote_info_id`);

--
-- Indexes for table `servicess`
--
ALTER TABLE `servicess`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `slider_details`
--
ALTER TABLE `slider_details`
  ADD PRIMARY KEY (`slider_details_id`);

--
-- Indexes for table `slider_image`
--
ALTER TABLE `slider_image`
  ADD PRIMARY KEY (`Slider_img_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `constructions`
--
ALTER TABLE `constructions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_quote_request`
--
ALTER TABLE `customer_quote_request`
  MODIFY `customer_quote_request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `quote_info`
--
ALTER TABLE `quote_info`
  MODIFY `quote_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `servicess`
--
ALTER TABLE `servicess`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `slider_details`
--
ALTER TABLE `slider_details`
  MODIFY `slider_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider_image`
--
ALTER TABLE `slider_image`
  MODIFY `Slider_img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
