-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2020 at 11:06 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('rvstowrn', 'pass'),
('rv', 'pass'),
('aman', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `text` text NOT NULL,
  `img_src` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`text`, `img_src`, `author`, `topic`) VALUES
('Very first blog of this website', '16038677289593016475f991450bf35d.jpg', 'rvstowrn', 'cybersecurity'),
('new blog value', '160386805019695195865f991592520fe.jpg', 'rvstowrn', 'machine_learning'),
('third blog ', '160386825316266310785f99165d091e6.jpg', 'rvstowrn', 'web_development');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `question` varchar(1000) NOT NULL,
  `option1` varchar(1000) NOT NULL,
  `option2` varchar(1000) NOT NULL,
  `option3` varchar(1000) NOT NULL,
  `option4` varchar(1000) NOT NULL,
  `answer` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
('When was blogspot created?', '29 February 2000', '15 June 2001', '23 August 1999', '1 July 1998', '23 August 1999'),
('What is the full form of SEO?', 'Search Existing Operations', 'Search Engine Optimization', 'Semantic Enrollment Option', 'Serial Engine Offer', 'Search Engine Optimization'),
('Which fonts are generally considered easiest to read online?', 'San serif', 'Roboto', 'Monserrat', 'Oleo Script', 'San serif'),
('When do we need a legal statement for a blog?', 'Before creating a blog', 'When blog starts to make money', 'While writing on a blog related to a legal case', 'While registering for a blog site', 'When blog starts to make money'),
('Which tool can be used to repost blog posts on social media?', 'Postman', 'Slack', 'SmarterQueue', 'IDE', 'SmarterQueue'),
('What is another name for keyword optimization?', 'keyword selection', 'keyword research', 'keyword matching', 'keyword detection', 'keyword research'),
('What is keyword optimization?', 'shortening keywords for better SEO', 'adding more keywords', 'researching, analyzing and selecting the best keywords to target traffic', 'copying keywords from other websites with similar content', 'researching, analyzing and selecting the best keywords to target traffic'),
('What is HuffPost?', 'News Aggregator', 'Blog', 'Both', 'None of the above', 'Both'),
(' How long should a post be for better SEO?', '2500-3000', '2300-3300', '1000-2000', '1200-4300', '2500-3000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `username`, `password`, `phone`) VALUES
('Rishabh', 'rd6767@srmist.edu.in', 'rvstowrn', '$2y$12$ggqS5T/2OHTxOVk1tdWmZeg/OQkWiWMhK3wa00E/DWUk/Y6D1BdmG', '7903394122');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
