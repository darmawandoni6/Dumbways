-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2020 at 03:25 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pokemon`
--

-- --------------------------------------------------------

--
-- Table structure for table `element_tb`
--

CREATE TABLE `element_tb` (
  `ID` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `element_tb`
--

INSERT INTO `element_tb` (`ID`, `name`) VALUES
(1, 'Grass'),
(2, 'Normal	'),
(3, 'Fire'),
(4, 'Fighting'),
(5, 'Water'),
(6, 'Flying'),
(7, 'Poison'),
(8, 'Electric'),
(9, 'Ground'),
(10, 'Psychic'),
(11, 'Rock'),
(12, 'Ice'),
(13, 'Bug'),
(14, 'Dragon'),
(15, 'Ghost'),
(16, 'Dark'),
(17, 'Steel'),
(18, 'Fairy');

-- --------------------------------------------------------

--
-- Table structure for table `pokemon_tb`
--

CREATE TABLE `pokemon_tb` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(50) DEFAULT NULL,
  `STR` int(11) DEFAULT NULL,
  `DEF` int(11) DEFAULT NULL,
  `PHOTO` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pokemon_tb`
--

INSERT INTO `pokemon_tb` (`ID`, `NAME`, `STR`, `DEF`, `PHOTO`) VALUES
(1, 'PIKACU', 200, 100, NULL),
(2, 'RAYQUAZA', 500, 200, NULL),
(3, 'BULBASUR', 400, 500, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skill_tb`
--

CREATE TABLE `skill_tb` (
  `id_pokemon` int(11) DEFAULT NULL,
  `id_element` int(11) DEFAULT NULL,
  `skill_name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill_tb`
--

INSERT INTO `skill_tb` (`id_pokemon`, `id_element`, `skill_name`) VALUES
(1, 8, 'xxxxxx'),
(3, 1, 'xxxx'),
(3, 7, 'xxxxxx'),
(2, 14, 'xxxx'),
(2, 6, 'xxxxx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `element_tb`
--
ALTER TABLE `element_tb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pokemon_tb`
--
ALTER TABLE `pokemon_tb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `skill_tb`
--
ALTER TABLE `skill_tb`
  ADD KEY `fk_pokemon` (`id_pokemon`),
  ADD KEY `fk_element` (`id_element`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `element_tb`
--
ALTER TABLE `element_tb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pokemon_tb`
--
ALTER TABLE `pokemon_tb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `skill_tb`
--
ALTER TABLE `skill_tb`
  ADD CONSTRAINT `fk_element` FOREIGN KEY (`id_element`) REFERENCES `element_tb` (`ID`),
  ADD CONSTRAINT `fk_pokemon` FOREIGN KEY (`id_pokemon`) REFERENCES `pokemon_tb` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
