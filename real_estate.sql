-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2018 at 08:03 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `idhouse` int(11) NOT NULL,
  `house_name` varchar(75) DEFAULT NULL,
  `house_location` varchar(75) NOT NULL,
  `house_price` float NOT NULL,
  `house_description` varchar(255) DEFAULT NULL,
  `house_area` float DEFAULT NULL,
  `house_bedroom` int(11) DEFAULT NULL,
  `house_bath` int(11) DEFAULT NULL,
  `house_garage` varchar(45) DEFAULT NULL,
  `house_image` varchar(200) DEFAULT NULL,
  `house_status` varchar(20) DEFAULT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL,
  `house_owner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`idhouse`, `house_name`, `house_location`, `house_price`, `house_description`, `house_area`, `house_bedroom`, `house_bath`, `house_garage`, `house_image`, `house_status`, `create_time`, `update_time`, `house_owner`) VALUES
(24, 'Rehema Court', 'Juja', 12000000, 'Located along Thka Super Highway.', 123, 3, 2, NULL, '["algorithm5.jpg","algorithm114.jpg","autonomous7.png"]', 'Buy', '2018-02-26 12:00:08', NULL, 1),
(25, 'Kenya South', 'Kitengela', 8000000, 'This house was built in September 2017', 321, 3, 3, NULL, '["adan-fruit-and-sea-485451.jpg","algorithm115.jpg","autonomous21.png","bg1.jpg"]', 'Buy', '2018-02-26 12:02:23', NULL, 1),
(26, 'Caucasian House', 'Thika', 6500000, 'Located in juja south estate', 234, 3, 4, NULL, '["autonomous22.png","1a14fad76d9e6__HM_GRILL_11.png","adan-fruit-and-sea-485452.jpg","algorithm116.jpg","autonomous8.png"]', 'Rent', '2018-02-26 12:05:50', NULL, 1),
(27, 'Kennedy''s ', 'Kikuyu', 1200000, 'A rental house', 200, 2, 2, NULL, '["adan-fruit-and-sea-485453.jpg","1a14fad76d9e6__HM_GRILL_12.png","adan-fruit-and-sea-485454.jpg","algorithm6.jpg","algorithm117.jpg"]', 'Buy', '2018-02-26 12:09:30', NULL, 1);

--
-- Triggers `house`
--
DELIMITER $$
CREATE TRIGGER `house_AFTER_UPDATE` AFTER UPDATE ON `house` FOR EACH ROW BEGIN
SET @update_time = CURRENT_TIMESTAMP;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `house_BEFORE_INSERT` BEFORE INSERT ON `house` FOR EACH ROW BEGIN

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `house_BEFORE_UPDATE` BEFORE UPDATE ON `house` FOR EACH ROW BEGIN

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `land`
--

CREATE TABLE `land` (
  `land_id` int(11) NOT NULL,
  `land_lr` varchar(100) DEFAULT NULL,
  `land_location` varchar(45) DEFAULT NULL,
  `land_area` float DEFAULT NULL,
  `land_price` float DEFAULT NULL,
  `land_description` varchar(200) DEFAULT NULL,
  `land_image` varchar(255) DEFAULT NULL,
  `land_owner` int(11) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Triggers `land`
--
DELIMITER $$
CREATE TRIGGER `land_AFTER_UPDATE` AFTER UPDATE ON `land` FOR EACH ROW BEGIN
SET @update_time = CURRENT_TIMESTAMP;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `timestamps`
--

CREATE TABLE `timestamps` (
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(16) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`, `create_time`, `id`, `phone`) VALUES
('Clifford', 'betaclifford@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '2018-02-22 09:37:09', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`idhouse`),
  ADD KEY `house_owner_fk_idx` (`house_owner`);

--
-- Indexes for table `land`
--
ALTER TABLE `land`
  ADD PRIMARY KEY (`land_id`),
  ADD UNIQUE KEY `land_lr_UNIQUE` (`land_lr`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `idhouse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `land`
--
ALTER TABLE `land`
  MODIFY `land_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `house`
--
ALTER TABLE `house`
  ADD CONSTRAINT `house_owner_fk` FOREIGN KEY (`house_owner`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
