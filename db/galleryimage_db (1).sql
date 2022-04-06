-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2022 at 01:32 PM
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
-- Database: `galleryimage_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Outfit'),
(2, 'home decor'),
(3, 'garden'),
(4, 'gadgets'),
(18, 'cakes');

-- --------------------------------------------------------

--
-- Table structure for table `imgdata`
--

CREATE TABLE `imgdata` (
  `image_id` int(5) NOT NULL,
  `cat_image` varchar(100) NOT NULL,
  `image_title` varchar(50) NOT NULL,
  `image_desc` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `dateofuploading` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `imgdata`
--

INSERT INTO `imgdata` (`image_id`, `cat_image`, `image_title`, `image_desc`, `cat_id`, `dateofuploading`) VALUES
(22, 'uploads/Outfit1.jpg', 'Outfit1', 'Refresh your look with gallery', 1, '2022-04-05 17:07:56'),
(23, 'uploads/Outfit2.jpg', 'Outfit2', 'Refresh your look with gallery', 1, '2022-04-05 17:10:26'),
(24, 'uploads/Outfit3.jpg', 'Outfit3', 'Refresh your look with gallery', 1, '2022-04-05 17:11:03'),
(25, 'uploads/Outfit4.jpg', 'Outfit4', 'Refresh your look with gallery', 1, '2022-04-05 17:11:34'),
(26, 'uploads/HomeDecor1.jpg', 'HomeDecor1', 'Decoreyour room with gallery', 2, '2022-04-05 17:13:32'),
(27, 'uploads/HomeDecor2.jpg', 'HomeDecor2', 'Decor Your room home with gallery', 2, '2022-04-05 17:14:35'),
(28, 'uploads/HomeDecor3.jpg', 'HomeDecor3', 'Decor Your room home with gallery', 2, '2022-04-05 17:15:25'),
(29, 'uploads/HomeDecor4.jpg', 'HomeDecor4', 'Decor Your room home with gallery', 2, '2022-04-05 17:15:49'),
(31, 'uploads/Garden1.jpg', 'Garden1', 'create your own garden with Gallery', 3, '2022-04-05 17:19:02'),
(32, 'uploads/Garden2.jpg', 'Garden2', 'create your own garden with Gallery', 3, '2022-04-05 17:19:23'),
(33, 'uploads/Garden3.jpg', 'Garden3', 'create your own garden with Gallery', 3, '2022-04-05 17:19:45'),
(34, 'uploads/Garden4.jpg', 'Garden4', 'create your own garden with Gallery', 3, '2022-04-05 17:20:12'),
(36, 'uploads/gadget2.jpg', 'gadget2', 'Select Your gadget with gallery', 4, '2022-04-05 17:26:13'),
(37, 'uploads/gadget3.jpg', 'gadget3', 'Select Your gadget with gallery', 4, '2022-04-05 17:26:51'),
(38, 'uploads/gadget4.jpg', 'gadget4', 'Select Your gadget with gallery', 4, '2022-04-05 17:27:09'),
(39, 'uploads/gadget1.jpg', 'gadget1', 'Select Your gadget with gallery', 4, '2022-04-05 17:28:26');

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `user_id` int(5) NOT NULL,
  `login_id` int(5) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `dateofbirth` date NOT NULL,
  `emailaddress` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contactnumber` varchar(15) NOT NULL,
  `profile_photo` varchar(100) NOT NULL,
  `user_type` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`user_id`, `login_id`, `firstname`, `lastname`, `dateofbirth`, `emailaddress`, `password`, `contactnumber`, `profile_photo`, `user_type`) VALUES
(1, 0, 'admin', 'id', '2012-04-01', 'admin@gmail.com', 'adminpass', '', '', 'admin'),
(55, 0, 'Ushmala', 'B', '1999-12-12', 'ushmala.b@gmail.com', '12345', '8590952853', 'uploads/8590952853.', 'user'),
(56, 0, 'Ushmala', 'B', '1999-12-12', 'ush@gmail.com', '8989', '8590952853', 'uploads/8590952853.', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `imgdata`
--
ALTER TABLE `imgdata`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `fk_imgdata_category` (`cat_id`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `imgdata`
--
ALTER TABLE `imgdata`
  MODIFY `image_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `imgdata`
--
ALTER TABLE `imgdata`
  ADD CONSTRAINT `fk_imgdata_category` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
