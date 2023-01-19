-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 10:06 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ima_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_id` varchar(10) NOT NULL,
  `createDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_username`, `admin_password`, `admin_id`, `createDate`) VALUES
(1, 'admindemo', 'e10adc3949ba59abbe56e057f20f883e', '0', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `announcement_db`
--

CREATE TABLE `announcement_db` (
  `id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `month` varchar(20) NOT NULL,
  `title` varchar(250) NOT NULL,
  `pdf_name` varchar(250) NOT NULL,
  `video_link` text NOT NULL,
  `link` text NOT NULL,
  `createDateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement_db`
--

INSERT INTO `announcement_db` (`id`, `date`, `month`, `title`, `pdf_name`, `video_link`, `link`, `createDateTime`) VALUES
(1, '01', 'Dec', 'Test Announcements', 'announcements-1.pdf', '', '', '2021-12-01 12:08:42'),
(2, '01', 'Dec', 'New Announcment', 'announcements-2.pdf', '', '', '2021-12-01 16:23:43'),
(3, '01', 'Dec', 'Test Link', '', 'https://www.youtube.com/watch?v=Fhxkdw-9K_0', '', '2021-12-01 16:58:31'),
(4, '10', 'Dec', 'Test Image Gallery', 'announcements-4.jpg', '', '', '2021-12-10 10:44:13');

-- --------------------------------------------------------

--
-- Table structure for table `book_solution_db`
--

CREATE TABLE `book_solution_db` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `month` varchar(20) NOT NULL,
  `title` varchar(250) NOT NULL,
  `pdf_name` varchar(250) NOT NULL,
  `video_link` text NOT NULL,
  `stream` int(11) NOT NULL,
  `link` text NOT NULL,
  `createDateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_solution_db`
--

INSERT INTO `book_solution_db` (`id`, `date`, `month`, `title`, `pdf_name`, `video_link`, `stream`, `link`, `createDateTime`) VALUES
(1, 1, 'Dec', 'Test', 'books-3.jpg', '', 0, '', '2021-12-01 16:25:19'),
(2, 1, 'Dec', 'Song Video Links', '', 'https://www.youtube.com/watch?v=kw4tT7SCmaY', 0, '', '2021-12-01 17:08:36'),
(3, 7, 'Dec', 'Medical Video Link', '', 'https://youtu.be/oAVhUAaVCVQ', 1, '', '2021-12-07 16:53:25'),
(4, 7, 'Dec', 'Engineering Video Link', '', 'https://youtu.be/oAVhUAaVCVQ', 2, '', '2021-12-07 16:53:47'),
(5, 7, 'Dec', 'Pre-Foundation Video Link', '', 'https://youtu.be/oAVhUAaVCVQ', 0, '', '2021-12-07 16:54:02');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `subject`, `mobile`, `message`, `time`) VALUES
(3, 'Test Name', 'test@gmail.com', 'subject', '09461221201', 'testing message.', '2021-11-15 11:50:24');

-- --------------------------------------------------------

--
-- Table structure for table `courseenquiry_db`
--

