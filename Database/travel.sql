-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2016 at 07:08 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomodation`
--

CREATE TABLE IF NOT EXISTS `accomodation` (
`id` int(10) NOT NULL,
  `hotel` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `place` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `accomodation`
--

INSERT INTO `accomodation` (`id`, `hotel`, `price`, `place`) VALUES
(1, 'Long Beach Hotel', 4700, 'Dhaka to CoxsBazar'),
(2, 'Hotel Prime Park', 3200, 'Dhaka to CoxsBazar'),
(3, 'Sayeman Hotel', 3500, 'Dhaka to CoxsBazar'),
(4, 'Ocean Paradise', 3000, 'Dhaka to CoxsBazar'),
(5, 'Sea Gull Hotel', 3000, 'Dhaka to CoxsBazar'),
(6, 'Coral View', 2000, 'Dhaka to SaintMartin'),
(7, 'Blue Marine Resort', 2000, 'Dhaka to SaintMartin'),
(8, 'Music Eco Resort', 2000, 'Dhaka to SaintMartin'),
(9, 'Britannia Hotel', 1500, 'Dhaka to SaintMartin'),
(10, 'Hotel Holy Gate', 1500, 'Dhaka to Sylhet'),
(11, 'Rose View ', 1200, 'Dhaka to Sylhet'),
(12, 'The Palace', 2500, 'Dhaka to Sylhet'),
(13, 'Grand Sultan', 5000, 'Dhaka to Sylhet'),
(14, 'Hill View Hotel', 2500, 'Dhaka to BandarBan'),
(15, 'Hotel Green Park', 2000, 'Dhaka to BandarBan'),
(16, 'Hotel Green Land', 2000, 'Dhaka to BandarBan'),
(17, 'Venus Resort', 2000, 'Dhaka to BandarBan'),
(18, 'Holiday Inn', 2500, 'Dhaka to BandarBan'),
(19, 'Hotel Singapore', 2000, 'Dhaka to Sundarban'),
(20, 'Castle Salam', 2500, 'Dhaka to Sundarban'),
(21, 'United 21 Resort', 2000, 'Dhaka to Sundarban'),
(22, 'Suhasini Guest House', 1500, 'Dhaka to Sundarban'),
(23, 'City Inn', 1500, 'Dhaka to Sundarban');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE IF NOT EXISTS `destination` (
`id` int(10) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `guide` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `destination`, `guide`) VALUES
(1, 'Dhaka to CoxsBazar', 800),
(2, 'Dhaka to Sylhet', 800),
(3, 'Dhaka to Sundarban', 800),
(5, 'Dhaka to SaintMartin', 800),
(6, 'Dhaka to BandarBan', 800);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
`id` int(10) NOT NULL,
  `package` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `package`) VALUES
(1, '3 days 2 nights'),
(2, '3 nights 2 days'),
(3, '4 nights 4 days'),
(4, '1 week');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE IF NOT EXISTS `picture` (
`id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fpath` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`id`, `name`, `fpath`, `type`, `place`, `user`) VALUES
(13, '10294371_1023497534363860_7483577546571930599_n.jpg', 'uploads/10294371_1023497534363860_7483577546571930599_n.jpg', 'image/jpeg', 'bandarban', 'rakib'),
(14, '13087762_1141167192572214_9012831564467864115_n.jpg', 'uploads/13087762_1141167192572214_9012831564467864115_n.jpg', 'image/jpeg', 'bandarban', 'rakib');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `uname`, `password`) VALUES
('asd', 'asd', 'asd', 'asd'),
('ra', 'ads', 'eas', '123'),
('rakib', 'rakib@mail.com', 'rakib', '123'),
('wahid', 'wahid@mail.com', 'wahid', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accomodation`
--
ALTER TABLE `accomodation`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accomodation`
--
ALTER TABLE `accomodation`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
