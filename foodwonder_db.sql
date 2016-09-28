-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Sep 10, 2016 at 10:58 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `foodwonder`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_enquiry`
--

CREATE TABLE `db_enquiry` (
`enquiry_id` int(11) NOT NULL,
  `txtName` text NOT NULL,
  `txtSubject` text NOT NULL,
  `txtEmail` text NOT NULL,
  `message` text NOT NULL,
  `enquiry_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_enquiry`
--

INSERT INTO `db_enquiry` (`enquiry_id`, `txtName`, `txtSubject`, `txtEmail`, `message`, `enquiry_date`) VALUES
(1, '$name', '$subject', 'email', 'messahe', '0000-00-00'),
(2, '$name', '$subject', '$email', '$message', '0000-00-00'),
(3, 'a', 'b', 'c', 'd', '2016-07-22'),
(4, 'dd', 'dd', 'ddd', 'ddddd', '2016-07-22'),
(5, 'dd', 'dd', 'ddd', 'ddddd', '2016-07-22'),
(6, 'gg', 'gg', 'gg', 'gg', '2016-07-23'),
(7, 'gg', 'gg', 'gg', 'gg', '2016-07-23'),
(8, 'gg', 'gg', 'gg', 'gg', '2016-07-23'),
(9, 'mm', 'mm', 'mm', 'mmm', '2016-07-23'),
(10, 'ff', '', '', '', '2016-07-23'),
(11, 'gg', 'gg', 'ggg', 'ggg', '2016-07-23'),
(12, 'rr', 'rr', 'rr', 'rr', '2016-07-23'),
(13, 'rr', 'rr', 'rr', 'rr', '2016-07-23'),
(14, '$name', '$subject', '$email', '$message', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `db_listing`
--

CREATE TABLE `db_listing` (
`submission_list_id` int(11) NOT NULL,
  `list_title` text NOT NULL,
  `list_category` text NOT NULL,
  `list_address` text NOT NULL,
  `list_email` text NOT NULL,
  `list_phone` text NOT NULL,
  `list_website` text NOT NULL,
  `list_description` text NOT NULL,
  `company_logo` text NOT NULL,
  `list_hour_mon` text NOT NULL,
  `list_hour_tue` text NOT NULL,
  `list_hour_wed` text NOT NULL,
  `list_hour_thu` text NOT NULL,
  `list_hour_fri` text NOT NULL,
  `list_hour_sat` text NOT NULL,
  `list_hour_sun` text NOT NULL,
  `list_amen_wifi` int(11) NOT NULL,
  `list_amen_parking` int(11) NOT NULL,
  `list_amen_takeaway` int(11) NOT NULL,
  `list_amen_smoking` int(11) NOT NULL,
  `list_amen_nonsmoking` int(11) NOT NULL,
  `list_amen_reservation` int(11) NOT NULL,
  `list_amen_halal` int(11) NOT NULL,
  `list_amen_nonhalal` int(11) NOT NULL,
  `list_amen_nopork` text NOT NULL,
  `list_amen_vegeterian` int(11) NOT NULL,
  `submission_date` date NOT NULL,
  `listing_stat` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `db_user`
--

CREATE TABLE `db_user` (
`db_user_id` int(11) NOT NULL,
  `user_email` text NOT NULL,
  `user_password` text NOT NULL,
  `member_login` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_user`
--

INSERT INTO `db_user` (`db_user_id`, `user_email`, `user_password`, `member_login`) VALUES
(1, 'xyz@hotmil.com', 'xyzhotmial', ''),
(2, 'suborna@hotmail.com', 'suborna', ''),
(3, 'admin@gmail.com', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration_info`
--

CREATE TABLE `registration_info` (
`registration_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_email` text NOT NULL,
  `user_phone` text NOT NULL,
  `confirm_password` text NOT NULL,
  `registration_date` date NOT NULL,
  `user_login` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_info`
--

INSERT INTO `registration_info` (`registration_id`, `user_name`, `user_email`, `user_phone`, `confirm_password`, `registration_date`, `user_login`) VALUES
(1, 'admin', 'admin@gmail.com', '12456789', 'admin', '2016-08-25', ''),
(2, 'usee login', 'user@gmail.com', 'user-14846', 'user', '2016-08-26', ''),
(3, 'masum', 'masum@gmail.com', '01114378373', '1234', '2016-08-26', ''),
(4, 'Md kabir', 'kabir@gmail.com', '1345977415', 'kabir', '2016-09-01', ''),
(5, 'Nisat', 'nisat@gmail.com', '444455', '3f42c52db24db47dcb8744d9459f893a', '2016-09-03', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_enquiry`
--
ALTER TABLE `db_enquiry`
 ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `db_listing`
--
ALTER TABLE `db_listing`
 ADD PRIMARY KEY (`submission_list_id`);

--
-- Indexes for table `db_user`
--
ALTER TABLE `db_user`
 ADD PRIMARY KEY (`db_user_id`);

--
-- Indexes for table `registration_info`
--
ALTER TABLE `registration_info`
 ADD PRIMARY KEY (`registration_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_enquiry`
--
ALTER TABLE `db_enquiry`
MODIFY `enquiry_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `db_listing`
--
ALTER TABLE `db_listing`
MODIFY `submission_list_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `db_user`
--
ALTER TABLE `db_user`
MODIFY `db_user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `registration_info`
--
ALTER TABLE `registration_info`
MODIFY `registration_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;