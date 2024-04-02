-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 02, 2024 at 05:27 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

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
  `id` int NOT NULL,
  `user_number` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `class_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_teachers`
--

INSERT INTO `class_teachers` (`id`, `user_number`, `class_id`) VALUES
(1, 'TEA001', 1),
(3, 'TEA003', 4),
(4, 'TEA008', 2),
(5, 'TEA011', 5);

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int NOT NULL,
  `number_of_student` int NOT NULL,
  `grade_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `class_teacher_number` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `number_of_student`, `grade_name`, `class_teacher_number`) VALUES
(1, 0, 'Grade 1', 'TEA001'),
(2, 0, 'Grade 2', 'TEA008'),
(3, 0, 'Grade 3', NULL),
(4, 0, 'Grade 4', 'TEA003'),
(5, 0, 'Grade 5', 'TEA011'),
(6, 0, 'Grade 6', NULL),
(7, 0, 'Grade 7', NULL),
(8, 0, 'Grade 8', NULL),
(9, 0, 'Grade 9', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `guardians`
--

CREATE TABLE `guardians` (
  `id` int NOT NULL,
  `user_number` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `guardian_name` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `guardian_type` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `contact` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `occupation` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(300) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guardians`
--

INSERT INTO `guardians` (`id`, `user_number`, `guardian_name`, `guardian_type`, `contact`, `occupation`, `email`, `address`) VALUES
(2, 'PAR001', 'Seidu Saeed Rahman', 'father', '0549457934', 'father', 'rahman@gmail.com', 'GA-267-7897'),
(3, 'PAR003', 'Seidu Saeed Rahman', 'father', '0549457934', 'father', 'rahman@gmail.com', 'GA-267-7897');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int NOT NULL,
  `user_number` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `other_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `class_id` int NOT NULL,
  `gender` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `parent_id` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `date_of_admission` date NOT NULL,
  `height` int NOT NULL,
  `blood_group` varchar(10) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user_number`, `first_name`, `other_name`, `last_name`, `date_of_birth`, `class_id`, `gender`, `address`, `parent_id`, `date_of_admission`, `height`, `blood_group`) VALUES
(1, 'STU001', 'Rahim', 'Saeed', 'Seidu', '2023-11-15', 3, 'Male', 'GA-267-7897', 'PAR003', '2024-04-25', 54, 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `subject_teachers`
--

CREATE TABLE `subject_teachers` (
  `id` int NOT NULL,
  `user_number` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject_teachers`
--

INSERT INTO `subject_teachers` (`id`, `user_number`, `subject`) VALUES
(1, 'TEA002', 'ICT'),
(2, 'TEA009', 'Twi');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `user_number`, `first_name`, `other_name`, `last_name`, `email`, `date_of_birth`, `contact`, `address`, `date_of_employment`, `qualification`, `cv`, `teacher_type`) VALUES
(1, 'TEA001', 'William', 'Bosiako', 'Antwi', 'william@gmail.com', '2024-03-18', '0535599916', 'GA-267-7897', '2024-03-18', 'HND IN COMPUTER SCIENCE', '\'E:\\\\Backup\\\\CMS\\\\public/../public/resource/document/TEA001List.pdf\'', 'class_teacher'),
(2, 'TEA002', 'Derrick', 'Kwabena', 'Azaglo', 'derrick@gmail.com', '2002-02-05', '0549632604', 'GA-348-9383', '2024-03-04', 'HND IN COMPUTER SCIENCE', '\'E:\\\\Backup\\\\CMS\\\\public/../public/resource/document/TEA002Resignation Letter.pdf\'', 'subject_teacher'),
(7, 'TEA003', 'Micheal', 'Kwesi', 'Alorsor', 'micheal@gmail.coom', '2024-02-26', '0548938948', 'GA-232-2343', '2024-02-28', 'HND IN COMPUTER SCIENCE', '\'E:\\\\Backup\\\\CMS\\\\public/../public/resource/document/TEA003CONRAD EBO TURKSON  CV.pdf\'', 'class_teacher'),
(8, 'TEA008', 'Gafaru', 'Abdul', 'Rafiu', 'raf@gmail.com', '2023-01-03', '0503403490', 'GA-234-5344', '2024-03-25', 'HND IN COMPUTER SCIENCE', '\'E:\\\\Backup\\\\CMS\\\\public/../public/resource/document/TEA008ECG.pdf\'', 'class_teacher'),
(10, 'TEA009', 'Richard', 'Kwame', 'Asante', 'rich@gmail.com', '2023-12-04', '0555555555', 'GA-123-1234', '2024-03-25', 'HND IN COMPUTER SCIENCE', '\'C:\\\\Users\\\\big-daddy\\\\Desktop\\\\CMS\\\\smsFinalYear\\\\smsFinalYear\\\\public/../public/resource/document/TEA009ED474551.pdf\'', 'subject_teacher'),
(11, 'TEA011', 'Conrad', 'Ebo', 'Turkson', 'conrad@gmail.com', '2024-03-18', '0539458290', 'GA-324-4939', '2024-03-13', 'HND IN COMPUTER SCIENCE', '\'C:\\\\Users\\\\big-daddy\\\\Desktop\\\\CMS\\\\smsFinalYear\\\\smsFinalYear\\\\public/../public/resource/document/TEA011progit.pdf\'', 'class_teacher');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `user_number` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_type` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_number`, `last_name`, `user_type`, `email`, `password`) VALUES
(1, '', 'Azaglo', 'admin', 'derrickazaglo123@gmail.com', '123456789'),
(7, 'TEA001', 'Antwi', 'facilitator', 'william@gmail.com', 'default'),
(8, 'TEA002', 'Azaglo', 'facilitator', 'derrick@gmail.com', 'default'),
(9, 'TEA003', 'Alorsor', 'facilitator', 'micheal@gmail.coom', 'default'),
(14, 'TEA008', 'Rafiu', 'facilitator', 'raf@gmail.com', 'default'),
(16, 'TEA009', 'Asante', 'facilitator', 'rich@gmail.com', 'default'),
(17, 'TEA011', 'Turkson', 'facilitator', 'conrad@gmail.com', 'default'),
(18, 'PAR003', 'rahman@gmail.com', 'parent', 'default', 'Seidu Saeed Rahman'),
(19, 'STU001', 'Seidu', 'student', NULL, 'default');

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
-- Indexes for table `subject_teachers`
--
ALTER TABLE `subject_teachers`
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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `guardians`
--
ALTER TABLE `guardians`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subject_teachers`
--
ALTER TABLE `subject_teachers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
