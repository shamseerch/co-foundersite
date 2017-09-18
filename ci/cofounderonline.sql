-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2017 at 09:36 AM
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
-- Table structure for table `tbl_cf_request`
--

CREATE TABLE `tbl_cf_request` (
  `Cfr_id` int(11) NOT NULL,
  `Cfr_Name` varchar(30) NOT NULL,
  `Cfr_Idea` varchar(100) NOT NULL,
  `Cfr_Industry` varchar(40) NOT NULL,
  `Cfr_Location` varchar(30) NOT NULL,
  `Cfr_Breifexplantion` varchar(500) NOT NULL,
  `Cfr_dpath` varchar(100) NOT NULL,
  `Cfr_Vurl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `C_id` int(11) NOT NULL,
  `Coursename` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`C_id`, `Coursename`) VALUES
(1, 'BCA'),
(2, 'BCOM'),
(3, 'COMPUTER SCIENCE'),
(4, 'PHYSICS'),
(5, 'BBA'),
(6, 'ENGLISH'),
(7, 'MATHAMATICS'),
(8, 'CHEMISTRY'),
(9, 'BTECH'),
(10, 'M-TECH'),
(11, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_currency`
--

CREATE TABLE `tbl_currency` (
  `currency_id` int(11) NOT NULL,
  `currency_code` varchar(100) NOT NULL,
  `currency_currency` varchar(100) NOT NULL,
  `currency_country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_currency`
--

INSERT INTO `tbl_currency` (`currency_id`, `currency_code`, `currency_currency`, `currency_country`) VALUES
(1, 'AFN', 'Afghani', 'Afghanistan'),
(2, 'ALL', 'Lek', 'Albania'),
(3, 'DZD', 'Algerian Dinar', 'Algeria'),
(4, 'USD', 'US Dollar', 'American Samoa'),
(5, 'AOA', 'Kwanza', 'Angola'),
(6, 'ARS', 'Argentine Peso', 'Argentina'),
(7, 'AUD', 'Australian Dollar', 'Australia'),
(8, 'BHD', 'Bahraini Dinar	', 'Bahrain'),
(9, 'BDT', 'Taka', 'Bangladesh'),
(10, 'BBD', 'Barbados Dollar', 'Barbados'),
(11, 'BYR', 'Belarusian Ruble', 'Belarus	'),
(12, 'BRL', 'Brazilian Real', 'Brazil'),
(13, 'CNY', 'Renminbi (Yuan)	', 'China'),
(14, 'AUD', 'Australian Dollar', 'Christmas Island'),
(15, 'EGP', 'Egyptian Pound', 'Egypt'),
(16, 'EUR', 'Euro', 'Guadeloupe'),
(17, 'EUR', 'Euro\r\n', 'Germany'),
(18, 'HKD', 'Hong Kong Dollar', 'Hong Kong'),
(19, 'INR', 'Indian Rupee', 'India'),
(20, 'IDR', 'Rupiah', 'Indonesia'),
(21, 'IRR', 'Iranian Rial', 'Iran'),
(22, 'MYR', 'Malaysian Ringgit', 'Malaysia'),
(23, 'NPR', 'Nepalese Rupee', 'Nepal'),
(24, 'NGN', 'Naira', 'Nigeria'),
(25, 'OMR', 'Rial Omani', 'Oman'),
(26, 'PKR', 'Pakistan Rupee', 'Pakistan'),
(27, 'PLN', 'Zloty', 'Poland'),
(28, 'PEN', 'Nuevo Sol', 'Peru'),
(29, 'QAR', 'Qatari Rial', 'Qatar'),
(30, 'GBP', 'Pound Sterling', 'United Kingdom'),
(31, 'YER', 'Yemeni Rial', 'Yemen	');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cw_package`
--

CREATE TABLE `tbl_cw_package` (
  `cw_package_id` int(11) NOT NULL,
  `cw_package_amount` decimal(14,4) NOT NULL,
  `cw_package_name` varchar(50) NOT NULL,
  `cw_package_duration` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cw_reg`
--

CREATE TABLE `tbl_cw_reg` (
  `cw _id` int(11) NOT NULL,
  `cw_reg_id` int(11) NOT NULL,
  `cw_company_name` varchar(250) NOT NULL,
  `cw_package_id` int(11) NOT NULL,
  `cw_skype_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `ID` int(11) NOT NULL,
  `D_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`ID`, `D_name`) VALUES
(1, 'THIRUVANANTHAPURAM'),
(2, 'KOLLAM'),
(3, 'PATHANAMTHITTA'),
(4, 'ALAPPUZHA'),
(5, 'KOTTAYAM'),
(6, 'IDUKKI'),
(7, 'ERNAKULAM'),
(8, 'THRISSUR'),
(9, 'PALAKKAD'),
(10, 'MALAPPURAM'),
(11, 'KOZHIKODE'),
(12, 'WAYANAD'),
(13, 'KANNUR'),
(14, 'KASARAGOD'),
(15, 'COIMBATORE'),
(16, 'MANGLORE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_duration`
--

CREATE TABLE `tbl_duration` (
  `duration_id` int(11) NOT NULL,
  `duration_period` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_duration`
--

INSERT INTO `tbl_duration` (`duration_id`, `duration_period`) VALUES
(1, '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fl_company`
--

CREATE TABLE `tbl_fl_company` (
  `Fl_company_id` int(11) NOT NULL,
  `Registration_id` int(11) NOT NULL,
  `Flco_name` varchar(30) NOT NULL,
  `Flco_addr` varchar(300) NOT NULL,
  `Flco_industry` varchar(50) NOT NULL,
  `Flco_other_service` varchar(200) NOT NULL,
  `Flco_reg_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_freelancer`
--

CREATE TABLE `tbl_freelancer` (
  `Freelancer_id` int(11) NOT NULL,
  `Registration_id` int(11) NOT NULL,
  `Fl_addr` varchar(250) NOT NULL,
  `Fl_city` varchar(30) NOT NULL,
  `Fl_dob` varchar(20) NOT NULL,
  `Fl_gender` varchar(10) NOT NULL,
  `Fl_course` varchar(30) NOT NULL,
  `Fl_Stream` varchar(30) NOT NULL,
  `Fl_Experience` varchar(30) NOT NULL,
  `Fl_Resume_path` varchar(200) NOT NULL,
  `Fl_adhar_path` varchar(250) NOT NULL,
  `Fl_photo_path` varchar(250) NOT NULL,
  `Fl_Category` varchar(20) NOT NULL,
  `Fl_Reg_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_freelancerequest`
--

CREATE TABLE `tbl_freelancerequest` (
  `Fr_request_id` int(11) NOT NULL,
  `Fr_company_id` int(11) NOT NULL,
  `Fr_skill` varchar(30) NOT NULL,
  `Fr_others_skill` varchar(50) NOT NULL,
  `Fr_wagehourly` decimal(13,4) NOT NULL,
  `Fr_job_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fundraiser`
--

CREATE TABLE `tbl_fundraiser` (
  `Fundraiser_id` int(11) NOT NULL,
  `Registration_id` int(11) NOT NULL,
  `Fundr_name` varchar(30) NOT NULL,
  `Fundr_address` varchar(40) NOT NULL,
  `Fundr_Age` int(11) NOT NULL,
  `Fundr_Gender` varchar(20) NOT NULL,
  `hub_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mentor_reg`
--

CREATE TABLE `tbl_mentor_reg` (
  `mentor_id` int(11) NOT NULL,
  `mentor_reg_id` int(11) NOT NULL,
  `mentor_gender` varchar(10) DEFAULT NULL,
  `mentor_address` varchar(255) NOT NULL,
  `mentor_area_of_expertise` varchar(255) NOT NULL,
  `mentor_name_of_the_company` varchar(100) NOT NULL,
  `mentor_designation` varchar(100) NOT NULL,
  `mentor_resume` varchar(500) DEFAULT NULL,
  `mentor_picture` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `P_id` int(11) NOT NULL,
  `p_Amount` decimal(13,4) NOT NULL,
  `P_Date` date NOT NULL,
  `P_currency` varchar(10) NOT NULL,
  `Reg_id` int(11) NOT NULL,
  `month_of_payment` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reg`
--

CREATE TABLE `tbl_reg` (
  `reg_id` int(11) NOT NULL,
  `reg_name` varchar(50) NOT NULL,
  `reg_email` varchar(100) NOT NULL,
  `reg_mobile_no` varchar(20) NOT NULL,
  `reg_alternate_mobile_no` varchar(20) DEFAULT NULL,
  `reg_password` varchar(250) DEFAULT NULL,
  `reg_mode` varchar(50) NOT NULL,
  `reg_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room_booking`
--

CREATE TABLE `tbl_room_booking` (
  `room_booing_id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `room_booking_time` time NOT NULL,
  `room_id` int(11) NOT NULL,
  `stautus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room_details`
--

CREATE TABLE `tbl_room_details` (
  `room_id` int(11) NOT NULL,
  `room_category` varchar(20) NOT NULL,
  `room_capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_start_up_reg`
--

CREATE TABLE `tbl_start_up_reg` (
  `start_up_id` int(11) NOT NULL,
  `start_up_ending_date` date NOT NULL,
  `start_up_reg_id` int(11) NOT NULL,
  `start_up_address` varchar(250) NOT NULL,
  `start_up_city` varchar(100) NOT NULL,
  `start_up_no_of_people` int(11) NOT NULL,
  `start_up_current_level` varchar(50) NOT NULL,
  `start_up_idea` varchar(250) NOT NULL,
  `start_up_idea_desc` varchar(500) NOT NULL,
  `start_up_additional_comments` varchar(1000) DEFAULT NULL,
  `start_up_reg_date` date NOT NULL,
  `start_up_starting_date` varchar(20) NOT NULL,
  `start_up_company_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_start_up_reg`
--

INSERT INTO `tbl_start_up_reg` (`start_up_id`, `start_up_ending_date`, `start_up_reg_id`, `start_up_address`, `start_up_city`, `start_up_no_of_people`, `start_up_current_level`, `start_up_idea`, `start_up_idea_desc`, `start_up_additional_comments`, `start_up_reg_date`, `start_up_starting_date`, `start_up_company_name`) VALUES
(1, '0000-00-00', 2, 'gatay', 'ALAPPUZHA', 1, 'Basic idea', 'dasf', 'Research shows that startups who work in a co-working space are four times more likely to succeed than those who don’t. Working in these spaces ensures one will always be surrounded by like-minded, talented individuals and teams which can really benefit you in the short and long term.', 'asa', '2017-09-13', '2017-12-31', 'jn'),
(2, '0000-00-00', 3, 'gft', 'MANGLORE', 6, 'Idea Selection', 'its new and improved', 'Research shows that startups who work in a co-working space are four times more likely to succeed than those who don’t. Working in these spaces ensures one will always be surrounded by like-minded, talented individuals and teams which can really benefit you in the short and long term.', 'ff', '2017-09-13', '0000-00-00', ''),
(3, '0000-00-00', 5, 'bh', 'KOZHIKODE', 8, 'Idea Selection', 'igxf', '<div class=\"box-body\">gguguguftftyfhuihijijijoijghcy', 'hhh', '2017-09-13', '0000-00-00', ''),
(4, '0000-00-00', 6, 'drdrdrff', 'rdfrd', 9, 'Basic idea', 'hjghg', 'gyggyuigiubuiyuhuihuukmok,poiopipoigvvvgvgvh', 'fff', '2017-09-13', '0000-00-00', NULL),
(5, '0000-00-00', 7, 'Tharengal House\r\njayanthi raod,P.O Nallalam', 'aawd', 12, 'Develop Alpha', 'mnmknjnknjk', 'kkkmkmiojimlkml,l,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,nnnnnnnnnnnnnnnnnnnnnnnnnnn', 'jjh', '2017-09-13', '0000-00-00', ''),
(6, '0000-00-00', 8, 'jhugh', 'THIRUVANANTHAPURAM', 6, 'Basic idea', 'knjugyu', 'lklkgvtud  dzezfdzdzxdxcrd6rtchjtclycovbjyygdtrdhtrxdxdsz', 'rce', '2017-09-13', '0000-00-00', NULL),
(7, '0000-00-00', 9, 'Tharengal House\r\njayanthi raod,P.O Nallalam', 'KOZHIKODE', 2, 'Basic idea', 'sssdsd', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 'hgh', '2017-09-13', '11/27/1900', 'nj'),
(8, '0000-00-00', 10, 'Tharengal House\r\njayanthi raod,P.O Nallalam', 'THIRUVANANTHAPURAM', 7, 'Idea Selection', 'mkkmbh', 'huyuc4e4687 tt7787787879898', 'gygy', '2017-09-13', '12/28/2017', ''),
(9, '0000-00-00', 11, 'Tharengal House\r\njayanthi raod,P.O Nallalam', 'THRISSUR', 7, 'Decide to Build where', 'nnuhudersghbgkguy', 'gyggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg', 'gyg', '2017-09-13', '12/02/1900', ''),
(10, '0000-00-00', 12, 'Tharengal House\r\njayanthi raod,P.O Nallalam', 'IDUKKI', 7, 'Basic idea', 'ghfyfssss', 'ftftffffffffffffffffffffffffffffffffffffffffffssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 'd', '2017-09-13', '09/04/2017', 'jj'),
(11, '0000-00-00', 13, '56666666666', 'ccccccccccccc', 6, 'Idea Selection', 'mknnkjnk', 'kjnjkinnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn', 'c', '2017-09-13', '09/13/2017', 'its nw'),
(12, '0000-00-00', 27, '', '', 0, '', '', '', '', '2017-09-16', '', NULL),
(13, '0000-00-00', 33, '', '', 0, '', '', '', '', '2017-09-16', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `status_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `Reg_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stream`
--

CREATE TABLE `tbl_stream` (
  `S_Id` int(11) NOT NULL,
  `S_name` varchar(50) NOT NULL,
  `C_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_stream`
--

INSERT INTO `tbl_stream` (`S_Id`, `S_name`, `C_id`) VALUES
(1, 'MECHANICAL ENGINEERING', 9),
(2, 'ELECTRICAL ENGINEERING', 9),
(3, 'CIVIL ENGINEERING', 9),
(4, 'CHEMICAL ENGINEERING', 9),
(5, 'COMPUTER SCIENCE ENGINEERING', 9),
(6, 'IT ENGINEERING', 9),
(7, 'IC  ENGINEERING', 9),
(8, 'EC ENGINEERING', 9),
(9, 'ELECTRONICS ENGINEERING', 9),
(10, 'ELECTRONICS AND TELECOMMUNICATION ENGINEERING', 9),
(11, 'PETROLEUM ENGINEERING', 9),
(12, 'AERONAUTICAL ENGINEERING', 9),
(13, 'AEROSPACE ENGINEERING', 9),
(14, 'AUTOMOBILE ENGINEERING', 9),
(15, ' ENGINEERING MINING ', 9),
(16, 'BIOTECHNOLOGY ENGINEERING', 9),
(17, 'GENETIC  ENGINEERING', 9),
(18, 'PLASTICS ENGINEERING', 9),
(19, 'FOOD PROCESSING AND TECHNOLOGY', 9),
(20, 'AGRICULTURAL ENGINEERING', 9),
(21, 'ENGINEERING INFRASTRUCTURE ', 9),
(22, 'POWER ENGINEERING', 9),
(23, 'METALLURGY ENGINEERING', 9);

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
(1, 'addafc', 'gfgdfd@f.cj', '2343678990', 'hghg', 'ghhhbj', 'asgjk', 0),
(2, 'ittt', 'me@fg.com', '999999999999', 'its new', 'ffff', 'its ', 1),
(3, 'amajj', 'jkhkjn@jkn.cd', '98764345454', 'njuuh', 'uhuhuuj', 'jhjhuhu', 0),
(4, 'amajj', 'jkhkjn@jkn.cd', '98764345454', 'njuuh', 'uhuhuuj', 'jhjhuhu', 0),
(5, 'amajj', 'jkhkjn@jkn.cd', '98764345454', 'njuuh', 'uhuhuuj', 'jhjhuhu', 0),
(6, 'amajj', 'jkhkjn@jkn.cd', '98764345454', 'njuuh', 'uhuhuuj', 'jhjhuhu', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `Transaction_id` int(11) NOT NULL,
  `cf_req_reg_id` int(11) NOT NULL,
  `tr_Accountholdername` varchar(30) NOT NULL,
  `tr_Accountnumber` varchar(30) NOT NULL,
  `Tr_Bankname` varchar(40) NOT NULL,
  `Tr_ifsccode` varchar(30) NOT NULL,
  `Tr_branchname` varchar(40) NOT NULL,
  `Tr_Amount` decimal(13,4) NOT NULL,
  `tr_currency` varchar(4) NOT NULL,
  `Tr_category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cf_request`
--
ALTER TABLE `tbl_cf_request`
  ADD PRIMARY KEY (`Cfr_id`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`C_id`);

--
-- Indexes for table `tbl_currency`
--
ALTER TABLE `tbl_currency`
  ADD PRIMARY KEY (`currency_id`);

--
-- Indexes for table `tbl_cw_package`
--
ALTER TABLE `tbl_cw_package`
  ADD PRIMARY KEY (`cw_package_id`);

--
-- Indexes for table `tbl_cw_reg`
--
ALTER TABLE `tbl_cw_reg`
  ADD PRIMARY KEY (`cw _id`),
  ADD KEY `cw_reg_id` (`cw_reg_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_duration`
--
ALTER TABLE `tbl_duration`
  ADD PRIMARY KEY (`duration_id`);

--
-- Indexes for table `tbl_fl_company`
--
ALTER TABLE `tbl_fl_company`
  ADD PRIMARY KEY (`Fl_company_id`);

--
-- Indexes for table `tbl_freelancer`
--
ALTER TABLE `tbl_freelancer`
  ADD PRIMARY KEY (`Freelancer_id`);

--
-- Indexes for table `tbl_freelancerequest`
--
ALTER TABLE `tbl_freelancerequest`
  ADD PRIMARY KEY (`Fr_request_id`);

--
-- Indexes for table `tbl_fundraiser`
--
ALTER TABLE `tbl_fundraiser`
  ADD PRIMARY KEY (`Fundraiser_id`);

--
-- Indexes for table `tbl_mentor_reg`
--
ALTER TABLE `tbl_mentor_reg`
  ADD PRIMARY KEY (`mentor_id`),
  ADD UNIQUE KEY `mentor_reg_id_2` (`mentor_reg_id`),
  ADD KEY `mentor_reg_id` (`mentor_reg_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`P_id`),
  ADD KEY `Reg_id` (`Reg_id`);

--
-- Indexes for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `tbl_room_booking`
--
ALTER TABLE `tbl_room_booking`
  ADD PRIMARY KEY (`room_booing_id`);

--
-- Indexes for table `tbl_room_details`
--
ALTER TABLE `tbl_room_details`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `tbl_start_up_reg`
--
ALTER TABLE `tbl_start_up_reg`
  ADD PRIMARY KEY (`start_up_id`),
  ADD UNIQUE KEY `strat_up_reg_id_2` (`start_up_reg_id`),
  ADD KEY `strat_up_reg_id` (`start_up_reg_id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `tbl_stream`
--
ALTER TABLE `tbl_stream`
  ADD PRIMARY KEY (`S_Id`),
  ADD KEY `C_id` (`C_id`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- Indexes for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`Transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cf_request`
--
ALTER TABLE `tbl_cf_request`
  MODIFY `Cfr_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `C_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_currency`
--
ALTER TABLE `tbl_currency`
  MODIFY `currency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tbl_cw_package`
--
ALTER TABLE `tbl_cw_package`
  MODIFY `cw_package_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_duration`
--
ALTER TABLE `tbl_duration`
  MODIFY `duration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_fl_company`
--
ALTER TABLE `tbl_fl_company`
  MODIFY `Fl_company_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_freelancer`
--
ALTER TABLE `tbl_freelancer`
  MODIFY `Freelancer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_freelancerequest`
--
ALTER TABLE `tbl_freelancerequest`
  MODIFY `Fr_request_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_fundraiser`
--
ALTER TABLE `tbl_fundraiser`
  MODIFY `Fundraiser_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_mentor_reg`
--
ALTER TABLE `tbl_mentor_reg`
  MODIFY `mentor_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `P_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_room_booking`
--
ALTER TABLE `tbl_room_booking`
  MODIFY `room_booing_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_room_details`
--
ALTER TABLE `tbl_room_details`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_start_up_reg`
--
ALTER TABLE `tbl_start_up_reg`
  MODIFY `start_up_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_stream`
--
ALTER TABLE `tbl_stream`
  MODIFY `S_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  MODIFY `Transaction_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cw_reg`
--
ALTER TABLE `tbl_cw_reg`
  ADD CONSTRAINT `tbl_cw_reg_ibfk_1` FOREIGN KEY (`cw_reg_id`) REFERENCES `tbl_reg` (`reg_id`);

--
-- Constraints for table `tbl_mentor_reg`
--
ALTER TABLE `tbl_mentor_reg`
  ADD CONSTRAINT `tbl_mentor_reg_ibfk_1` FOREIGN KEY (`mentor_reg_id`) REFERENCES `tbl_reg` (`reg_id`);

--
-- Constraints for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD CONSTRAINT `tbl_payment_ibfk_1` FOREIGN KEY (`Reg_id`) REFERENCES `tbl_reg` (`reg_id`);

--
-- Constraints for table `tbl_start_up_reg`
--
ALTER TABLE `tbl_start_up_reg`
  ADD CONSTRAINT `tbl_start_up_reg_ibfk_1` FOREIGN KEY (`start_up_reg_id`) REFERENCES `tbl_reg` (`reg_id`);

--
-- Constraints for table `tbl_stream`
--
ALTER TABLE `tbl_stream`
  ADD CONSTRAINT `tbl_stream_ibfk_1` FOREIGN KEY (`C_id`) REFERENCES `tbl_course` (`C_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
