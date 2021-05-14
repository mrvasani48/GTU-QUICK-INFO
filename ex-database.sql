mysql

CREATE DATABASE gtu
Expand Requery Edit Bookmark Database Queried time
CREATE TABLE `SIGN_UP` ( `User_Id` int(12) NOT NULL, `Email` varchar(100) NOT NULL, `Password` varchar(100) NOT NULL, `Full_Name` varchar(100) NOT NULL, `Date_Birth` int(8) NOT NULL, `Xender` int(8) NOT NULL )
 
 
 ex Database
 -- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2021 at 06:17 PM
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
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `em_id` int(10) NOT NULL,
  `em_name` varchar(255) NOT NULL,
  `em_city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`em_id`, `em_name`, `em_city`) VALUES
(103, 'druv vyas', 'jamnagar'),
(101, 'kishan vasani', 'surat'),
(102, 'hardik santoki', 'up');

-- --------------------------------------------------------

--
-- Table structure for table `prim`
--

CREATE TABLE `prim` (
  `name` varchar(255) NOT NULL,
  `city` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stu_no` int(12) NOT NULL,
  `stu_name` varchar(255) NOT NULL,
  `stu_city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stu_no`, `stu_name`, `stu_city`) VALUES
(1, 'vasani kishan', 'surat'),
(2, 'hp', 'surat'),
(3, 'dhruv', 'jamnagar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`em_city`);

--
-- Indexes for table `prim`
--
ALTER TABLE `prim`
  ADD PRIMARY KEY (`city`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stu_no`),
  ADD KEY `stu_city` (`stu_city`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prim`
--
ALTER TABLE `prim`
  ADD CONSTRAINT `prim_ibfk_1` FOREIGN KEY (`city`) REFERENCES `employee` (`em_city`),
  ADD CONSTRAINT `prim_ibfk_2` FOREIGN KEY (`city`) REFERENCES `employee` (`em_city`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`stu_city`) REFERENCES `employee` (`em_city`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
  primary key 
 create TABLE prim (
      
      name varchar(12) not null,
      city varchar(45) NOT null,
    PRIMARY key (city)

);

 foreign KEY
ALTER TABLE students ADD FOREIGN KEY (stu_city) REFERENCES employee(em_city);
ALTER TABLE prim ADD FOREIGN key(city) REFERENCES employee(em_city);
function
SELECT  MAX(stu_name) FROM students;
SELECT  MIN(stu_name) FROM students;
SELECT COUNT(stu_no) FROM students;
SELECT sum(stu_no) FROM students;
SELECT AVG(stu_no) FROM students;

order by acending
SELECT * from students  ORDER BY  stu_no  ASC;
order by decending
SELECT * from students  ORDER BY  stu_no  DESC;

 group by
SELECT * FROM students GROUP by stu_city;

ALTER
ALTER TABLE employee ADD COLUMN em_salary varchar(255)  NOT null ;
ALTER TABLE employee DROP em_salary;

alises
SELECT stu_city as city FROM students GROUP by stu_city;