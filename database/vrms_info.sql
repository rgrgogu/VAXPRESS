-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 09:16 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vrms_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangay_list`
--

CREATE TABLE `barangay_list` (
  `barangay_id` int(11) NOT NULL,
  `barangay_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barangay_list`
--

INSERT INTO `barangay_list` (`barangay_id`, `barangay_name`) VALUES
(1, 'Alicia'),
(2, 'Amihan'),
(3, 'Apolonio Samson'),
(4, 'Aurora'),
(5, 'Baesa'),
(6, 'Bagbag'),
(7, 'Bagong Lipunan ng Crame'),
(8, 'Bagong Pag-asa'),
(9, 'Bagong Silangan'),
(10, 'Bagumbayan'),
(11, 'Bagumbuhay'),
(12, 'Bahay Toro'),
(13, 'Balingasa'),
(14, 'Balong Bato'),
(15, 'Batasan Hills'),
(16, 'Bayanihan'),
(17, 'Blue Ridge A'),
(18, 'Blue Ridge B'),
(19, 'Botocan'),
(20, 'Bungad'),
(21, 'Camp Aguinaldo'),
(22, 'Capri'),
(23, 'Central'),
(24, 'Claro'),
(25, 'Commonwealth'),
(26, 'Culiat'),
(27, 'Damar'),
(28, 'Damayan'),
(29, 'Damayang Lagi'),
(30, 'Del Monte'),
(31, 'Dioquino Zobel'),
(32, 'Don Manuel'),
(33, 'Doña Imelda'),
(34, 'Doña Josefa'),
(35, 'Duyan-duyan'),
(36, 'E. Rodriguez'),
(37, 'East Kamias'),
(38, 'Escopa I'),
(39, 'Escopa II'),
(40, 'Escopa III'),
(41, 'Escopa IV'),
(42, 'Fairview'),
(43, 'Greater Lagro'),
(44, 'Gulod'),
(45, 'Holy Spirit'),
(46, 'Horseshoe'),
(47, 'Immaculate Concepcion'),
(48, 'Kaligyahan'),
(49, 'Kaligayahan'),
(50, 'Kalusugan'),
(51, 'Kamuning'),
(52, 'Katipunan'),
(53, 'Kaunlaran'),
(54, 'Kristong Hari'),
(55, 'Krus na Ligas'),
(56, 'Laging Handa'),
(57, 'Libis'),
(58, 'Lourdes'),
(59, 'Loyola Heights'),
(60, 'Maharlika'),
(61, 'Malaya'),
(62, 'Mangga'),
(63, 'Manresa'),
(64, 'Mariana'),
(65, 'Mariblo'),
(66, 'Marilag'),
(67, 'Masagana'),
(68, 'Masambong'),
(69, 'Matandang Balara'),
(70, 'Milagrosa'),
(71, 'N.S. Amoranto'),
(72, 'Nayong Kanluran'),
(73, 'New Era'),
(74, 'North Fairview'),
(75, 'Novaliches Proper'),
(76, 'Obrero'),
(77, 'Old Capitol Site'),
(78, 'Paang Bundok'),
(79, 'Pag-ibig sa Nayon'),
(80, 'Paligsahan'),
(81, 'Paltok'),
(82, 'Pansol'),
(83, 'Paraiso'),
(84, 'Pasong Putik Proper'),
(85, 'Pasong Tamo'),
(86, 'Payatas'),
(87, 'Phil-Am'),
(88, 'Pinagkaisahan'),
(89, 'Pinyahan'),
(90, 'Project 6'),
(91, 'Quirino 2-A'),
(92, 'Quirino 2-B'),
(93, 'Quirino 2-C'),
(94, 'Quirino 3-A'),
(95, 'Ramon Magsaysay'),
(96, 'Roxas'),
(97, 'Sacred Heart'),
(98, 'Saint Ignatius'),
(99, 'Saint Peter'),
(100, 'Salvacion'),
(101, 'San Agustin'),
(102, 'San Antonio'),
(103, 'San Bartolome'),
(104, 'San Isidro'),
(105, 'San Isidro Labrador'),
(106, 'San Jose'),
(107, 'San Martin de Porres'),
(108, 'San Roque'),
(109, 'San Vicente'),
(110, 'Sangandaan'),
(111, 'Santa Cruz'),
(112, 'Santa Lucia'),
(113, 'Santa Monica'),
(114, 'Santa Teresita'),
(115, 'Santo Cristo'),
(116, 'Santo Domingo'),
(117, 'Santo Niño'),
(118, 'Santol'),
(119, 'Sauyo'),
(120, 'Sienna'),
(121, 'Sikatuna Village'),
(122, 'Silangan'),
(123, 'Soccorro'),
(124, 'South Triangle'),
(125, 'Tagumpay'),
(126, 'Talayan'),
(127, 'Talipapa'),
(128, 'Tandang Sora'),
(129, 'Tatalon'),
(130, 'Teachers Village East'),
(131, 'Teachers Village West'),
(132, 'U.P. Campus'),
(133, 'U.P. Village'),
(134, 'Ugong Norte'),
(135, 'Unang Sigaw'),
(136, 'Valencia'),
(137, 'Vasra'),
(138, 'Veterans Village'),
(139, 'Villa Maria Clara'),
(140, 'West Kamias'),
(141, 'West Triangle'),
(142, 'White Plains');

-- --------------------------------------------------------

--
-- Table structure for table `client_category`
--

CREATE TABLE `client_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_category`
--

INSERT INTO `client_category` (`category_id`, `category_name`) VALUES
(1, '[A1] - Frontline Workers'),
(2, '[A2] - Senior Citizens'),
(3, '[A3] - Adults with Comorbidities'),
(4, '[A4] - Frontline Personnel in Essential Sectors'),
(5, '[A5] - Poor Population'),
(6, '[B1] - Teachers, Social Workers'),
(7, '[B2] - Other Government Workers'),
(8, '[B3] - Other Essential Workers'),
(9, '[B4] - Socio-Demographic Groups'),
(10, '[B5] - Overseas Filipino Workers'),
(11, '[B6] - Other Remaining Workforce'),
(12, '[C] - Rest of the Filipino Population');

-- --------------------------------------------------------

--
-- Table structure for table `client_info`
--

CREATE TABLE `client_info` (
  `client_id` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `given_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `suffix` varchar(255) DEFAULT NULL,
  `sex` enum('Male','Female') NOT NULL,
  `birthday` date NOT NULL,
  `age` int(11) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `client_location`
