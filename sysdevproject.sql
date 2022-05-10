-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2022 at 11:35 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sysdevproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password_hash` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `participant_id` int(11) NOT NULL,
  `category` varchar(25) NOT NULL,
  `schedule` varchar(50) NOT NULL,
  `practices_per_week` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`participant_id`, `category`, `schedule`, `practices_per_week`) VALUES
(4, 'U19', 'Tuesday, Friday', 2),
(5, 'PAMPLEMOUSSE', 'Monday, Thursday', 2),
(6, 'SENIOR', 'Friday, Saturday', 2),
(7, 'U15', 'Thursday, Friday', 2),
(8, 'U13', 'Sunday, Tuesday', 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(24) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `postal_code` varchar(25) NOT NULL,
  `main_phone` varchar(25) NOT NULL,
  `secondary_phone` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `laval_reward` varchar(25) NOT NULL,
  `payment_installments` int(11) NOT NULL,
  `payment_method` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `first_name`, `last_name`, `gender`, `address`, `city`, `postal_code`, `main_phone`, `secondary_phone`, `email`, `laval_reward`, `payment_installments`, `payment_method`) VALUES
(5, 'Jon', 'Doe', 'male', '123 street', 'montreal', 'h4g 3lf', '12344534', '213432', 'email@email.com', 'no', 1, 'direct deposit'),
(6, 'Charles', 'Barkley', 'male', '543 street', 'Laval', '5j543 g453', '43534534', '5464', 'g@gk.com', '132432', 3, 'cheque'),
(7, 'Logan', 'Poe', 'male', '543 street', 'Laval', '432 54353', '423423453', '435345', 'l@gmail.com', '4234', 1, 'direct deposit'),
(8, 'Jeff', 'Poe', 'male', '321 street', 'laval', '43242 423', '4234234', '5435345', 'd@gads.com', '312', 1, 'direct deposit'),
(9, 'Toad', 'Love', 'male', '4324 street', 'montreal', '432 543', '438979', '89798', 'd@gaj.com', 'no', 1, 'cheque');

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `participant_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `postal_code` varchar(25) NOT NULL,
  `main_phone` varchar(25) NOT NULL,
  `secondary_phone` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `occupation` varchar(25) NOT NULL,
  `heard_from` varchar(25) NOT NULL,
  `years_of_practice` int(11) NOT NULL,
  `medical_insurance_number` varchar(25) NOT NULL,
  `exp_date` date NOT NULL,
  `emer_contact` varchar(25) NOT NULL,
  `relation_to_player` varchar(25) NOT NULL,
  `emer_phone` varchar(25) NOT NULL,
  `allergies` varchar(25) NOT NULL,
  `med_history` varchar(25) NOT NULL,
  `epipen` tinyint(1) NOT NULL,
  `meds` varchar(25) NOT NULL,
  `spec_needs` varchar(25) NOT NULL,
  `promotion` tinyint(1) NOT NULL,
  `transport` tinyint(1) NOT NULL,
  `volunteer` tinyint(1) NOT NULL,
  `family` tinyint(1) NOT NULL,
  `equip_needs` varchar(25) NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`participant_id`, `customer_id`, `first_name`, `last_name`, `gender`, `dob`, `address`, `city`, `postal_code`, `main_phone`, `secondary_phone`, `email`, `occupation`, `heard_from`, `years_of_practice`, `medical_insurance_number`, `exp_date`, `emer_contact`, `relation_to_player`, `emer_phone`, `allergies`, `med_history`, `epipen`, `meds`, `spec_needs`, `promotion`, `transport`, `volunteer`, `family`, `equip_needs`, `notes`) VALUES
(4, 5, 'Jon', 'Doe', 'male', '2022-05-19', '123 street', 'montreal', 'h4g 3lf', '12344534', '213432', 'email@email.com', 'NA', 'facebook', 0, '321432', '2022-06-02', 'Mike', 'father', '2134235', 'no', 'no', 0, 'no', 'no', 1, 0, 1, 0, 'no', ''),
(5, 6, 'Charles', 'Barkley', 'male', '2022-05-17', '543 street', 'Laval', '5j543 g453', '43534534', '5464', 'g@gk.com', 'vanier', 'website', 3, '432424', '2022-05-19', 'jeff', 'mother', '45235423', 'no', 'no', 0, 'no', 'no', 0, 1, 1, 0, 'no', ''),
(6, 7, 'Logan', 'Poe', 'male', '2022-05-12', '543 street', 'Laval', '432 54353', '423423453', '435345', 'l@gmail.com', 'NA', 'friend', 2, '534534', '2022-05-04', 'Nick', 'brother', '543534', 'nuts', 'no', 1, 'no', 'no', 0, 0, 0, 0, 'no', ''),
(7, 7, 'Robert', 'Jr', 'male', '2022-05-05', '321 street', 'laval', '43242 423', '4234234', '5435345', 'd@gads.com', 'NA', 'friend', 0, '432423', '2022-05-11', 'homer', 'father', '423423', 'no', 'no', 0, 'no', 'no', 0, 0, 0, 0, 'no', ''),
(8, 9, 'Toad', 'Love', 'male', '2022-05-13', '4324 street', 'montreal', '432 543', '438979', '89798', 'd@gaj.com', 'NA', 'website', 0, '43242', '2022-05-17', 'Jeff', 'brother', '543523', 'no', 'no', 0, 'no', 'no', 1, 1, 1, 0, 'no', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD KEY `category_ibfk_1` (`participant_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`participant_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `participant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`participant_id`) REFERENCES `participant` (`participant_id`) ON DELETE CASCADE;

--
-- Constraints for table `participant`
--
ALTER TABLE `participant`
  ADD CONSTRAINT `participant_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
