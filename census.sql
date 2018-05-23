-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 22, 2018 at 09:02 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `census`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `fathername` varchar(255) DEFAULT NULL,
  `idno` varchar(30) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `gender` varchar(12) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `psd` varchar(20) DEFAULT NULL,
  `user_image` varchar(255) DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `last_login` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `firstname`, `fathername`, `idno`, `email`, `phone`, `gender`, `user`, `psd`, `user_image`, `reg_date`, `last_login`, `status`) VALUES
(1, 'mesfin', 'tsegaye', 'NSR/3029/07', 'sciemesfin55@gmail.com', '0915981847', 'Male', 'Administrator', '001988mtmt', 'default.jpg', '2018-05-11', '2018-05-11', 'unverified'),
(2, 'Negash', 'Eshetu', 'NG123', 'mesfin@gmail.com', '0915981847', 'Male', 'Supervisor', '1234', 'default.jpg', '2018-05-14', '2018-05-14', 'unverified'),
(3, 'Abera', 'Getachewu', 'Ab12', 'abera@yahoo.com', '0915981847', 'Male', '', '1234', 'default.jpg', '2018-05-18', '2018-05-18', 'unverified'),
(4, 'Mesfin', 'Tsegaye', 'NSR', 'moses@yahoo.com', '0915981847', 'Male', '', '1234', 'default.jpg', '2018-05-18', '2018-05-18', 'unverified'),
(5, 'Alan ', 'Turing', 'AT12', 'alanturing@gmail.com', '0915981847', 'Male', '', '123456', 'default.jpg', '2018-05-21', '2018-05-21', 'unverified'),
(6, 'g', '', '', '', '', 'Gender', '', '', 'default.jpg', '2018-05-21', '2018-05-21', 'unverified');

-- --------------------------------------------------------

--
-- Table structure for table `birth`
--

