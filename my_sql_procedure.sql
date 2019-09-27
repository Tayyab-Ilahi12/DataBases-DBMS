-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2019 at 02:57 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_sql_procedure`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertion-email` (IN `user_id` INT, IN `username` VARCHAR(30), IN `password` VARCHAR(30), IN `email` VARCHAR(30))  INSERT INTO `email_check`(`Id`, `Name`, `password`, `email`) VALUES (user_id,username,password,email)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `student_email` (IN `usr_id` INT, OUT `emailid` VARCHAR(30))  select email into emailid from users where user_id = $$
usr_id$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `email_check`
--

CREATE TABLE `email_check` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `password` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `email_check`
--
DELIMITER $$
CREATE TRIGGER `emailcheck` AFTER INSERT ON `email_check` FOR EACH ROW Begin
if locate('yahoo',new.email)
then
set @result1 = 1;
set @result2 = 0;
set @result3 = 0;
End if;
if locate('gmail',new.email)
then
set @result1 = 0;
set @result2 = 1;
set @result3 = 0;
End if;
if locate('hotmail',new.email)
then
set @result1 = 0;
set @result2 = 0;
set @result3 = 1;
End if;

set @addition = 1;

UPDATE `log` SET `total_users`=total_users + @addition,`yahoo`= yahoo + @result1,`hotmail`= hotmail + @result3,`gmail`= gmail + @result2;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateemailcheck` AFTER UPDATE ON `email_check` FOR EACH ROW Begin
if locate('yahoo',new.email)
then
set @result1 = 1;
set @result2 = 0;
set @result3 = 0;
End if;
if locate('gmail',new.email)
then
set @result1 = 0;
set @result2 = 1;
set @result3 = 0;
End if;
if locate('hotmail',new.email)
then
set @result1 = 0;
set @result2 = 0;
set @result3 = 1;
End if;

set @addition = 1;

UPDATE `log` SET `total_users`=total_users + @addition,`yahoo`= yahoo + @result1,`hotmail`= hotmail + @result3,`gmail`= gmail + @result2;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateemailcheckB` BEFORE UPDATE ON `email_check` FOR EACH ROW Begin
if locate('yahoo',new.email)
then
set @result1 = 1;
set @result2 = 0;
set @result3 = 0;
End if;
if locate('gmail',new.email)
then
set @result1 = 0;
set @result2 = 1;
set @result3 = 0;
End if;
if locate('hotmail',new.email)
then
set @result1 = 0;
set @result2 = 0;
set @result3 = 1;
End if;

set @addition = 1;

UPDATE `log` SET `total_users`=total_users - @addition,`yahoo`= yahoo - @result1,`hotmail`= hotmail - @result3,`gmail`= gmail - @result2;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `total_users` int(30) NOT NULL,
  `yahoo` int(30) NOT NULL,
  `hotmail` int(30) NOT NULL,
  `gmail` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `total_users`, `yahoo`, `hotmail`, `gmail`) VALUES
(1, 1, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE `login_table` (
  `Roll_no` varchar(10) NOT NULL,
  `First_name` varchar(30) NOT NULL,
  `Last_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`Roll_no`, `First_name`, `Last_name`) VALUES
('p176008', 'Ahsan', 'Chughtai'),
('p176023', 'Jawad', 'Hassan'),
('p176143', 'Abdul', 'Aziz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email_check`
--
ALTER TABLE `email_check`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`Roll_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
