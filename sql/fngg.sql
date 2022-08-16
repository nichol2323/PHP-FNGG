-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 05:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fngg`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `user_name`, `password`, `type`) VALUES
(1, 'Nichol Guasa', 'Nicholguasa2021', 'e05099a60616a953750e5972418c96df', 'admin'),
(2, 'Laralou Galano', 'Laralougalano2021', '82c15b231c3db896a11b2e89a943945d', 'admin'),
(12, 'Wen Laos Costo', 'WenLaosCosto', '881a175d2f540aaaf8c5a33cc2ef4607', 'employee'),
(13, 'Anthony  Caringal', 'AnthonyCaringal', '2dbb95b3e23d2e17113a9062a7fe6e21', 'employee'),
(14, 'Marielle  Odevillas', 'MarielleOdevillas', 'aedeccabc247c4fcce19579b1e898eee', 'employee'),
(15, 'Jenny  Siongco', 'JennySiongco', '4951f1f4643f221f0d336ae1dfb1d82b', 'employee'),
(17, 'Juvan  Ancheta', 'JuvanAncheta', 'f1d04e249cd22dc0e0a0b8e49ad2cd8b', 'employee'),
(18, 'Lolito  Antipas', 'LolitoAntipas', '127c75f50f591ff1cc8601adbd712fef', 'employee'),
(19, 'MarkAnthony  Vieja', 'MarkAnthonyVieja', '8541bbcf1b9281dd894046bdae7a0762', 'employee'),
(20, 'Arvin  Ariola', 'ArvinAriola', 'fe05123fe46029e5452278089ec88a66', 'employee'),
(21, 'Jerry  Arroyo', 'JerryArroyo', '1830363b520a4251abf7b3c517d5c7a5', 'employee'),
(22, 'Christopher  Asilum', 'ChristopherAsilum', '415ef35668a6a140940b54fb2092abee', 'employee'),
(23, 'Aguiland  Calumpiano', 'AguilandCalumpiano', '3bf96d02cc8cb8916774611c0e714325', 'employee'),
(24, 'Rupert  Carlon', 'RupertCarlon', '7ba7b7b5b07a183a1a215e59be6072e8', 'employee'),
(25, 'JiviJames  Chavis', 'JiviJamesChavis', 'dbc1b71acd24ab12559e2000fbe389a1', 'employee'),
(26, 'Welcher  Dangcalan', 'WelcherDangcalan', 'f0aadaf29177642eb1946283a372de03', 'employee'),
(27, 'Rolindo  Dizon', 'RolindoDizon', 'c2d70889f0ab2a7401fb1b979492ff29', 'employee'),
(28, 'Raymond  Detablan', 'RaymondDetablan', 'a6de98459cc434159fb9ab43a843dfc3', 'employee'),
(29, 'Daniel  Pavorela', 'DanielPavorela', 'af5f44bb20770158d2d9c6b4fcae3378', 'employee'),
(30, 'Warren  Reyes', 'WarrenReyes', 'bdb4d6837e16151fb26b4057d454206b', 'employee'),
(31, 'Diether  Cagoyong', 'DietherCagoyong', '6705bfa6459cf9544322568483fa2262', 'employee'),
(32, 'Marvin  Resorado', 'MarvinResorado', '3c3ffe51aefd317b8f4b15d521852d22', 'employee'),
(33, 'Ernesto  Lauzon', 'ErnestoLauzon', '58289b793036a844ee01f1fc14c958b3', 'employee'),
(34, 'Reywell  Ibanez', 'ReywellIbanez', '7d612a6bea7d7341020c3f633748ad19', 'employee'),
(35, 'Jasper  Adona', 'JasperAdona', '4c6de76e7edfd3a15c1065691a4a910e', 'employee'),
(36, 'Racel  Claridad', 'RacelClaridad', '3296ea40bfc573afc565e3ff33ef855e', 'employee'),
(37, 'Aldwin  Padua', 'AldwinPadua', 'f06d6b690b2481ca3eb2874581b420ab', 'employee'),
(38, 'dsada dsadsa dsadasdsa', 'dsadadsadsadsadasdsa', '400393127cf59a93d728dfce7a601a06', 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `att_id` int(11) NOT NULL,
  `emp_name` varchar(250) NOT NULL,
  `timein` varchar(250) NOT NULL,
  `timeout` varchar(250) NOT NULL,
  `total_min` int(11) NOT NULL,
  `o_timein` varchar(250) NOT NULL,
  `o_timeout` varchar(250) NOT NULL,
  `o_total_min` int(11) NOT NULL,
  `payroll_status` varchar(250) NOT NULL,
  `v1` int(11) NOT NULL,
  `v2` int(11) NOT NULL,
  `v3` int(11) NOT NULL,
  `v4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`att_id`, `emp_name`, `timein`, `timeout`, `total_min`, `o_timein`, `o_timeout`, `o_total_min`, `payroll_status`, `v1`, `v2`, `v3`, `v4`) VALUES
