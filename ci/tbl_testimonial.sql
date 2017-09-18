-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2017 at 01:08 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cofounderonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `testimonial_id` int(11) NOT NULL,
  `testimonial_name` varchar(50) NOT NULL,
  `testimonial_email` varchar(100) NOT NULL,
  `testimonial_mobile_no` varchar(20) NOT NULL,
  `testimonial_office_name` varchar(100) DEFAULT NULL,
  `testimonial_current_location` varchar(250) NOT NULL,
  `testimonial_feedback` varchar(1000) DEFAULT NULL,
  `testimonial_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`testimonial_id`, `testimonial_name`, `testimonial_email`, `testimonial_mobile_no`, `testimonial_office_name`, `testimonial_current_location`, `testimonial_feedback`, `testimonial_status`) VALUES
(1, 'addafc', 'gfgdfd@f.cj', '2343678990', 'hghg', 'ghhhbj', 'asgjk', 1),
(2, 'ittt', 'me@fg.com', '999999999999', 'its new', 'ffff', 'its ', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
