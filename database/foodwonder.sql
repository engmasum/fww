-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Aug 02, 2016 at 05:36 PM
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
  `list_address` text NOT NULL,
  `list_email` text NOT NULL,
  `list_phone` text NOT NULL,
  `list_website` text NOT NULL,
  `list_description` text NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_listing`
--

INSERT INTO `db_listing` (`submission_list_id`, `list_title`, `list_address`, `list_email`, `list_phone`, `list_website`, `list_description`, `list_hour_mon`, `list_hour_tue`, `list_hour_wed`, `list_hour_thu`, `list_hour_fri`, `list_hour_sat`, `list_hour_sun`, `list_amen_wifi`, `list_amen_parking`, `list_amen_takeaway`, `list_amen_smoking`, `list_amen_nonsmoking`, `list_amen_reservation`, `list_amen_halal`, `list_amen_nonhalal`, `list_amen_nopork`, `list_amen_vegeterian`, `submission_date`, `listing_stat`) VALUES
(3, 'It sulition', 'Jalan ambong-2,Kl- 52100', 'itsulotion@gmail.com', '0123456789', 'www.itsolution.com', 'we provide online solution.', '9:30 to 5:30', '9:30 to 5:30', '9:30 to 5:30', '9:30 to 5:30', '9:30 to 5:30', '9:30 to 1:30', 'off day', 1, 1, 1, 0, 0, 0, 0, 0, '0', 1, '2016-08-01', '');

-- --------------------------------------------------------

--
-- Table structure for table `db_user`
--

CREATE TABLE `db_user` (
`db_user_id` int(11) NOT NULL,
  `user_email` text NOT NULL,
  `user_password` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_user`
--

INSERT INTO `db_user` (`db_user_id`, `user_email`, `user_password`) VALUES
(1, 'xyz@hotmil.com', 'xyzhotmial'),
(2, 'suborna@hotmail.com', 'suborna');

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
MODIFY `submission_list_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `db_user`
--
ALTER TABLE `db_user`
MODIFY `db_user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;