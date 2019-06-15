-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2017 at 05:06 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_nest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'sharif', '4855');

-- --------------------------------------------------------

--
-- Table structure for table `adoptionentry`
--

CREATE TABLE `adoptionentry` (
  `id` int(10) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nid_number` char(50) NOT NULL,
  `contact_number` char(25) NOT NULL,
  `email_id` varchar(100) DEFAULT NULL,
  `address` text NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `orphan_name` varchar(200) NOT NULL,
  `orphan_id` int(10) NOT NULL,
  `date_of_adoption` date NOT NULL,
  `cause_of_adoption` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adoptionentry`
--

INSERT INTO `adoptionentry` (`id`, `first_name`, `last_name`, `date_of_birth`, `gender`, `nid_number`, `contact_number`, `email_id`, `address`, `occupation`, `orphan_name`, `orphan_id`, `date_of_adoption`, `cause_of_adoption`) VALUES
(1, 'Rahiq', 'Hasan', '1990-12-10', 'male', '1990213548', '01745235789', 'rafiq@gmail.com', 'Bhairab Bazar,Dhaka', 'Doctor', 'Shariful Islam', 10025, '0201-12-12', ''),
(2, 'Jabid ', 'Hasan', '1997-05-04', 'male', '1997545645', '07626950509', 'pappu@gmail.com', 'Notun Bazar,Barisal', 'Unemployed', 'Nazmul Sahadat', 10028, '2017-08-13', ''),
(4, 'Jabid', 'Hasan', '1993-12-31', 'male', '2147483647', '1686950509', 'jabid@gmail.com', 'Bashundhara,Dhaka', 'Engineer', 'Mahmudul Arfan', 10030, '2017-12-01', ''),
(5, 'Ashik', 'Emon', '1974-09-26', 'male', '1974123569', '01623459874', 'emon@gmail.com', 'Barisal', 'Businessman', 'Alom Mia', 10029, '2017-08-16', ''),
(6, 'Jabed ', 'Mahmud', '1974-11-29', 'male', '2147483647', '177565696', 'jabed@gmail.com', 'Dhaka', 'Teacher', 'Sharif Ahamed', 10032, '2017-08-16', ''),
(7, 'Mamun', 'Hossain', '1966-10-29', 'male', '2147483647', '147656566', 'mamun@gmail.com', 'Dhaka', 'Teacher', 'Jacob', 10026, '2017-08-16', ''),
(10, 'Khusi', 'Kamal', '1987-12-31', 'female', '1985646632', '01326986358', 'b@gmail.com', 'Old town,Dhaka', 'Teacher', 'Mahin Khan', 10027, '2016-11-29', ''),
(11, 'Mahbub ', 'Mia', '1981-08-25', 'male', '198191635635636', '0189653256', 'mahbub@gmail.com', 'Bhairab Bazar,Bhairab', 'Government Employee', 'Mahmud Arfan', 10030, '2017-05-27', 'No Childern'),
(12, 'Salman', 'Shah', '1977-08-26', 'male', '197712457896322', '01996587496', 'shah@gmail.com', 'Dhanmindi,Dhaka', 'Employee', 'Baten Mia', 10035, '2016-11-30', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(5) UNSIGNED NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nid_number` char(25) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `contact_number` char(25) NOT NULL,
  `email_id` varchar(100) DEFAULT NULL,
  `father_name` varchar(200) NOT NULL,
  `mother_name` varchar(200) NOT NULL,
  `salary` int(11) NOT NULL,
  `hire_date` date NOT NULL,
  `job_title` varchar(30) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `special_case` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `first_name`, `last_name`, `date_of_birth`, `gender`, `nid_number`, `religion`, `blood_group`, `address`, `contact_number`, `email_id`, `father_name`, `mother_name`, `salary`, `hire_date`, `job_title`, `username`, `password`, `special_case`) VALUES
(1000, 'Jabid', 'Hasan', '1990-08-16', 'Male', '199012345', 'Islam', 'O-', 'Oldtown,Dhaka', '01512478965', 'jabid@gmail.com', 'Rahman Haque', 'Rothi Haque', 50000, '0000-00-00', 'Manager', 'jabid', 'jabid', ''),
(1002, 'Sharif', 'Ahamed', '1993-04-01', 'Female', '19932146746664', 'Islam', 'O-', 'Mirpur,Dhaka', '01645874123', 'sharif@yahoo.com', 'Abdul Rumi', 'Hasina khan', 45000, '2017-01-07', 'Assistant Manager', 'sharif', 'sharif', '0'),
(1003, 'Shariful', 'Islam', '1990-12-31', 'male', '2147483647', 'Islam', 'B+', 'Bashundhara Residential Area', '01778564278', 's.islam@gmail.com', 'Father', 'Mother', 15000, '2017-03-27', 'Office Helper', '', '', NULL),
(1004, 'MSB', 'Riyad', '0000-00-00', 'male', '2147483647', 'Cathelic', 'O+', 'Bhairab Bazar', '01782555655', 'msb@gmail.com', 'MSB Senior', 'Mrs Senior', 17000, '2015-03-11', 'Accounts', 'msb', 'msb', NULL),
(1006, 'Ahmed', 'Ali', '2015-09-29', 'male', '2147483647', 'Islam', 'A+', 'Dhanmondi,Dhaka', '01775639656', 'ali@gmail.com', 'Ali senior', 'Mrs Ali Senior', 35000, '2016-09-28', 'Floor Manager', '', '', NULL),
(1013, 'Easin', 'Limon', '1978-09-28', 'male', '1978654635635', 'Islam', 'A+', 'Shibpur', '01885963696', 'limon@gmail.com', 'Mridha Alom', 'Mrs Mridha', 15000, '2016-10-29', 'Office Helper', '', '', NULL),
(1014, 'Jaher ', 'Ali', '1980-10-29', 'male', '1980641648568546', 'Islam', 'A-', 'Dhaka', '0177568923', 'jaher@gmail.com', 'Baten Mia', 'Jaheda Begum', 10000, '2016-12-31', 'Service Man', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orphanentry`
--

CREATE TABLE `orphanentry` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `special_case` text,
  `father_name` varchar(100) DEFAULT NULL,
  `mother_name` varchar(100) DEFAULT NULL,
  `guardian_name` varchar(100) NOT NULL,
  `contact_number` char(25) NOT NULL,
  `address` text NOT NULL,
  `relation_with_orphan` varchar(100) NOT NULL,
  `adopted` varchar(20) DEFAULT NULL,
  `date_of_entry` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orphanentry`
--

INSERT INTO `orphanentry` (`id`, `first_name`, `last_name`, `date_of_birth`, `gender`, `religion`, `blood_group`, `special_case`, `father_name`, `mother_name`, `guardian_name`, `contact_number`, `address`, `relation_with_orphan`, `adopted`, `date_of_entry`) VALUES
(10001, 'Jasim', 'Khan', '2001-08-02', 'Male', 'Islam', 'AB+', '', 'Abdul Khan', 'Amena Begam', 'Shariful', '01776315107', 'Sundhi, Bogra', 'Relative', '', '2017-08-11 18:00:00'),
(10002, 'Shariful ', 'Islam', '1996-10-21', 'male', 'Islam', 'AB+', 'Handicapped', '', '', 'Sharif', '01776315106', 'Bashundhara Residential Area', 'Relative', '', '2017-08-13 19:35:58'),
(10003, 'Mithila ', 'Haque', '2000-08-14', 'Female', 'Islam', '', '', 'Hasan Haque', '', 'Mohosin Haque', '01624587963', 'Sutrapur,Oldtown,Dhaka', 'Nephew', '', '2017-08-13 19:35:58'),
(10026, 'Jacob', 'Thomas', '1998-03-05', 'male', 'Christian', '-', '', 'Jacob Senior', 'Mrs Jacob Senior', 'William', '01214748364', 'Bashundhara Residential Area,Dhaka', 'Relative', 'Yes', '2017-08-13 19:40:04'),
(10027, 'Mahin', 'Khan', '1994-06-24', 'male', 'Islam', '-', '', 'Father', 'Mother', 'Momena begum', '0165353133', 'Bagerhat', 'Aunt', 'Yes', '2017-08-14 10:36:19'),
(10028, 'Nazmul', 'Sahadat', '2000-05-22', 'male', 'Islam', 'B-', 'Mentally Sick', 'Mujibor', 'Lamia', 'Borkot Ali', '01614748364', 'Salamer moor,Sirajgonj', 'Uncle', 'Yes', '2017-08-14 16:58:12'),
(10029, 'Alom', 'Mia', '2015-12-30', 'male', 'Islam', 'O-', '', 'Alim MIa', '', 'Badhon Mia', '0164635656', 'Bhairab', 'Brother', 'Yes', '2017-08-15 09:27:54'),
(10030, 'Mahmudul', 'Arfan', '1997-04-04', 'male', 'Islam', 'A+', 'Handicap ', 'Md. Mogbul', 'Mrs. Roksana', 'Md. Mojibur', '0123456767', 'Mohammadpur', 'Nephew ', 'Yes', '2017-08-15 15:04:58'),
(10031, 'Shovon', 'Roy', '1999-03-28', 'male', 'Hindu', 'B+', '', 'Shuvo Roy', 'Mukta Rani', 'Mukta Rani', '01845698745', 'Shamoli, Dhaka', 'Mother', '', '2017-08-16 07:00:09'),
(10032, 'Sharif', 'Ahamed', '2017-09-18', 'male', 'Islam', 'AB+', '', 'Sharif Senior', '', 'Jabid', '01775235689', 'Bhaiirab Bazar', 'Uncle', '', '2017-08-16 13:22:19'),
(10033, 'Manik', 'Mia', '2002-09-28', 'male', 'Islam', '-', '', 'Surut Ali', '', 'Ali Mia', '01775235689', 'Dhaka', 'Cousin', NULL, '2017-08-16 16:21:36'),
(10034, 'Tanvin ', 'Sajal', '2007-12-31', 'male', 'Islam', '-', 'Disored in Brain', '', '', 'Shain Mia', '01885263696', 'Bus Stand,Bhairab Bazar,Bhairab', 'Cousin', NULL, '2017-08-17 03:28:31'),
(10035, 'Baten', 'Mia', '2014-10-29', 'male', 'Islam', 'O+', '', '', '', 'Murshid Mia', '01775368645', 'keriniganj,Dhaka', 'Uncle', 'Yes', '2017-08-17 03:29:52');

-- --------------------------------------------------------

--
-- Table structure for table `volunteerentry`
--

CREATE TABLE `volunteerentry` (
  `id` int(10) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `phone_number` char(25) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteerentry`
--

INSERT INTO `volunteerentry` (`id`, `first_name`, `last_name`, `gender`, `phone_number`, `email`) VALUES
(10, 'Sharif', 'Ahamed', 'Male', '01776324578', 'sharif@gmail.com'),
(11, 'Ellian', 'Mamun', 'Male', '0177522666', 'mamun@gmail.com'),
(12, 'Sayef', 'Eshan', 'Male', '01776325450', 'eshan@gmail.com'),
(13, 'Sayef', 'Sarker', 'Male', '017763256645', 'eshan@gmail.com'),
(15, 'Omra ', 'Haque Anika', 'Female', '01552963696', 'omra@gmail.com'),
(16, 'Sanzida', 'Haque', 'Female', '01553265689', 'sanzida@gmail.com'),
(17, 'Mohidul', 'Alom', 'Male', '01775963696', 'alom@gmail.com'),
(18, 'Tanvin ', 'Sajal', 'Male', '01995656565', 'sajal@gmail.com'),
(19, 'Parvej ', 'Shahin', 'Male', '01665258545', 'shahin@gmail.com'),
(20, 'Kaiser', 'Sajib', 'Male', '01775897898', 'sajib@hotmail.com'),
(21, 'Nusrat', 'Maisha', 'Female', '01996357845', 'maisha@gmailcom'),
(22, 'Johirul', 'Rabby', 'Male', '01996328575', 'rabby@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adoptionentry`
--
ALTER TABLE `adoptionentry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `orphanentry`
--
ALTER TABLE `orphanentry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteerentry`
--
ALTER TABLE `volunteerentry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `adoptionentry`
--
ALTER TABLE `adoptionentry`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1015;
--
-- AUTO_INCREMENT for table `orphanentry`
--
ALTER TABLE `orphanentry`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10036;
--
-- AUTO_INCREMENT for table `volunteerentry`
--
ALTER TABLE `volunteerentry`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
