-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 25, 2023 at 08:16 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evalecfback`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admininfo` int(1) NOT NULL DEFAULT '0',
  `gluten` int(2) NOT NULL DEFAULT '0',
  `crustaces` int(2) NOT NULL DEFAULT '0',
  `oeufs` int(2) NOT NULL DEFAULT '0',
  `poissons` int(2) NOT NULL DEFAULT '0',
  `arachides` int(2) NOT NULL DEFAULT '0',
  `soja` int(2) NOT NULL DEFAULT '0',
  `lait` int(2) NOT NULL DEFAULT '0',
  `fruitsacoques` int(2) NOT NULL DEFAULT '0',
  `celeri` int(2) NOT NULL DEFAULT '0',
  `moutarde` int(2) NOT NULL DEFAULT '0',
  `grainesdesesame` int(2) NOT NULL DEFAULT '0',
  `anhydridesulfureuxetsulfites` int(2) NOT NULL DEFAULT '0',
  `lupin` int(2) NOT NULL DEFAULT '0',
  `mollusques` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `admininfo`, `gluten`, `crustaces`, `oeufs`, `poissons`, `arachides`, `soja`, `lait`, `fruitsacoques`, `celeri`, `moutarde`, `grainesdesesame`, `anhydridesulfureuxetsulfites`, `lupin`, `mollusques`) VALUES
(15, 'admin', '$2y$10$r5mdb97uregS65d2.3LvI.qKdJICny.Apjjn/YMqpMdueNDHDh8fe', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `recette`
--

CREATE TABLE `recette` (
  `id` int(11) NOT NULL,
  `namerecette` varchar(255) NOT NULL,
  `ing` varchar(254) NOT NULL,
  `descrip` varchar(255) NOT NULL,
  `po` int(2) NOT NULL,
  `gluten` int(2) NOT NULL DEFAULT '0',
  `crustaces` int(2) NOT NULL DEFAULT '0',
  `oeufs` int(2) NOT NULL DEFAULT '0',
  `poissons` int(2) NOT NULL DEFAULT '0',
  `arachides` int(2) NOT NULL DEFAULT '0',
  `soja` int(2) NOT NULL DEFAULT '0',
  `lait` int(2) NOT NULL DEFAULT '0',
  `fruitsacoques` int(2) NOT NULL DEFAULT '0',
  `celeri` int(2) NOT NULL DEFAULT '0',
  `moutarde` int(2) NOT NULL DEFAULT '0',
  `grainesdesesame` int(2) NOT NULL DEFAULT '0',
  `anhydridesulfureuxetsulfites` int(2) NOT NULL DEFAULT '0',
  `lupin` int(2) NOT NULL DEFAULT '0',
  `mollusques` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recette`
--
ALTER TABLE `recette`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `recette`
--
ALTER TABLE `recette`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
