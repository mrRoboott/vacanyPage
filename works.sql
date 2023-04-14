-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2023 at 11:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `works`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menuItem` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tipi` int(10) NOT NULL,
  `menuFile` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menuItem`, `tipi`, `menuFile`) VALUES
(1, 'ვაკანსიები', 0, 'vacancy'),
(2, 'რეზიუმეები', 0, 'resume'),
(3, 'შესვლა', 0, 'login'),
(4, 'რეგისტრაცია', 0, 'registration'),
(5, 'ვაკანსიები', 1, 'vacancy'),
(6, 'რეზიუმეები', 1, 'resume'),
(7, 'ჩემი ვაკანსიები', 1, 'myvacancy'),
(8, 'ვაკანსიები', 2, 'vacancy'),
(9, 'რეზიუმეები', 2, 'resume'),
(10, 'ჩემი რეზიუმე', 2, 'myresume');

-- --------------------------------------------------------

--
-- Table structure for table `momxmarebeli`
--

CREATE TABLE `momxmarebeli` (
  `user_id` int(11) NOT NULL,
  `saxeli` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `gvari` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `paroli` text COLLATE utf8_unicode_ci NOT NULL,
  `tipi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `momxmarebeli`
--

INSERT INTO `momxmarebeli` (`user_id`, `saxeli`, `gvari`, `paroli`, `tipi`) VALUES
(1, 'გიგა', 'შამათავა', 'ecb7a048f3527468f5518dd9e77d3099', 1),
(2, 'დავითი', 'ვაშაყმაძე', '8d3c9111e0cceb97895287f1ccca7925', 2),
(3, 'გიორგი', 'კოტორეიშვილი', '8316383a9a28f33a065ccb4951b34a9b', 1),
(4, 'თამარი', 'ტყეშელაშვილი', 'f45687b6589241b3f830b2caaec79f8d', 2);

-- --------------------------------------------------------

--
-- Table structure for table `resiume`
--

CREATE TABLE `resiume` (
  `resume_id` int(11) NOT NULL,
  `saxeli` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `gvari` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `asaki` int(11) NOT NULL,
  `sacxovrebeli_adgili` text COLLATE utf8_unicode_ci NOT NULL,
  `profesia` text COLLATE utf8_unicode_ci NOT NULL,
  `telefonis_nomeri` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `resiume`
--

INSERT INTO `resiume` (`resume_id`, `saxeli`, `gvari`, `asaki`, `sacxovrebeli_adgili`, `profesia`, `telefonis_nomeri`, `user_id`) VALUES
(1, 'დავითი', 'ვაშაყმაძე', 20, 'ქუთაისი', 'დეველოპერი', '599-45-84-58', 2),
(2, 'თამარი', 'ტყეშელაშვილი', 22, 'ქუთაისი', 'დიზაინერი', '598-43-17-85', 4);

-- --------------------------------------------------------

--
-- Table structure for table `vakansia`
--

CREATE TABLE `vakansia` (
  `vakansia_id` int(11) NOT NULL,
  `kategoria` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `xelfasi` text COLLATE utf8_unicode_ci NOT NULL,
  `mdebareoba` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `kompania` text COLLATE utf8_unicode_ci NOT NULL,
  `tarigi` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vakansia`
--

INSERT INTO `vakansia` (`vakansia_id`, `kategoria`, `xelfasi`, `mdebareoba`, `kompania`, `tarigi`, `user_id`) VALUES
(1, 'შესყიდვების მენეჯერი', '1000-1500', 'თბილისი', 'ჯორჯიან ქონქრით ქლაბ', '2023-01-29 13:28:00', 1),
(2, 'საფოსტო გადაზიდვების მენეჯერი', '2000', 'თბილისი', 'პროვაიდერი', '2023-01-29 13:29:00', 1),
(4, 'პრომოუტერი', '800', 'ბათუმი', 'პრემიურგრუპი', '2023-01-29 16:07:35', 3),
(5, 'გამყიდველ კონსულტანტი', '500-2500', 'ბათუმი', 'ორგ თაუერი', '2023-01-29 19:11:00', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `momxmarebeli`
--
ALTER TABLE `momxmarebeli`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `resiume`
--
ALTER TABLE `resiume`
  ADD PRIMARY KEY (`resume_id`);

--
-- Indexes for table `vakansia`
--
ALTER TABLE `vakansia`
  ADD PRIMARY KEY (`vakansia_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `momxmarebeli`
--
ALTER TABLE `momxmarebeli`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resiume`
--
ALTER TABLE `resiume`
  MODIFY `resume_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vakansia`
--
ALTER TABLE `vakansia`
  MODIFY `vakansia_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
