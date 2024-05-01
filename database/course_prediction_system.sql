-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2024 at 10:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course_prediction_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `admin_email`, `pass`, `created_at`, `updated_at`) VALUES
(1, 'Nafiu Ishaq', 'nafiuig@gmail.com', '123', '2024-04-29 08:34:46', '2024-04-29 08:34:46');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `C_ID` int(1) NOT NULL,
  `CourseTitle` varchar(100) NOT NULL,
  `CutOff` int(11) NOT NULL,
  `FirstSubject` int(11) NOT NULL,
  `SecondSubject` int(11) NOT NULL,
  `ThirdSubject` int(11) NOT NULL,
  `FourthSubject` int(11) NOT NULL,
  `FifthSubject` int(11) NOT NULL,
  `Year` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`C_ID`, `CourseTitle`, `CutOff`, `FirstSubject`, `SecondSubject`, `ThirdSubject`, `FourthSubject`, `FifthSubject`, `Year`, `created_at`, `updated_at`) VALUES
(1, 'Computer Science', 190, 1, 2, 3, 4, 5, 2002, '2024-04-29 09:14:13', '2024-04-29 09:44:43'),
(2, 'Statistics', 170, 1, 2, 3, 4, 5, 3, '2024-04-30 08:32:17', '2024-04-30 08:32:17'),
(4, 'Geography', 170, 1, 2, 6, 4, 3, 4, '2024-05-01 08:02:09', '2024-05-01 08:02:09');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `Subject_ID` int(11) NOT NULL,
  `Subject_Title` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`Subject_ID`, `Subject_Title`, `created_at`, `updated_at`) VALUES
(1, 'English', '2024-04-29 09:38:47', '2024-04-29 09:38:47'),
(2, 'Mathematics', '2024-04-29 09:39:14', '2024-04-29 09:39:14'),
(3, 'Physics', '2024-04-29 09:39:35', '2024-04-29 09:39:35'),
(4, 'Chemistry', '2024-04-29 09:39:35', '2024-04-29 09:39:35'),
(5, 'Biology', '2024-04-29 13:54:21', '2024-04-29 13:54:21'),
(6, 'Geography', '2024-04-29 13:54:31', '2024-04-29 13:54:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `rpass` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `pass`, `rpass`, `created_at`, `updated_at`) VALUES
(2, 'Sani Sami Abubakar', 'sani@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', '2024-04-29 09:22:54', '2024-05-01 08:00:08'),
(3, 'habibullah Khabib', 'habib@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', '2024-04-29 13:14:01', '2024-04-29 13:14:01');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `Year_ID` int(11) NOT NULL,
  `Year` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`Year_ID`, `Year`, `created_at`, `updated_at`) VALUES
(2, 2020, '2024-04-30 12:49:41', '2024-04-30 12:49:41'),
(3, 2021, '2024-04-30 12:49:45', '2024-04-30 12:49:45'),
(4, 2022, '2024-04-30 12:49:48', '2024-04-30 12:49:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`Subject_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`Year_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `C_ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `Subject_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `Year_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
