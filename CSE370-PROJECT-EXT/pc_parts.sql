-- Active: 1746715943129@@127.0.0.1@3306@pc_parts
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2025 at 04:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pc_parts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(10) NOT NULL,
  `starting_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `starting_date`) VALUES
('adminnn', '2025-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `user_id` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`user_id`, `password`) VALUES
('adib01', '1234'),
('adminnn', 'givemeaccess'),
('habibul01', '1234'),
('shib01', '0000'),
('tauhidul01', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `cpu`
--

CREATE TABLE `cpu` (
  `cpu_sku` varchar(50) NOT NULL,
  `brand` varchar(10) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `core` int(5) DEFAULT NULL,
  `thread` int(5) DEFAULT NULL,
  `base_clock` decimal(3,2) DEFAULT NULL,
  `boost_clock` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cpu`
--

INSERT INTO `cpu` (`cpu_sku`, `brand`, `price`, `core`, `thread`, `base_clock`, `boost_clock`) VALUES
('i5 12400F', 'Intel', 12450, 6, 12, 2.50, 4.40),
('i5 12600K', 'Intel', 27800, 10, 16, 2.80, 4.90),
('i7 12700', 'Intel', 28500, 12, 20, 2.10, 4.80),
('i7 12700K', 'Intel', 27500, 12, 20, 3.60, 5.00),
('i9 12900K', 'Intel', 42000, 16, 24, 3.70, 5.20),
('Ryzen 5 5500', 'AMD', 8300, 6, 12, 3.60, 4.20),
('Ryzen 5 5600X', 'AMD', 10799, 6, 12, 3.70, 4.60),
('Ryzen 7  7700X', 'AMD', 33000, 8, 16, 4.50, 5.40),
('Ryzen 9 9900X', 'AMD', 72000, 12, 24, 4.40, 5.50);

-- --------------------------------------------------------

--
-- Table structure for table `gpu`
--

