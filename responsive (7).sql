-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2022 at 10:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `responsive`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel`
--

CREATE TABLE `admin_panel` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_panel`
--

INSERT INTO `admin_panel` (`id`, `admin_name`, `email_id`, `password`, `role`, `created`) VALUES
(1, 'vinod', 'y@gmail.com', '0b6ff8b019c6febfa1f84988019ca16d', 'superadmin', '2022-04-26 13:38:04'),
(2, 'saxsakj', 'v@gmail.com', '183a5c49db2e8e0c5c96d3a29bed7c75', 'admin', '2022-04-26 02:22:25');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `student_mobile_name` varchar(50) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `fathe_name` varchar(50) NOT NULL,
  `father_mobile_number` varchar(50) NOT NULL,
  `10th_percentage` decimal(10,0) NOT NULL,
  `12t_percentage` decimal(10,0) NOT NULL,
  `graduation_percentage` decimal(10,0) NOT NULL,
  `select_course` varchar(50) NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `select_college` varchar(255) NOT NULL,
  `permanent_address` varchar(42) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pin_code` varchar(20) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `full_name`, `student_mobile_name`, `email_id`, `fathe_name`, `father_mobile_number`, `10th_percentage`, `12t_percentage`, `graduation_percentage`, `select_course`, `specialization`, `select_college`, `permanent_address`, `city`, `pin_code`, `created`) VALUES
(1, 'vinod', '7717732243', '871f5ba6e066b8cd0c480e27eb454011', 'dewwfeg', '4546576879', '45', '10', '34', 'LLB', 'General Management', 'General Management', 'ayodhya', 'Nagpure', '54545', '2022-04-26 09:13:07'),
(2, 'vinod', '7717732243', '871f5ba6e066b8cd0c480e27eb454011', 'dewwfeg', '4546576879', '45', '10', '34', 'LLB', 'General Management', 'General Management', 'ayodhya', 'Nagpure', '54545', '2022-04-26 09:15:01'),
(3, 'vinod', '7717732243', '871f5ba6e066b8cd0c480e27eb454011', 'dewwfeg', '4546576879', '45', '10', '34', 'LLB', 'General Management', 'General Management', 'ayodhya', 'Nagpure', '54545', '2022-04-26 09:16:29');

-- --------------------------------------------------------

--
-- Table structure for table `affiliation`
--

CREATE TABLE `affiliation` (
  `id` int(11) NOT NULL,
  `affiliation_name` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `affiliation`
--

INSERT INTO `affiliation` (`id`, `affiliation_name`, `created`) VALUES
(1, 'aktu', '2022-04-28 11:00:48'),
(2, 'delhi university', '2022-04-28 11:00:48'),
(3, 'uptu', '2022-04-28 11:01:43'),
(4, 'university of lucknow', '2022-04-28 11:01:43');

-- --------------------------------------------------------

--
-- Table structure for table `Agencey`
--

CREATE TABLE `Agencey` (
  `id` int(11) NOT NULL,
  `agencey_name` varchar(100) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Agencey`
--

INSERT INTO `Agencey` (`id`, `agencey_name`, `created`) VALUES
(1, 'NIRF', '2022-04-28 11:07:22'),
(2, 'outlook', '2022-04-28 11:07:22'),
(3, 'TOI', '2022-04-28 11:07:50'),
(4, 'ARIIA', '2022-04-28 11:07:50');

-- --------------------------------------------------------

--
-- Table structure for table `Approval`
--