(1, 'WenLaosCosto', '03-01-2022 08:00:30', '12-01-2022 16:00:59', 480, '03-01-2022 16:01:12', '03-01-2022 19:01:28', 180, 'checked', 0, 0, 0, 0),
(2, 'AnthonyCaringal', '03-01-2022 08:00:37', '11-01-2022 16:01:01', 480, '03-01-2022 16:01:18', '03-01-2022 19:01:29', 180, '', 0, 0, 0, 0),
(3, 'MarielleOdevillas', '03-01-2022 08:00:43', '11-01-2022 16:01:02', 480, '03-01-2022 16:01:53', '03-01-2022 19:02:07', 180, '', 0, 0, 0, 0),
(4, 'WenLaosCosto', '04-01-2022 08:01:24', '04-01-2022 16:01:44', 480, '04-01-2022 16:01:57', '04-01-2022 19:02:19', 180, 'checked', 0, 0, 0, 0),
(5, 'AnthonyCaringal', '04-01-2022 08:01:30', '04-01-2022 16:01:45', 480, '04-01-2022 16:02:04', '04-01-2022 19:02:21', 180, '', 0, 0, 0, 0),
(6, 'MarielleOdevillas', '04-01-2022 08:01:36', '04-01-2022 16:01:47', 480, '04-01-2022 16:02:10', '04-01-2022 19:02:22', 180, '', 0, 0, 0, 0),
(7, 'WenLaosCosto', '05-01-2022 08:00:36', '05-01-2022 16:00:58', 480, '05-01-2022 16:01:21', '05-01-2022 19:02:00', 180, 'checked', 0, 0, 0, 0),
(8, 'AnthonyCaringal', '05-01-2022 08:00:44', '05-01-2022 16:01:00', 480, '05-01-2022 16:01:28', '05-01-2022 19:02:02', 180, '', 0, 0, 0, 0),
(9, 'MarielleOdevillas', '05-01-2022 08:00:52', '05-01-2022 16:01:01', 480, '05-01-2022 16:01:34', '05-01-2022 19:02:03', 180, '', 0, 0, 0, 0),
(10, 'WenLaosCosto', '06-01-2022 08:01:35', '06-01-2022 16:02:13', 480, '06-01-2022 16:02:28', '06-01-2022 19:02:52', 180, 'checked', 0, 0, 0, 0),
(11, 'AnthonyCaringal', '06-01-2022 08:01:54', '06-01-2022 16:02:14', 480, '06-01-2022 16:02:38', '06-01-2022 19:02:54', 180, '', 0, 0, 0, 0),
(12, 'MarielleOdevillas', '06-01-2022 08:02:06', '06-01-2022 16:02:16', 480, '06-01-2022 16:02:44', '06-01-2022 19:02:55', 180, '', 0, 0, 0, 0),
(13, 'WenLaosCosto', '07-01-2022 08:01:05', '07-01-2022 16:01:31', 480, '07-01-2022 16:01:43', '07-01-2022 19:01:56', 180, 'checked', 0, 0, 0, 0),
(14, 'AnthonyCaringal', '07-01-2022 08:01:12', '07-01-2022 16:01:32', 480, '07-01-2022 16:01:50', '07-01-2022 19:01:58', 180, '', 0, 0, 0, 0),
(15, 'MarielleOdevillas', '07-01-2022 08:01:18', '07-01-2022 16:01:33', 480, '', '', 0, '', 0, 0, 0, 0),
(16, 'WenLaosCosto', '08-01-2022 08:00:13', '08-01-2022 16:00:35', 480, '08-01-2022 16:00:46', '08-01-2022 19:00:59', 180, 'checked', 0, 0, 0, 0),
(17, 'AnthonyCaringal', '08-01-2022 08:00:21', '08-01-2022 16:00:37', 480, '08-01-2022 16:00:52', '08-01-2022 19:01:00', 180, '', 0, 0, 0, 0),
(18, 'MarielleOdevillas', '08-01-2022 08:00:29', '08-01-2022 16:00:38', 480, '', '', 0, '', 0, 0, 0, 0),
(19, 'WenLaosCosto', '09-01-2022 08:01:24', '09-01-2022 16:02:52', 480, '09-01-2022 16:03:53', '09-01-2022 19:04:06', 180, 'checked', 0, 0, 0, 0),
(20, 'AnthonyCaringal', '09-01-2022 08:01:31', '09-01-2022 16:02:56', 480, '09-01-2022 16:04:00', '09-01-2022 19:04:08', 180, '', 0, 0, 0, 0),
(21, 'MarielleOdevillas', '09-01-2022 08:01:37', '09-01-2022 16:02:57', 480, '', '', 0, '', 0, 0, 0, 0),
(22, 'WenLaosCosto', '10-01-2022 08:00:28', '10-01-2022 16:00:41', 480, '10-01-2022 16:00:50', '10-01-2022 19:00:55', 180, 'checked', 0, 0, 0, 0),
(23, 'AnthonyCaringal', '10-01-2022 08:00:35', '10-01-2022 16:00:43', 480, '', '', 0, '', 0, 0, 0, 0),
(24, 'WenLaosCosto', '11-01-2022 08:00:28', '11-01-2022 16:00:57', 480, '11-01-2022 16:01:07', '11-01-2022 19:01:16', 180, 'checked', 0, 0, 0, 0),
(25, 'AnthonyCaringal', '11-01-2022 08:00:36', '11-01-2022 16:00:58', 480, '', '', 0, '', 0, 0, 0, 0),
(26, 'MarielleOdevillas', '11-01-2022 08:00:42', '11-01-2022 16:01:00', 480, '', '', 0, '', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `attendance_login`
--

CREATE TABLE `attendance_login` (
  `att_login_id` int(11) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `timein` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `place_of_birth` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `sss_id` int(11) NOT NULL,
  `tin_id` int(11) NOT NULL,
  `nbi_id` int(11) NOT NULL,
  `qr_text` varchar(255) NOT NULL,
  `project_id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `fname`, `mname`, `lname`, `date_of_birth`, `place_of_birth`, `sex`, `civil_status`, `nationality`, `phone`, `address`, `sss_id`, `tin_id`, `nbi_id`, `qr_text`, `project_id`, `project_name`) VALUES
(1, 'Wen', 'Laos', 'Costo', '1966-12-16', 'Dasma, Cavite', 'Male', 'Married', 'Filipino', 9789563215, 'Imus, Cavite', 2147483647, 2147483647, 2147483647, 'WenLaosCosto', 22, 'SampleProject'),
(2, 'Anthony', '', 'Caringal', '1986-05-18', 'Dasma, Cavite', 'Male', 'Married', 'Filipino', 98762155256, 'Imus, Cavite', 2147483647, 2147483647, 2147483647, 'AnthonyCaringal', 22, 'SampleProject'),
(3, 'Marielle', '', 'Odevillas', '1993-08-07', 'Silang, Cavite', 'Female', 'Married', 'Filipino', 97833326666, 'Tondo, Manila', 2147483647, 2147483647, 2147483647, 'MarielleOdevillas', 22, 'SampleProject'),
(4, 'Jenny', '', 'Siongco', '1995-09-18', 'Bacoor, Cavite', 'Female', 'Single', 'Filipino', 96623015222, 'Bacoor, Cavite', 2147483647, 2147483647, 2147483647, 'JennySiongco', 28, 'Project1'),
(6, 'Juvan', '', 'Ancheta', '1984-04-08', 'Dasma, Cavite', 'Male', 'Married', 'Filipino', 95630258200, 'Imus, Cavite', 2147483647, 2147483647, 2147483647, 'JuvanAncheta', 29, 'Project2'),
(7, 'Lolito', '', 'Antipas', '1992-09-05', 'Dasma, Cavite', 'Male', 'Single', 'Filipino', 90234598888, 'Imus, Cavite', 2147483647, 2147483647, 2147483647, 'LolitoAntipas', 0, ''),
(8, 'MarkAnthony', '', 'Vieja', '1969-12-05', 'Imus, Cavite', 'Male', 'Married', 'Filipino', 95433000583, 'Tanza, Cavite', 2147483647, 2147483647, 2147483647, 'MarkAnthonyVieja', 0, ''),
(9, 'Arvin', '', 'Ariola', '1992-01-23', 'Silang, Cavite', 'Male', 'Single', 'Filipino', 92301456813, 'Imus, Cavite', 2147483647, 2147483647, 2147483647, 'ArvinAriola', 0, ''),
(10, 'Jerry', '', 'Arroyo', '1988-05-12', 'Bacoor, Cavite', 'Male', 'Married', 'Filipino', 96322241111, 'Bacoor, Cavite', 2147483647, 2147483647, 2147483647, 'JerryArroyo', 0, ''),
(11, 'Christopher', '', 'Asilum', '1989-02-05', 'Tarlac, Tarlac', 'Male', 'Single', 'Filipino', 9561178340, 'Tondo, Manila', 2147483647, 2147483647, 2147483647, 'ChristopherAsilum', 0, ''),
(12, 'Aguiland', '', 'Calumpiano', '1987-04-23', 'Bacoor, Cavite', 'Male', 'Married', 'Filipino', 95325630134, 'Bacoor, Cavite', 2147483647, 2147483647, 2147483647, 'AguilandCalumpiano', 0, ''),
(13, 'Rupert', '', 'Carlon', '1979-12-18', 'Dasma, Cavite', 'Male', 'Married', 'Filipino', 94621355667, 'Dasma, Cavite', 2147483647, 2147483647, 2147483647, 'RupertCarlon', 0, ''),
(14, 'JiviJames', '', 'Chavis', '1989-07-22', 'Dasma, Cavite', 'Male', 'Single', 'Filipino', 96531002556, 'Dasma, Cavite', 2147483647, 2147483647, 2147483647, 'JiviJamesChavis', 0, ''),
(15, 'Welcher', '', 'Dangcalan', '1990-08-27', 'Dasma, Cavite', 'Male', 'Married', 'Filipino', 94522688853, 'Dasma, Cavite', 2147483647, 2147483647, 2147483647, 'WelcherDangcalan', 0, ''),
(16, 'Rolindo', '', 'Dizon', '1990-05-23', 'Silang, Cavite', 'Male', 'Single', 'Filipino', 93104782014, 'Silang, Cavite', 2147483647, 2147483647, 2147483647, 'RolindoDizon', 0, ''),
(17, 'Raymond', '', 'Detablan', '1991-11-14', 'Silang, Cavite', 'Male', 'Single', 'Filipino', 92463335353, 'Silang, Cavite', 2147483647, 2147483647, 2147483647, 'RaymondDetablan', 0, ''),
(18, 'Daniel', '', 'Pavorela', '1996-03-27', 'Dasma, Cavite', 'Male', 'Married', 'Filipino', 94222567012, 'Dasma, Cavite', 2147483647, 2147483647, 2147483647, 'DanielPavorela', 0, ''),
(19, 'Warren', '', 'Reyes', '1994-08-27', 'Dasma Cavite', 'Male', 'Single', 'Filipino', 90124678620, 'Dasma, Cavite', 2147483647, 2147483647, 2147483647, 'WarrenReyes', 0, ''),
(20, 'Diether', '', 'Cagoyong', '1994-04-19', 'Lipa, Batangas', 'Male', 'Single', 'Filipino', 92210045332, 'Lipa, Batangas', 2147483647, 2147483647, 2147483647, 'DietherCagoyong', 0, ''),
(21, 'Marvin', '', 'Resorado', '1994-09-28', 'Lipa, Batangas', 'Male', 'Married', 'Filipino', 94222588632, 'Lipa, Batangas', 2147483647, 2147483647, 2147483647, 'MarvinResorado', 0, ''),
(22, 'Ernesto', '', 'Lauzon', '1979-09-29', 'Lipa, Batangas', 'Male', 'Married', 'Filipino', 91221001214, 'Lipa, Batangas', 2147483647, 2147483647, 2147483647, 'ErnestoLauzon', 0, ''),
(23, 'Reywell', '', 'Ibanez', '1990-03-14', 'Lipa, Batangas', 'Male', 'Married', 'Filipino', 98221112046, 'Lipa, Batangas', 2147483647, 2147483647, 2147483647, 'ReywellIbanez', 0, ''),
(24, 'Jasper', '', 'Adona', '1996-02-14', 'Tondo, Manila', 'Male', 'Married', 'Filipino', 91200234555, 'Tondo, Manila', 2147483647, 2147483647, 2147483647, 'JasperAdona', 0, ''),
(25, 'Racel', '', 'Claridad', '1993-08-14', 'Tondo, Manila', 'Female', 'Married', 'Filipino', 96231014501, 'Tondo, Manila', 2147483647, 2147483647, 2147483647, 'RacelClaridad', 0, ''),
(26, 'Aldwin', '', 'Padua', '1993-07-27', 'Tondo, Manila', 'Male', 'Single', 'Filipino', 94567892103, 'Tondo, Manila', 2147483647, 2147483647, 2147483647, 'AldwinPadua', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `payroll_id` int(11) NOT NULL,
  `emp_name` varchar(250) NOT NULL,
  `work_time` float NOT NULL,
  `overtime` float NOT NULL,
  `total_worktime` float NOT NULL,
  `sss_contribution` int(250) NOT NULL,
  `philhealth_contribution` int(250) NOT NULL,
  `pagibig_contribution` int(250) NOT NULL,
  `other_deduction` int(250) NOT NULL,
  `deduction` int(11) NOT NULL,
  `gross_pay` int(11) NOT NULL,
  `net_pay` int(11) NOT NULL,
  `date_create` varchar(250) NOT NULL,
  `starting_date` varchar(250) NOT NULL,
  `ending_date` varchar(250) NOT NULL,
  `payroll_status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`payroll_id`, `emp_name`, `work_time`, `overtime`, `total_worktime`, `sss_contribution`, `philhealth_contribution`, `pagibig_contribution`, `other_deduction`, `deduction`, `gross_pay`, `net_pay`, `date_create`, `starting_date`, `ending_date`, `payroll_status`) VALUES
(4, 'WenLaosCosto', 72, 27, 99, 100, 200, 300, 500, 1100, 7425, 6325, '14-01-2022 00:54:05', '03-01-2022 08:00:30', '12-01-2022 16:00:59', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `name`, `status`, `start_date`, `end_date`) VALUES
(22, 'SampleProject', 'ACTIVE', '2022-01-05', '2022-04-30'),
(28, 'Project1', 'ACTIVE', '2022-01-05', '2022-02-01'),
(29, 'Project2', 'ACTIVE', '2022-01-08', '2022-03-01'),
(30, 'Project3', 'ACTIVE', '2022-01-07', '2022-04-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`att_id`);

--
-- Indexes for table `attendance_login`
--
ALTER TABLE `attendance_login`
  ADD PRIMARY KEY (`att_login_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`payroll_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `att_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `attendance_login`
--
ALTER TABLE `attendance_login`
  MODIFY `att_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `payroll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
