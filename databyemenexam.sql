-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05 نوفمبر 2026 الساعة 22:32
-- إصدار الخادم: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databyemenexam`
--

-- --------------------------------------------------------

--
-- بنية الجدول `certificates`
--

CREATE TABLE `certificates` (
  `certificate_number` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `grade` float NOT NULL,
  `year` varchar(50) NOT NULL,
  `student_number` int(11) NOT NULL,
  `max_grade` int(11) NOT NULL,
  `min_grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `certificates`
--

INSERT INTO `certificates` (`certificate_number`, `subject`, `grade`, `year`, `student_number`, `max_grade`, `min_grade`) VALUES
(19, 'القران الكريم', 91, '2021-2022', 6, 100, 50),
(20, 'القران الكريم', 94, '2021-2022', 6, 100, 50),
(21, 'التربية الاسلامية', 85, '2021-2022', 6, 100, 50),
(22, 'اللغة العربية', 85, '2021-2022', 6, 100, 50),
(23, 'اللغة الانجليزية', 80, '2021-2022', 6, 100, 50),
(24, 'الرياضيات', 89, '2021-2022', 6, 100, 50),
(25, 'الفيزياء', 93, '2021-2022', 6, 100, 50),
(26, 'الكيمياء', 93, '2021-2022', 6, 100, 50);

-- --------------------------------------------------------

--
-- بنية الجدول `students`
--

CREATE TABLE `students` (
  `student_number` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `seat_number` int(11) NOT NULL,
  `school` varchar(100) NOT NULL,
  `city` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `students`
--

INSERT INTO `students` (`student_number`, `student_name`, `seat_number`, `school`, `city`) VALUES
(6, 'اسامة عبدالسلام علي قاسم', 401671, 'انس بن مالك/ إب', 'إب');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`certificate_number`),
  ADD KEY `student_number` (`student_number`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `certificate_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `certificates`
--
ALTER TABLE `certificates`
  ADD CONSTRAINT `Student_num_Fk` FOREIGN KEY (`student_number`) REFERENCES `students` (`student_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