CREATE TABLE `gpu` (
  `gpu_sku` varchar(50) NOT NULL,
  `brand` varchar(10) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `vram` int(5) DEFAULT NULL,
  `game_clock` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gpu`
--

INSERT INTO `gpu` (`gpu_sku`, `brand`, `price`, `vram`, `game_clock`) VALUES
('GeForce RTX 3060', 'NVIDIA', 44000, 12, 1867),
('GeForce RTX 4060', 'NVIDIA', 48000, 8, 2535),
('GeForce RTX 5080', 'NVIDIA', 215000, 16, 2655),
('Radeon RX 7700 XT', 'AMD', 58500, 12, 2544),
('Radeon RX 7800 XT', 'AMD', 72999, 16, 2520),
('Radeon RX 7900 XT', 'AMD', 97000, 20, 2500);

-- --------------------------------------------------------

--
-- Table structure for table `motherboard`
--

CREATE TABLE `motherboard` (
  `mobo_sku` varchar(50) NOT NULL,
  `brand` varchar(10) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `chipset` varchar(20) DEFAULT NULL,
  `ram_type` varchar(20) DEFAULT NULL,
  `form_factor` varchar(40) DEFAULT NULL,
  `cpu_brand` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `motherboard`
--

INSERT INTO `motherboard` (`mobo_sku`, `brand`, `price`, `chipset`, `ram_type`, `form_factor`, `cpu_brand`) VALUES
('B450M-HDV', 'ASRock', 7900, 'B450', 'DDR4', 'mATX', 'AMD'),
('B450M-KII', 'ASUS', 9100, 'B450', 'DDR4', 'mATX', 'AMD'),
('B760M Pro-A', 'ASRock', 16900, 'B760', 'DDR5', 'mATX', 'Intel'),
('B760M-KD4', 'ASUS', 14800, 'B760', 'DDR5', 'mATX', 'Intel'),
('X670 GAMING X AX', 'GIGABYTE', 38000, 'X670', 'DDR5', 'ATX', 'AMD'),
('Z890 Pro RS WiFi White', 'ASRock', 40000, 'Z890', 'DDR5', 'ATX', 'Intel');

-- --------------------------------------------------------

--
-- Table structure for table `pc`
--

CREATE TABLE `pc` (
  `id` varchar(10) NOT NULL,
  `builder_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pc`
--

INSERT INTO `pc` (`id`, `builder_id`) VALUES
('1', 'adminnn'),
('2', 'adminnn'),
('3', 'adminnn'),
('4', 'adminnn'),
('5', 'adminnn');

-- --------------------------------------------------------

--
-- Table structure for table `pc_specification`
--

CREATE TABLE `pc_specification` (
  `pc_id` varchar(50) NOT NULL,
  `cpu_sku` varchar(50) NOT NULL,
  `gpu_sku` varchar(50) NOT NULL,
  `ram_sku` varchar(50) NOT NULL,
  `mobo_sku` varchar(50) NOT NULL,
  `s_sku` varchar(50) NOT NULL,
  `pwr_sku` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pc_specification`
--

INSERT INTO `pc_specification` (`pc_id`, `cpu_sku`, `gpu_sku`, `ram_sku`, `mobo_sku`, `s_sku`, `pwr_sku`) VALUES
('1', 'i5 12600K', 'Radeon RX 7700 XT', 'Vengeance LPX', 'B760M Pro-A', '870 EVO', 'PL750D'),
('2', 'i9 12900K', 'GeForce RTX 5080', 'FURY Beast', 'B760M-KD4', '990 Pro', 'PL750D'),
('3', 'Ryzen 9 9900X', 'GeForce RTX 5080', 'T-FORCE DELTA', 'X670 GAMING X AX', 'MP600', 'HELIOS M1-750B'),
('4', 'Ryzen 7  7700X', 'Radeon RX 7900 XT', 'VENGEANCE', 'B450M-HDV', 'SA500', 'HELIOS M1-750B');

-- --------------------------------------------------------

--
-- Table structure for table `power_supply`
--

CREATE TABLE `power_supply` (
  `pwr_sku` varchar(50) NOT NULL,
  `brand` varchar(15) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `capacity` int(10) DEFAULT NULL,
  `modular_type` varchar(50) DEFAULT NULL,
  `efficiency` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `power_supply`
--

INSERT INTO `power_supply` (`pwr_sku`, `brand`, `price`, `capacity`, `modular_type`, `efficiency`) VALUES
('GSK ATX3.1', 'Antec', 13900, 850, 'Full modular', '80+ Gold'),
('HELIOS M1-750B', 'GAMDIAS', 6850, 750, 'Non modular', '80+ Bronze'),
('HX750', 'Corsair', 12300, 750, 'Full modular', '80+ Platinum'),
('MAG A750GL', 'MSI', 12600, 750, 'Full modular', '80+ Gold'),
('PL750D', 'Deepcool', 6650, 750, 'Non modular', '80+ Bronze'),
('PN650M', 'Deepcool', 9350, 650, 'Full modular', '80+ Gold');

-- --------------------------------------------------------

--
-- Table structure for table `ram`
--

CREATE TABLE `ram` (
  `ram_sku` varchar(50) NOT NULL,
  `brand` varchar(10) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `memory_type` varchar(50) DEFAULT NULL,
  `frequency` int(10) DEFAULT NULL,
  `latency` varchar(50) DEFAULT NULL,
  `capacity` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ram`
--

INSERT INTO `ram` (`ram_sku`, `brand`, `price`, `memory_type`, `frequency`, `latency`, `capacity`) VALUES
('Flare X', 'G.skill', 5200, 'DDR4', 3200, 'CL 14', 8),
('FURY Beast', 'Kingston', 3700, 'DDR5', 5600, 'CL 40', 8),
('T-FORCE DELTA', 'TEAM', 13600, 'DDR5', 6000, 'CL 38', 32),
('V6', 'HP', 2100, 'DDR4', 3200, 'CL 16', 8),
('VENGEANCE', 'Corsair', 7300, 'DDR4', 6200, 'CL 40', 16),
('Vengeance LPX', 'Corsair', 2250, 'DDR4', 3200, 'CL 16', 8);

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE `storage` (
  `s_sku` varchar(50) NOT NULL,
  `brand` varchar(10) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `write_speed` int(10) DEFAULT NULL,
  `read_speed` int(10) DEFAULT NULL,
  `capacity` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `storage`
--

INSERT INTO `storage` (`s_sku`, `brand`, `price`, `type`, `write_speed`, `read_speed`, `capacity`) VALUES
('870 EVO', 'Samsung', 4400, 'SATA', 530, 560, 250),
('980 Pro', 'Samsung', 9100, 'NVMe', 5100, 7000, 500),
('990 Pro', 'Samsung', 11500, 'NVMe', 6900, 7450, 1000),
('Barracuda 530', 'Seagate', 7100, 'NVMe', 7200, 4300, 500),
('MP600', 'Corsair', 15900, 'NVMe', 4400, 5000, 2000),
('SA500', 'Netac', 1490, 'SATA', 400, 500, 128);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `contact`) VALUES
('adib01', 'Shafi Ahmed Adib', 'adib@gmail.com', 2147483647),
('adminnn', 'I am Admin', 'admin@admin.com', 1512309823),
('habibul01', 'Habibul Bashar', 'habibul@gmail.com', 1230001230),
('shib01', 'Shiva Prasad Sarkar', 'shiba@gmail.com', 2147483647),
('tauhidul01', 'Tauhidul Islam', 'tauhidul@gmail.com', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`user_id`,`password`);

--
-- Indexes for table `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`cpu_sku`);

--
-- Indexes for table `gpu`
--
ALTER TABLE `gpu`
  ADD PRIMARY KEY (`gpu_sku`);

--
-- Indexes for table `motherboard`
--
ALTER TABLE `motherboard`
  ADD PRIMARY KEY (`mobo_sku`);

--
-- Indexes for table `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`id`,`builder_id`),
  ADD KEY `builder_id` (`builder_id`);

--
-- Indexes for table `pc_specification`
--
ALTER TABLE `pc_specification`
  ADD PRIMARY KEY (`pc_id`,`cpu_sku`,`gpu_sku`,`ram_sku`,`mobo_sku`,`s_sku`,`pwr_sku`),
  ADD KEY `cpu_sku` (`cpu_sku`),
  ADD KEY `gpu_sku` (`gpu_sku`),
  ADD KEY `ram_sku` (`ram_sku`),
  ADD KEY `mobo_sku` (`mobo_sku`),
  ADD KEY `s_sku` (`s_sku`),
  ADD KEY `pwr_sku` (`pwr_sku`);

--
-- Indexes for table `power_supply`
--
ALTER TABLE `power_supply`
  ADD PRIMARY KEY (`pwr_sku`);

--
-- Indexes for table `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`ram_sku`);

--
-- Indexes for table `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`s_sku`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `auth`
--
ALTER TABLE `auth`
  ADD CONSTRAINT `auth_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `pc`
--
ALTER TABLE `pc`
  ADD CONSTRAINT `pc_ibfk_1` FOREIGN KEY (`builder_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `pc_specification`
--
ALTER TABLE `pc_specification`
  ADD CONSTRAINT `pc_specification_ibfk_1` FOREIGN KEY (`pc_id`) REFERENCES `pc` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pc_specification_ibfk_2` FOREIGN KEY (`cpu_sku`) REFERENCES `cpu` (`cpu_sku`) ON DELETE CASCADE,
  ADD CONSTRAINT `pc_specification_ibfk_3` FOREIGN KEY (`gpu_sku`) REFERENCES `gpu` (`gpu_sku`) ON DELETE CASCADE,
  ADD CONSTRAINT `pc_specification_ibfk_4` FOREIGN KEY (`ram_sku`) REFERENCES `ram` (`ram_sku`) ON DELETE CASCADE,
  ADD CONSTRAINT `pc_specification_ibfk_5` FOREIGN KEY (`mobo_sku`) REFERENCES `motherboard` (`mobo_sku`) ON DELETE CASCADE,
  ADD CONSTRAINT `pc_specification_ibfk_6` FOREIGN KEY (`s_sku`) REFERENCES `storage` (`s_sku`) ON DELETE CASCADE,
  ADD CONSTRAINT `pc_specification_ibfk_7` FOREIGN KEY (`pwr_sku`) REFERENCES `power_supply` (`pwr_sku`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
