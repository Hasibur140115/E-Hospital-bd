-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 07:16 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `amtable`
--

CREATE TABLE `amtable` (
  `division` varchar(200) NOT NULL,
  `district` varchar(200) NOT NULL,
  `amhospital` varchar(500) NOT NULL,
  `ambranch` varchar(500) NOT NULL,
  `amcontact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amtable`
--

INSERT INTO `amtable` (`division`, `district`, `amhospital`, `ambranch`, `amcontact`) VALUES
('rajshaji', 'pabna', 'PDC', 'Pabna', '534'),
('dhaka', 'gazipur', 'Enam hospital', 'gazipur', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `drtable`
--

CREATE TABLE `drtable` (
  `drname` varchar(100) NOT NULL,
  `degree` varchar(150) NOT NULL,
  `specilities` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `times` varchar(50) NOT NULL,
  `days` varchar(200) NOT NULL,
  `contruct` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL,
  `serial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drtable`
--

INSERT INTO `drtable` (`drname`, `degree`, `specilities`, `branch`, `times`, `days`, `contruct`, `image`, `serial`) VALUES
('Asst. Prof. Dr. Sormin Sumi', 'MBBS, FCPS(Surgery)', 'Burn Plastic Surgery Specialist', 'Popular Diagnostic Centre Ltd. (Shantinagar (U-1) Branch)', '5 pm-7 pm', 'Saterday', '+880 9613787803', 'dr1.jpg', 1),
('ASST. PROF. P.C.DAS', 'MBBS, MS', 'Burn Plastic Surgery Specialist', 'Popular Diagnostic Centre Ltd. (Mymensingh (U-1) Branch)', '9.00AM - 5.00PM', 'Saterday', '+88091 67901', 'dr2.jpg', 2),
('PROF. DR. MD. TITU MIAH', 'MBBS, FCPS(Internal Medicine), Trained in Rheumatology', 'Gastroenterology', 'Popular Diagnostic Centre Ltd. (DHANMONDI Branch)', '4 PM - 10 PM', 'Sunday', '+880 9613787803', 'dr.jpg', 3),
('DR. MD. MAHBUBUR RAHMAN', 'MBBS (DHAKA), MSC, MPH, MD', 'Child Neurologist', 'Popular Diagnostic Centre Ltd. (Mymensingh (U-1) Branch)', '9.00am - 2.00pm', 'Sunday', '+88091 67904', 'tr.jpg', 4),
('Asst. Prof. Dr. Md. Jamil Uddin ', 'MBBS, FCPS(Internal Medicine), Trained in Pathology', 'Endoscopy Specialist', 'Simla Diagonostic Center, Pabna', '2.00PM- 10.00PM', 'Friday', '01765009876', 'rr.jpg', 5),
('Lt. Col. Dr. Md. Sajedur Rahman', 'MBBS, DO, MD, FIRL, Fellow Ratina & Laser (German), Specilized in Laser, Phaco & Vitreo Retinal Surgery', 'Ophthalmology', 'Square Hospitals Ltd, Dhaka', '2.00PM-8.00PM', 'saterday , Sunday, Monday,Tuesday', '01764435356', '1521002755Dr_Sajedur_(4).jpg', 6),
('Dr. Md. Mazharul Islam', 'MBBS, FCPS (Eye) Trained in Phaco, Laser & Medical Retina (BIRDEM Academy)', 'Ophthalmology', 'Square Hospitals Ltd, Dhaka', '2.00PM-8.00PM', 'Saterday, Sunday, Monday,Tuesday,Friday', '01764435353', 'a18.jpg', 7),
(' Prof. Dr. Shah Alam', 'MBBS, FCPS', 'Ophthalmology', 'Square Hospitals Ltd, Dhaka', '2.00PM-8.00PM', 'saterday , Sunday, Monday,Tuesday', '01764435351', '1521002726Dr_Shah_Alam_(4).jpg', 8),
('Prof. Brig. Gen. Faruk Ahmed (Retd.)', 'MBBS, MCPS (Clinical Pathology), FCPS (Hematology)', 'Haematologist', 'Square Hospitals Ltd, Dhaka', '10.00AM-1.00PM', 'saterday , Sunday, Monday,Tuesday', '01764435359', '1522313708Dr_Faruque_(4).jpg', 9),
('Dr. Kazi Ali Hassan', ' MBBS, M.Phil (EM), MRCP (UK)', 'Endocrine Medicine', 'Square Hospitals Ltd, Dhaka', '2.00PM-8.00PM', 'Saterday, Sunday, Monday,Tuesday,Friday', '01764435351', 'dr3.jpg', 10),
('DR. HImel', ' MBBS, M.Phil (EM), MRCP (UK)', 'Child Neurologist', 'Square Hospitals Ltd, Dhaka', '10.00AM-1.00PM', 'Saterday, Sunday, Monday,Tuesday,Friday', '01764435356', 'a9.jpg', 11),
('Pro. Dr. Md. Shamsul Haque', 'MBBS, FCPS, Eye Specialist & Surgeon', 'Ent Specialist', 'Popular Medical College Hospital Consultation Centre.', ' 6:30 PM - 9:00 PM ', ' Saturday , Sunday , Monday , Tuesday , Wednesday', '+880 9613787801', '732-20190202171329.jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `hospitaltb`
--

CREATE TABLE `hospitaltb` (
  `hos_name` varchar(500) NOT NULL,
  `hos_location` varchar(500) NOT NULL,
  `hos_contact` varchar(500) NOT NULL,
  `hos_details` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitaltb`
--

INSERT INTO `hospitaltb` (`hos_name`, `hos_location`, `hos_contact`, `hos_details`) VALUES
('à¦¢à¦¾à¦•à¦¾ à¦®à§‡à¦¡à¦¿à¦•à§‡à¦² à¦•à¦²à§‡à¦œ à¦¹à¦¾à¦¸à¦ªà¦¾à¦¤à¦¾à¦²', 'à¦¬à¦•à¦¶à§€ à¦¬à¦¾à¦œà¦¾à¦°, à§§à§¦à§¦ à¦°à¦®à¦¨à¦¾,à¦¢à¦¾à¦•à¦¾-à§§à§¦à§¦à§¦', '', 'à¦¢à¦¾à¦•à¦¾ à¦®à§‡à¦¡à¦¿à¦•à§‡à¦² à¦•à¦²à§‡à¦œ à¦¹à¦¾à¦¸à¦ªà¦¾à¦¤à¦¾à¦² à§§à§¯à§ªà§¬ à¦¸à¦¾à¦²à§‡ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¿à¦¤ à¦¹à§Ÿà¥¤ à¦®à§‡à¦¡à¦¿à¦•à§‡à¦² à¦¶à¦¿à¦•à§à¦·à¦¾, à¦—à¦¬à§‡à¦·à¦£à¦¾ à¦à¦¬à¦‚ à¦šà¦¿à¦•à¦¿à§Žà¦¸à¦¾ à¦¸à§‡à¦¬à¦¾ à¦¨à¦¿à§Ÿà§‡ à¦à¦‡ à¦¶à¦¿à¦•à§à¦·à¦¾ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨à¦Ÿà¦¿ à¦—à§œà§‡ à¦‰à¦ à§‡à¦›à¦¿à¦²à¥¤ à¦à¦‡ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨à¦Ÿà¦¿à¦•à§‡ à¦¦à§‡à¦¶à§‡à¦° à¦¸à§‡à¦°à¦¾ à¦®à§‡à¦¡à¦¿à¦•à§‡à¦² à¦•à¦²à§‡à¦œ à¦¹à¦¾à¦¸à¦ªà¦¾à¦¤à¦¾à¦² à¦¹à¦¿à¦¸à§‡à¦¬à§‡ à¦§à¦°à¦¾ à¦¹à§Ÿà¥¤'),
('à¦¶à¦¹à§€à¦¦ à¦¸à§‹à¦¹à¦°à¦¾à¦“à§Ÿà¦¾à¦¦à§€ à¦®à§‡à¦¡à¦¿à¦•à§‡à¦² à¦•à¦²à§‡à¦œ à¦¹à¦¾à¦¸à¦ªà¦¾à¦¤à¦¾à¦²', 'à¦¶à§‡à¦°à§‡-à¦¬à¦¾à¦‚à¦²à¦¾à¦¨à¦—à¦°, à¦¢à¦¾à¦•à¦¾- à§§à§¨à§¦à§­', '', 'à¦¶à¦¹à§€à¦¦ à¦¸à§‹à¦¹à¦°à¦¾à¦“à§Ÿà¦¾à¦¦à§€ à¦¹à¦¾à¦¸à¦ªà¦¾à¦¤à¦¾à¦² à§§à§¯à§¬à§­ à¦¸à¦¾à¦²à§‡ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¿à¦¤ à¦¹à§Ÿà¥¤ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦²à¦—à§à¦¨ à¦¥à§‡à¦•à§‡ à¦¶à§à¦°à§ à¦•à¦°à§‡ à¦¬à¦°à§à¦¤à¦®à¦¾à¦¨ à¦ªà¦°à§à¦¯à¦¨à§à¦¤ à¦à¦‡ à¦¹à¦¾à¦¸à¦ªà¦¾à¦¤à¦¾à¦²à¦Ÿà¦¿ à¦¸à¦¾à¦§à¦¾à¦°à¦£ à¦®à¦¾à¦¨à§à¦·à§‡à¦° à¦šà¦¿à¦•à¦¿à§Žà¦¸à¦¾ à¦¸à§‡à¦¬à¦¾ à¦ªà§à¦°à¦¦à¦¾à¦¨ à¦•à¦°à§‡ à¦†à¦¸à¦›à§‡ à¥¤ à§¨à§¦à§¦à§« à¦¸à¦¾à¦²à§‡ à¦à¦‡ à¦¹à¦¾à¦¸à¦ªà¦¾à¦¤à¦¾à¦²à¦Ÿà¦¿à¦¤à§‡ à¦®à§‡à¦¡à¦¿à¦•à§‡à¦² à¦•à¦²à§‡à¦œà§‡à¦° à¦•à¦¾à¦°à§à¦¯à¦•à§à¦°à¦® à¦¶à§à¦°à§ à¦•à¦°à§‡ à¥¤ à¦¬à¦°à§à¦¤à¦®à¦¾à¦¨à§‡ à¦à¦‡ à¦¹à¦¾à¦¸à¦ªà¦¾à¦¤à¦¾à¦²à¦Ÿà¦¿ à¦¶à¦¹à§€à¦¦ à¦¸à§‹à¦¹à¦°à¦¾à¦“à§Ÿà¦¾à¦¦à§€ à¦®à§‡à¦¡à¦¿à¦•à§‡à¦² à¦•à¦²à§‡à¦œ à¦“ à¦¹à¦¾à¦¸à¦ªà¦¾à¦¤à¦¾à¦² à¦¨à¦¾à¦®à§‡ à¦ªà¦°à¦¿à¦šà¦¿à¦¤à¥¤'),
('à¦œà¦¾à¦¤à§€à§Ÿ à¦•à§à¦¯à¦¾à¦¨à§à¦¸à¦¾à¦° à¦—à¦¬à§‡à¦·à¦£à¦¾ à¦‡à¦¨à¦¸à§à¦Ÿà¦¿à¦Ÿà¦¿à¦‰à¦Ÿ à¦“ à¦¹à¦¾à¦¸à¦ªà¦¾à¦¤à¦¾à¦²', 'à¦®à¦¹à¦¾à¦–à¦¾à¦²à§€, à¦¢à¦¾à¦•à¦¾- à§§à§¨à§§à§¨', '', 'à¦œà¦¾à¦¤à§€à§Ÿ à¦•à§à¦¯à¦¾à¦¨à§à¦¸à¦¾à¦° à¦—à¦¬à§‡à¦·à¦£à¦¾ à¦‡à¦¨à¦¸à§à¦Ÿà¦¿à¦Ÿà¦¿à¦‰à¦Ÿ à¦“ à¦¹à¦¾à¦¸à¦ªà¦¾à¦¤à¦¾à¦² à§§à§§ à¦†à¦—à¦¸à§à¦Ÿ, à§¨à§¦à§¦à§¯ à¦‡à¦‚ à¦¸à¦¾à¦²à§‡ à¦¯à¦¾à¦¤à§à¦°à¦¾ à¦¶à§à¦°à§ à¦•à¦°à§‡à¥¤ à¦à¦‡ à¦¹à¦¾à¦¸à¦ªà¦¾à¦¤à¦¾à¦²à¦Ÿà¦¿à¦¤à§‡ à¦¯à¦¾à¦°à¦¾ à¦•à§à¦¯à¦¾à¦¨à§à¦¸à¦¾à¦° à¦°à§‹à¦—à§‡ à¦†à¦•à§à¦°à¦¾à¦¨à§à¦¤ à¦¤à¦¾à¦¦à§‡à¦° à¦¸à§‡à¦¬à¦¾ à¦ªà§à¦°à¦¦à¦¾à¦¨ à¦•à¦°à¦¾ à¦¹à§Ÿà¥¤'),
('à¦¬à¦™à§à¦—à¦¬à¦¨à§à¦§à§ à¦¶à§‡à¦– à¦®à§à¦œà¦¿à¦¬ à¦®à§‡à¦¡à¦¿à¦•à§‡à¦² à¦¬à¦¿à¦¶à§à¦¬à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿ à¦¹à¦¾à¦¸à¦ªà¦¾à¦¤à¦¾à¦²', 'à¦¶à¦¾à¦¹à¦¬à¦¾à¦—à¦®à§‹à§œà§‡ à¦œà¦¾à¦¤à§€à§Ÿ à¦œà¦¾à¦¦à§à¦˜à¦°à§‡à¦° à¦‰à¦¤à§à¦¤à¦°à§‡ à¦à¦‡ à¦¹à¦¾à¦¸à¦ªà¦¾à¦¤à¦¾à¦²à¦Ÿà¦¿à¦° à¦…à¦¬à¦¸à§à¦¥à¦¾à¦¨à¥¤', '', 'à§§à§¯à§¬à§« à¦¸à¦¾à¦²à§‡ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¿à¦¤ à¦‡à¦¨à¦¸à§à¦Ÿà¦¿à¦Ÿà¦¿à¦‰à¦Ÿ à¦…à¦¬ à¦ªà§‹à¦¸à§à¦Ÿ à¦—à§à¦°à¦¾à¦œà§à§Ÿà§‡à¦Ÿ à¦®à§‡à¦¡à¦¿à¦•à§‡à¦² à¦°à¦¿à¦¸à¦¾à¦°à§à¦š (à¦†à¦‡à¦ªà¦¿à¦œà¦¿à¦à¦®à¦†à¦°) à¦•à§‡ à§§à§¯à§¯à§® à¦¸à¦¾à¦²à§‡ à¦®à§‡à¦¡à¦¿à¦•à§‡à¦² à¦¬à¦¿à¦¶à§à¦¬à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿà§‡ à¦°à§à¦ªà¦¾à¦¨à§à¦¤à¦°à¦¿à¦¤ à¦•à¦°à¦¾ à¦¹à§Ÿà¥¤à¦‰à¦šà§à¦šà¦¤à¦° à¦®à§‡à¦¡à¦¿à¦•à§‡à¦² à¦¶à¦¿à¦•à§à¦·à¦¾ à¦à¦¬à¦‚ à¦—à¦¬à§‡à¦·à¦£à¦¾à¦° à¦²à¦•à§à¦·à§à¦¯ à¦¨à¦¿à§Ÿà§‡ à¦¬à¦¿à¦¶à§à¦¬à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿà¦Ÿà¦¿à¦° à¦¯à¦¾à¦¤à§à¦°à¦¾ à¦¶à§à¦°à§ à¦¹à§Ÿà§‡à¦›à¦¿à¦²à¥¤à¦à¦‡ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨à¦Ÿà¦¿ à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶à§‡à¦° à¦¸à¦°à§à¦¬à§‹à¦šà§à¦š à¦šà¦¿à¦•à¦¿à§Žà¦¸à¦¾à¦•à§‡à¦¨à§à¦¦à§à¦° à¦à¦¬à¦‚ à¦šà¦¿à¦•à¦¿à§Žà¦¸à¦¾ à¦¶à¦¿à¦•à§à¦·à¦¾à¦•à§‡à¦¨à§à¦¦à§à¦° à¦¹à¦¿à¦¸à§‡à¦¬à§‡ à¦ªà¦°à¦¿à¦šà¦¿à¦¤à¥¤'),
('à¦¸à¦°à¦•à¦¾à¦°à§€ à¦‡à¦‰à¦¨à¦¾à¦¨à§€ à¦“ à¦†à§Ÿà§à¦°à§à¦¬à§‡à¦¦à¦¿à¦• à¦®à§‡à¦¡à¦¿à¦•à§‡à¦² à¦•à¦²à§‡à¦œ à¦“ à¦¹à¦¾à¦¸à¦ªà¦¾à¦¤à¦¾à¦²', 'à¦®à¦¿à¦°à¦ªà§à¦° à§§à§©, à¦•à¦¾à¦«à¦°à§à¦², à¦¢à¦¾à¦•à¦¾à¥¤', '', 'à¦à¦Ÿà¦¿ à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶à§‡à¦° à¦à¦•à¦®à¦¾à¦¤à§à¦° à¦‡à¦‰à¦¨à¦¾à¦¨à§€ à¦à¦¬à¦‚ à¦†à§Ÿà§à¦°à§à¦¬à§‡à¦¦à¦¿à¦• à¦šà¦¿à¦•à¦¿à§Žà¦¸à¦¾ à¦¶à¦¿à¦•à§à¦·à¦¾ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨à¥¤ à§§à§¯à§¯à§§ à¦¸à¦¾à¦²à§‡ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨à¦Ÿà¦¿  à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾ à¦²à¦¾à¦­ à¦•à¦°à§‡à¥¤ à¦à¦–à¦¾à¦¨à§‡ à¦ªà¦°à¦¿à¦šà¦¾à¦²à¦¿à¦¤ à¦¬à¦¿à¦‡à¦‰à¦à¦®à¦à¦¸ à¦“ à¦¬à¦¿à¦à¦à¦®à¦à¦¸ à¦¡à¦¿à¦—à§à¦°à§€ à¦ªà§à¦°à§‹à¦—à§à¦°à¦¾à¦® à¦¦à§à¦Ÿà¦¿ à¦¢à¦¾à¦•à¦¾ à¦¬à¦¿à¦¶à§à¦¬à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿà§‡à¦° à¦«à¦¾à¦°à§à¦®à§‡à¦¸à§€ à¦…à¦¨à§à¦·à¦¦ à¦¥à§‡à¦•à§‡ à¦¨à¦¿à§Ÿà¦¨à§à¦¤à§à¦°à¦£ à¦•à¦°à¦¾ à¦¹à§Ÿà¥¤ à¦•à¦²à§‡à¦œà¦Ÿà¦¿ à¦¸à¦°à¦•à¦¾à¦°à§€ à¦‡à¦‰à¦¨à¦¾à¦¨à§€ à¦“ à¦†à¦¯à¦¼à§à¦°à§à¦¬à§‡à¦¦à¦¿à¦• à¦®à§‡à¦¡à¦¿à¦•à§‡à¦² / à¦¡à¦¿à¦—à§à¦°à¦¿ à¦•à¦²à§‡à¦œ, à¦‡à¦‰à¦¨à¦¾à¦¨à§€ à¦“ à¦†à¦¯à¦¼à§à¦°à§à¦¬à§‡à¦¦à¦¿à¦• à¦•à¦²à§‡à¦œ, à¦†à¦¯à¦¼à§à¦°à§à¦¬à§‡à¦¦à¦¿à¦• à¦•à¦²à§‡à¦œ à¦ªà§à¦°à¦­à§ƒà¦¤à¦¿ à¦¨à¦¾à¦®à§‡à¦“ à¦ªà¦°à¦¿à¦šà¦¿à¦¤ à¥¤ à¦à¦–à¦¾à¦¨à§‡ à§¬à§¦ à¦œà¦¨ à¦¶à¦¿à¦•à§à¦·à¦• à¦¨à¦¿à§Ÿà§‹à¦œà¦¿à¦¤ à¦°à§Ÿà§‡à¦›à§‡à¦¨à¥¤'),
('à¦œà¦¾à¦¤à§€à§Ÿ à¦šà¦•à§à¦·à§ à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨ à¦‡à¦¨à¦¸à§à¦Ÿà¦¿à¦Ÿà¦¿à¦‰à¦Ÿ à¦“ à¦¹à¦¾à¦¸à¦ªà¦¾à¦¤à¦¾à¦²', 'à¦¶à§‡à¦°à§‡à¦¬à¦¾à¦‚à¦²à¦¾ à¦¨à¦—à¦°, à¦¢à¦¾à¦•à¦¾- à§§à§¨à§§à§­à¥¤', '', 'à¦œà¦¾à¦¤à§€à§Ÿ à¦šà¦•à§à¦·à§ à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨ à¦‡à¦¨à¦¸à§à¦Ÿà¦¿à¦Ÿà¦¿à¦‰à¦Ÿ à¦“ à¦¹à¦¾à¦¸à¦ªà¦¾à¦¤à¦¾à¦² à§¨à§¨ à¦¶à§‡ à¦¡à¦¿à¦¸à§‡à¦®à§à¦¬à¦° à§§à§¯à§®à§¯ à¦¸à¦¾à¦²à§‡ à¦¯à¦¾à¦¤à§à¦°à¦¾ à¦¶à§à¦°à§ à¦•à¦°à§‡à¥¤ à¦à¦‡ à¦¹à¦¾à¦¸à¦ªà¦¾à¦¤à¦¾à¦²à¦Ÿà¦¿à¦¤à§‡ à¦¤à¦¾à¦¦à§‡à¦° à¦¸à§‡à¦¬à¦¾ à¦ªà§à¦°à¦¦à¦¾à¦¨ à¦•à¦°à¦¾ à¦¹à§Ÿ à¦¯à¦¾à¦¦à§‡à¦° à¦šà§‹à¦–à§‡ à¦¸à¦®à¦¸à§à¦¯à¦¾à¥¤ à¦¹à¦¾à¦¸à¦ªà¦¾à¦¤à¦¾à¦²à¦Ÿà¦¿à¦¤à§‡ à¦°à§Ÿà§‡à¦›à§‡ à¦…à¦¤à§à¦¯à¦¾à¦§à§à¦¨à¦¿à¦• à¦šà¦¿à¦•à¦¿à§Žà¦¸à¦¾ à¦¸à¦°à¦žà§à¦œà¦¾à¦® à¦“ à¦ªà¦°à§à¦¯à¦¾à¦ªà§à¦¤ à¦šà¦¿à¦•à¦¿à§Žà¦¸à¦•à¥¤  '),
('à¦•à¦¿à¦¡à¦¨à§€ à¦«à¦¾à¦‰à¦¨à§à¦¡à§‡à¦¶à¦¨ à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶', 'à¦ªà§à¦²à¦Ÿ # à§«/à§¨, à¦¸à§œà¦• # à§¦à§§, à¦¸à§‡à¦•à¦¶à¦¨ #  à§¦à§¨  à¦®à¦¿à¦°à¦ªà§à¦°, à¦¢à¦¾à¦•à¦¾ à§§à§¨à§§à§¬à¥¤', 'à¦«à§‹à¦¨: +à§®à§®-à§¦à§¨-à§®à§¦à§«à§«à§®à§¨à§­, +à§®à§®-à§¦à§¨-à§®à§¦à§«à§©à§­à§®à§¬', 'à¦•à¦¿à¦¡à¦¨à§€ à¦«à¦¾à¦‰à¦¨à§à¦¡à§‡à¦¶à¦¨ à¦¦à§‡à¦¶à§‡à¦° à¦¬à§ƒà¦¹à¦¤à§à¦¤à¦® à¦¡à¦¾à§Ÿà¦¾à¦²à¦¾à¦‡à¦¸à¦¿à¦¸ à¦à¦¬à¦‚ à¦Ÿà§à¦°à¦¾à¦¨à§à¦¸à¦ªà§à¦²à¦¾à¦¨à§à¦Ÿà§‡à¦¶à¦¨ à¦¸à§‡à¦¨à§à¦Ÿà¦¾à¦°à¥¤ à¦à¦–à¦¾à¦¨à§‡ à¦°à§Ÿà§‡à¦›à§‡ à¦¹à¦¾à¦¸à¦ªà¦¾à¦¤à¦¾à¦², à¦²à§à¦¯à¦¾à¦¬, à¦¡à¦¾à§Ÿà¦¾à¦²à¦¾à¦‡à¦¸à¦¿à¦¸ à¦à¦¬à¦‚ à¦•à¦¿à¦¡à¦¨à§€ à¦Ÿà§à¦°à¦¾à¦¨à§à¦¸à¦ªà§à¦²à¦¾à¦¨à§à¦Ÿà§‡à¦¶à¦¨ à¦¸à§‡à¦¨à§à¦Ÿà¦¾à¦°à¥¤ à§¨à§¦à§¦à§© à¦¸à¦¾à¦²à§‡ à¦«à¦¾à¦‰à¦¨à§à¦¡à§‡à¦¶à¦¨à¦Ÿà¦¿ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¿à¦¤ à¦¹à§Ÿà¥¤ à¦à¦–à¦¾à¦¨à§‡ à¦¸à§à¦²à¦­à§‡ à¦¡à¦¾à§Ÿà¦¾à¦²à¦¾à¦‡à¦¸à¦¿à¦¸, à¦Ÿà§à¦°à¦¾à¦¨à§à¦¸à¦ªà§à¦²à¦¾à¦¨à§à¦Ÿà§‡à¦¶à¦¨ à¦•à¦°à¦¾à¦° à¦¬à§à¦¯à¦¬à¦¸à§à¦¥à¦¾ à¦°à§Ÿà§‡à¦›à§‡à¥¤ à¦ªà¦¾à¦¶à¦¾à¦ªà¦¾à¦¶à¦¿ à¦°à§Ÿà§‡à¦›à§‡ à¦²à§à¦¯à¦¾à¦¬ à¦Ÿà§‡à¦·à§à¦Ÿà¦¸à¦¹ à¦‡à¦¨à¦¡à§‹à¦° à¦à¦¬à¦‚ à¦†à¦‰à¦Ÿà¦¡à§‹à¦° à¦¸à§à¦¬à¦¿à¦§à¦¾à¥¤ à¦à¦‡ à¦«à¦¾à¦‰à¦¨à§à¦¡à§‡à¦¶à¦¨ à¦¦à§‡à¦¶à§‡à¦° à¦†à¦ªà¦¾à¦®à¦° à¦¦à¦°à¦¿à¦¦à§à¦° à¦œà¦¨à¦—à§‹à¦·à§à¦ à§€à¦° à¦•à¦¿à¦¡à¦¨à§€ à¦°à§‹à¦—, à¦¡à¦¾à§Ÿà§‡à¦¬à§‡à¦Ÿà¦¿à¦•à§à¦¸ à¦à¦¬à¦‚ à¦¹à¦¾à¦‡à¦ªà¦¾à¦°à¦Ÿà§‡à¦¨à¦¶à¦¨ à¦°à§‹à¦— à¦¸à¦¨à¦¾à¦•à§à¦¤à¦•à¦°à¦£, à¦ªà§à¦°à¦¤à¦¿à¦°à§‹à¦§ à¦à¦¬à¦‚ à¦šà¦¿à¦•à¦¿à§Žà¦¸à¦¾à¦° à¦‰à¦ªà¦° à¦¬à¦¿à¦­à¦¿à¦¨à§à¦¨ à¦—à¦¬à§‡à¦·à¦£à¦¾ à¦•à¦°à§à¦® à¦ªà¦°à¦¿à¦šà¦¾à¦²à¦¨à¦¾ à¦•à¦°à§‡ à¦¥à¦¾à¦•à§‡à¥¤ ');

-- --------------------------------------------------------

--
-- Table structure for table `logintb`
--

CREATE TABLE `logintb` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintb`
--

INSERT INTO `logintb` (`username`, `password`) VALUES
('hasib', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `massagetb`
--

CREATE TABLE `massagetb` (
  `user_name` varchar(500) NOT NULL,
  `user_address` varchar(500) NOT NULL,
  `user_msg` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mdtable`
--

CREATE TABLE `mdtable` (
  `mdname` varchar(100) NOT NULL,
  `mdbrand` varchar(100) NOT NULL,
  `mdprice` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mdtable`
--

INSERT INTO `mdtable` (`mdname`, `mdbrand`, `mdprice`) VALUES
('Napa ', 'square pharma bd', '2'),
('Finix 20mg', 'cpsanin', '5'),
('Deslor', 'square pharma bd', '2'),
('Nospa', 'insepta', '6');

-- --------------------------------------------------------

--
-- Table structure for table `newstable`
--

CREATE TABLE `newstable` (
  `news_heading` varchar(500) NOT NULL,
  `news` longtext NOT NULL,
  `serial` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newstable`
--

INSERT INTO `newstable` (`news_heading`, `news`, `serial`) VALUES
('govt', 'hospital', 1),
('Square Hospital are include Us very Soon', 'The square hospital ltd are share their service with us very soon, thanks', 2),
('New branch opened', 'Popular Diagnostic center new branch open at Gazipur.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `patienttb`
--

CREATE TABLE `patienttb` (
  `pname` varchar(100) NOT NULL,
  `paddress` varchar(150) NOT NULL,
  `pbranch` varchar(100) NOT NULL,
  `pdrname` varchar(100) NOT NULL,
  `pday` varchar(100) NOT NULL,
  `ptime` varchar(50) NOT NULL,
  `pcontact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patienttb`
--

INSERT INTO `patienttb` (`pname`, `paddress`, `pbranch`, `pdrname`, `pday`, `ptime`, `pcontact`) VALUES
('Sima khatun', 'Mojidpur, pabna sader, pabna.', 'DHAKA', 'DR. MD. MAHBUBUR RAHMAN', 'Thusday', 'Night(7PM-11PM)', '01759196391'),
('hasibur ', 'jalalpur', 'RAJSHAHI', 'ASST. PROF. P.C.DAS', 'Sunday', 'Afternoon(4PM-6PM)', '01754001091'),
('habib', 'jalalpur', 'DHAKA', 'PROF. DR. MD. TITU MIAH', 'Thusday', 'Afternoon(4PM-6PM)', '01729564980'),
('jamil akter', 'nator', 'Simla Diagonostic Center, Pabna', 'DR. MD. MAHBUBUR RAHMAN', 'Monday', '9.00AM - 5.00PM', '09853'),
(' nm n', '   b m', 'Popular Diagnostic Centre Ltd. (Shantinagar (U-1) Branch)', 'DR. HImel', 'Thusday', '2.00PM-8.00PM', '09853');

-- --------------------------------------------------------

--
-- Table structure for table `signuptb`
--

CREATE TABLE `signuptb` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signuptb`
--

INSERT INTO `signuptb` (`fname`, `lname`, `email`, `contact`, `username`, `password`) VALUES
('hasibur', 'rahman', 'hasibur140115@gmail.com', '01754001091', 'hasib14', '1234'),
('thasin', 'simu', 'thasinsima@gmail.com', '01759196391', 'Simu11', '2222'),
('Jillur', 'rahman', 'jillur22@gmail.com', '01303177017', 'jillur1', '55555');

-- --------------------------------------------------------

--
-- Table structure for table `stafftb`
--

CREATE TABLE `stafftb` (
  `sname` varchar(100) NOT NULL,
  `sdivision` varchar(200) NOT NULL,
  `sdistrict` varchar(200) NOT NULL,
  `sbranch` varchar(150) NOT NULL,
  `scatagory` varchar(100) NOT NULL,
  `scontact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stafftb`
--

INSERT INTO `stafftb` (`sname`, `sdivision`, `sdistrict`, `sbranch`, `scatagory`, `scontact`) VALUES
('Abu raihan', '', '', 'RAJSHAHI', 'manager', '78925567'),
('rahim', 'RAJSHAHI', 'natore', 'natore general hospital', 'manager', '78925567');

-- --------------------------------------------------------

--
-- Table structure for table `testtable`
--

CREATE TABLE `testtable` (
  `testname` varchar(200) NOT NULL,
  `testcenter` varchar(150) NOT NULL,
  `testprice` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testtable`
--

INSERT INTO `testtable` (`testname`, `testcenter`, `testprice`) VALUES
('blood test', 'mirpur', '200'),
('blood test', 'mirpur', '200'),
('polyfas', 'Simla diagonostic center,pabna', '500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drtable`
--
ALTER TABLE `drtable`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `newstable`
--
ALTER TABLE `newstable`
  ADD PRIMARY KEY (`serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drtable`
--
ALTER TABLE `drtable`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `newstable`
--
ALTER TABLE `newstable`
  MODIFY `serial` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