CREATE TABLE `birth` (
  `user_id` int(11) NOT NULL,
  `idno` varchar(25) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gfname` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `woreda` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `kebele` varchar(255) NOT NULL,
  `bdate` date NOT NULL,
  `gender` varchar(12) NOT NULL,
  `regdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birth`
--

INSERT INTO `birth` (`user_id`, `idno`, `firstname`, `lastname`, `gfname`, `nationality`, `region`, `zone`, `woreda`, `town`, `kebele`, `bdate`, `gender`, `regdate`) VALUES
(2, 'NSR', 'Mesfin', 'Tsegaye', 'Maniye', 'Ethiopian', 'Oromia', 'Arsi', 'Asella', 'Asella', 'W/kone', '2018-05-01', 'Male', '2018-05-19'),
(3, '', '', '', '', '', 'Region', '', '', '', '', '0000-00-00', 'Select', '2018-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `death`
--

CREATE TABLE `death` (
  `user_id` int(11) NOT NULL,
  `idno` varchar(25) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gfname` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `woreda` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `kebele` varchar(255) NOT NULL,
  `bdate` date NOT NULL,
  `ddate` date NOT NULL,
  `death_cause` varchar(255) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `regdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `death`
--

INSERT INTO `death` (`user_id`, `idno`, `firstname`, `lastname`, `gfname`, `nationality`, `region`, `zone`, `woreda`, `town`, `kebele`, `bdate`, `ddate`, `death_cause`, `gender`, `regdate`) VALUES
(3, 'GGT', 'Mesfin', 'Girma', 'Tsegaye', 'Ethiopian', 'Oromia', 'Arsi', 'Shirka', 'Asella', 'W/kone', '2018-05-01', '0000-00-00', 'Assident', 'Male', '2018-05-19');

-- --------------------------------------------------------

--
-- Table structure for table `emigrator`
--

CREATE TABLE `emigrator` (
  `user_id` int(11) NOT NULL,
  `idno` varchar(25) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gfname` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `woreda` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `kebele` varchar(255) NOT NULL,
  `bdate` date NOT NULL,
  `edate` date NOT NULL,
  `emigratedto` varchar(255) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `regdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emigrator`
--

INSERT INTO `emigrator` (`user_id`, `idno`, `firstname`, `lastname`, `gfname`, `nationality`, `region`, `zone`, `woreda`, `town`, `kebele`, `bdate`, `edate`, `emigratedto`, `gender`, `regdate`) VALUES
(1, 'Mo123', 'Mesfin', 'Tsegaye', 'Maniye', 'Ethiopia', 'Oromia', 'Shawa', 'Adama', 'Adama', '01', '2018-05-15', '0000-00-00', 'CANADA', 'male', '2018-05-19'),
(2, 'EL123', 'Mesfin', 'Tsegaye', 'Maniye', 'Ethiopia', 'Oromia', 'Shawa', 'Adama', 'Adama', '01', '2018-05-15', '2018-05-10', 'CANADA', 'male', '2018-05-29'),
(3, 'NSR/3029/07', 'Mesfin', 'Tsegaye', 'Maniye', 'Ethiopian', 'Gambela', 'Arsi', 'Shirka', 'Gobesa', 'W/kone', '2018-05-29', '2018-05-31', 'London', 'Male', '2018-05-19');

-- --------------------------------------------------------

--
-- Table structure for table `feadback`
--

CREATE TABLE `feadback` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `feadback` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feadback`
--

INSERT INTO `feadback` (`id`, `title`, `fullname`, `feadback`, `date`, `time`) VALUES
(4, 'Yeah', 'Yonas Beyene', 'Amazing services', '2018-05-20', '07:05:39'),
(5, 'Yeah', 'Esfifanos Teklay', 'You provide a nice service for every one.', '2018-05-20', '08:05:07');

-- --------------------------------------------------------

--
-- Table structure for table `imigrator`
--

CREATE TABLE `imigrator` (
  `user_id` int(11) NOT NULL,
  `idno` varchar(25) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gfname` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `woreda` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `kebele` varchar(255) NOT NULL,
  `bdate` date NOT NULL,
  `edate` date NOT NULL,
  `imigratedfrom` varchar(255) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `regdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imigrator`
--

INSERT INTO `imigrator` (`user_id`, `idno`, `firstname`, `lastname`, `gfname`, `nationality`, `region`, `zone`, `woreda`, `town`, `kebele`, `bdate`, `edate`, `imigratedfrom`, `gender`, `regdate`) VALUES
(2, 'NSR/3029/07', 'Mesfin', 'Tsegaye', 'Maniye', 'Ethiopian', 'Oromia', 'Arsi', 'Asella', 'Asella', 'W/kone', '2018-05-01', '0000-00-00', 'CANADA', 'Male', '2018-05-19');

-- --------------------------------------------------------

--
-- Table structure for table `newperson`
--

CREATE TABLE `newperson` (
  `user_id` int(11) NOT NULL,
  `idno` varchar(25) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gfname` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `woreda` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `kebele` varchar(255) NOT NULL,
  `bdate` date NOT NULL,
  `gender` varchar(12) NOT NULL,
  `regdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newperson`
--

INSERT INTO `newperson` (`user_id`, `idno`, `firstname`, `lastname`, `gfname`, `nationality`, `region`, `zone`, `woreda`, `town`, `kebele`, `bdate`, `gender`, `regdate`) VALUES
(1, 'M12', 'Mesfin', 'Tsegaye', 'Maniye', 'Ethiopian', 'Oromia', 'Arsi', 'Asella', 'Asella', '05', '1994-07-02', 'male', '2018-05-20'),
(2, 'M123', 'Tsegaye', 'Mesfin', 'Maniye', 'Ethiopian', 'Oromia', 'Arsi', 'Shirka', 'Gobesa', '01', '2000-05-10', 'Male', '2018-05-19'),
(3, 'M012', 'Tsegaye', 'Mesfin', 'Mekonin', 'Ethiopian', 'Amhara', 'Arsi', 'Shirka', 'Gobesa', 'W/kone', '2000-05-10', 'Male', '2018-05-22'),
(5, 'N126', 'Eshetu', 'Negash', 'Abebe', 'Ethiopian', 'Gambela', 'Arsi', 'Shirka', 'Gobesa', 'W/kone', '2018-05-30', 'Male', '2018-05-19'),
(6, 'N126', 'Eshetu', 'Negash', 'G/mariyam', 'Ethiopian', 'Oromia', 'Arsi', 'Shirka', 'Gobesa', 'W/kone', '2018-05-30', 'Male', '2018-05-19'),
(7, 'M123', 'Mesfin', 'Tsegaye', 'Maniye', 'Ethiopian', 'Oromia', 'Arsi', 'Shirka', 'Gobesa', '01', '2018-05-24', 'Male', '2018-05-19');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `idno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `title`, `content`, `date`, `time`, `idno`) VALUES
(3, 'Enumeration', '123 New peoples are recorded.', '2018-05-20', '10:05:50', 'NSR/3029/07');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `idno` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `priviledge` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `reg_date` date NOT NULL,
  `lastlogindate` date NOT NULL,
  `lastlogintime` time NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `idno`, `phone`, `email`, `gender`, `priviledge`, `password`, `reg_date`, `lastlogindate`, `lastlogintime`, `status`) VALUES
