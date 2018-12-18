-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 24, 2018 at 05:53 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lamp_final_Project`
--

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE `Category` (
  `Category_ID` int(20) NOT NULL,
  `CategoryName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`Category_ID`, `CategoryName`) VALUES
(1, 'Sales'),
(2, 'Services'),
(3, 'Jobs');

-- --------------------------------------------------------

--
-- Table structure for table `Location`
--

CREATE TABLE `Location` (
  `Location_ID` int(20) NOT NULL,
  `Region_ID` int(20) NOT NULL,
  `LocationName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Location`
--

INSERT INTO `Location` (`Location_ID`, `Region_ID`, `LocationName`) VALUES
(1, 1, 'Sanjose'),
(2, 2, 'Delhi'),
(3, 3, 'Stockholm');

-- --------------------------------------------------------

--
-- Table structure for table `Posts`
--

CREATE TABLE `Posts` (
  `Post_ID` int(20) NOT NULL,
  `Title` text NOT NULL,
  `Price` int(15) NOT NULL,
  `Description` longtext NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Agreement` bit(1) NOT NULL,
  `SubCategory_ID` int(20) NOT NULL,
  `Location_ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Posts`
--

INSERT INTO `Posts` (`Post_ID`, `Title`, `Price`, `Description`, `Email`, `Agreement`, `SubCategory_ID`, `Location_ID`) VALUES
(1, 'Geeta', 100, 'Literature Book', 'geeta@gmail.com', b'1', 1, 2),
(2, 'TV', 340, 'Samsung TV 32 inch LED', 'samsung@gmail.com', b'1', 2, 1),
(3, 'Receptionsist', 400, 'Mc Donalds Front Desk Job', 'mcd@fmail.com', b'1', 9, 1),
(4, 'Dell PC Repair', 500, 'Hardware need to be updated', 'dell@gmail.com', b'1', 5, 2),
(5, 'Engineer', 1000, 'Full time job at Ericsson', 'ericsson@gmail.com', b'1', 8, 3),
(6, 'Rocking Chair', 20, '2 Rocking Chair with Cover', 'abc@gmail.com', b'1', 3, 2),
(7, 'bed', 100, 'Wooden bedframe', 'abc@gmail.com', b'1', 3, 3),
(8, 'Sales Person', 15, 'Part Time job at Safeway', 'info@gmail.com', b'1', 10, 3),
(9, 'Refrigrator', 67, 'Godrej Fridge 5 years used', 'godrej@gmail.com', b'1', 2, 1),
(10, 'Sofaset', 120, 'Sofaset used for 3years', 'abc@gmail.com', b'1', 3, 3),
(11, 'Clerk job', 67, 'Clerk Job at PNK BANK', 'clerk@gmail.com', b'1', 9, 2),
(12, 'CA', 61, 'Science', 'try@gmail.com', b'1', 6, 3),
(13, 'Ramayan', 44, 'Indian Literature Book', 'rama@gmail.com', b'1', 1, 2),
(14, 'MD', 40, 'General family Physician', 'dr@gmail.com', b'1', 7, 1),
(15, 'Dell Motherboard Repair', 50, 'New Motherboard will be inserted', 'pc@gmail.com', b'1', 5, 2),
(16, 'LFT Test', 172, 'Liver functioning Test', 'medical@gmail.com', b'1', 7, 3),
(17, 'TSH Test', 60, 'Thyroid Test', 'medical@gmail.com', b'1', 7, 3),
(18, 'HUMTUM', 68, 'Story Book', 'hm@gmail.com', b'1', 1, 2),
(19, 'Manual for Living', 68, 'by Epictetus- Philosophy book', 'manual@gmail.com', b'1', 1, 2),
(20, '3Mistakes of mylife', 55, 'Story Book', 'mtm@gmail.com', b'1', 1, 3),
(21, 'HP Laptop repair', 99, 'Software & Hardware repair', 'hp@gmail.com', b'1', 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `Region`
--

CREATE TABLE `Region` (
  `Region_ID` int(20) NOT NULL,
  `RegionName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Region`
--

INSERT INTO `Region` (`Region_ID`, `RegionName`) VALUES
(1, 'USA'),
(2, 'India'),
(3, 'Sweden');

-- --------------------------------------------------------

--
-- Table structure for table `SubCategory`
--

CREATE TABLE `SubCategory` (
  `SubCategory_ID` int(20) NOT NULL,
  `Category_ID` int(20) NOT NULL,
  `SubCategoryName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SubCategory`
--

INSERT INTO `SubCategory` (`SubCategory_ID`, `Category_ID`, `SubCategoryName`) VALUES
(1, 1, 'Books'),
(2, 1, 'Electronics'),
(3, 1, 'Household'),
(5, 2, 'Computers'),
(6, 2, 'Finance'),
(7, 2, 'Medical'),
(8, 3, 'Full_Time'),
(9, 3, 'Volunteering'),
(10, 3, 'Part_Time');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `userid` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(320) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`userid`, `username`, `firstname`, `lastname`, `email`, `password`) VALUES
(26, 'friend89', 'Friend', 'friend', 'friend@gmail.com', '5815ff9f4e0eec59cd37'),
(27, 'tiger89', 'tiger', 'tiger', 'tiger@gmail.com', 'dc99f33ccb73d8110507'),
(28, 'rashim', 'rashim', 'rashim', 'rashim@gmail.com', '1b967fec76c838ab232c'),
(30, 'user90', 'user', 'user', 'user@gmail.com', '6ad14ba9986e3615423dfca256d04e3f'),
(31, 'fnu90', 'fnu', 'fnu', 'fnu@gmail.com', '9752fbd1d1ea131bf66253ac1bfff00f'),
(32, 'rash90', 'rashim', 'rashim', 'rashim@gmail.com', '2d2a105756169bc09de774e3c51d2674'),
(33, 'final90', 'final', 'final', 'final@gmail.com', 'd81aa7d5d5aa1fa946c4f8c91ad29242'),
(34, 'back90', 'back', 'front', 'back@gmail.com', '5622d048ef19d55a59574213d4432303');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`Category_ID`),
  ADD KEY `Category_ID` (`Category_ID`);

--
-- Indexes for table `Location`
--
ALTER TABLE `Location`
  ADD PRIMARY KEY (`Location_ID`),
  ADD KEY `Location_ID` (`Location_ID`),
  ADD KEY `Region_ID` (`Region_ID`);

--
-- Indexes for table `Posts`
--
ALTER TABLE `Posts`
  ADD PRIMARY KEY (`Post_ID`),
  ADD KEY `SubCategory_ID` (`SubCategory_ID`,`Location_ID`),
  ADD KEY `Location_ID` (`Location_ID`);

--
-- Indexes for table `Region`
--
ALTER TABLE `Region`
  ADD PRIMARY KEY (`Region_ID`);

--
-- Indexes for table `SubCategory`
--
ALTER TABLE `SubCategory`
  ADD PRIMARY KEY (`SubCategory_ID`),
  ADD KEY `Category_ID` (`Category_ID`),
  ADD KEY `Category_ID_2` (`Category_ID`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
  MODIFY `Category_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Location`
--
ALTER TABLE `Location`
  MODIFY `Location_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Posts`
--
ALTER TABLE `Posts`
  MODIFY `Post_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `SubCategory`
--
ALTER TABLE `SubCategory`
  MODIFY `SubCategory_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Category`
--
ALTER TABLE `Category`
  ADD CONSTRAINT `Category_ibfk_1` FOREIGN KEY (`Category_ID`) REFERENCES `Category` (`Category_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Location`
--
ALTER TABLE `Location`
  ADD CONSTRAINT `Location_ibfk_1` FOREIGN KEY (`Region_ID`) REFERENCES `Region` (`Region_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Posts`
--
ALTER TABLE `Posts`
  ADD CONSTRAINT `Posts_ibfk_1` FOREIGN KEY (`SubCategory_ID`) REFERENCES `SubCategory` (`SubCategory_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Posts_ibfk_2` FOREIGN KEY (`Location_ID`) REFERENCES `Location` (`Location_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `SubCategory`
--
ALTER TABLE `SubCategory`
  ADD CONSTRAINT `SubCategory_ibfk_1` FOREIGN KEY (`Category_ID`) REFERENCES `SubCategory` (`Category_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