CREATE TABLE `courseenquiry_db` (
  `id` int(11) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `medium` varchar(50) NOT NULL,
  `submitDate` varchar(20) NOT NULL,
  `createDateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `class` varchar(25) NOT NULL,
  `medium` varchar(50) NOT NULL,
  `agree` varchar(5) NOT NULL,
  `date_info` varchar(150) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `mobile`, `stream`, `class`, `medium`, `agree`, `date_info`, `date_time`) VALUES
(19, 'STHE Form Test', 'address@mail.com', '9461225468', 'STHE Scholarship', '9th', 'Hindi', '1', '17-November-2021', '2021-11-17 08:00:52'),
(20, 'About Page Test', 'address@mail.com', '9871568416', 'STHE Scholarship', '9th', 'English', '1', '17-November-2021', '2021-11-17 08:03:56'),
(21, 'Why IMA', 'email@mail.com', '8461841968', 'Board', '10th', 'Hindi', '1', '17-November-2021', '2021-11-17 08:05:16'),
(22, 'Home Page Test', 'emil@mail.com', '5468168516', 'Medical', '12th', 'Hindi', '1', '17-November-2021', '2021-11-17 08:51:29'),
(23, 'Result Page Test', 'email@gmail.com', '1593575161', 'Foundations', '11th', 'English', '1', '17-November-2021', '2021-11-17 08:55:06'),
(24, 'Facilities Page Test', 'address@mail.com', '3216846128', 'Board', '12th', 'Hindi', '1', '17-November-2021', '2021-11-17 08:57:21'),
(25, 'Result Page Pre-foundation check', '', '1234564986', 'PreFoundations', '7th', 'English', '1', '1-December-2021', '2021-12-01 08:48:03'),
(26, 'Test Name', 'test@gmail.com', '09461221201', 'Engineering', '11th', '', '1', '1-December-2021', '2021-12-01 08:49:06'),
(27, 'facilities page', '', '4855541648', 'Medical', 'Target', 'English', '1', '1-December-2021', '2021-12-01 08:53:07'),
(28, 'Why IMA', '', '3453453453', 'PreFoundations', '8th', '', '1', '1-December-2021', '2021-12-01 09:00:56'),
(29, 'Enquiry Page', 'enquiry@mail.com', '9461122101', 'PreFoundations', '8th', 'English', '1', '1-December-2021', '2021-12-01 10:45:34'),
(30, 'Pop test', 'pop@mail.com', '9454651568', 'Engineering', 'Target', 'English', '1', '1-December-2021', '2021-12-01 10:46:23'),
(31, 'Submit Course Page', 'course@mail.com', '9465468496', 'Engineering', '11th', 'English', '1', '1-December-2021', '2021-12-01 10:51:48');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment_db`
--

CREATE TABLE `enrollment_db` (
  `id` int(11) NOT NULL,
  `enroll_no` varchar(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `fatherName` varchar(300) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `medium` varchar(50) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `examMode` varchar(50) NOT NULL,
  `examTime` varchar(50) NOT NULL,
  `examDate` varchar(50) NOT NULL,
  `submitDate` varchar(50) NOT NULL,
  `createDateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrollment_db`
--

INSERT INTO `enrollment_db` (`id`, `enroll_no`, `name`, `fatherName`, `email`, `mobileno`, `dob`, `class`, `medium`, `stream`, `examMode`, `examTime`, `examDate`, `submitDate`, `createDateTime`) VALUES
(1, 'STHE513002', 'Testing Name', 'Father Name', 'test@gmail.com', '9461221201', '2004-09-07', '12th', 'Hindi', 'Foundation', 'offline', 'Evening (03:00 PM to 05:00 PM)', '2021-11-23', '18-November-2021', '2021-11-18 13:06:57'),
(2, 'STHE513003', 'Rahul', 'Testing', 'example@mail.com', '9460582824', '2002-09-19', '9th', 'English', 'Foundation', 'offline', 'Evening (03:00 PM to 05:00 PM)', '2021-11-23', '18-November-2021', '2021-11-18 13:09:20'),
(3, 'STHE513004', 'Test', 'Father', 'example@gmail.com', '6784567834', '2001-05-03', 'Target', 'English', 'Engineering', 'online', 'Morning (10:00 AM to 12:00 PM)', '2022-01-01', '3-December-2021', '2021-12-03 13:17:17');

-- --------------------------------------------------------

--
-- Table structure for table `entarncetest_db`
--

CREATE TABLE `entarncetest_db` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `month` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `pdf_name` varchar(250) NOT NULL,
  `video_link` text NOT NULL,
  `stream` int(11) NOT NULL,
  `link` text NOT NULL,
  `createDateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entarncetest_db`
--

INSERT INTO `entarncetest_db` (`id`, `date`, `month`, `title`, `pdf_name`, `video_link`, `stream`, `link`, `createDateTime`) VALUES
(1, 1, 'Dec', 'Test', 'entrancetests-1.jpg', '', 0, '', '2021-12-01 16:25:49'),
(2, 1, 'Dec', 'Saagar Jaisi Akhonwali', '', 'https://www.youtube.com/watch?v=1DLnIXlff2E', 0, '', '2021-12-01 17:14:23'),
(3, 9, 'Dec', 'Medical Test Link', '', 'https://youtu.be/kw4tT7SCmaY', 1, '', '2021-12-09 17:33:04'),
(4, 9, 'Dec', 'Engineering Test Link', '', 'https://youtu.be/kw4tT7SCmaY', 2, '', '2021-12-09 17:33:18'),
(5, 9, 'Dec', 'Foundation Link Test', '', 'https://youtu.be/kw4tT7SCmaY', 0, '', '2021-12-09 17:33:28');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_db`
--

CREATE TABLE `gallery_db` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `product_id` int(11) NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_db`
--

INSERT INTO `gallery_db` (`id`, `title`, `image`, `product_id`, `createDate`) VALUES
(1, '', 'gallery-photo-1.jpg', 0, '2021-12-10 16:26:15'),
(2, '', 'gallery-photo-1-sub-2-1.jpg', 1, '2021-12-10 16:26:15'),
(3, '', 'gallery-photo-3.jpg', 0, '2021-12-10 16:26:33'),
(4, '', 'gallery-photo-3-sub-4-1.jpg', 3, '2021-12-10 16:26:33'),
(5, '', 'gallery-photo-3-sub-5-2.jpg', 3, '2021-12-10 16:26:33');

-- --------------------------------------------------------

--
-- Table structure for table `importantnotes_db`
--

CREATE TABLE `importantnotes_db` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `month` varchar(20) NOT NULL,
  `title` varchar(250) NOT NULL,
  `pdf_name` varchar(250) NOT NULL,
  `video_link` text NOT NULL,
  `stream` int(11) NOT NULL,
  `link` text NOT NULL,
  `createDateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `importantnotes_db`
--

INSERT INTO `importantnotes_db` (`id`, `date`, `month`, `title`, `pdf_name`, `video_link`, `stream`, `link`, `createDateTime`) VALUES
(1, 18, 'Nov', 'Testing Important Notes, PDF File.', 'importantnotes-4.pdf', '', 0, '', '2021-11-18 16:04:49'),
(3, 18, 'Nov', 'Testing Important Notes, After Delete JPG File', 'importantnotes-4.png', '', 0, '', '2021-11-18 16:05:18'),
(4, 18, 'Nov', 'testing error', 'importantnotes-4.jpg', '', 0, '', '2021-11-18 16:21:49'),
(5, 1, 'Dec', 'Test', 'importantnotes-3.jpg', '', 0, '', '2021-12-01 16:25:33'),
(6, 1, 'Dec', 'Afreen Afreen', '', 'https://www.youtube.com/watch?v=kw4tT7SCmaY', 0, '', '2021-12-01 17:11:54'),
(7, 9, 'Dec', 'Medical Test Link', '', 'https://youtu.be/reursVoX2_M', 1, '', '2021-12-09 17:30:52'),
(8, 9, 'Dec', 'Engineering Test Link', '', 'https://youtu.be/reursVoX2_M', 2, '', '2021-12-09 17:31:05'),
(9, 9, 'Dec', 'Test', '', 'https://youtu.be/reursVoX2_M', 0, '', '2021-12-09 17:31:14');

-- --------------------------------------------------------

--
-- Table structure for table `lesson_planner_db`
--

CREATE TABLE `lesson_planner_db` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `month` varchar(20) NOT NULL,
  `title` varchar(250) NOT NULL,
  `pdf_name` varchar(250) NOT NULL,
  `video_link` text NOT NULL,
  `stream` int(11) NOT NULL,
  `link` text NOT NULL,
  `createDateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lesson_planner_db`
--

INSERT INTO `lesson_planner_db` (`id`, `date`, `month`, `title`, `pdf_name`, `video_link`, `stream`, `link`, `createDateTime`) VALUES
(1, 1, 'Dec', 'test', 'lessons-1.pdf', '', 0, '', '2021-12-01 12:04:34'),
(2, 1, 'Dec', 'Lesson Planner', 'lessons-2.pdf', '', 2, '', '2021-12-01 16:24:54'),
(3, 1, 'Dec', 'Planner Title', 'lessons-3.jpg', '', 1, '', '2021-12-01 16:44:11'),
(4, 1, 'Dec', 'Planner', 'lessons-4.jpg', '', 0, '', '2021-12-01 16:45:06'),
(6, 7, 'Dec', 'Medical Stream', '', 'https://www.youtube.com/watch?v=ZEaFOoEmMrA&list=LL&index=3', 1, '', '2021-12-07 14:29:34'),
(7, 7, 'Dec', 'Engineering Stream Image', 'lessons-7.jpg', '', 2, '', '2021-12-07 14:30:15'),
(8, 7, 'Dec', 'Video Link For Pre-Foundation', '', 'https://www.youtube.com/watch?v=kw4tT7SCmaY&list=LL&index=4', 0, '', '2021-12-07 14:30:49');

-- --------------------------------------------------------

--
-- Table structure for table `new_db`
--

CREATE TABLE `new_db` (
  `id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `month` varchar(20) NOT NULL,
  `title` varchar(250) NOT NULL,
  `pdf_name` varchar(250) NOT NULL,
  `video_link` text NOT NULL,
  `createDateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_db`
--

INSERT INTO `new_db` (`id`, `date`, `month`, `title`, `pdf_name`, `video_link`, `createDateTime`) VALUES
(1, '01', 'Dec', 'Test News', 'news-1.pdf', '', '2021-12-01 12:08:09'),
(2, '01', 'Dec', 'Latest News', 'news-2.pdf', '', '2021-12-01 16:24:29'),
(3, '01', 'Dec', 'Video Link', '', 'https://www.youtube.com/watch?v=27UKiDPYrx8', '2021-12-01 17:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `result_db`
--

CREATE TABLE `result_db` (
  `id` int(11) NOT NULL,
  `field` varchar(50) NOT NULL,
  `rank` varchar(50) NOT NULL,
  `name` varchar(300) NOT NULL,
  `collage` varchar(500) NOT NULL,
  `image_name` varchar(150) NOT NULL,
  `image_title` varchar(250) NOT NULL,
  `image_alt` varchar(250) NOT NULL,
  `status` varchar(5) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result_db`
--

INSERT INTO `result_db` (`id`, `field`, `rank`, `name`, `collage`, `image_name`, `image_title`, `image_alt`, `status`, `datetime`) VALUES
(3, 'NEET', '1', 'aaksah', 'Test Collage Name', 'results-3.png', 'aaksah', 'aaksah', '1', '0000-00-00 00:00:00'),
(5, 'Medical', '2', 'Test', 'Collage Name', 'testimonial-5.jpg', 'Testing image', 'Testing image', '1', '0000-00-00 00:00:00'),
(8, 'Foundation', '1St', 'Student Test', 'Girls Collage', 'results-6.jpg', '', '', '1', '2021-12-01 12:24:22'),
(9, 'Foundation', '2', 'Name', 'School Name', 'results-9.jpg', '', '', '1', '2021-12-01 12:33:02'),
(10, 'Engineering', 'Metal Items', 'Items', 'Metal', 'results-10.jpg', '', '', '1', '2021-12-02 17:18:39');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_db`
--

CREATE TABLE `testimonial_db` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `class` varchar(10) NOT NULL,
  `board` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `review_img` varchar(50) NOT NULL,
  `review_img_title` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  `createDateTime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial_db`
--

INSERT INTO `testimonial_db` (`id`, `name`, `class`, `board`, `message`, `review_img`, `review_img_title`, `status`, `createDateTime`) VALUES
(1, 'aakash boy', '12th', 'CBSE Board', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', 'testimonial-1.jpg', 'aakash boy', 1, 0),
(2, 'Update name', '10th', 'CBSE Board', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'testimonial-2.jpg', 'update sergds', 1, 0),
(4, 'test three', '12th', 'RBSE Board', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'testimonial-3.jpg', 'sdfasd', 1, 0),
(7, 'Test Name', 'NEET', 'Test College, ECS', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'testimonial-5.jpg', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(256) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `password` char(150) NOT NULL,
  `c_pass` varchar(150) NOT NULL,
  `user_id` text NOT NULL,
  `createDate` datetime NOT NULL DEFAULT current_timestamp(),
  `updateDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `mobile_no`, `password`, `c_pass`, `user_id`, `createDate`, `updateDate`) VALUES
(1, 'useradmin', 'admin@mail.com', '9876543211', 'e10adc3949ba59abbe56e057f20f883e', '123456', '1', '2021-10-23 13:29:31', '2021-10-23 13:29:31');

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE `userdetail` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `admin_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`id`, `user_id`, `admin_id`) VALUES
(1, 0, '0'),
(2, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `verify_mobile`
--

CREATE TABLE `verify_mobile` (
  `id` int(11) NOT NULL,
  `enroll_id` int(11) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `otp` varchar(25) NOT NULL,
  `status` int(11) NOT NULL,
  `createDateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verify_mobile`
--

INSERT INTO `verify_mobile` (`id`, `enroll_id`, `mobile_no`, `otp`, `status`, `createDateTime`) VALUES
(1, 0, '9461221201', '444484', 0, '2021-12-03 13:28:25'),
(2, 0, '8619418921', '929091', 0, '2021-12-03 13:28:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement_db`
--
ALTER TABLE `announcement_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_solution_db`
--
ALTER TABLE `book_solution_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courseenquiry_db`
--
ALTER TABLE `courseenquiry_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollment_db`
--
ALTER TABLE `enrollment_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entarncetest_db`
--
ALTER TABLE `entarncetest_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_db`
--
ALTER TABLE `gallery_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `importantnotes_db`
--
ALTER TABLE `importantnotes_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lesson_planner_db`
--
ALTER TABLE `lesson_planner_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_db`
--
ALTER TABLE `new_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result_db`
--
ALTER TABLE `result_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial_db`
--
ALTER TABLE `testimonial_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetail`
--
ALTER TABLE `userdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verify_mobile`
--
ALTER TABLE `verify_mobile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcement_db`
--
ALTER TABLE `announcement_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `book_solution_db`
--
ALTER TABLE `book_solution_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `courseenquiry_db`
--
ALTER TABLE `courseenquiry_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `enrollment_db`
--
ALTER TABLE `enrollment_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `entarncetest_db`
--
ALTER TABLE `entarncetest_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery_db`
--
ALTER TABLE `gallery_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `importantnotes_db`
--
ALTER TABLE `importantnotes_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lesson_planner_db`
--
ALTER TABLE `lesson_planner_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `new_db`
--
ALTER TABLE `new_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `result_db`
--
ALTER TABLE `result_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `testimonial_db`
--
ALTER TABLE `testimonial_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userdetail`
--
ALTER TABLE `userdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `verify_mobile`
--
ALTER TABLE `verify_mobile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
