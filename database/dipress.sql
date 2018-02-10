-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2017 at 01:12 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dipress`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `title` varchar(55) NOT NULL,
  `dep` varchar(55) NOT NULL,
  `uni` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `name`, `title`, `dep`, `uni`, `image`) VALUES
(1, 'Mr. Talha Bin Omar', 'Lecturer', 'Department of Computer Science & Engineering  ', 'World University of Bangladesh', 'talha.jpg'),
(2, 'Md. Jobaer Hossain', 'Student', 'Department of Computer Science & Engineering  ', 'World University of Bangladesh', 'juba.jpg'),
(3, 'Md. Shamsul Islam', 'Student', 'Department of Computer Science & Engineering  ', 'World University of Bangladesh', 'choton.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`) VALUES
(1, 'jobayer', 'jobayer@gmail.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `askques`
--

CREATE TABLE `askques` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `askques`
--

INSERT INTO `askques` (`id`, `name`, `email`, `msg`) VALUES
(1, 'Murad', 'murad@gmail.com', 'Test massage for test'),
(2, 'Murad', 'murad@gmail.com', 'hello'),
(3, 'Murad', 'jobayer@gmail.com', 'dsdfsdfsfsfddfs'),
(4, 'Murad', 'murad@gmail.com', 'dsdfs434343'),
(5, 'hello', 'admin@uysys.com', 'sfsdffsd'),
(6, 'Murad', 'admin@uysys.com', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `option_value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `option_value`) VALUES
(1, 'I do everything slowly.', 0),
(2, 'My future seems hopeless.', 0),
(3, 'I find it hard to concentrate when I read.', 0),
(4, 'All joy and pleasure seem to have disappeared from my life.', 0),
(5, 'I find it hard to make decisions.', 0),
(6, 'I have lost interest in things that used to mean a lot to me.', 0),
(7, 'I feel sad, depressed and unhappy.', 0),
(8, 'I feel restless and cannot relax.', 0),
(9, 'I feel tired.', 0),
(10, 'I find it hard to do even trivial things.', 0),
(11, 'I feel guilty and deserve to be punished.', 0),
(12, 'I feel like a failure.', 0),
(13, 'I feel empty - more dead than alive.', 0),
(14, 'My sleep is disturbed: too little, too much or disturbed sleep.', 0),
(15, 'I wonder HOW I could commit suicide.', 0),
(16, 'I feel confined and imprisoned.', 0),
(17, 'I feel down even when something good happens to me.', 0),
(18, 'I have lost or gained weight without being on a diet.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `age`, `gender`) VALUES
(1, 'murad', 25, 'male'),
(2, 'murad', 25, 'male'),
(3, 'zarmin', 21, 'female'),
(4, 'zarmin', 21, 'female'),
(5, 'murad', 25, 'male'),
(6, 'murad', 25, ''),
(7, 'd', 0, ''),
(8, 'f', 0, ''),
(9, 'murad', 25, 'male'),
(10, 'zarmin', 25, 'female'),
(11, 'murad', 25, 'male'),
(12, 'murad', 25, 'male'),
(13, 'zarmin', 25, 'female'),
(14, 'murad', 25, 'male'),
(15, '', 0, 'male'),
(16, 'murad', 25, 'male'),
(17, 'murad', 25, 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `askques`
--
ALTER TABLE `askques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `askques`
--
ALTER TABLE `askques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
