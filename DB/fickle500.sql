-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 22, 2018 at 05:42 PM
-- Server version: 5.7.21
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fickle500`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `ID` int(6) NOT NULL,
  `NAME` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `PHNO` varchar(20) DEFAULT NULL,
  `UNIQLINK` varchar(50) DEFAULT NULL,
  `DATELOG` date DEFAULT NULL,
  `STATUS` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`ID`, `NAME`, `EMAIL`, `PHNO`, `UNIQLINK`, `DATELOG`, `STATUS`) VALUES
(41, 'Palash', 'silent.00.orchestra@gmail.com', '96114564', 'QFa3bC', '2018-05-23', 'APP'),
(42, 'NANDI', 'silent.00.orchestra@gmail.com', '9611599846', 'u3mmWd', '2018-05-23', 'APP');

-- --------------------------------------------------------

--
-- Table structure for table `applicationdetail`
--

CREATE TABLE `applicationdetail` (
  `p_id` int(11) NOT NULL,
  `p_uniqlink` varchar(50) DEFAULT NULL,
  `p_datelog` datetime DEFAULT NULL,
  `p_submitted` int(11) DEFAULT NULL,
  `personal_age` varchar(5) DEFAULT NULL,
  `personal_sex` varchar(1) DEFAULT NULL,
  `personal_country_of_origin` varchar(50) DEFAULT NULL,
  `personal_social_facebook` varchar(100) DEFAULT NULL,
  `personal_social_instragram` varchar(100) DEFAULT NULL,
  `personal_social_twitter` varchar(100) DEFAULT NULL,
  `personal_social_snapchat` varchar(100) DEFAULT NULL,
  `professional_work` varchar(500) DEFAULT NULL,
  `professional_linkedin_url` varchar(100) DEFAULT NULL,
  `professional_top_or_close` varchar(500) DEFAULT NULL,
  `professional_annual_income` varchar(50) DEFAULT NULL,
  `professional_media_or_entertainment` varchar(1) DEFAULT NULL,
  `professional_portfolio_url` varchar(100) DEFAULT NULL,
  `professional_biggest_achievement` varchar(500) DEFAULT NULL,
  `professional_passion` varchar(500) DEFAULT NULL,
  `social_facebook_friends` varchar(10) DEFAULT NULL,
  `social_fav_activity` varchar(500) DEFAULT NULL,
  `social_fav_places_bangalore_hangout` varchar(500) DEFAULT NULL,
  `social_special_friend_email` varchar(100) DEFAULT NULL,
  `social_houseparty_invitation` varchar(50) DEFAULT NULL,
  `social_friends_opinion` varchar(500) DEFAULT NULL,
  `contribution_most_proud_thing_about_you` varchar(500) DEFAULT NULL,
  `contribution_socialmedia_followers` varchar(500) DEFAULT NULL,
  `contribution_valueoffer_to_group` varchar(500) DEFAULT NULL,
  `personality_three_interesting_things` varchar(500) DEFAULT NULL,
  `personality_angry` varchar(50) DEFAULT NULL,
  `personality_happy` varchar(50) DEFAULT NULL,
  `personality_world_opinion` varchar(50) DEFAULT NULL,
  `personality_role_model` varchar(100) DEFAULT NULL,
  `personality_activity_when_sad` varchar(500) DEFAULT NULL,
  `personality_good_books_read` varchar(500) DEFAULT NULL,
  `personality_desc_yourself` varchar(500) DEFAULT NULL,
  `experience_countries_travelled` varchar(10) DEFAULT NULL,
  `experience_fav_holiday_dest` varchar(100) DEFAULT NULL,
  `experience_culture_admire` varchar(100) DEFAULT NULL,
  `experience_most_adv_thing` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applicationdetail`
--

INSERT INTO `applicationdetail` (`p_id`, `p_uniqlink`, `p_datelog`, `p_submitted`, `personal_age`, `personal_sex`, `personal_country_of_origin`, `personal_social_facebook`, `personal_social_instragram`, `personal_social_twitter`, `personal_social_snapchat`, `professional_work`, `professional_linkedin_url`, `professional_top_or_close`, `professional_annual_income`, `professional_media_or_entertainment`, `professional_portfolio_url`, `professional_biggest_achievement`, `professional_passion`, `social_facebook_friends`, `social_fav_activity`, `social_fav_places_bangalore_hangout`, `social_special_friend_email`, `social_houseparty_invitation`, `social_friends_opinion`, `contribution_most_proud_thing_about_you`, `contribution_socialmedia_followers`, `contribution_valueoffer_to_group`, `personality_three_interesting_things`, `personality_angry`, `personality_happy`, `personality_world_opinion`, `personality_role_model`, `personality_activity_when_sad`, `personality_good_books_read`, `personality_desc_yourself`, `experience_countries_travelled`, `experience_fav_holiday_dest`, `experience_culture_admire`, `experience_most_adv_thing`) VALUES
(1, 'QFa3bC', '2018-05-22 17:40:40', 0, '2', '1', '1', '1', '1', '1', 'snapchat', '', '', '', '200', '', '', '', '', '', '', '', '', 'house', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'u3mmWd', '2018-05-22 17:41:47', 0, '1', 'M', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `applicationdetail`
--
ALTER TABLE `applicationdetail`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `applicationdetail`
--
ALTER TABLE `applicationdetail`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
