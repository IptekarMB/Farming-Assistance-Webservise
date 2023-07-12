-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 05:35 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fawsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `ID` varchar(55) NOT NULL,
  `Mode` varchar(25) NOT NULL,
  `Complaint_1` varchar(255) NOT NULL,
  `Complaint_2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`ID`, `Mode`, `Complaint_1`, `Complaint_2`) VALUES
('maroti123', 'Farmer', ' I Would  like to use this another type of crops', '  I Would  like to use this another type of crops'),
('ganesh123', 'Supplier', ' crops are very high amount of the compossed', '  crops are very high ts way  removable amount of the compossed tha'),
('prashant123', 'Supplier', ' ha i make  it complaint\r\n', ' '),
('ganesh123', 'Supplier', ' I Am Supplier', '  I Am Supplier 3');

-- --------------------------------------------------------

--
-- Table structure for table `formerdata`
--

CREATE TABLE `formerdata` (
  `Formar_Name` varchar(45) NOT NULL,
  `ID` varchar(55) NOT NULL,
  `Contact` varchar(21) NOT NULL,
  `2Contact` varchar(21) NOT NULL,
  `Email_ID` varchar(65) NOT NULL,
  `Address` varchar(105) NOT NULL,
  `DOB` varchar(21) NOT NULL,
  `User_Gender` varchar(21) NOT NULL,
  `User_Mode` varchar(21) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Re_password` varchar(15) NOT NULL,
  `Picture` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formerdata`
--

INSERT INTO `formerdata` (`Formar_Name`, `ID`, `Contact`, `2Contact`, `Email_ID`, `Address`, `DOB`, `User_Gender`, `User_Mode`, `Password`, `Re_password`, `Picture`) VALUES
('Ganesh ', 'ganesh123', '8758934849', '9034848485', 'ganesh@gmail.com', 'Nanded', '1996-01-17', 'Male', 'Supplier', 'ganesh', 'ganesh', 0x416365725f57616c6c70617065725f30325f3530303078323831332e6a7067),
('Nagesh', 'nagesh123', '893848484', '949384984', 'nagesh@gmail.com', 'Nanded', '1996-05-08', 'Male', 'Farmer', 'nagesh', 'nagesh', 0x416365725f57616c6c70617065725f30315f3530303078323831342e6a7067),
('ramnath', 'ramnath123', '87976668999', '98877666777', 'ramnath@gmail.com', 'Nanded', '2022-04-12', 'Male', 'Farmer', 'maroti', 'maroti', 0x416365725f57616c6c70617065725f30335f3530303078323831342e6a7067),
('Ram', 'ram123', '8758934849', '949384984', 'ram@gmail.com', 'ramnagar', '2022-04-20', 'Male', 'Farmer', 'ram123', 'ram123', 0x416365725f57616c6c70617065725f30325f3530303078323831332e6a7067),
('Ram', 'ram123', '8758934849', '949384984', 'ram@gmail.com', 'ramnagar', '2022-04-20', 'Male', 'Farmer', 'ram123', 'ram123', 0x416365725f57616c6c70617065725f30325f3530303078323831332e6a7067),
('', '', '', '', '', '', '', '', '', '', '', ''),
('Rajesh', 'raju', '8975525624', '26595654', 'rajesh@gmail.com', 'mumbai', '2008-12-28', 'Male', 'Farmer', '123', '123', 0x506c616e6574395f57616c6c70617065725f3530303078323831332e6a7067),
('kumar ', 'kumar123', '9848493988', '9034848485', 'kumar@gmail.com', 'Nizamabad', '2002-01-08', 'Male', 'Farmer', '1234', '1234', 0x416365725f57616c6c70617065725f30325f3530303078323831332e6a7067),
('kumar ', 'kumar123', '9848493988', '9034848485', 'kumar@gmail.com', 'Nizamabad', '2002-01-08', 'Male', 'Farmer', '1234', '1234', 0x416365725f57616c6c70617065725f30325f3530303078323831332e6a7067),
('kumar ', 'kumar123', '9848493988', '9034848485', 'kumar@gmail.com', 'Nizamabad', '2002-01-08', 'Male', 'Farmer', '1234', '1234', 0x416365725f57616c6c70617065725f30325f3530303078323831332e6a7067),
('shyam', '123', '9848493988', '949384984', 'shyam@gmail.com', 'Nizambad', '2004-02-02', 'Male', 'Farmer', '1234', '1234', 0x416365725f57616c6c70617065725f30335f3530303078323831342e6a7067),
('Maroti', 'maroti123', '9848493988', '949384984', 'maroti@gmail.com', 'ma', '2022-05-04', 'Male', 'Farmer', '1234', '1234', 0x416365725f57616c6c70617065725f30335f3530303078323831342e6a7067),
('Maroti', 'maroti123', '9848493988', '949384984', 'maroti@gmail.com', 'ma', '2022-05-04', 'Male', 'Farmer', '1432', '1432', 0x416365725f57616c6c70617065725f30335f3530303078323831342e6a7067),
('prashant', 'prashant123', '8758934849', '949384984', 'hambardeprashant24@123', 'bijegaon', '2022-05-08', 'Male', 'Farmer', '9011817011', '90118181', 0x726963652e6a7067),
('prashant', 'prashant123', '8758934849', '949384984', 'hambardeprashant24@123', 'bijegaon', '2022-05-08', 'Male', 'Farmer', '90118170', '9011817011', 0x726963652e6a7067),
('prashant', 'prashant123', '8758934849', '234', 'hambardeprashant24@123', '123', '2022-05-08', 'Male', 'Farmer', '1234', '43554', 0x726963652e6a7067),
('Anand', '123', '8975525624', '89988878889', 'anand@gmail.com', 'kundan', '2004-12-27', 'Male', 'Farmer', '123', '123', 0x636869636b706561732d73616e6a61792d616368617279612e77656270),
('prashant', 'prashant123', '9687823646', '89988878889', 'hambardeprashant24@123', 'Nanded', '2017-01-05', 'Male', 'Farmer', '123', '123', 0x536f796265616e5f41646f626553746f636b5f3132313935383734322d375f452e6a7067),
('prashant', 'prashant123', '9848493988', '89988878889', 'hambardeprashant24@123', 'Dharmabad', '2003-01-07', 'Male', 'Admin', '0000', '0000', '');

-- --------------------------------------------------------

--
-- Table structure for table `selling_data`
--

CREATE TABLE `selling_data` (
  `User_Name` varchar(155) NOT NULL,
  `Contact` varchar(25) NOT NULL,
  `Email_ID` varchar(145) NOT NULL,
  `Address` varchar(105) NOT NULL,
  `crops_name` varchar(55) NOT NULL,
  `quantity_crops` int(25) NOT NULL,
  `crops_rate` int(25) NOT NULL,
  `crops_Picture` blob NOT NULL,
  `crops_picture2` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `selling_data`
--

INSERT INTO `selling_data` (`User_Name`, `Contact`, `Email_ID`, `Address`, `crops_name`, `quantity_crops`, `crops_rate`, `crops_Picture`, `crops_picture2`) VALUES
('', '', '', '', 'cotton', 34, 32, 0x6368616e612e6a7067, 0x6368616e612e6a7067),
('', '', '', '', 'soyabin', 20, 5400, 0x636869636b706561732d73616e6a61792d616368617279612e77656270, 0x536f796265616e5f41646f626553746f636b5f3132313935383734322d375f452e6a7067),
('', '', '', '', 'Cotton', 23, 6000, 0x6368616e612e6a7067, 0x7468332e6a7067),
('', '', '', '', 'Mango', 20, 400, 0x7468322e6a7067, 0x7468342e6a7067),
('', '', '', '', 'santra', 34, 6000, 0x416365725f57616c6c70617065725f30315f3530303078323831342e6a7067, 0x416365725f57616c6c70617065725f30335f3530303078323831342e6a7067),
('', '', '', '', 'santra', 34, 6000, 0x416365725f57616c6c70617065725f30315f3530303078323831342e6a7067, 0x416365725f57616c6c70617065725f30335f3530303078323831342e6a7067),
('', '', '', '', 'santra', 34, 6000, 0x416365725f57616c6c70617065725f30315f3530303078323831342e6a7067, 0x416365725f57616c6c70617065725f30335f3530303078323831342e6a7067),
('', '', '', '', 'Cotton', 23, 5400, 0x416365725f57616c6c70617065725f30335f3530303078323831342e6a7067, 0x416365725f57616c6c70617065725f30335f3530303078323831342e6a7067),
('', '', '', '', 'santra', 56, 6000, 0x416365725f57616c6c70617065725f30315f3530303078323831342e6a7067, 0x416365725f57616c6c70617065725f30325f3530303078323831332e6a7067),
('', '', '', '', '', 0, 0, '', ''),
('', '', '', '', '', 0, 0, '', ''),
('Maroti', '873489903498', 'wadgaonkarganesh111@gmial.com', 'Nanded', 'chikku', 23, 5600, 0x576861747341707020496d61676520323032322d30322d323220617420382e30372e353620504d2e6a706567, 0x416365725f57616c6c70617065725f30315f3530303078323831342e6a7067);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
