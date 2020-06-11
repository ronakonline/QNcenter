-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 10:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qncenter`
--

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE `attachments` (
  `id` int(255) NOT NULL,
  `notice` int(255) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `isdeleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(255) NOT NULL,
  `title` mediumtext NOT NULL,
  `banner` longtext NOT NULL,
  `blog` longtext NOT NULL,
  `author` int(11) DEFAULT NULL,
  `category` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `isdeleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `banner`, `blog`, `author`, `category`, `created`, `isdeleted`) VALUES
(1, 'How to prevent being hacked', 'ANN.PNG', '<b class=\"whb\" style=\"-webkit-tap-highlight-color: transparent; margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: Helvetica, &quot;Nimbus Sans L&quot;, Arial, &quot;Liberation Sans&quot;, sans-serif; font-size: 16px; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(84, 84, 84); letter-spacing: normal;\">Create complex passwords.</b><span style=\"color: rgb(84, 84, 84); font-family: Helvetica, &quot;Nimbus Sans L&quot;, Arial, &quot;Liberation Sans&quot;, sans-serif; font-size: 16px; letter-spacing: normal;\">&nbsp;The longer and more complex your password is, the more difficult it will be for hackers to crack it. Here are some tips for choosing a secure password:</span><sup id=\"_ref-2\" class=\"reference\" aria-label=\"Link to Reference 2\" style=\"-webkit-tap-highlight-color: transparent; margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: normal; font-family: Helvetica, &quot;Nimbus Sans L&quot;, Arial, &quot;Liberation Sans&quot;, sans-serif; font-size: 0.83em; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; unicode-bidi: isolate; white-space: nowrap; color: rgb(84, 84, 84); letter-spacing: normal;\"><a href=\"https://www.wikihow.com/Prevent-Hacking#_note-2\" style=\"-webkit-tap-highlight-color: transparent; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: 13.28px; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(48, 117, 48); overflow-wrap: break-word;\">[2]</a></sup><span style=\"color: rgb(84, 84, 84); font-family: Helvetica, &quot;Nimbus Sans L&quot;, Arial, &quot;Liberation Sans&quot;, sans-serif; font-size: 16px; letter-spacing: normal;\"></span><ul style=\"-webkit-tap-highlight-color: transparent; margin: 5px 0px 0px 55px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: Helvetica, &quot;Nimbus Sans L&quot;, Arial, &quot;Liberation Sans&quot;, sans-serif; font-size: 16px; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; list-style-position: outside; list-style-image: initial; color: rgb(84, 84, 84); letter-spacing: normal;\"><li style=\"-webkit-tap-highlight-color: transparent; margin: 0px; padding: 0px; border: none; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 25px; font-family: inherit; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; list-style-type: disc; border-radius: 4px; clear: both;\">Create passwords that are at least eight characters long. The longer the password, the more difficult to crack.</li><li style=\"-webkit-tap-highlight-color: transparent; margin: 0px; padding: 0px; border: none; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 25px; font-family: inherit; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; list-style-type: disc; border-radius: 4px; clear: both;\">Use a combination of uppercase letters, lowercase letters, numbers, and symbols.</li><li style=\"-webkit-tap-highlight-color: transparent; margin: 0px; padding: 0px; border: none; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 25px; font-family: inherit; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; list-style-type: disc; border-radius: 4px; clear: both;\">Avoid dictionary words from any language.</li><li style=\"-webkit-tap-highlight-color: transparent; margin: 0px; padding: 0px; border: none; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 25px; font-family: inherit; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; list-style-type: disc; border-radius: 4px; clear: both;\">Don\'t use your name (or a family member\'s name), social security number, pet name, or birthdate.</li><li style=\"-webkit-tap-highlight-color: transparent; margin: 0px; padding: 0px; border: none; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 25px; font-family: inherit; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; list-style-type: disc; border-radius: 4px; clear: both;\">If you\'re stumped, try a password generator like&nbsp;<a rel=\"nofollow\" class=\"external text\" href=\"https://my.norton.com/extspa/passwordmanager?path=pwd-gen\" style=\"-webkit-tap-highlight-color: transparent; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(48, 117, 48); overflow-wrap: break-word;\">Norton\'s</a>.</li></ul>', 1, 7, '2020-06-09 13:50:18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` mediumtext NOT NULL,
  `banner` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `banner`) VALUES
