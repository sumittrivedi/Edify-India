-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 21, 2019 at 03:58 AM
-- Server version: 5.6.43-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edifyindia`
--

-- --------------------------------------------------------

--
-- Table structure for table `AttendanceReport`
--

CREATE TABLE `AttendanceReport` (
  `sname` varchar(20) NOT NULL,
  `tname` varchar(20) NOT NULL,
  `date1` date NOT NULL,
  `status` varchar(8) NOT NULL,
  `review` varchar(25) NOT NULL,
  `reportedby` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AttendanceReport`
--

INSERT INTO `AttendanceReport` (`sname`, `tname`, `date1`, `status`, `review`, `reportedby`) VALUES
('Harsh', 'Shrikant', '2019-01-16', 'A', 'Testing', 'Shree_080318TE'),
('Rahul_Test', 'XXX', '2019-02-08', 'A', 'Bad Teacher', 'Harsh_SSS10'),
('SFUHU', 'WJUHGR', '2019-04-02', 'A', 'UHV', 'Pratigya_SSS01');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `u_id` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`u_id`, `password`) VALUES
('Pratik_SSS03', 'Pr@130308'),
('Saksham_SKM03', 'Sp@071006'),
('Akansha_DAV05', 'As@120608'),
('Harsh_SSS10', 'Hv@060604'),
('Ashna_SSS07', 'As@110807'),
('Ayush_PPS10', 'Ak@281203'),
('Saurav_PSV09', 'Sk@110104'),
('Pratigya_SSS01', 'Pr@030511'),
('Naman_DAV04', 'Nk@120310'),
('Yashaswi _PSV11', 'Yk@130701'),
('Akashi_SSS06', 'Ak@081206'),
('EdifyIndia', 'EdifyIndia@090318'),
('yashzzz', 'yashzzz'),
('Shree_090318TE', '130397@Sk'),
('asas', 'EdifyIndia@090318');

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE `student_reg` (
  `sname` varchar(25) DEFAULT NULL,
  `father_name` varchar(25) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `dor` date DEFAULT NULL,
  `sex` varchar(6) DEFAULT NULL,
  `location` varchar(15) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `pincode` varchar(6) DEFAULT NULL,
  `u_email` varchar(30) DEFAULT NULL,
  `contact_no` varchar(10) DEFAULT NULL,
  `u_id` varchar(20) NOT NULL DEFAULT '',
  `photo` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`sname`, `father_name`, `dob`, `dor`, `sex`, `location`, `address`, `pincode`, `u_email`, `contact_no`, `u_id`, `photo`) VALUES
('SAURAV KUMAR', 'Uma Shankar Choudhary', '2004-01-11', '2018-05-03', 'male', 'Muzaffarpur', 'Near Anand Hotel, b.b.lane , Chhoti Kalyani', '842002', 'umasrltransport@gmail.com', '9431239392', 'Saurav_PSV09', 'saurav.jpg'),
('HARSH VAIBHAV', 'Ramesh kumar', '2004-06-06', '2018-05-21', 'male', 'Muzaffarpur', 'Vivek vihar colony, Narayanpur Anant Road,Mithanpura', '842002', 'onlinekrramesh@gmail.com', '9430051910', 'Harsh_SSS10', 'harsh.jpeg'),
('ASHNA SMRITI', 'Ramesh kumar', '2007-08-11', '2018-05-21', 'female', 'Muzaffarpur', 'Vivek vihar colony, Narayanpur Anant Road,Mithanpura', '842002', 'onlinekrramesh@gmail.com', '9430051910', 'Ashna_SSS07', 'Ashna.jpeg'),
('AYUSH KUMAR', 'Amarjeet kumar', '2003-12-28', '2018-04-16', 'male', 'Muzaffarpur', 'Q no.-G/104/G, Imali Road Railway colony', '842001', 'amarjeet5.az@gmail.com', '9771468854', 'Ayush_PPS10', 'ayush.jpg'),
('Akansha soni', 'Vridhi chandra soni', '2008-06-12', '2018-07-30', 'female', 'Muzaffarpur', 'Bela lane no.-04,near R.K puram', '842005', 'vcsoni.it@gmail.com', '7488341980', 'Akansha_DAV05', 'image.jpeg'),
('SAKSHAM PODDAR', 'Amites poddar', '2006-10-07', '2018-10-14', 'male', 'Muzaffarpur', 'Flat no.-719, DRB mall, Mothijheel', '842001', 'amitpoddarmuz@yahoo.com', '9470456704', 'Saksham_SKM03', 'saksham poddar.jpeg'),
('PRATIK RAJ', 'Dhiraj kumar', '2008-03-13', '2018-08-10', 'male', 'Muzaffarpur', 'Flat no.-505, DRB mall, Mothijheel', '842001', 'abcd@gmail.com', '7903237911', 'Pratik_SSS03', 'pratik.jpeg'),
('PRATIGYA RAJ', 'Dhiraj kumar', '2011-05-03', '2018-08-10', 'male', 'Muzaffarpur', 'Flat no.-505, DRB mall, Mothijheel', '842001', 'abcd@gmail.com', '7903237911', 'Pratigya_SSS01', 'pratigya.jpeg'),
('KUMAR NAMAN', 'Prasun kumar', '2010-03-12', '2018-07-19', 'male', 'Muzaffarpur', 'Aamgola,parao pokahar lane no.-03', '842002', 'prasunrinku9@gmail.com', '9801844108', 'Naman_DAV04', 'Naman.jpeg'),
('YASHASWI KUMAR', 'Lalan kumar', '2001-07-13', '2018-08-05', 'male', 'Muzaffarpur', 'V.C lane, Mithanpura ', '842002', 'lalankumar02@gmail.com', '7320923257', 'Yashaswi _PSV11', 'Yashshwi.jpeg'),
('AKASHI KUMARI', 'Rameswar Paswan', '2006-12-08', '2018-11-29', 'female', 'Muzaffarpur', 'Near hdfc ATM , Bela', '842005', 'noemail@edifyindia.co.in', '8986912013', 'Akashi_SSS06', 'Akashi.jpg'),
('yash', 'yashaysh', '1996-11-14', '2019-02-17', 'male', 'Kolkata', 'saltlake sec v', '123445', 'dddff@g.com', '9999999999', 'yashzzz', 'SampleJPGImage_10mbmb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_reg`
--

CREATE TABLE `teacher_reg` (
  `tname` varchar(25) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `quali` varchar(10) NOT NULL,
  `spec` varchar(20) NOT NULL,
  `subpre` varchar(25) NOT NULL,
  `location` varchar(15) NOT NULL,
  `address` varchar(60) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `u_id` varchar(20) NOT NULL,
  `photo` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_reg`
--

INSERT INTO `teacher_reg` (`tname`, `sex`, `quali`, `spec`, `subpre`, `location`, `address`, `pincode`, `u_email`, `contact_no`, `u_id`, `photo`) VALUES
('Shrikant Kumar', 'male', 'Graduate', 'BTech (IT)', 'Maths, Computer', 'Kolkata', 'Aam gola', '842002', 'meshrikant@gmail.com', '9304574156', 'Shree_090318TE', 'shree.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `student_reg`
--
ALTER TABLE `student_reg`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `teacher_reg`
--
ALTER TABLE `teacher_reg`
  ADD PRIMARY KEY (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
