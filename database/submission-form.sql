-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 29, 2016 at 05:24 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `foodwonder`
--

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
  `llist_hour_wed` text NOT NULL,
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
  `list_amen_vegeterian` int(11) NOT NULL,
  `submission_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_listing`
--

INSERT INTO `db_listing` (`submission_list_id`, `list_title`, `list_address`, `list_email`, `list_phone`, `list_website`, `list_description`, `list_hour_mon`, `list_hour_tue`, `llist_hour_wed`, `list_hour_thu`, `list_hour_fri`, `list_hour_sat`, `list_hour_sun`, `list_amen_wifi`, `list_amen_parking`, `list_amen_takeaway`, `list_amen_smoking`, `list_amen_nonsmoking`, `list_amen_reservation`, `list_amen_halal`, `list_amen_nonhalal`, `list_amen_vegeterian`, `submission_date`) VALUES
(1, '$test1', '$test1', '$test1', '$test1', '$test1', '$test1', '$test1', '$test1', '$test1', '$test1', '$test1', '$test1', '$test1', 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00'),
(2, '$test1', '$test1', '$test1', '$test1', '$test1', '$test1', '$test1', '$test1', '$test1', '$test1', '$test1', '$test1', '$test1', 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00'),
(3, '$list_title', '$list_address', '$list_email', '$list_phone', '$list_website', '$list_description', '$list_hour_mon', '$list_hour_tue', '$llist_hour_wed', '$list_hour_thu', '$list_hour_fri', '$list_hour_sat', '$list_hour_sun', 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00'),
(4, 'brandhex', 'kepong ', 'admin@hotmail.com', '012548', 'www', 'test2', 'test2', 'test2', '', 'test2', 'test2', 'test2', 'test2', 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00'),
(5, 'brandhex', 'kepong ', 'admin@hotmail.com', '012548', 'www', 'test2', 'test2', 'test2', '', 'test2', 'test2', 'test2', 'test2', 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00'),
(6, 'brandhex', 'kepong ', 'admin@hotmail.com', '012548', 'www', 'test2', 'test2', 'test2', '', 'test2', 'test2', 'test2', 'test2', 0, 0, 0, 0, 0, 0, 0, 0, 0, '2016-07-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_listing`
--
ALTER TABLE `db_listing`
 ADD PRIMARY KEY (`submission_list_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_listing`
--
ALTER TABLE `db_listing`
MODIFY `submission_list_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;