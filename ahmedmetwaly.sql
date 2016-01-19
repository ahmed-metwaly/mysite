-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2016 at 03:09 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ahmedmetwaly`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `a_id` int(11) NOT NULL,
  `a_text` text NOT NULL,
  `a_last_update` datetime NOT NULL,
  `a_views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `art_id` int(11) NOT NULL,
  `art_title` int(11) NOT NULL,
  `art_text` longtext NOT NULL,
  `art_date` datetime NOT NULL,
  `art_c_id` int(11) NOT NULL,
  `art_views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_date` datetime NOT NULL,
  `c_views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `com_id` int(11) NOT NULL,
  `com_art_id` int(11) NOT NULL,
  `com_name` varchar(150) NOT NULL,
  `com_ip` varchar(30) NOT NULL,
  `com_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `com_cookies` longtext NOT NULL,
  `com_views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `con_id` int(11) NOT NULL,
  `con_text` text NOT NULL,
  `con_views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `f_name` varchar(150) NOT NULL,
  `f_email` varchar(200) NOT NULL,
  `f_text_comment` text NOT NULL,
  `f_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `f_ip` varchar(30) NOT NULL,
  `f_cookies` longtext NOT NULL,
  `f_views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sittings`
--

CREATE TABLE `sittings` (
  `s_id` int(11) NOT NULL,
  `s_meta_title` text NOT NULL,
  `s_meta_desc` text NOT NULL,
  `s_fb` varchar(200) NOT NULL,
  `s_tw` varchar(200) NOT NULL,
  `s_g_p` varchar(200) NOT NULL,
  `s_in` varchar(200) NOT NULL,
  `s_git` varchar(200) NOT NULL,
  `s_index_text` text NOT NULL,
  `s_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `skils`
--

CREATE TABLE `skils` (
  `s_id` int(11) NOT NULL,
  `s_image` varchar(150) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_text` text NOT NULL,
  `s_date` tinyint(4) NOT NULL,
  `s_views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vistors`
--

CREATE TABLE `vistors` (
  `v_id` int(11) NOT NULL,
  `v_ip` varchar(30) NOT NULL,
  `v_cookies` longtext NOT NULL,
  `v_open` datetime NOT NULL,
  `v_close` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `w_id` int(11) NOT NULL,
  `w_c_id` int(11) NOT NULL,
  `w_name` varchar(100) NOT NULL,
  `w_image` varchar(150) NOT NULL,
  `w_url` varchar(150) NOT NULL,
  `w_client_name` varchar(150) NOT NULL,
  `w_description` text NOT NULL,
  `w_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `w_views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`art_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`com_id`),
  ADD KEY `com_art_id` (`com_art_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `sittings`
--
ALTER TABLE `sittings`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `skils`
--
ALTER TABLE `skils`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `vistors`
--
ALTER TABLE `vistors`
  ADD PRIMARY KEY (`v_id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`w_id`),
  ADD KEY `w_c_id` (`w_c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sittings`
--
ALTER TABLE `sittings`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `skils`
--
ALTER TABLE `skils`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vistors`
--
ALTER TABLE `vistors`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