CREATE TABLE `Approval` (
  `id` int(11) NOT NULL,
  `approval_name` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Approval`
--

INSERT INTO `Approval` (`id`, `approval_name`, `created`) VALUES
(1, 'UGC', '2022-04-28 11:03:02'),
(2, 'AICTE', '2022-04-28 11:03:02'),
(3, 'NBA', '2022-04-28 11:04:59'),
(4, 'AIU', '2022-04-28 11:04:59');

-- --------------------------------------------------------

--
-- Table structure for table `City`
--

CREATE TABLE `City` (
  `id` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `City`
--

INSERT INTO `City` (`id`, `city_name`, `state_id`) VALUES
(1, 'lucknow', 1),
(2, 'ayodhya', 1),
(3, 'amethi', 1),
(4, 'sultanpur', 1);

-- --------------------------------------------------------

--
-- Table structure for table `collage_exam`
--

CREATE TABLE `collage_exam` (
  `id` int(11) NOT NULL,
  `collage_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Collage_type`
--

CREATE TABLE `Collage_type` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Collage_type`
--

INSERT INTO `Collage_type` (`id`, `type`, `created`) VALUES
(1, 'government', '2022-04-28 10:45:16'),
(2, 'private', '2022-04-28 10:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(11) NOT NULL,
  `collage_name` varchar(255) NOT NULL,
  `state_id` int(11) NOT NULL,
  `collage_type_id` int(11) NOT NULL,
  `affiliated_id` int(11) NOT NULL,
  `approvel_id` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `course_id` int(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `collage_name`, `state_id`, `collage_type_id`, `affiliated_id`, `approvel_id`, `gender`, `course_id`, `created`, `updated`) VALUES
(1, 'rvppic', 1, 1, 3, 2, 'Coed', 1, '2022-04-29 06:59:28', '2022-04-29 11:24:51');

-- --------------------------------------------------------

--
-- Table structure for table `college_agencey`
--

CREATE TABLE `college_agencey` (
  `id` int(11) NOT NULL,
  `college_id` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `college_gallery`
--

CREATE TABLE `college_gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `college_id` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `college_placement`
--

CREATE TABLE `college_placement` (
  `id` int(11) NOT NULL,
  `collage_id` int(11) NOT NULL,
  `placement_id` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `counsler`
--

CREATE TABLE `counsler` (
  `id` int(11) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` datetime NOT NULL,
  `gender` varchar(20) NOT NULL,
  `language` varchar(50) NOT NULL,
  `preferedlanguage` varchar(255) NOT NULL,
  `workschedule` varchar(100) NOT NULL,
  `salary` double DEFAULT NULL,
  `refercode` varchar(20) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counsler`
--

INSERT INTO `counsler` (`id`, `fullname`, `email`, `dob`, `gender`, `language`, `preferedlanguage`, `workschedule`, `salary`, `refercode`, `created`) VALUES
(1, 'vinod', 'yadav.vinod510@hotmail.com', '2022-04-02 00:00:00', 'female', 'Hindi', 'Hindi', 'morning', 100000, '', '2022-04-29 06:31:20'),
(2, 'vinod', 'yadavvinod510@hotmail.com', '2022-03-31 00:00:00', 'male', 'Hindi', 'english', 'morning', 200000, 'N5K7A5', '2022-04-30 09:34:13');

-- --------------------------------------------------------

--
-- Table structure for table `Country`
--

CREATE TABLE `Country` (
  `id` int(11) NOT NULL,
  `country_name` varchar(100) NOT NULL,
  `country_code` varchar(20) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Country`
--

INSERT INTO `Country` (`id`, `country_name`, `country_code`, `created`) VALUES
(1, 'india', '91', '2022-04-28 13:05:28'),
(2, 'pakistan', '94', '2022-04-28 13:05:28'),
(3, 'great braten', '44', '2022-04-28 13:06:24'),
(4, 'astria', '47', '2022-04-28 13:06:24');

-- --------------------------------------------------------

--
-- Table structure for table `Courses`
--

CREATE TABLE `Courses` (
  `id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_duration` varchar(20) NOT NULL,
  `course_fees` double NOT NULL,
  `sub_stream_id` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Courses`
--

INSERT INTO `Courses` (`id`, `course_name`, `course_duration`, `course_fees`, `sub_stream_id`, `created`) VALUES
(1, 'B.Tech', '4', 100000, 1, '2022-04-28 13:28:20'),
(2, 'BE', '4', 150000, 1, '2022-04-28 13:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `Exams`
--

CREATE TABLE `Exams` (
  `id` int(11) NOT NULL,
  `exam_name` varchar(100) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `facility` varchar(255) NOT NULL,
  `college_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Faculity`
--

CREATE TABLE `Faculity` (
  `id` int(11) NOT NULL,
  `faculity_name` varchar(50) NOT NULL,
  `faculity_department` varchar(50) NOT NULL,
  `faculity_position` varchar(50) NOT NULL,
  `collage_id` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `college_image` varchar(255) NOT NULL,
  `college_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parent_scholorship`
--

CREATE TABLE `parent_scholorship` (
  `id` int(11) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `fatheroccupation` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `mothername` varchar(50) NOT NULL,
  `motheroccupation` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent_scholorship`
--

INSERT INTO `parent_scholorship` (`id`, `fathername`, `fatheroccupation`, `mobile`, `mothername`, `motheroccupation`, `address`, `pincode`, `created`) VALUES
(1, 'ldkddi', 'dffdsssxnwexnywezuwz', '7e46f051dc9dee0ca8e3ca48fdbef885', 'ccdefef', 'dvrrdwfeeeeeeeeeg', 'acssvdsvdvd', '232424', '2022-04-27 10:44:39');

-- --------------------------------------------------------

--
-- Table structure for table `Placement`
--

CREATE TABLE `Placement` (
  `id` int(11) NOT NULL,
  `placement_company` varchar(100) NOT NULL,
  `placement_department` varchar(50) NOT NULL,
  `placement_collage_id` int(11) NOT NULL,
  `placement_ctc` varchar(50) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Reviews`
--

CREATE TABLE `Reviews` (
  `id` int(11) NOT NULL,
  `review` varchar(255) NOT NULL,
  `collage_id` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Scholorship`
--

CREATE TABLE `Scholorship` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `admissionid` int(11) NOT NULL,
  `hspersentage` decimal(10,0) NOT NULL,
  `collegename` varchar(100) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Scholorship`
--

INSERT INTO `Scholorship` (`id`, `fullname`, `email`, `password`, `mobile`, `admissionid`, `hspersentage`, `collegename`, `coursename`, `created`) VALUES
(1, 'sdsdds', 'as@gmail.com', '0b6ff8b019c6febfa1f84988019ca16d', '213123', 213, '78', 'dsfdsf', 'dsfsdf', '2022-04-27 10:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `State`
--

CREATE TABLE `State` (
  `id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `State`
--

INSERT INTO `State` (`id`, `state_name`, `country_id`) VALUES
(1, 'uttar pradesh', 1),
(2, 'delhi', 1),
(3, 'jandk', 1),
(4, 'jharkhand', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Stream`
--

CREATE TABLE `Stream` (
  `id` int(11) NOT NULL,
  `stream_name` varchar(100) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Stream`
--

INSERT INTO `Stream` (`id`, `stream_name`, `created`) VALUES
(1, 'Engineering', '2022-04-28 13:25:23'),
(2, 'Medical', '2022-04-28 13:25:23');

-- --------------------------------------------------------

--
-- Table structure for table `sub_stream`
--

CREATE TABLE `sub_stream` (
  `id` int(11) NOT NULL,
  `sub_stream_name` varchar(100) NOT NULL,
  `stream_id` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_stream`
--

INSERT INTO `sub_stream` (`id`, `sub_stream_name`, `stream_id`, `created`) VALUES
(1, 'Computer science', 1, '2022-04-28 13:26:09'),
(2, 'Mechaical Engeneering', 1, '2022-04-28 13:26:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ref_code` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `user_code` varchar(20) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email_id`, `password`, `ref_code`, `mobile`, `user_code`, `created`) VALUES
(1, 'Vinod Kumar', 'as@gmail.com', '0b6ff8b019c6febfa1f84988019ca16d', '', '123212345677', '6R71TD', '2022-04-23 06:26:25'),
(2, 'dfsf', 'x@gmail.com', '0b6ff8b019c6febfa1f84988019ca16d', '', '252542545', '4J40Z3', '2022-04-27 07:45:44'),
(3, 'hjhkhm', 'cv@gmail.com', 'c6e6d499a354de40c2485e4b44bbc353', '', '4764644746', '033JU', '2022-04-27 07:51:43'),
(4, 'xfdxdx', 'jhghj@gmail.com', 'c6e6d499a354de40c2485e4b44bbc353', '', '4363763673', '', '2022-04-27 08:05:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_panel`
--
ALTER TABLE `admin_panel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `affiliation`
--
ALTER TABLE `affiliation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Agencey`
--
ALTER TABLE `Agencey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Approval`
--
ALTER TABLE `Approval`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `City`
--
ALTER TABLE `City`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collage_exam`
--
ALTER TABLE `collage_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Collage_type`
--
ALTER TABLE `Collage_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_agencey`
--
ALTER TABLE `college_agencey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_gallery`
--
ALTER TABLE `college_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_placement`
--
ALTER TABLE `college_placement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counsler`
--
ALTER TABLE `counsler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Country`
--
ALTER TABLE `Country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Courses`
--
ALTER TABLE `Courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Exams`
--
ALTER TABLE `Exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Faculity`
--
ALTER TABLE `Faculity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent_scholorship`
--
ALTER TABLE `parent_scholorship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Placement`
--
ALTER TABLE `Placement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Reviews`
--
ALTER TABLE `Reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Scholorship`
--
ALTER TABLE `Scholorship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `State`
--
ALTER TABLE `State`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Stream`
--
ALTER TABLE `Stream`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_stream`
--
ALTER TABLE `sub_stream`
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
-- AUTO_INCREMENT for table `admin_panel`
--
ALTER TABLE `admin_panel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `affiliation`
--
ALTER TABLE `affiliation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Agencey`
--
ALTER TABLE `Agencey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Approval`
--
ALTER TABLE `Approval`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `City`
--
ALTER TABLE `City`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `collage_exam`
--
ALTER TABLE `collage_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Collage_type`
--
ALTER TABLE `Collage_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `college_agencey`
--
ALTER TABLE `college_agencey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `college_gallery`
--
ALTER TABLE `college_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `college_placement`
--
ALTER TABLE `college_placement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `counsler`
--
ALTER TABLE `counsler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Country`
--
ALTER TABLE `Country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Courses`
--
ALTER TABLE `Courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Exams`
--
ALTER TABLE `Exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Faculity`
--
ALTER TABLE `Faculity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parent_scholorship`
--
ALTER TABLE `parent_scholorship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Placement`
--
ALTER TABLE `Placement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Reviews`
--
ALTER TABLE `Reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Scholorship`
--
ALTER TABLE `Scholorship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `State`
--
ALTER TABLE `State`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Stream`
--
ALTER TABLE `Stream`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_stream`
--
ALTER TABLE `sub_stream`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