(1, 'Mesfin', 'Abebe', 'nsr', '0915981847', 'mesfin@gmail.com', 'male', 'Manager', '001988mtmT', '2018-05-22', '2018-05-15', '17:17:25', '1'),
(2, 'Negash', 'Eshetu', 'nsr', '0915981847', 'sciemesfin55@gmail.com', 'male', 'manager', '1234', '2018-05-22', '2018-05-15', '00:00:00', '1'),
(3, 'Abera', 'Getachewu', 'nsr', '0915981847', 'sciemesfin55@gmail.com', 'male', 'manager', '1234', '2018-05-22', '2018-05-15', '05:12:44', '1'),
(4, 'Firaol', 'Tesfaye', 'nsr', '0915981847', 'sciemesfin55@gmail.com', 'male', 'manager', '1234', '2018-05-22', '2018-05-15', '11:34:18', '1'),
(7, 'Wubishet', 'Fitru', 'NSR/3029/07', '0915981847', 'mesfin@gmail.com', 'Male', 'Supervisor', '123', '2018-05-18', '2018-05-18', '03:05:10', 'unverified'),
(8, 'Yonas', 'Beyene', 'NSR/3029/07', '0915981847', 'yohanes@yahoo.com', 'Male', 'Enumerator', '001988mtmt', '2018-05-18', '2018-05-18', '07:05:50', 'unverified'),
(9, 'Dawit', 'Morka', 'DM01', '0915981847', 'dawit@gmail.com', 'Male', 'Enumerator', '12', '2018-05-18', '2018-05-18', '10:05:15', 'unverified'),
(11, 'Mesfin', 'Tsegaye', 'NSR', '0915981847', 'mesfin@gmail.com', 'Male', 'Enumerator', '1234', '2018-05-20', '2018-05-20', '09:05:11', 'unverified'),
(12, 'Abebe', 'Kebede', 'AK12', '0915981847', 'abebe@yahoo.com', 'Male', 'Supervisor', '1234', '2018-05-21', '2018-05-21', '07:05:02', 'unverified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `birth`
--
ALTER TABLE `birth`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `death`
--
ALTER TABLE `death`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `emigrator`
--
ALTER TABLE `emigrator`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `feadback`
--
ALTER TABLE `feadback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imigrator`
--
ALTER TABLE `imigrator`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `newperson`
--
ALTER TABLE `newperson`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `birth`
--
ALTER TABLE `birth`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `death`
--
ALTER TABLE `death`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `emigrator`
--
ALTER TABLE `emigrator`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feadback`
--
ALTER TABLE `feadback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `imigrator`
--
ALTER TABLE `imigrator`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newperson`
--
ALTER TABLE `newperson`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