(1, 'Business and Economics', 'cat1.jpg'),
(2, 'Language', 'cat2.jpg'),
(3, 'Arts', 'cat3.jpg'),
(4, 'Fashion', 'cat4.jpg'),
(5, 'Health Studies', 'cat5.jpg'),
(6, 'Food and Beverage Studies', 'cat6.jpg'),
(7, 'Engineering & Technology', 'cat7.jpg'),
(8, 'Humanities and Social Sciences', 'cat8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `did` int(255) NOT NULL,
  `isdeleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`, `did`, `isdeleted`) VALUES
(1, 'S-1', 1, 0),
(2, 'S-2', 1, 0),
(3, 'S-3', 1, 0),
(4, 'S-4', 1, 0),
(5, 'S-5', 1, 0),
(6, 'S-6', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(255) NOT NULL,
  `nid` int(255) NOT NULL,
  `uid` int(255) NOT NULL,
  `comment` longtext NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `isdeleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `did` int(255) NOT NULL,
  `aid` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isdeleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`did`, `aid`, `name`, `created`, `isdeleted`) VALUES
(1, 1, 'BCA', '2020-06-09 10:01:25', 0),
(2, 1, 'BBA', '2020-06-09 10:01:29', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `name` mediumtext NOT NULL,
  `email` mediumtext NOT NULL,
  `password` mediumtext NOT NULL,
  `department` int(11) NOT NULL,
  `isdeleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `aid`, `name`, `email`, `password`, `department`, `isdeleted`) VALUES
(1, 1, 'Parth Joshi', 'parthjoshi@mail.com', '123456789', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `institute`
--

CREATE TABLE `institute` (
  `aid` int(100) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` bigint(20) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `profile` mediumtext NOT NULL,
  `everified` int(11) NOT NULL DEFAULT 0,
  `averified` int(11) NOT NULL DEFAULT 0,
  `verification_code` mediumtext NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `isdeleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `institute`
--

INSERT INTO `institute` (`aid`, `name`, `username`, `password`, `email`, `phonenumber`, `address`, `profile`, `everified`, `averified`, `verification_code`, `created`, `updated`, `isdeleted`) VALUES
(1, 'LJCCA', '', 'institute@123', 'ljcca@mail.com', NULL, '', '', 1, 1, 'wajQbUXn8BdkoiJV', '2020-06-09 13:30:51', '2020-06-09 13:28:20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `nid` int(255) NOT NULL,
  `aid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `title` mediumtext NOT NULL,
  `post` longtext NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isdeleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`nid`, `aid`, `did`, `cid`, `uid`, `title`, `post`, `views`, `created_at`, `isdeleted`) VALUES
(1, 1, 1, 1, NULL, 'Orientation ', 'Hello new comers, Your&nbsp;orientation will be on tomorrow morning 10:30. Be there without being late.', 0, '2020-06-09 13:37:46', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` mediumtext NOT NULL,
  `isdeleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post_views`
--

CREATE TABLE `post_views` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sadmin`
--

CREATE TABLE `sadmin` (
  `sid` int(10) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sadmin`
--

INSERT INTO `sadmin` (`sid`, `name`, `username`, `email`, `password`, `created`) VALUES
(1, 'yash', 'yash', 'yash@mail.com', 'admin@123', '2020-06-09 13:26:26'),
(2, 'raj', 'raj', 'raj@mail.com', 'admin@123', '2020-06-09 13:26:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(100) NOT NULL,
  `aid` int(100) NOT NULL,
  `enrollment_no` bigint(20) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` bigint(20) DEFAULT NULL,
  `department` int(255) NOT NULL,
  `class` int(50) NOT NULL,
  `profile` mediumtext NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp(),
  `isdeleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `aid`, `enrollment_no`, `name`, `password`, `email`, `phonenumber`, `department`, `class`, `profile`, `created`, `updated`, `isdeleted`) VALUES
(1, 1, 123456789, 'Yash Daiya', '123456789', 'yash@mail.com', NULL, 1, 1, '', '2020-06-09 13:38:25', '2020-06-09 13:38:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `utid` int(10) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`),
  ADD KEY `did_class_fk` (`did`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`did`),
  ADD KEY `aid_department_fk` (`aid`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institute`
--
ALTER TABLE `institute`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_views`
--
ALTER TABLE `post_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sadmin`
--
ALTER TABLE `sadmin`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `aid_users_fk` (`aid`),
  ADD KEY `did_users_fk` (`department`),
  ADD KEY `cid_users_fk` (`class`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`utid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attachments`
--
ALTER TABLE `attachments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `did` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `institute`
--
ALTER TABLE `institute`
  MODIFY `aid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `nid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_views`
--
ALTER TABLE `post_views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sadmin`
--
ALTER TABLE `sadmin`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `did_class_fk` FOREIGN KEY (`did`) REFERENCES `department` (`did`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
