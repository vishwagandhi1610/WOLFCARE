-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2022 at 10:03 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kj_mini`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(20) NOT NULL,
  `pass_word` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `pass_word`) VALUES
('admin@ncsu.edu', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `doc_id` int(20) NOT NULL,
  `apoin_date` date NOT NULL,
  `apoin_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `username`, `doc_id`, `apoin_date`, `apoin_time`) VALUES
(0, 'manan', 676, '2022-10-06', '11:45:00'),
(0, 'manan', 18, '2022-10-27', '15:29:00'),
(0, 'manan', 2, '2022-10-12', '14:51:00'),
(0, '', 9, '2022-11-30', '17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doc_id` varchar(20) NOT NULL,
  `doc_fname` varchar(20) NOT NULL,
  `doc_lname` varchar(20) NOT NULL,
  `doc_type` varchar(20) NOT NULL,
  `doc_phone` varchar(20) NOT NULL,
  `doc_location` varchar(20) NOT NULL,
  `doc_yoe` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass_word` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doc_id`, `doc_fname`, `doc_lname`, `doc_type`, `doc_phone`, `doc_location`, `doc_yoe`, `email`, `pass_word`) VALUES
('676', 'Ravi', 'Ghevariya', 'MBBS', '9876543210', 'Surat', 29, 'ravi@doctors', 'ravi'),
('9', 'Dhruv', 'Patel', 'Heart Surgeon', '9846486276', 'London', 11, 'dhruv@doctors', 'dhruv'),
('18', 'Manan', 'Patel', 'Neuro Surgeon', '9998686888', 'New York', 9, 'manan@doctors', 'manan'),
('345', 'Divya', 'Giridhar', 'Radiologists', '9374826785', 'Seattle', 2, 'divya@doctors', 'divya'),
('56', 'Shreyas', 'Titus', 'Pediatricians', '8728492678', 'New Orleans', 7, '', ''),
('3', 'Louis', 'N', 'Anesthesiologists', '2873645277', 'Cary', 21, '', ''),
('7', 'Charl', 'Brown', 'Cardiologist', '7722839488', 'California', 30, '', ''),
('5', 'Jane', 'Carl', 'Pulmonologist', '9933847266', 'Texas', 5, '', ''),
('34', 'Grace', 'Knaf', 'Gastroenterologist', '3827499912', 'Washington', 7, '', ''),
('1', 'Mary', 'Jane', 'Nephrologist', '3299872637', 'Detroit', 4, '', ''),
('32', 'Michael', 'Una', 'Endocrinologist', '9982736647', 'Indiana', 8, '', ''),
('2', 'Sophie', 'Baker', 'Dermatologist', '9918273677', 'Newark', 4, '', ''),
('8', 'Victoria', 'Bell', 'Psychiatrist', '9783745566', 'Charlotte', 5, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass_word` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `first_name`, `last_name`, `phone`, `gender`, `email`, `pass_word`) VALUES
('manan', 'Manan', 'Patel', 9998686888, 'male', 'mrpatel8@ncsu.edu', 'manan'),
('', '', '', 0, 'Others', '', ''),
('abcxyz', 'ABC', 'XYZ', 123456789, 'Male', 'abc@ncsu.edu', '123'),
('abcxyz', 'abc', 'xyz', 1111111111, 'Male', 'abc@ncsu.edu', 'abc');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
