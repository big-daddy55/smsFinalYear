-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2024 at 07:53 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_teachers`
--

CREATE TABLE `class_teachers` (
  `id` int(10) NOT NULL,
  `user_number` varchar(10) NOT NULL,
  `class_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_teachers`
--

INSERT INTO `class_teachers` (`id`, `user_number`, `class_id`) VALUES
(1, 'TEA001', 1),
(3, 'TEA003', 4),
(4, 'TEA008', 2);

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(10) NOT NULL,
  `number_of_student` int(10) NOT NULL,
  `grade_name` varchar(255) NOT NULL,
  `class_teacher_number` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `number_of_student`, `grade_name`, `class_teacher_number`) VALUES
(1, 0, 'Grade 1', 'TEA001'),
(2, 0, 'Grade 2', 'TEA008'),
(3, 0, 'Grade 3', NULL),
(4, 0, 'Grade 4', 'TEA003'),
(5, 0, 'Grade 5', NULL),
(6, 0, 'Grade 6', NULL),
(7, 0, 'Grade 7', NULL),
(8, 0, 'Grade 8', NULL),
(9, 0, 'Grade 9', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `guardians`
--

CREATE TABLE `guardians` (
  `id` int(10) NOT NULL,
  `user_number` int(20) NOT NULL,
  `guardian_name` varchar(300) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `occupation` varchar(300) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `user_number` varchar(20) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `other_name` varchar(255) DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  `class_id` int(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(10) NOT NULL,
  `parent_id` varchar(20) NOT NULL,
  `date_of_admission` date NOT NULL,
  `height` int(10) NOT NULL,
  `blood_group` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject_teachers`
--

CREATE TABLE `subject_teachers` (
  `id` int(10) NOT NULL,
  `user_number` varchar(10) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject_teachers`
--

INSERT INTO `subject_teachers` (`id`, `user_number`, `subject`) VALUES
(0, 'TEA002', 'ICT');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) NOT NULL,
  `user_number` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `other_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `contact` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_of_employment` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `cv` varchar(300) NOT NULL,
  `teacher_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `user_number`, `first_name`, `other_name`, `last_name`, `email`, `date_of_birth`, `contact`, `address`, `date_of_employment`, `qualification`, `cv`, `teacher_type`) VALUES
(1, 'TEA001', 'William', 'Bosiako', 'Antwi', 'william@gmail.com', '2024-03-18', '0535599916', 'GA-267-7897', '2024-03-18', 'HND IN COMPUTER SCIENCE', '\'E:\\\\Backup\\\\CMS\\\\public/../public/resource/document/TEA001List.pdf\'', 'class_teacher'),
(2, 'TEA002', 'Derrick', 'Kwabena', 'Azaglo', 'derrick@gmail.com', '2002-02-05', '0549632604', 'GA-348-9383', '2024-03-04', 'HND IN COMPUTER SCIENCE', '\'E:\\\\Backup\\\\CMS\\\\public/../public/resource/document/TEA002Resignation Letter.pdf\'', 'subject_teacher'),
(7, 'TEA003', 'Micheal', 'Kwesi', 'Alorsor', 'micheal@gmail.coom', '2024-02-26', '0548938948', 'GA-232-2343', '2024-02-28', 'HND IN COMPUTER SCIENCE', '\'E:\\\\Backup\\\\CMS\\\\public/../public/resource/document/TEA003CONRAD EBO TURKSON  CV.pdf\'', 'class_teacher'),
(8, 'TEA008', 'Gafaru', 'Abdul', 'Rafiu', 'raf@gmail.com', '2023-01-03', '0503403490', 'GA-234-5344', '2024-03-25', 'HND IN COMPUTER SCIENCE', '\'E:\\\\Backup\\\\CMS\\\\public/../public/resource/document/TEA008ECG.pdf\'', 'class_teacher');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `user_number` varchar(10) NOT NULL,
  `user_type` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_number`, `user_type`, `email`, `password`) VALUES
(1, '', 'admin', 'derrickazaglo123@gmail.com', '123456789'),
(7, 'TEA001', 'facilitator', 'william@gmail.com', 'default'),
(8, 'TEA002', 'facilitator', 'derrick@gmail.com', 'default'),
(9, 'TEA003', 'facilitator', 'micheal@gmail.coom', 'default'),
(14, 'TEA008', 'facilitator', 'raf@gmail.com', 'default');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_teachers`
--
ALTER TABLE `class_teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guardians`
--
ALTER TABLE `guardians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_teachers`
--
ALTER TABLE `class_teachers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `guardians`
--
ALTER TABLE `guardians`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
