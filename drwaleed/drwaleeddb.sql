-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2018 at 09:07 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `drwaleeddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutdoctor`
--

CREATE TABLE IF NOT EXISTS `aboutdoctor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paragraph` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `aboutdoctor`
--

INSERT INTO `aboutdoctor` (`id`, `paragraph`, `image`) VALUES
(1, 'doctor fashe5', 'waleed.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `email` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`email`, `name`, `password`) VALUES
('eslam@m', 'Eslam', '12..3'),
('esspk01@gmail.com', 'Eslam', '12345'),
('nour@h', 'Nour', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `sliderimages`
--

CREATE TABLE IF NOT EXISTS `sliderimages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `sliderimages`
--

INSERT INTO `sliderimages` (`id`, `path`) VALUES
(23, '4.jpg'),
(24, '3.jpg'),
(25, '2.jpg'),
(27, '1.jpg'),
(35, 'Success Stories  Cover 03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `speciality`
--

CREATE TABLE IF NOT EXISTS `speciality` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `paragraph` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `speciality`
--

INSERT INTO `speciality` (`id`, `title`, `paragraph`) VALUES
(2, 'hellllll', 'he');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE IF NOT EXISTS `stories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `storyName` varchar(100) NOT NULL,
  `arDesc` text NOT NULL,
  `enDesc` text NOT NULL,
  `frontImg` text NOT NULL,
  `backImg` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `storyName`, `arDesc`, `enDesc`, `frontImg`, `backImg`) VALUES
(8, 'heleeeeen', 'ؤيؤس', 'beh ben d;k dmsn fdnb', 'WIN_20170321_15_41_58_Pro.jpg', 'WIN_20170321_15_42_05_Pro.jpg'),
(9, 'bdsndsbn', ' bndfbn', 'nmbermn dbnfdn', '2.jpg', '2.jpg'),
(10, 'bnhjdffbn', 'ndfnmdmnf dfnbfnbf', ' fdhjdfnnbdbnd', '2.jpg', '2.jpg'),
(19, 'bfgxbf', ' الصناعة منذ القرن السادس عشر ، عندما أخذت طابعة غير معروفة مجموعة من الأطباق \n\nالصناعة منذ القرن السادس عشر ، عندما أخذت طابعة غير معروفة مجموعة من الأطباق ودمّعتها\n\nالصناعة منذ القرن السادس عشر ، عندما أخذت طابعة غير معروفة مجموعة من الأطباق ودمّعتها\n\nالصناعة منذ القرن السادس عشر ، عندما أخذت طابعة غير معروفة مجموعة من الأطباق ودمّعتهاودمّعتها', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum hasis simply dummy text of the printing and typesetting industry. Lorem Ipsum hasis simply dummy text of the printing and typesetting industry. Lorem Ipsum hasis simply dummy text of the printing and typesetting industry. Lorem Ipsum has', '429414_547857481910871_335147535_n-1.jpg', 'decompress-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `youtubevideos`
--

CREATE TABLE IF NOT EXISTS `youtubevideos` (
  `video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `youtubevideos`
--

INSERT INTO `youtubevideos` (`video`) VALUES
('<iframe src="https://www.youtube.com/embed/zg9RwFmNRVk" frameborder="0"></iframe>'),
('<iframe src="https://www.youtube.com/embed/JO9tJTPlisU" frameborder="0" ></iframe>'),
('<iframe src="https://www.youtube.com/embed/GLaHzkcHj6w" frameborder="0"></iframe>'),
('<iframe src="https://www.youtube.com/embed/h46mlUHbYtY" frameborder="0"></iframe>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
