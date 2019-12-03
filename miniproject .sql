-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 03:28 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` varchar(30) NOT NULL,
  `cat_name` varchar(30) NOT NULL,
  `cat_desc` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_desc`) VALUES
('CATID0012', 'COMPUTER SCIENCE', 'INCLUDES ALL TYPES OF CS BOOKS'),
('CATID0013', 'BIG DATA TECHNOLOGIES', 'BIG DATA RELATED BOOKS'),
('CATID0014', 'DBMS', 'DBMS RELATED BOOKS'),
('CATID0015', 'E-COMMERCE', 'E-C RELATED BOOKS'),
('CATID0016', 'ARTIFICIAL INTELIGENCE', 'AI BOOKS ONLY');

-- --------------------------------------------------------

--
-- Table structure for table `idgen`
--

CREATE TABLE `idgen` (
  `oid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `catid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idgen`
--

INSERT INTO `idgen` (`oid`, `bid`, `catid`) VALUES
(211, 76, 16);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `password`, `type`) VALUES
('admin@gmail.com', 'admin', 'admin'),
('ashifrisal@gmail.com', '123', 'user'),
('jasla@gmail.com', '123', 'user'),
('jenna@gmail.com', '123', 'user'),
('lavu@gmail.com', '123', 'user'),
('rashi@hotmail.com', 'asdfghjkl', 'user'),
('sree@gmail.com', '123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `acct_id` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `hname` varchar(100) NOT NULL,
  `post` varchar(30) NOT NULL,
  `pin` int(6) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`acct_id`, `name`, `hname`, `post`, `pin`, `email`, `phone`, `password`, `status`) VALUES
('ASHIF', 'ASHIF RISAL C T', 'PONNAD', 'OMANOOR', 673645, 'ashifrisal@gmail.com', 7559813601, '123', 'active'),
('hAQUE', 'MUHAMMED SUHAIL HAQUE', 'PARAMBIL BAZAR', 'OMANOOR', 673645, 'haque@gmail.com', 9526874743, '123', 'inactive'),
('JASLA', 'JASLA THASNI', 'MALAPPURAM', 'MALAPPURAM', 673643, 'jasla@gmail.com', 7025198027, '123', 'active'),
('jenna', '5667', 'kivav', 'abc', 6755, 'jenna@gmail.com', 7356201705, '123', 'active'),
('KUNJI LAKHSMI', 'SREE LAKSHMI SURESH', 'NILAMBUR', 'NILAMBUR', 673644, 'sree@gmail.com', 8593851254, '123', 'active'),
('lavanya', 'lavanaya sunil', 'thirissur', 'thrissur', 673867, 'lavu@gmail.com', 7356201705, '123', 'active'),
('NISHU', 'NISADA', 'KOLOTH HOUSE', 'MUTHUVALLUR', 673647, 'nishada@gmail.com', 7356201705, '123', 'inactive'),
('rashid', 'rashidkp', 'abc', 'hjdhfjdsf', 123456, 'rashi@hotmail.com', 8594006251, 'asdfghjkl', 'active'),
('SHANU', 'RISHANA', 'KONDOTTY', 'MUTHUVALLUR', 673647, 'shanu@gmail.com', 8111912411, '123', 'inactive'),
('SOURU', 'SOURAV', 'CHELAMBRA', 'UNIVERSITY', 673646, 'sourav@gmail.com', 9020279009, '123', 'inactive'),
('SREE', 'SREERAG', 'VALIKUNNU', 'UNIVERSITY', 673646, 'sreerag@gmail.com', 8086196774, '123', 'inactive'),
('YASEEN', 'MUHAMMED YASIN', 'KONDOTTY', 'KONDOTTY', 673648, 'yaseen@gmail.com', 8594006251, '123', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `tbbook`
--

CREATE TABLE `tbbook` (
  `book_id` varchar(30) NOT NULL,
  `acct_id` varchar(30) NOT NULL,
  `cat_id` varchar(30) NOT NULL,
  `book_name` varchar(60) NOT NULL,
  `author` varchar(60) NOT NULL,
  `publisher` varchar(60) NOT NULL,
  `pub_year` year(4) NOT NULL,
  `edition` varchar(30) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbbook`
--

INSERT INTO `tbbook` (`book_id`, `acct_id`, `cat_id`, `book_name`, `author`, `publisher`, `pub_year`, `edition`, `photo`, `status`) VALUES
('BID0040', 'ashifrisal@gmail.com', 'CATID0012', 'Stati for computer science', 'Micael baron', 'C R C Publication', 2018, 'Third edition', 'probability.jpg', 's'),
('BID0041', 'ashifrisal@gmail.com', 'CATID0012', 'embeded systems', 'gul n khan', 'c r c publication', 2019, 'third edition', 'Embeded.jpg', 's'),
('BID0042', 'ashifrisal@gmail.com', 'CATID0012', 'advanced mathamatics', 'tim cooper', 'amches publication', 2015, 'first', 'maths.jpg', 'ok'),
('BID0043', 'ashifrisal@gmail.com', 'CATID0012', 'digital signal processing', 'jean jiang', 'a p publication', 2018, 'third edition', 'digital.jpg', 'ok'),
('BID0044', 'ashifrisal@gmail.com', 'CATID0012', 'd s p processor fundementals', 'amit shodem', 'a p publications', 2018, 'sixth edition', 'dsp.jpg', 'ok'),
('BID0045', 'ashifrisal@gmail.com', 'CATID0012', 'algoritham fundementals', 'tim berly', 'c r c publication', 2019, 'first edition', 'algorithms.jpg', 'ok'),
('BID0046', 'ashifrisal@gmail.com', 'CATID0012', 'concepts of g i s', 'anuj tiwari', 'nova publications', 2019, 'sixth edition', 'gis.jpg', 'ok'),
('BID0047', 'ashifrisal@gmail.com', 'CATID0012', 'web g i s', 'pinde fu', 'mcGraw', 2018, 'first', 'web gis.jpg', 'ok'),
('BID0048', 'ashifrisal@gmail.com', 'CATID0013', 'big data analytics', 'arun k somani', 'c r c publications', 2019, 'first edition', 'bd1.jpg', 'ok'),
('BID0049', 'ashifrisal@gmail.com', 'CATID0013', 'big data technology', 'smith', 'd t publications', 2018, 'second edition', 'hadboob.jpg', 's'),
('BID0050', 'ashifrisal@gmail.com', 'CATID0013', 'big data and cloud', 'abdurahman yarali', 'nova publications', 2019, 'fisrt edition', 'big.jpg', 'ok'),
('BID0051', 'ashifrisal@gmail.com', 'CATID0013', 'big data', 'eliot reznor', 'nova publications', 2018, 'fisrt', 'bdd.jpg', 'ok'),
('BID0052', 'ashifrisal@gmail.com', 'CATID0013', 'bc for big data', 'sourav mazumder', 'springer publication', 2018, 'first edition', 'dc.jpg', 'ok'),
('BID0053', 'ashifrisal@gmail.com', 'CATID0013', 'big data', 'fie hu', 'c r c publications', 2019, 'first', 'b1.jpg', 'ok'),
('BID0054', 'ashifrisal@gmail.com', 'CATID0013', 'networking in big data', 'shuci hu', 'c r c publications', 2019, 'first edition', 'b2.png', 'ok'),
('BID0055', 'ashifrisal@gmail.com', 'CATID0013', 'Big data', 'kenneth cukier', 'novel publication ', 0000, 'first', 'B3.jpg', 's'),
('BID0056', 'sree@gmail.com', 'CATID0014', 'DBMS', 'aSIM KUMAR SHEN', 'NOVEL PUBLICATION', 2019, 'SECOND EDITION', 'dbms1.jpg', 's'),
('BID0057', 'sree@gmail.com', 'CATID0014', 'DBMS', 'RAVIJ CHOPRA', 'MCgREW Publication', 2018, 'FIFTH EDITION', 'DBMS2.jpg', 'ok'),
('BID0058', 'sree@gmail.com', 'CATID0014', 'DBMS', 'Shifali naik', 'pearson pulication', 2017, 'fifth edition', 'dbms3.jpg', 's'),
('BID0060', 'sree@gmail.com', 'CATID0014', 'DBMS', 'Puneet Kumar', 'kalayani publications', 2019, 'fifth', 'dbms4.jpg', 'ok'),
('BID0061', 'sree@gmail.com', 'CATID0014', 'RDBMS', 'rajiva Srivasthava', 'new age publications', 2019, 'First edition', 'rdbms.jpg', 'ok'),
('BID0062', 'sree@gmail.com', 'CATID0014', 'Distributed DBMS', 'frank s hang', 'novel publications', 2017, 'Sixth edition', 'ditrs.jpg', 'ok'),
('BID0063', 'sree@gmail.com', 'CATID0014', 'DBMS', 'S Chand', 'pearson publication', 2018, 'revised edition', 'ddd.jpg', 'ok'),
('BID0064', 'sree@gmail.com', 'CATID0014', 'DBMS', 'a a puntembekat', 'technical publications', 2016, 'Third Edition', 'dddd.jpeg', 'ok'),
('BID0065', 'ashifrisal@gmail.com', 'CATID0015', 'e commerce', 'kenneth', 'unique publication', 2014, 'tenth edition', '1.jpg', 'ok'),
('BID0066', 'ashifrisal@gmail.com', 'CATID0015', 'e commerce for business', 'kenneth', 'pearson', 2017, 'second edition', '2.jpg', 'ok'),
('BID0067', 'ashifrisal@gmail.com', 'CATID0015', 'e commerce', 'kenneth', 'nova publication', 2010, 'sixh', '3.jpg', 'ok'),
('BID0068', 'ashifrisal@gmail.com', 'CATID0015', 'e commerce', 'kenneth', 'pearson publication', 2019, 'fifteenth edition', '4.jpg', 's'),
('BID0069', 'ashifrisal@gmail.com', 'CATID0015', 'e commerce essential', 'kenneth', 'nova publication', 2018, 'sixth edition', '5.jpg', 'ok'),
('BID0070', 'ashifrisal@gmail.com', 'CATID0015', 'e commerce', 'kenneth', 'pearson publication', 2015, 'eleventh edition', '6.jpg', 'ok'),
('BID0071', 'ashifrisal@gmail.com', 'CATID0015', 'e commerce', 'davie seffeye', 'pearson publication', 2018, 'sixth edition', '7.jpg', 'ok'),
('BID0072', 'ashifrisal@gmail.com', 'CATID0015', 'e commerce for bussiness', 'dave seffeye', 'f t pubication', 2016, 'fourth edition', '8.jpg', 'ok'),
('BID0073', 'sree@gmail.com', 'CATID0016', 'surving AI', 'Calum cache', 'nova publication', 2018, 'second edition', 'a1.jpg', 'ok'),
('BID0074', 'sree@gmail.com', 'CATID0016', 'indroduction to aI', 'henrey brighten', 'f t publication', 2018, 'first edition', 'a2.jpg', 'ok'),
('BID0075', 'sree@gmail.com', 'CATID0016', 'aI for medical application', 'arvin agha', 'c r c press', 2018, 'second edition', 'a3.jpg', 'ok'),
('BID0076', 'sree@gmail.com', 'CATID0016', 'artifical intelligence', 'david poolie', 'nova publication', 2019, 'second edition', 'a4.jpg', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `tbbooks`
--

CREATE TABLE `tbbooks` (
  `book_id` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbbooks`
--

INSERT INTO `tbbooks` (`book_id`, `description`, `price`, `status`) VALUES
('BID0040', 'BOOK IN GOOD CONDITION', 350, 'ok'),
('BID0041', 'good codition', 270, 'ok'),
('BID0042', 'good but little bad', 150, 'ok'),
('BID0043', 'good condition', 250, 'ok'),
('BID0044', 'good condition ', 160, 'ok'),
('BID0045', 'better and good condition', 250, 'ok'),
('BID0046', 'good condition', 230, 'ok'),
('BID0047', 'better and good condition', 180, 'ok'),
('BID0048', 'good condition', 390, 'ok'),
('BID0049', 'good condtion', 300, 'ok'),
('BID0050', 'good condition', 340, 'ok'),
('BID0051', 'good condition no any damage', 200, 'ok'),
('BID0052', 'better and good condition', 200, 'ok'),
('BID0053', 'better and good condition', 250, 'ok'),
('BID0054', 'better and good condition', 289, 'ok'),
('BID0055', 'better and good', 245, 'ok'),
('BID0056', 'TOO GOOD', 450, 'ok'),
('BID0057', 'well and good condition', 300, 'ok'),
('BID0058', 'well and good', 200, 'ok'),
('BID0059', 'good and better condition', 300, 'ok'),
('BID0060', 'no any damage', 300, 'ok'),
('BID0061', 'no any damage', 500, 'ok'),
('BID0062', 'it is in better condition', 500, 'ok'),
('BID0063', 'better and good condition', 400, 'ok'),
('BID0064', 'better and good condition', 300, 'ok'),
('BID0065', 'little problem but good condition', 130, 'ok'),
('BID0066', 'no problem it still good', 200, 'ok'),
('BID0067', 'goodcondition', 100, 'ok'),
('BID0068', 'good and better condition', 200, 'ok'),
('BID0069', 'good condition', 400, 'ok'),
('BID0070', 'good condition', 300, 'ok'),
('BID0071', 'good', 200, 'ok'),
('BID0072', 'still good condition', 200, 'ok'),
('BID0073', 'good condition', 400, 'ok'),
('BID0074', 'beter and good condition', 700, 'ok'),
('BID0075', 'good condition no any problem', 340, 'ok'),
('BID0076', 'good condition', 300, 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

CREATE TABLE `tblorder` (
  `order_no` varchar(50) NOT NULL,
  `acc_id` varchar(50) NOT NULL,
  `book_id` varchar(50) NOT NULL,
  `order_date` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `itemstatus` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblorder`
--

INSERT INTO `tblorder` (`order_no`, `acc_id`, `book_id`, `order_date`, `status`, `itemstatus`) VALUES
('ORD_205', 'ashifrisal@gmail.com', 'BID0058', '02/12/19', 'processed', 'Pending'),
('ORD_206', 'jenna@gmail.com', 'BID0041', '02/12/19', 'processed', 'Pending'),
('ORD_207', 'rashi@hotmail.com', 'BID0056', '02/12/19', 'processed', 'Pending'),
('ORD_208', 'lavu@gmail.com', 'BID0055', '03/12/19', 'processed', 'Pending'),
('ORD_209', 'lavu@gmail.com', 'BID0049', '03/12/19', 'processed', 'Pending'),
('ORD_210', 'lavu@gmail.com', 'BID0068', '03/12/19', 'processed', 'Pending'),
('ORD_211', 'lavu@gmail.com', 'BID0040', '03/12/19', 'Not Processed', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`acct_id`);

--
-- Indexes for table `tbbook`
--
ALTER TABLE `tbbook`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `tbbooks`
--
ALTER TABLE `tbbooks`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `tblorder`
--
ALTER TABLE `tblorder`
  ADD PRIMARY KEY (`order_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
