-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 05:11 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saloondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `haircolour`
--

CREATE TABLE `haircolour` (
  `styleName` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `stylistName` varchar(50) DEFAULT NULL,
  `ageLimit` varchar(50) DEFAULT NULL,
  `totalBooked` varchar(50) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `serviceName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `haircolour`
--

INSERT INTO `haircolour` (`styleName`, `price`, `description`, `stylistName`, `ageLimit`, `totalBooked`, `image`, `serviceName`) VALUES
('RELLY COLOUR', 50, 'One of the most beautiful styles we have I wish this will change your look perfectly ', 'Ragav Rehe', 'All', '50K', 'RELLY COLOUR.jpeg', 'haircolour'),
('REEL COLOUR', 50, 'One of the most beautiful styles we have I wish this will change your look perfectly ', 'Ragav Rehe', 'All', '50K', 'REEL COLOUR.jpg', 'haircolour'),
('HOT PINK COLOUR', 50, 'One of the most beautiful styles we have I wish this will change your look perfectly ', 'Ragav Rehe', 'All', '50K', 'HOT PINK COLOUR.jpg', 'haircolour'),
('PLATINUM COLOUR', 50, 'One of the most beautiful styles we have I wish this will change your look perfectly ', 'Ragav Rehe', 'All', '50K', 'PLATINUM COLOUR.jpg', 'haircolour');

-- --------------------------------------------------------

--
-- Table structure for table `haircuts`
--

CREATE TABLE `haircuts` (
  `styleName` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `stylistName` varchar(50) DEFAULT NULL,
  `ageLimit` varchar(50) DEFAULT NULL,
  `totalBooked` varchar(50) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `serviceName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `haircuts`
--

INSERT INTO `haircuts` (`styleName`, `price`, `description`, `stylistName`, `ageLimit`, `totalBooked`, `image`, `serviceName`) VALUES
('SIMPLE CUT', 50, 'One of the most beautiful styles we have I wish this will change your look perfectly ', 'Ragev REE', 'All', '10K', 'SIMPLE CUT.jpg', 'haircuts'),
('SHORT SHINE', 100, 'One of the most beautiful styles we have I wish this will change your look perfectly ', 'LEE', '18', '20K', 'SHORT SHINE.jpg', 'haircuts'),
('RAVAN CUT', 55, 'One of the most beautiful styles we have I wish this will change your look perfectly ', 'Dev', 'All', '20K', 'RAVAN CUT.jpg', 'haircuts'),
('CORONA CUT', 50, 'One of the most beautiful styles we have I wish this will change your look perfectly ', 'Ragav Rehe', 'All', '50K', 'CORONA CUT.jpeg', 'haircuts');

-- --------------------------------------------------------

--
-- Table structure for table `hairstyles`
--

CREATE TABLE `hairstyles` (
  `styleName` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(150) DEFAULT NULL,
  `stylistName` varchar(50) DEFAULT NULL,
  `ageLimit` varchar(10) DEFAULT NULL,
  `totalBooked` varchar(10) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `serviceName` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hairstyles`
--

INSERT INTO `hairstyles` (`styleName`, `price`, `description`, `stylistName`, `ageLimit`, `totalBooked`, `image`, `serviceName`) VALUES
('STRIGHT STYLE', 50, 'One of the most beautiful styles we have I wish this will change your look perfectly ', 'Ragav Rehe', 'All', '50K', 'STRIGHT STYLE.jpg', 'hairstyles'),
('CURL ON STYLE', 50, 'One of the most beautiful styles we have I wish this will change your look perfectly ', 'Ragav Rehe', 'All', '50K', 'CURL ON STYLE.jpg', 'hairstyles'),
('FREE HES STYLE', 50, 'One of the most beautiful styles we have I wish this will change your look perfectly ', 'Ragav Rehe', 'All', '50K', 'FREE HES STYLE.jpg', 'hairstyles'),
('RENIN STYLE', 50, 'One of the most beautiful styles we have I wish this will change your look perfectly ', 'Ragav Rehe', 'All', '50K', 'RENIN STYLE.avif', 'hairstyles');

-- --------------------------------------------------------

--
-- Table structure for table `hairstylist`
--

CREATE TABLE `hairstylist` (
  `styleName` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `special` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `serviceName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hairstylist`
--

INSERT INTO `hairstylist` (`styleName`, `age`, `country`, `special`, `image`, `serviceName`) VALUES
('RAHEENA JORJ', 22, 'LONDON', 'Hairstyles', 'RAHEENA JORJ.jpg', 'hairstylist'),
('JOHN', 26, 'Srilanka', 'HAIR COLOUR', 'JOHN.jpg', 'hairstylist'),
('ROMAN REINS', 25, 'INDIA', 'HAIR STRIGHT', 'ROMAN REINS.jpg', 'hairstylist'),
('DJ ROCKEY', 26, 'AFRICA', 'HAIR RESAL', 'DJ ROCKEY.jpg', 'hairstylist');

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `serviceName` varchar(30) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `customerName` varchar(30) DEFAULT NULL,
  `customerMail` varchar(30) DEFAULT NULL,
  `employeeName` varchar(30) DEFAULT NULL,
  `sendDate` varchar(50) DEFAULT NULL,
  `bookingDate` varchar(50) DEFAULT NULL,
  `imagePath` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `postdetails`
--

CREATE TABLE `postdetails` (
  `email` varchar(50) DEFAULT NULL,
  `imageName` varchar(100) DEFAULT NULL,
  `imageDescription` varchar(200) DEFAULT NULL,
  `userName` varchar(50) DEFAULT NULL,
  `profile` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `signupdetails`
--

CREATE TABLE `signupdetails` (
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `dateOfBirth` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contactNo` int(11) DEFAULT NULL,
  `userName` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `profilePhoto` varchar(100) DEFAULT NULL,
  `coverPhoto` varchar(100) DEFAULT NULL,
  `noOfPost` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signupdetails`
--

INSERT INTO `signupdetails` (`firstName`, `lastName`, `dateOfBirth`, `email`, `contactNo`, `userName`, `password`, `profilePhoto`, `coverPhoto`, `noOfPost`) VALUES
('Sharu', 'Mathan', '2000-04-17', 'sharumathan8@gmail.com', 764328270, 'Sharumathan', 'sharu', 'commonProfile.jpg', 'commonCover.jpg', NULL),
('raji', 'mathi', '2023-06-07', 'mathan8@gmail.com', 765454654, 'rajitha', 'raji', 'mathan8@gmail.comProfile.jpg', 'mathan8@gmail.comCover.jpg', 11),
('subakaran', 'kovarthan', '2000-10-29', 'subakarankovarthan29@gmail.com', 742815024, 'kovarthan', 'SKvarthan29', 'kovarthanProfile.jpg', 'subakarankovarthan29@gmail.comCover.jpg', 1),
('rohit', 'sharma', '2023-06-10', 'rohitsharma8@gmail.com', 456987588, 'rohit sharma', 'rohit', 'commonProfile.jpg', 'commonCover.jpg', 6),
('Sharuk', 'Magadev', '2023-06-13', 'sharumathan@gmail.com', 785689745, 'Sharuk Magadev', 'sharu', 'sharumathan@gmail.comProfile.jpg', 'sharumathan@gmail.comCover.jpg', 5),
('vithuz', 'shana', '2023-06-21', 'vithu@gmail.com', 2147483647, 'vithushana', 'vithu', 'vithu@gmail.comProfile.jpg', 'commonCover.jpg', 1),
('Baskaran ', 'kokilaramanan', '2002-09-21', 'baskarankokilaramanan@gmail.com', 776111040, 'ramanan', 'ramanan1234', 'baskarankokilaramanan@gmail.comProfile.jpg', 'commonCover.jpg', 0),
('Vithya', 'sri', '2001-10-07', 'vithy7ns@gmail.com', 742668110, 'vithyasaaji', 'vithyasharuk', 'vithy7ns@gmail.comProfile.jpg', 'vithy7ns@gmail.comCover.jpg', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