--

CREATE TABLE `client_location` (
  `location_id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `house_no` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `brgy_id` int(11) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `address_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `first_booster`
--

CREATE TABLE `first_booster` (
  `first_booster_id` int(11) NOT NULL,
  `vaccine_date` date NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `lot_number` varchar(255) NOT NULL,
  `vaccinator` varchar(255) NOT NULL,
  `approved_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `first_dose`
--

CREATE TABLE `first_dose` (
  `first_dose_id` int(11) NOT NULL,
  `vaccine_date` date NOT NULL,
  `manufacturer` int(11) NOT NULL,
  `lot_number` varchar(255) NOT NULL,
  `vaccinator` varchar(255) NOT NULL,
  `approved_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `health_details`
--

CREATE TABLE `health_details` (
  `health_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `philhealth_id` varchar(255) NOT NULL,
  `first_dose_id` int(11) DEFAULT NULL,
  `second_dose_id` int(11) DEFAULT NULL,
  `first_booster_id` int(11) DEFAULT NULL,
  `second_booster_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `manufacturer_id` int(11) NOT NULL,
  `manufacturer_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`manufacturer_id`, `manufacturer_name`) VALUES
(1, 'Pfizer-BioNTech'),
(2, 'Oxford-AstraZeneca'),
(3, 'CoronaVac (Sinovac)'),
(4, 'Gamaleya Sputnik V'),
(5, 'Johnson and Johnson\'s Janssen'),
(6, 'Bharat BioTech'),
(7, 'Moderna'),
(8, 'Sinopharm');

-- --------------------------------------------------------

--
-- Table structure for table `second_booster`
--

CREATE TABLE `second_booster` (
  `second_booster_id` int(11) NOT NULL,
  `vaccine_date` date NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `lot_number` varchar(255) NOT NULL,
  `vaccinator` varchar(255) NOT NULL,
  `approved_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `second_dose`
--

CREATE TABLE `second_dose` (
  `second_dose_id` int(11) NOT NULL,
  `vaccine_date` date NOT NULL,
  `manufacturer` int(11) NOT NULL,
  `lot_number` varchar(255) NOT NULL,
  `vaccinator` varchar(255) NOT NULL,
  `approved_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangay_list`
--
ALTER TABLE `barangay_list`
  ADD PRIMARY KEY (`barangay_id`);

--
-- Indexes for table `client_category`
--
ALTER TABLE `client_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `client_info`
--
ALTER TABLE `client_info`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `client_location`
--
ALTER TABLE `client_location`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `fk_brgy_id` (`brgy_id`);

--
-- Indexes for table `first_booster`
--
ALTER TABLE `first_booster`
  ADD PRIMARY KEY (`first_booster_id`),
  ADD KEY `fk_booster1_manufacturer` (`manufacturer_id`);

--
-- Indexes for table `first_dose`
--
ALTER TABLE `first_dose`
  ADD PRIMARY KEY (`first_dose_id`),
  ADD KEY `fk_dose1_manufacturer` (`manufacturer`);

--
-- Indexes for table `health_details`
--
ALTER TABLE `health_details`
  ADD PRIMARY KEY (`health_id`),
  ADD KEY `first_dose_id` (`first_dose_id`),
  ADD KEY `second_dose_id` (`second_dose_id`),
  ADD KEY `first_booster_id` (`first_booster_id`),
  ADD KEY `second_booster_id` (`second_booster_id`),
  ADD KEY `fk_health_client` (`category_id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `second_booster`
--
ALTER TABLE `second_booster`
  ADD PRIMARY KEY (`second_booster_id`),
  ADD KEY `fk_booster2_manufacturer` (`manufacturer_id`);

--
-- Indexes for table `second_dose`
--
ALTER TABLE `second_dose`
  ADD PRIMARY KEY (`second_dose_id`),
  ADD KEY `fk_dose2_manufacturer` (`manufacturer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangay_list`
--
ALTER TABLE `barangay_list`
  MODIFY `barangay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `client_category`
--
ALTER TABLE `client_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `client_info`
--
ALTER TABLE `client_info`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_location`
--
ALTER TABLE `client_location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `health_details`
--
ALTER TABLE `health_details`
  MODIFY `health_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `manufacturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `second_dose`
--
ALTER TABLE `second_dose`
  MODIFY `second_dose_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `client_info`
--
ALTER TABLE `client_info`
  ADD CONSTRAINT `fk_client_health` FOREIGN KEY (`client_id`) REFERENCES `health_details` (`health_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_client_location` FOREIGN KEY (`client_id`) REFERENCES `client_location` (`location_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `client_location`
--
ALTER TABLE `client_location`
  ADD CONSTRAINT `fk_brgy_id` FOREIGN KEY (`brgy_id`) REFERENCES `barangay_list` (`barangay_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `first_booster`
--
ALTER TABLE `first_booster`
  ADD CONSTRAINT `fk_booster1_manufacturer` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturer` (`manufacturer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `first_dose`
--
ALTER TABLE `first_dose`
  ADD CONSTRAINT `fk_dose1_manufacturer` FOREIGN KEY (`manufacturer`) REFERENCES `manufacturer` (`manufacturer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `health_details`
--
ALTER TABLE `health_details`
  ADD CONSTRAINT `first_booster_id` FOREIGN KEY (`first_booster_id`) REFERENCES `first_booster` (`first_booster_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `first_dose_id` FOREIGN KEY (`first_dose_id`) REFERENCES `first_dose` (`first_dose_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_health_client` FOREIGN KEY (`category_id`) REFERENCES `client_category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `second_booster_id` FOREIGN KEY (`second_booster_id`) REFERENCES `second_booster` (`second_booster_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `second_dose_id` FOREIGN KEY (`second_dose_id`) REFERENCES `second_dose` (`second_dose_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `second_booster`
--
ALTER TABLE `second_booster`
  ADD CONSTRAINT `fk_booster2_manufacturer` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturer` (`manufacturer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `second_dose`
--
ALTER TABLE `second_dose`
  ADD CONSTRAINT `fk_dose2_manufacturer` FOREIGN KEY (`manufacturer`) REFERENCES `manufacturer` (`manufacturer_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
