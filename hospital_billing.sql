-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2019 at 01:22 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_billing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `email`, `password`) VALUES
(1, 'admin', '$2y$10$zRe8Ii/45irUzBIVXAefDeNOthtdMHsyk8IxPeAYzPEzm9HzGLUKa');

-- --------------------------------------------------------

--
-- Table structure for table `billing_tbl`
--

CREATE TABLE `billing_tbl` (
  `id` int(11) NOT NULL,
  `id_number` int(11) NOT NULL,
  `blood_transfusion` int(11) NOT NULL,
  `lab_test_fee` int(11) NOT NULL,
  `surgery_fee` int(11) NOT NULL,
  `drug_fee` int(11) NOT NULL,
  `xray_fee` int(11) NOT NULL,
  `medical_supplies_fee` int(11) NOT NULL,
  `rehabilitation_fee` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing_tbl`
--

INSERT INTO `billing_tbl` (`id`, `id_number`, `blood_transfusion`, `lab_test_fee`, `surgery_fee`, `drug_fee`, `xray_fee`, `medical_supplies_fee`, `rehabilitation_fee`, `total`, `created_at`) VALUES
(1, 10698, 100, 0, 100, 100, 100, 100, 0, 600, '2019-08-17 11:09:42');

-- --------------------------------------------------------

--
-- Table structure for table `patient_tbl`
--

CREATE TABLE `patient_tbl` (
  `id` int(11) NOT NULL,
  `date_registered` varchar(50) NOT NULL,
  `id_number` int(11) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `other_name` varchar(60) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood_group` varchar(20) NOT NULL,
  `genotype` varchar(40) NOT NULL,
  `phone_number` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_tbl`
--

INSERT INTO `patient_tbl` (`id`, `date_registered`, `id_number`, `surname`, `other_name`, `gender`, `blood_group`, `genotype`, `phone_number`) VALUES
(1, '17/08/2019', 10179, 'JoHN', 'Effong Okon', 'Male', '0+', 'AA', '09009099'),
(2, '17/08/2019', 10698, 'Effiong', 'Patience Monday', 'Female', '0+', 'AA', '090999899');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing_tbl`
--
ALTER TABLE `billing_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_tbl`
--
ALTER TABLE `patient_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `billing_tbl`
--
ALTER TABLE `billing_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient_tbl`
--
ALTER TABLE `patient_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
