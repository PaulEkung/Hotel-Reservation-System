-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 02:26 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel_allocation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_id` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_id`, `password`) VALUES
(1, '001/ADMIN/AIFPU', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `room_number` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `card_num` varchar(20) NOT NULL,
  `expiry` varchar(11) NOT NULL,
  `cvv` varchar(3) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `room_number`, `email`, `card_num`, `expiry`, `cvv`, `amount`, `date`) VALUES
(3, '2', 'pauldrums32@gmail.com', '8900736623272330', '2023-02-27', '322', '15000', '2023-02-05 12:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `payment-2`
--

CREATE TABLE `payment-2` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `card_num` varchar(20) NOT NULL,
  `expiry` varchar(11) NOT NULL,
  `cvv` varchar(8) NOT NULL,
  `room_number` varchar(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment-2`
--

INSERT INTO `payment-2` (`id`, `email`, `amount`, `card_num`, `expiry`, `cvv`, `room_number`, `date`) VALUES
(1, 'gloryoko65@gmail.com', '15000', '6608992783898484', '2023-02-10', '233', '4', '2023-02-06 06:59:05');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(6) NOT NULL,
  `fullnames` varchar(50) NOT NULL,
  `stateOfOrigin` varchar(20) NOT NULL,
  `localGovOrigin` varchar(50) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `department` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `unique_id`, `fullnames`, `stateOfOrigin`, `localGovOrigin`, `sex`, `email`, `department`, `image`, `date`) VALUES
(1, '383137', 'Ekung Paul Ekarekup', 'Cross River State', 'Ogoja', 'Male', 'pauldrums32@gmail.com', 'Computer Science', 'Ekung Paul Ekarekup63dccb890e22b7.97564918.jpg', '2023-02-03 08:53:29'),
(2, '383235', 'Oko Glory Chinyere', 'Ebonyi State', 'Afikpo', 'Female', 'gloryoko65@gmail.com', 'Computer Science', 'Oko Glory Chinyere63dfaed2903157.40645460.jpg', '2023-02-05 13:27:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment-2`
--
ALTER TABLE `payment-2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment-2`
--
ALTER TABLE `payment-2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
